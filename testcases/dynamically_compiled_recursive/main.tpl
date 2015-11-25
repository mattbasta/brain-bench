{function name='doinclude'}
    {include file='eval:{if $count}{call name=doinclude count=$count-1}{/if}' count=($count-1)}
{/function}
{call name=doinclude count=50}
