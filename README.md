# cev-php-oo
Orientação a Objetos com PHP (Curso em Vídeo).

## O que é OO?
- **Objetivo:** aproximar o mundo digital do mundo real.

- **Criador da POO:** Alan Kay (1970). Formado em matemática e biologia, criou conceitos que podem ser explicados por objetos do mundo real. Ele também criou o smalltalk.

### Como era
- **Programacão baixo nível:** tudo muito físico. Baseado em microinstruções. Desenvolvidas por engenheiros.

- **Programação linear:** tipo de linguagem de alto nível bem limitada/modesta. Mais compreensível aos programadores. Linear: instruções de cima para baixo, sem muitos desvios ou rotinas. Era como uma lista de compras.

- **Programaçnao estruturada:** permite pequenos pedaços da programação linear, mas organizados para serem executados fora da ordem natural das coisas. Isso deu origem aos sistemas, o que gerou falhas na linguagem (em alguns conceitos).

- **Programação modular:** permite a criação de módulos estruturados valorizandodados e funcionalidades, colocando-os em pequenas cápsulas protegdas que poderiam compôr sistemas cada vez maiores.

- **Programação OO:** amplia ainda mais a programação modular.

### Algumas linguagens OO
C++, Java, PHP, Python, Ruby, Visual Basic, Objective-C, etc.

## Vantagens da POO (COMERNada)
- **Confiável:** o isolamento entre as partes gera software seguro. Uma parte alterada não altera a outra.

- **Oportuna:** ao dividir tudo em partes, várias delas podem ser desenvolvidas em paralelo.

- **Manutenível:** é fácil atualizar um software.

- **Extensível:** o software não é estático. Ele deve crescer para continuar útil.

- **Reutilizável:** objetos de um sistema podem ser reutilizados em outro.

- **Natural:** fácil de entender. Preocupa-se mais com a funcionalidade do que com os detalhes de implementação.

## Classe e objeto
- **Objeto:** coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas características (atributos / propriedades / dados), comportamento (métodos / funções) e estato atual. Todo objeto está baseado numa mesma classificação (formato, modelo, molde). Objeto é a instância (vem a partir) de uma classe.

- **Classe:** define os atributos e métodos que serão compartilhados por um objeto.

```
Classe Caneta
    publico modelo: Caractere
    publico cor: Caractere
    privado ponta: Real
    protegido carga: Inteiro
    protegido tampada: Logico

    publico Metodo getModelo()
        retorne modelo
    FimMetodo

    publico Metodo setModelo(m: Caractere)
        modelo = m
    FimMetodo

    publico Metodo getCor()
        retorne cor
    FimMetodo

    publico Metodo setCor(c: Caractere)
        cor = c
    FimMetodo

    publico Metodo getPonta()
        retorne ponta
    FimMetodo

    publico Metodo setPonta(p: Real)
        modelo = p
    FimMetodo

    publico Metodo getCarga()
        retorne carga
    FimMetodo

    publico Metodo setCarga(c: Inteiro)
        modelo = c
    FimMetodo

    publico Metodo getTampada()
        retorne tampada
    FimMetodo

    publico Metodo setTampada(t: Logico)
        modelo = t
    FimMetodo

    Metodos construtor(m: Caractere, c: Caractere, p: Real)
        setModelo(m)
        setCor(c)
        setPonta(p)
        tampar()
    FimMetodo

    publico Metodo rabiscar()
        Se (tampada) entao
            Escreva("Erro")
        senao
            Escreva("Rabisco")
    FimMetodo

    protegido Metodo tampar()
        tampada = verdadeiro
    FimMetodo

    protegido Metodo destampar()
        tampada = falso
    FimMetodo

    publico Metodo status()
        Escreva(modelo)
        Escreva(cor)
        Escreva(ponta)
        Escreva(carga)
        Escreva(tampada)
    FimMetodo
FimClasse
```

- **Instanciar:** é quando eu tenho uma classe e consigo gerar um objeto a partir dela.

Ex: 
```
c1 = nova Caneta("Compactor Economic", "Azul", 0.5)
c1.cor = "Azul"
c1.ponta = 0.5
c1.tampada = falso
c1.rabiscar()
Escreva(c1.getModelo())
```

### Modificadores de visibilidade
Indicam o nível de acesso aos componentes internos de uma classe. São três modificadores (segundo a nomeclatura da UML):

- **Publico (+):** a classe atual e todas as outras classes podem ter acesso.
- **Privado (-):** somente a classe atual vai ter acesso.
- **Protegido (#):** a classe atual e todas as suas sub-classes podem ter acesso.

## Métodos especiais

### Métodos acessores (getters)
Métodos que dão acesso a uma determinada informação de caráter restrita. É uma segurança adicional.

### Métodos modificadores (mutantes/setters)
São métodos mais abstratos que os métodos getters. Eles modificam coisas que estão dentro do objeto. Costuma ter um parâmetro para funcionar, mas não é uma regra.

### Método Construtor (construct)
O construtor é unicamente invocado no momento da criação do objeto através do operador new. Não possui valor de retorno. O retorno do operador new é uma referência para o objeto recém-criado.