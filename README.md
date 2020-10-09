# cev-php-oo
Orientação a Objetos com PHP (Curso em Vídeo).

## O que é OO?
- **Objetivo:** aproximar o mundo digital do mundo real.

- **Criador da POO:** Alan Kay (1970). Formado em matemática e biologia, criou conceitos que podem ser explicados por objetos do mundo real. Ele também criou o *smalltalk*.

### Como era
- **Programacão baixo nível:** tudo muito físico. Baseado em microinstruções. Desenvolvidas por engenheiros.

- **Programação linear:** tipo de linguagem de alto nível bem limitada/modesta. Mais compreensível aos programadores. Linear: instruções de cima para baixo, sem muitos desvios ou rotinas. Era como uma lista de compras.

- **Programaçnao estruturada:** permite pequenos pedaços da programação linear, mas organizados para serem executados fora da ordem natural das coisas. Isso deu origem aos sistemas, o que gerou falhas na linguagem (em alguns conceitos).

- **Programação modular:** permite a criação de módulos estruturados valorizandodados e funcionalidades, colocando-os em pequenas cápsulas protegdas que poderiam compôr sistemas cada vez maiores.

- **Programação OO:** amplia ainda mais a programação modular.

### Algumas linguagens OO
C++, Java, PHP, Python, Ruby, Visual Basic, Objective-C, etc.

## Vantagens da POO (COMERNada)
- **Confiável:** o isolamento entre as partes gera *software* seguro. Uma parte alterada não altera a outra.

- **Oportuna:** ao dividir tudo em partes, várias delas podem ser desenvolvidas em paralelo.

- **Manutenível:** é fácil atualizar um *software*.

- **Extensível:** o *software* não é estático. Ele deve crescer para continuar útil.

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

### Métodos modificadores/mutantes (setters)
São métodos mais abstratos que os métodos getters. Eles modificam coisas que estão dentro do objeto. Costuma ter um parâmetro para funcionar, mas não é uma regra.

### Método Construtor (__construct)
O construtor é unicamente invocado no momento da criação do objeto através do operador *new*. Não possui valor de retorno. O retorno do operador *new* é uma referência para o objeto recém-criado.

## Pilares da POO

### Encapsulamento
É uma boa prática para produzir classes mais eficazes. Um *software* encapsulado protege o usuário do código e o código do usuário (programador). Usa *interfaces*, ou seja, moldes padrão. O encapsulamento oculta partes invisíveis ao mundo exterior.
Um bom objeto encapsulado possui uma *interface* bem definida.

#### Interface
É uma lista de serviços fornecida por um componente. É o contato com o mundo exterior, que define o que pode ser feito com um objetodessa classe. A *interface* não possui atributos, só métodos abstratos.

**Métodos abstratos:** não serão desenvolvidos na *interface*. Apenas declarados. Apenas informam as ações que irão ocorrer. São apenas previstos, mas não implementados. Todos os métodos são públicos.

A classe vai implementar a *interface*. A classe vai ter como métodos os métodos abstratos declarados/definidos na *interface*.

Além dos métodos abstratos, é necessário ter os métodos especiais (*getters* e *setters*). Eles permitirão acessar os métodos abstratos.

Quando se encapsula, a primeira coisa a fazer é tornar todos os atributos privados (até protegidos), mas nunca públicos.

#### Vantagens do encapsulamento
1. Tornar mudanças invisíveis.
2. Facilitar a reutilização de código.
3. Reduzir efeitos colaterais.

Ex:
```
interface Controlador
    // Métodos abstratos
    publico abstrato Metodo ligar()
    publico abstrato Metodo desligar()
    publico abstrato Metodo abrirMenu()
    publico abstrato Metodo fecharMenu()
    publico abstrato Metodo maisVolume()
    publico abstrato Metodo menosVolume()
    publico abstrato Metodo ligarMudo()
    publico abstrato Metodo desligarMudo()
    publico abstrato Metodo play()
    publico abstrato Metodo pause()
FimInterface
```

```
classe ControleRemoto implementa IControlador
    // Atributos
    privado inteiro volume
    privado inteiro ligado
    privado inteiro tocando

    // Métodos especiais de acesso
    publico Metodo getVolume()
        retorne volume
    FimMetodo

    publico Metodo setVolume(vol: inteiro)
        volume = vol
    FimMetodo

    publico Metodo getLigado()
        retorne ligado
    FimMetodo

    publico Metodo setLigado(ligado: logico)
        ligado = ligado
    FimMetodo

    publico Metodo getTocandoVolume()
        retorne volume
    FimMetodo

    publico Metodo setTocandoVolume(tocando: logico)
        tocando = tocando
    FimMetodo

    // Metodo construtor
    volume = setVolume(50)
    ligado = setLigado(falso)
    tocando = setTocando(falso)

    // Sobrescrevendo métodos
    publico Metodo ligar()
        setLigado(verdadeiro)
    FimMetodo

    publico Metodo desligar()
        setLigado(falso)
    FimMetodo

    publico Metodo abrirMenu()
        Escreva(getLigado())
        Escreva(getVolume())
        Para i = 0 ate getVolume() passo 10 Faca
            Escreva "|"
        FimPara
        Escreva(getTocando())
    FimMetodo

    publico Metodo fecharMenu()
        Escreva("Fechando menu...")
    FimMetodo

    publico Metodo maisVolume()
        Se (getLigado()) entao
            setVolume(getVolume() + 1)
        FimSe
    FimMetodo

    publico Metodo menosVolume()
        Se (getLigado()) entao
            setVolume(getVolume() - 1)
        FimSe
    FimMetodo

    publico Metodo ligarMudo()
        Se (getLigado() e getVolume() > 0) entao
            setVolume(0)
        FimSe
    FimMetodo

    publico Metodo desligarMudo()
        Se (getLigado() e getVolume() = 0) entao
            setVolume(50)
        FimSe
    FimMetodo

    publico Metodo play()
        Se (getLigado() e nao getTocando()) entao
            setTocando(verdadeiro)
        FimSe
    FimMetodo

    publico Metodo pause()
        Se (getLigado() e getTocando()) entao
            setTocando(falso)
        FimSe
    FimMetodo
FimClasse
```