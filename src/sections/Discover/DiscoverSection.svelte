<script>
    import DiscoverSectionCard from "./DiscoverSectionCard.svelte";
</script>

<section id="section-discover">
    <h2 class="text-blue-to-red">Discover Awesome Creations</h2>
    <div>
        <DiscoverSectionCard
                title="img2minecraft"
                description="Convert image files into Minecraft blocks, maintaining the original color and look of the picture."
                links={[{ name: "repository", url: "https://github.com/elderguardian/img2minecraft", },
                    { name: "instance", url: "https://img2minecraft.kagerou.dev/", }]}
        ></DiscoverSectionCard>
        <DiscoverSectionCard
                title="monkeyshot"
                description="Server software for uploading images and displaying them with a pretty embed. Based on the Strawberry Framework."
                links={[{ name: "repository", url: "https://github.com/elderguardian/monkeyshot", }]}
        ></DiscoverSectionCard>
        <DiscoverSectionCard
                title="flaggen"
                description="A website for generating profile pictures which include country flag"
                links={[{ name: "repository", url: "https://github.com/elderguardian/flaggen", },
                    { name: "instance", url: "https://flaggen.kagerou.dev/", }]}
        ></DiscoverSectionCard>
        <DiscoverSectionCard
                title="ton"
                description="A lightweight and classless CSS Framework, created to make creating static websites easier."
                links={[{ name: "repository", url: "https://github.com/elderguardian/ton", },
                    { name: "preview", url: "https://ton.kagerou.dev/", }]}
        ></DiscoverSectionCard>
        <DiscoverSectionCard
                title="maria"
                description="A Typescript library to simplify the process of fetching from the Schulportal Hessen / Lanis."
                links={[{ name: "repository", url: "https://github.com/elderguardian/maria", },
                    { name: "npm", url: "https://www.npmjs.com/package/maria-hessen", }]}
        ></DiscoverSectionCard>
    </div>
</section>
<style>
    #section-discover {
        margin: 2vw 1vw 5vw;
    }

    #section-discover h2 {
        font-size: 2.5vw;
        color: white;
        font-family: "Inter Semi Bold", "Arial", serif;
    }

    #section-discover div {
        display: flex;
        text-align: left;
        margin-top: 2vw;
    }

    @media screen and (max-width: 600px) {
        #section-discover h2 {
            font-size: 5vw;
        }

        #section-discover div {
            flex-direction: column;
        }

        #section-discover h3 {
            font-size: 3.5vw;
        }
    }
</style>