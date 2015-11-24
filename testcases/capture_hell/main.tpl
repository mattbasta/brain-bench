{for $i=0 to 100}
    {capture assign="foo"}
        This is the {$i|escape}-th captured content
    {/capture}
    {$foo|escape}
{/for}
