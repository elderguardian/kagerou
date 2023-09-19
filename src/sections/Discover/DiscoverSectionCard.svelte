<script>
    export let title;
    export let description;
    export let links = []
</script>
<article>
    <h3>{title}</h3>
    <p>{description}</p>
    {#each links as linkItem}
        <a target="_blank" href="{linkItem.url}">{linkItem.name}</a>
    {/each}
</article>