<svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M31.9999 59.3211C46.9199 59.3211 59.3211 46.9463 59.3211 32C59.3211 17.08 46.8925 4.67883 31.9725 4.67883C17.0274 4.67883 4.67993 17.08 4.67993 32C4.67993 46.9463 17.0536 59.3211 31.9999 59.3211ZM31.9748 36.0183C30.5542 36.0183 29.7782 35.1874 29.7234 33.7668L29.3485 20.5371C29.2948 19.0628 30.4194 18.0194 31.9462 18.0194C33.4468 18.0194 34.5976 19.0903 34.5451 20.5634L34.1691 33.7691C34.1154 35.2148 33.3119 36.0194 31.9736 36.0194M31.9736 45.8765C30.4194 45.8765 28.9725 44.6445 28.9725 42.9828C28.9725 41.3211 30.3931 40.0914 31.9736 40.0914C33.5268 40.0914 34.9725 41.296 34.9725 42.9828C34.9725 44.6708 33.4994 45.8765 31.9736 45.8765Z" />
</svg>

<p>We tried our best, but we couldn't find any recipe with "<?php echo "placeholder" ?>" in its name.</p>

<button class="search-again">
    <p>Search Again</p>
</button>

<style>
    body.no-result {
        gap: 0;
        height: 100vh;
        justify-content: space-between;
    }

    main.no-result {
        align-items: center;
        display: flex;
        flex-flow: column nowrap;
        gap: var(--gap16);
        padding: 0 var(--gap24);
    }

    main.no-result > svg {
        height: 7.5rem;
    }

    main.no-result > svg > path {
        fill: var(--red);
    }

    main.no-result > p {
        color: var(--gray);
        font-size: 1.125rem;
        text-align: center;
    }

    main.no-result > button.search-again {
        background-color: var(--blue);
        border-radius: var(--gap16);
        padding: var(--gap12) var(--gap24);

        p {
            color: var(--txt-white);
            font-size: 1.5rem;
            font-weight: 550;
            letter-spacing: 0.15px;
        }
    }

    main.no-result > button.search-again:hover {
        background-color: var(--indigo);
    }
</style>
