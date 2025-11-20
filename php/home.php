<template class="menu card">
    <picture>
        <source type="image/avif" srcset="./images/16/banner.avif">
        <img src="./images/16/banner.jpg" alt="Ancho-Orange Chicken with Kale Rice & Roasted Carrots">
    </picture>
    <section>
        <h1>Roasted Turkey Breast &#38; Farro&#45;Endive Salad</h1>
        <h2>with Apple&#44; Cheese Sauce&#44; &#38; Garlic Breadcrumbs</h2>
    </section>
</template>

<button class="menu card">
    <picture>
        <source type="image/avif" srcset="./images/16/banner.avif">
        <img src="./images/16/banner.jpg" alt="Ancho-Orange Chicken with Kale Rice & Roasted Carrots">
    </picture>
    <section>
        <h1>Roasted Turkey Breast &#38; Farro&#45;Endive Salad</h1>
        <h2>with Apple&#44; Cheese Sauce&#44; &#38; Garlic Breadcrumbs</h2>
    </section>
</button>

<button class="menu card">
    <picture>
        <source type="image/avif" srcset="./images/16/banner.avif">
        <img src="./images/16/banner.jpg" alt="Ancho-Orange Chicken with Kale Rice & Roasted Carrots">
    </picture>
    <section>
        <h1>Roasted Turkey Breast &#38; Farro&#45;Endive Salad</h1>
        <h2>with Apple&#44; Cheese Sauce&#44; &#38; Garlic Breadcrumbs</h2>
    </section>
</button>

<style>
    main.menu {
        /* Certain breakpoints for cards */
        --card-min-width: 24rem;
        --card-max-width: 30rem;

        --card-height-snap: 9rem;
        --card-height-normal: 11rem;

        display: grid;
        gap: var(--gap24);
        grid-auto-rows: auto;
        justify-content: center;
        justify-items: center;
        max-width: 96rem;
    }

    button.menu.card {
        align-items: center;
        container-type: inline-size;
        container-name: card;
        display: flex;
        flex-flow: row nowrap;
        max-width: var(--card-max-width);
        overflow: hidden;
        width: clamp(var(--card-min-width), 100%, var(--card-max-width));
    }

    button.menu.card > picture, button.menu.card > picture > * {
        aspect-ratio: 1 / 1;
        height: 100%;
        object-fit: cover;
    }

    button.menu.card > section {
        align-items: flex-start;
        display: flex;
        flex-flow: column nowrap;
        height: 100%;
        justify-content: center;
        width: 100%
    }

    button.menu.card > section > h1 {
        color: var(--txt-black);
    }

    button.menu.card > section > h2 {
        color: var(--gray);
    }

    /* Responsiveness */

    /* Snap design */

    @media (20rem <= width < 27rem) {
        main.menu {
            padding: var(--gap24) 0;
        }

        button.menu.card {
            background-color: var(--light-gray);
            height: var(--card-height-snap);
            
        }

        button.menu.card > section {
            gap: var(--gap8);
            padding: var(--gap8) var(--gap12);
        }

        button.menu.card > section > h1 {
            font-size: 1.125rem;
        }

        button.menu.card > section > h2 {
            font-size: 0.875rem;
        }
    }

    /* Normal design */

    @media (27rem <= width) {
        main.menu {
            gap: var(--gap24);
            padding: var(--gap24);
        }

        button.menu.card {
            border: 0.25rem solid var(--txt-black);
            border-radius: var(--gap24);
            height: var(--card-height-normal);
        }

        button.menu.card > section {
            gap: var(--gap12);
            padding: 0 var(--gap24);
        }

        button.menu.card > section > h1 {
            font-size: 1.25rem;
        }

        button.menu.card > section > h2 {
            font-size: 1rem;
        }
    }

    /* 1 column */

    @media (width < 52.5rem) {
        main.menu {
            grid-template-columns: 1fr;
        }
    }

    /* 2 columns */

    @media (52.5rem <= width < 78rem) {
        main.menu {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* 3 columns */

    @media (78rem <= width) {
        main.menu {
            grid-template-columns: repeat(3, 1fr);
        }
    }
</style>
