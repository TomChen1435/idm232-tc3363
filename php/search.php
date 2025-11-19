<h1>What are we craving today?</h1>

<form action="" method="get" class="search-bar">
    <input type="text" name="search" id="search" placeholder="Search for recipes">
    <button type="submit">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.3333 42.6667C20.4889 42.6667 16.3893 40.9884 13.0347 37.632C9.68 34.2756 8.00178 30.176 8 25.3333C7.99822 20.4907 9.67645 16.3911 13.0347 13.0347C16.3929 9.67822 20.4924 8 25.3333 8C30.1742 8 34.2747 9.67822 37.6347 13.0347C40.9947 16.3911 42.672 20.4907 42.6667 25.3333C42.6667 27.2889 42.3556 29.1333 41.7333 30.8667C41.1111 32.6 40.2667 34.1333 39.2 35.4667L54.1333 50.4C54.6222 50.8889 54.8667 51.5111 54.8667 52.2667C54.8667 53.0222 54.6222 53.6444 54.1333 54.1333C53.6444 54.6222 53.0222 54.8667 52.2667 54.8667C51.5111 54.8667 50.8889 54.6222 50.4 54.1333L35.4667 39.2C34.1333 40.2667 32.6 41.1111 30.8667 41.7333C29.1333 42.3556 27.2889 42.6667 25.3333 42.6667ZM25.3333 37.3333C28.6667 37.3333 31.5004 36.1671 33.8347 33.8347C36.1689 31.5022 37.3351 28.6684 37.3333 25.3333C37.3316 21.9982 36.1653 19.1653 33.8347 16.8347C31.504 14.504 28.6702 13.3369 25.3333 13.3333C21.9964 13.3298 19.1636 14.4969 16.8347 16.8347C14.5058 19.1724 13.3387 22.0053 13.3333 25.3333C13.328 28.6613 14.4951 31.4951 16.8347 33.8347C19.1742 36.1742 22.0071 37.3404 25.3333 37.3333Z"/>
        </svg>
    </button>
</form>

<style>
    main.search {
        align-items: center;
        display: flex;
        flex-flow: column nowrap;
        gap: var(--gap16);
        padding: 0 var(--gap24);
    }

    main.search > h1 {
        text-align: center;
    }

    /* When view width is greater than 528px, increase the heading's font size to balance the layout. */

    @media (width < 33rem) {
        main.search > h1 {font-size: 2rem;}
    }

    @media (33rem <= width) {
        main.search > h1 {font-size: 2.25rem;}
    }

    form.search-bar {
        align-items: center;
        display: flex;
        flex-flow: row wrap;
        gap: var(--gap16);
        justify-content: center;
    }

    form.search-bar > input {
        border: 0.25rem solid var(--bg-black);
        border-radius: calc(var(--btn-ht) / 2);
        color: var(--gray);
        font-size: 1.25rem;
        height: var(--btn-ht);
        padding: 0 calc(var(--btn-ht) / 2);
    }

    form.search-bar > input:focus {
        border-color: var(--blue);
        color: var(--txt-black);
    }
</style>
