### Buscador do Twitter:

> A ideia é implementar um pequeno sistema para testarmos suas skills em front(js) e back end.

* O sistema é um buscador no Twitter.
Muito simples:
  * Usuário escreve um texto no campo de busca, o sistema consulta a API do Twitter e retorna os tweets encontrados.

## Telas:
  * ### Home:
    * __Tela inicial__:
      + Campo de busca,
      + Últimas pesquisas feitas dentro do app
      + Trending no twitter    
    * __Resultados__:
      Barra com o texto pesquisado e resultados.

As telas (e imagens) podem ser acessadas no arquivo zip em anexo e não precisam ser identicas mas precisam ter os mesmos componentes.
Requisitos:
  * Usar PHP com o Framework Yii 1
  * Usar twitter bootstrapp e vue.js pro layout
  * Usar axios para puxar as últimas buscas, e os trending toppics das apis rest criadas no back

#### O que vamos avaliar:
  * Simplicidade da solução;
  * Uso das APIs;
  * Organização e limpeza de código;

#### Como entregar:

Crie um repositório (não precisa ser público) no GitHub ou Bitbucket. Basta adicionar o usuário @haruanm para que possamos ver depois

#### Após a entrega:
Iremos analisar o código e fazer a entrevista. Essa entrevista terá duração aproximada de 50 minutos e nela faremos code review da sua solução, perguntas técnicas e possivelmente alguma implementação simples.

### Estrutura do aplicativo:

```
basic/                  caminho base de sua aplicação
    composer.json       usado pelo Composer, descreve as informações de pacotes
    config/             contém as configurações da aplicação e outras
        console.php     a configuração da aplicação de console
        web.php         a configuração da aplicação Web
    commands/           contém classes de comandos do console
    controllers/        contém classes de controllers (controladores)
    models/             contém classes de models (modelos)
    runtime/            contém arquivos gerados pelo Yii durante o tempo de execução, tais como logs e arquivos de cache
    vendor/             contém os pacotes do Composer instalados, incluindo o próprio Yii framework
    views/              contém arquivos de views (visões)
    web/                raiz da aplicação Web, contém os arquivos acessíveis pela Web
        assets/         contém os arquivos de assets (javascript e css) publicados pelo Yii
        index.php       o script de entrada (ou bootstrap) para a aplicação
    yii                 o script de execução dos comandos de console do Yii
```
