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

#### Relacionamentos entre classes
Há três tipos de relacionamentos entre classes: associação, agregação e generalização.

##### Associação entre classes
É o tipo de relacionamento mais comum e mais importante em um sistema orientado a objetos. É um relacionamento ou ligação entre duas classes permitindo que objetos destas possam se comunicar.
O objetivo essencial da associação é possibilitar a comunicação entre objetos de duas classes. A comunicação pode ser uni ou bidirecional.
As associações são criadas a partir da necessidade de canais de comunicação entre objetos de duas classes. As necessidades são obtidas a partir do diagrama de sequência e de colaboração.

##### Agregação entre classes
Relacionamento de pertinência entre classes.
- Permite a inclusão de objetos de uma classe no interior de objetos de outra classe.
Relação 'parte-de', 'tem-um', 'todo-parte'.
Objeto que agrega conhece o agregado, mas este não conhece aquele → comunicação unidirecional.
Um objeto pode incluir vários outros, mas não pode estar contido em mais de um objeto.
Não existe uma técnica precisa para de se definir as agregações em um sistema.
Sugestões:
- Definição das agregações a partir de decomposições.
    - Quando uma classe tem muitas responsabilidades, tende-se a dividi-la. Tal divisão pode fazer com que a classe perca sua identidade. Neste contexto, as agregações são muitos úteis
porque dividem uma classe grande em outras menores, sem que a grande perca a identidade.
- Definição das agregações a partir de composições
    - O raciocínio é o inverso ao da decomposição. Aqui procura-se identificar conjuntos de objetos que juntos compõem objetos maiores.
- Definição de agregações a partir de partes comuns
    - Quando se percebe dentro de duas ou mais classes um conjunto de atributos e/ou métodos semelhantes. Se estes juntos possuem uma identidade, então poderia ser criada uma nova classe.

###### Tipos de agregação

- **Agregação por composição**
É uma agregação de fato. Realmente é feita a criação ou alocação (estática) de um objeto dentro do outro.
Exemplo: o objeto endereco da classe Endereco está sendo instanciado dentro da classe Aluno.
O número de objetos agregados é fixo, uma vez que são alocados dinamicamente. A notação é um losango preenchido.

- **Agregação por associação**
Tem a mesma interpretação do que a agregação por composição. Entende-se que o objeto agregado é um componente do objeto que agrega.
A alocação do objeto agregado ocorre de forma estática fora do objeto que agrega ou de forma dinâmica em seu interior.
Sua implementação ocorre através de associações.
São consideradas agregações quando se realiza um controle de escopo para os objetos agregados.
Utilizada quando se deseja estabelecer uma agregação envolvendo um número variável de objetos.

### Herança
Permite basear uma nova classe na definição de uma outra classe previamente existente. A herança será aplicada tanto para as características quanto para os comportamentos. Por exemplo, as classes Aluno, Professor e Funcionario herdam as características e comportamentos da classe Pessoa (uma superclasse, uma classe principal).

#### Especialização e Generalização
A Generalização e a Especialização são conceitos usados para representar objetos do mundo real que possuem os mesmos atributos, que podem ser categorizados e que podem ser representados em uma hierarquia que mostra as dependências entre entidades de uma mesma categoria.
Através deste conceito é possível atribuir propriedades particulares a um subconjunto das ocorrências (especializadas) de uma entidade genérica ou entidade Pai. Toda subclasse herda tudo o que a superclasse tem, mesmo que não esteja tudo disponível.
A disponibilidade ou não é feita pelos métodos de acesso: público, privado e protegido.
O uso da Generalização é indicado quando existe algum atributo que seja aplicável a mais de uma entidade no Modelo Entidade Relacionamento. Se existe, devemos usar a Generalização e criar  uma entidade mãe que contenha os atributos comuns às outras entidades especializadas.
Uso da Especialização é indicado quando temos atributos específicos para um determinado sub-conjunto de ocorrências dentro de uma Entidade. Por exemplo, na entidade CLIENTES temos clientes que são empresas e outros clientes são pessoas físicas. Os clientes que são empresas possuem atributos específicos como CNPJ e Inscrição Estadual. Neste caso, podemos promover uma especialização e criar a entidade CLIENTE-EMPRESA que especializa a entidade CLIENTE e que possui atributos específicos de uma empresa.
Não devemos usar Generalização/Especialização caso não existam atributos ou relacionamentos que justifiquem uma entidade especializada ou uma entidade mãe. Caso contrário, estaremos “poluindo” o modelo com a inserção de detalhes desnecessários. Ou seja, não faz sentido ter uma entidade especializada que não possui atributos específicos ou que não tenha um relacionamento específico com outra entidade.

##### Tipos de Generalização/Especialização
A Generalização/Especialização pode ser classificada em dois tipos: 
1. **Parcial:** nem toda ocorrência da entidade genérica possui uma ocorrência correspondente em uma entidade especializada. Ex: nem todo funcionário é motorista.
2. **Total:** para toda ocorrência da entidade genérica existe sempre uma ocorrência em uma das entidades especializadas. Ex: todo cliente ou é uma pessoa física ou uma pessoa jurídica.

#### Tipos de herança

##### Herança de implementação
Também conhecida como herança pobre. É a mais simples que existe. Um objeto herda características somente de uma superclasse. É basicamente para implementar uma classe abstrata.

##### Herança para diferença
É a herança mais completa.

#### Abstrato e Final
Vai depender de onde se quer aplicar o conceito. Um método e uma classe podem ser abstratos e finais. Os nomes são os mesmos, mas a operacionalidade é diferente.

##### Classe abstrata
Não pode ser instanciada. Só pode servir como progenitora. Não pode gerar objetos. Tem atributos e métodos implementados.

##### Método abstrato
Declarado, mas não implementado na progenitora. Esse método só pode ser colocado dentro de uma *interface* ou dentro de uma classe abstrata.

##### Classe final
Não pode ser herdada por outra classe. É obrigatoriamente uma folha. Portanto, não pode ter filhas.

##### Método final
Não gera especialização desse método, pois não pode ser sobrescrito pelas suas subclasses. É obrigatoriamente herdado.