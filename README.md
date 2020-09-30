# cev-php-oo
Orientação a Objetos com PHP (Curso em Vídeo).

## O que é OO?
- Objetivo: aproximar o mundo digital do mundo real.

- Como era: 

## Classe e objeto
- Objeto: coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas características (atributos / propriedades / dados), comportamento (métodos / funções) e estato atual. Todo objeto está baseado numa mesma classificação (formato, modelo, molde). Objeto é a instância (vem a partir) de uma classe.

- Classe: define os atributos e métodos que serão compartilhados por um objeto.

Classe Caneta
    modelo: Caractere
    cor: Caractere
    ponta: Real
    carga: Inteiro
    tampada: Logico

    Método rabiscar()
        Se (tampada) entao
            Escreva("Erro")
        senao
            Escreva("Rabisco")
    FimMetodo

    Método tampar()
        tampada = verdadeiro
    FimMetodo
FimClasse

- Instanciar: é quando eu tenho uma classe e consigo gerar um objeto a partir dela.

Ex: c1 = nova Caneta
    c1.cor = "Azul"
    c1.ponta = 0.5
    c1.tampada = falso
    c1.rabiscar()