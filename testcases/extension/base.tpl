{extends file='shell.tpl'}


{block name='body'}
    <header>
        <h1>Look, it's the header</h1>
    </header>
    <nav>
        <h2>Sidebar</h2>
        {block name='sidebar'}{/block}
    </nav>
    <article>
        {block name='content'}{/block}
    </article>
    <footer>{block name='footer'}&copy; Copyright Bastacorp 2015{/block}</footer>
{/block}
