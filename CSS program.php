<style>
    /* create a style for the text */
    h1 {
        font-size: 5rem;
        text-shadow: 5px 5px 0px #FF0000, 10px 10px 0px #0000FF;
        animation: shadowGlow 2s ease-in-out alternate infinite;
    }

    /* define the animation */
    @keyframes shadowGlow {
        0% { text-shadow: 5px 5px 0px #FF0000, 10px 10px 0px #0000FF; }
        50% { text-shadow: 10px 10px 20px #FF0000, 20px 20px 40px #0000FF; }
        100% { text-shadow: 5px 5px 0px #FF0000, 10px 10px 0px #0000FF; }
    }
</style>

<body>
    <h1>Hello World!</h1>
</body>

