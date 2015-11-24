{$x=[]}
{for $i=0 to 100000}
  {$x[$i]=$i}
{/for}

{foreach $x as $v}
    {if $v is even}
        even
    {else}
        odd
    {/if}
{/foreach}
