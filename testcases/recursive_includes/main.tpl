{$count = (empty($count)) ? 0 : $count}
{if $count < 1000}
    {include 'main.tpl' count=($count+1)}
{/if}
