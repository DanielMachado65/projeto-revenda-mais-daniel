<h1 id="-important-comentario-"><code style="font-family: Menlo, Consolas, &quot;DejaVu Sans Mono&quot;, monospace;">!Important</code>(@comentario):</h1>
<p>Para quem quiser testar o aplicativo vai precisar ou visualizar é necessário a url: <code style="font-family: Menlo, Consolas, &quot;DejaVu Sans Mono&quot;, monospace;">http://localhost/projeto-Revenda-Mais/basic/web/?r=twitter/</code></p>
<ul>
<li>deixei a url diferente para poder compreender o que o <code style="font-family: Menlo, Consolas, &quot;DejaVu Sans Mono&quot;, monospace;">Yii faria na aplicação</code></li>
<li>A rota seria o index.html correspondendo um site, que irá informar para você acessar outro site.  </li>
</ul>
<h2 id="para-acessar-o-site-clicke-em-link">Para acessar o site clicke em <a href="http://localhost/projeto-Revenda-Mais/basic/web/?r=twitter"> Link</a></h2>
<hr>
<h3 id="estrutura-do-aplicativo-">Estrutura do aplicativo:</h3>
<pre class="editor-colors lang-"><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>basic/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caminho&nbsp;base&nbsp;de&nbsp;sua&nbsp;aplicação</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;composer.json&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usado&nbsp;pelo&nbsp;Composer,&nbsp;descreve&nbsp;as&nbsp;informações&nbsp;de&nbsp;pacotes</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;config/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contém&nbsp;as&nbsp;configurações&nbsp;da&nbsp;aplicação&nbsp;e&nbsp;outras</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;console.php&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a&nbsp;configuração&nbsp;da&nbsp;aplicação&nbsp;de&nbsp;console</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;web.php&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a&nbsp;configuração&nbsp;da&nbsp;aplicação&nbsp;Web</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;commands/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contém&nbsp;classes&nbsp;de&nbsp;comandos&nbsp;do&nbsp;console</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;controllers/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contém&nbsp;classes&nbsp;de&nbsp;controllers&nbsp;(controladores)</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;models/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contém&nbsp;classes&nbsp;de&nbsp;models&nbsp;(modelos)</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;runtime/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contém&nbsp;arquivos&nbsp;gerados&nbsp;pelo&nbsp;Yii&nbsp;durante&nbsp;o&nbsp;tempo&nbsp;de&nbsp;execução,&nbsp;tais&nbsp;como&nbsp;logs&nbsp;e&nbsp;arquivos&nbsp;de&nbsp;cache</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;vendor/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contém&nbsp;os&nbsp;pacotes&nbsp;do&nbsp;Composer&nbsp;instalados,&nbsp;incluindo&nbsp;o&nbsp;próprio&nbsp;Yii&nbsp;framework</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;views/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contém&nbsp;arquivos&nbsp;de&nbsp;views&nbsp;(visões)</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;web/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;raiz&nbsp;da&nbsp;aplicação&nbsp;Web,&nbsp;contém&nbsp;os&nbsp;arquivos&nbsp;acessíveis&nbsp;pela&nbsp;Web</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assets/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contém&nbsp;os&nbsp;arquivos&nbsp;de&nbsp;assets&nbsp;(javascript&nbsp;e&nbsp;css)&nbsp;publicados&nbsp;pelo&nbsp;Yii</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;index.php&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o&nbsp;script&nbsp;de&nbsp;entrada&nbsp;(ou&nbsp;bootstrap)&nbsp;para&nbsp;a&nbsp;aplicação</span></span></div><div class="line"><span class="syntax--text syntax--plain syntax--null-grammar"><span>&nbsp;&nbsp;&nbsp;&nbsp;yii&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o&nbsp;script&nbsp;de&nbsp;execução&nbsp;dos&nbsp;comandos&nbsp;de&nbsp;console&nbsp;do&nbsp;Yii</span></span></div></pre><hr>
<h2 id="o-que-foi-requerido-">O que foi requerido:</h2>
<h3 id="buscador-do-twitter-">Buscador do Twitter:</h3>
<blockquote>
<p>A ideia é implementar um pequeno sistema para testarmos suas skills em front(js) e back end.</p>
</blockquote>
<ul>
<li>O sistema é um buscador no Twitter.
Muito simples:<ul>
<li>Usuário escreve um texto no campo de busca, o sistema consulta a API do Twitter e retorna os tweets encontrados.</li>
</ul>
</li>
</ul>
<h2 id="telas-">Telas:</h2>
<ul>
<li><h3 id="home-">Home:</h3>
<ul>
<li><strong>Tela inicial</strong>:<ul>
<li>Campo de busca,</li>
<li>Últimas pesquisas feitas dentro do app</li>
<li>Trending no twitter    </li>
</ul>
</li>
<li><strong>Resultados</strong>:
Barra com o texto pesquisado e resultados.</li>
</ul>
</li>
</ul>
<p>As telas (e imagens) podem ser acessadas no arquivo zip em anexo e não precisam ser identicas mas precisam ter os mesmos componentes.
Requisitos:</p>
<ul>
<li>Usar PHP com o Framework Yii 1</li>
<li>Usar twitter bootstrapp e vue.js pro layout</li>
<li>Usar axios para puxar as últimas buscas, e os trending toppics das apis rest criadas no back</li>
</ul>
<h4 id="o-que-vamos-avaliar-">O que vamos avaliar:</h4>
<ul>
<li>Simplicidade da solução;</li>
<li>Uso das APIs;</li>
<li>Organização e limpeza de código;</li>
</ul>
<h4 id="como-entregar-">Como entregar:</h4>
<p>Crie um repositório (não precisa ser público) no GitHub ou Bitbucket. Basta adicionar o usuário @haruanm para que possamos ver depois</p>
<h4 id="ap-s-a-entrega-">Após a entrega:</h4>
<p>Iremos analisar o código e fazer a entrevista. Essa entrevista terá duração aproximada de 50 minutos e nela faremos code review da sua solução, perguntas técnicas e possivelmente alguma implementação simples.</p>
