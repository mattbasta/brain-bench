{function name='doinclude'}
    {include file='string:{if $count}{call name=doinclude count=$count-1}{/if}' count=($count-1)}
{/function}
{call name=doinclude count=15}
