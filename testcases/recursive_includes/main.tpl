{$count = (empty($count)) ? 0 : $count}
{if $count < 500}
    {include 'main.tpl' count=($count+1)}
{/if}
