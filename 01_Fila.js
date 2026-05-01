// Implementacao de uma fila sem usar metodos nativos de array.
// A fila e uma estrutura de dados linear que segue o principio FIFO 
// // (First In First Out). O primeiro elemento adicionado 
// e o primeiro a ser removido.

class Fila {
    #items = []; // Array que armazena os elementos da fila
    #inicio = 0; // Indice do primeiro elemento valido
    #fim = 0; // Proxima posicao livre para insercao

    // Adiciona um elemento no final da fila
    enqueue(elemento) {
        this.#items[this.#fim] = elemento;
        this.#fim++;
    }

    // Remove e retorna o primeiro elemento da fila
    dequeue() {
        if (this.estaVazia()) {
            return undefined;
        }
        const elemento = this.#items[this.#inicio];
        delete this.#items[this.#inicio];
        this.#inicio++;
        if (this.#inicio === this.#fim) {
            this.#inicio = 0;
            this.#fim = 0;
        }
        return elemento;
    }

    // Retorna o primeiro elemento sem remover
    front() {
        if (this.estaVazia()) {
            return undefined;
        }
        return this.#items[this.#inicio];
    }

    // Verifica se a fila esta vazia
    estaVazia() {
        return this.#inicio === this.#fim;
    }

    // Retorna a quantidade de elementos na fila
    tamanho() {
        return this.#fim - this.#inicio;
    }

    // Limpa todos os elementos da fila
    limpar() {
        this.#items = [];
        this.#inicio = 0;
        this.#fim = 0;
    }

    // Inverte a ordem dos elementos sem usar metodo nativo
    inverter() {
        let esquerda = this.#inicio; // índice do primeiro elemento
        let direita = this.#fim - 1; // índice do último elemento

        while (esquerda < direita) { // enquanto o índice da esquerda for menor que o índice da direita
            const temporario = this.#items[esquerda]; // armazena o valor da posição da esquerda em uma variável temporária
            this.#items[esquerda] = this.#items[direita]; // substitui o valor da posição da esquerda pelo valor da posição da direita
            this.#items[direita] = temporario; // substitui o valor da posição da direita pelo valor da variável temporária

            esquerda++; // incrementa o índice da esquerda
            direita--; // decrementa o índice da direita
        }

        return this.mostrar(); // retorna os elementos da fila em um novo array
    }

    // Retorna os elementos da fila em um novo array
    mostrar() {
        const elementos = [];
        let indice = 0;

        for (let i = this.#inicio; i < this.#fim; i++) {
            elementos[indice] = this.#items[i];
            indice++;
        }

        return elementos;
    }

}

module.exports = Fila;