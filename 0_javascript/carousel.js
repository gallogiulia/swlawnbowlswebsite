var slider = new BeaverSlider({
    type: "carousel",
    structure: {
        container: {
            id: "demo-slider",
            width: 100,
            height: 133
        },
        player: {
            show: "always",
            containerClass: "player-container-carousel",
            backClass: "player-back-carousel",
            forwardClass: "player-forward-carousel",
            pauseClass: "player-pause-carousel",
            playClass: "player-play-carousel"
        }
    },
    content: {
        images: [
            "/demo/img1a.png",
            "/demo/img2a.png",
            "/demo/img3a.png",
            "/demo/img4a.png",
            "/demo/img5a.png"
        ]
    },
    animation: {
        waitAllImages: true,
        effects: effectSets["carousel: slideOver"],
        initialInterval: 1000,
        interval: 2000
    }
});   