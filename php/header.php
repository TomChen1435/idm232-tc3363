<header>
    <button class="home">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.959 14.7645C23.7212 16.8848 24.1294 37.9435 29.577 44.8231C31.52 47.2663 33.534 49.5419 35.7078 51.0148C37.5088 52.232 40.0108 52.9817 42.7613 52.9993C45.494 53.0258 47.9516 52.2849 49.797 51.1295C51.6425 49.9829 52.9822 47.1428 53 45.2818C53.0088 43.4119 51.6602 41.9655 49.8325 40.9688C47.996 39.9809 45.5294 39.4076 42.8234 39.39C40.1173 39.3635 37.5355 39.7075 35.7876 40.8453C33.5252 42.3183 31.6797 42.3976 30.2335 40.7218C23.7922 33.2777 26.0192 15.4771 16.4007 11.4076C12.6397 9.81512 7.76433 13.303 13.959 14.7645ZM33.9067 46.6754C38.3606 51.7028 48.8033 50.4591 51.3231 46.6665C51.2077 47.3369 49.9213 49.1273 49.0695 49.6653C47.4814 50.6532 45.2544 51.35 42.779 51.3323C40.2859 51.3147 37.9968 50.565 36.4175 49.5595C35.6102 49.0391 33.8357 47.3192 33.9067 46.6754Z"/>
        </svg>
        <h1 class="default">Wooden Ladle Recipes</h1>
        <h1 class="small">Wooden Ladle<br>Recipes</h1>
    </button>

    <button class="search default">
        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.3333 42.6667C20.4889 42.6667 16.3893 40.9884 13.0347 37.632C9.68 34.2756 8.00178 30.176 8 25.3333C7.99822 20.4907 9.67645 16.3911 13.0347 13.0347C16.3929 9.67822 20.4924 8 25.3333 8C30.1742 8 34.2747 9.67822 37.6347 13.0347C40.9947 16.3911 42.672 20.4907 42.6667 25.3333C42.6667 27.2889 42.3556 29.1333 41.7333 30.8667C41.1111 32.6 40.2667 34.1333 39.2 35.4667L54.1333 50.4C54.6222 50.8889 54.8667 51.5111 54.8667 52.2667C54.8667 53.0222 54.6222 53.6444 54.1333 54.1333C53.6444 54.6222 53.0222 54.8667 52.2667 54.8667C51.5111 54.8667 50.8889 54.6222 50.4 54.1333L35.4667 39.2C34.1333 40.2667 32.6 41.1111 30.8667 41.7333C29.1333 42.3556 27.2889 42.6667 25.3333 42.6667ZM25.3333 37.3333C28.6667 37.3333 31.5004 36.1671 33.8347 33.8347C36.1689 31.5022 37.3351 28.6684 37.3333 25.3333C37.3316 21.9982 36.1653 19.1653 33.8347 16.8347C31.504 14.504 28.6702 13.3369 25.3333 13.3333C21.9964 13.3298 19.1636 14.4969 16.8347 16.8347C14.5058 19.1724 13.3387 22.0053 13.3333 25.3333C13.328 28.6613 14.4951 31.4951 16.8347 33.8347C19.1742 36.1742 22.0071 37.3404 25.3333 37.3333Z"/>
        </svg>
    </button>

</header>

<style>
    header, header > * {
        align-items: center;
        display: flex;
        flex-flow: row nowrap;
        padding: 0;
    }

    header {
        background-color: var(--bg-black);
        gap: 0;
        justify-content: space-between;
    }

    header svg {
        height: var(--icon-ht);
        fill: var(--txt-white);
        width: var(--icon-ht);
    }

    header > button {
        border: none;
        gap: var(--gap12);
    }

    header > button.home {
        background: none;
        gap: var(--gap12);
        margin: var(--gap12);

        h1 {
            color: var(--txt-white);
            font-weight: 550;
            line-height: 120%;
            text-align: left;
            text-wrap: wrap;
        }
    }

    /* When view width is less than 384px, break the heading into two line to save space. */

    @media (width < 24rem) {
        header h1.default {display: none;}
    }

    @media (24rem <= width) {
        header h1.small {display: none;}
    }

    /* When view width is greater than 448px, increase the heading's font size to balance the layout. */

    @media (width < 28rem) {
        header h1 {font-size: 1.5rem;}
    }

    @media (28rem <= width) {
        header h1 {font-size: 1.75rem;}
    }

    header > button.search.default {
        background-color: var(--blue);
        border-radius: var(--gap12);
        height: var(--btn-ht);
        justify-content: center;
        margin-right: var(--gap12);
        width: var(--btn-ht);
    }

    header > button.search.default:hover {
        background-color: var(--indigo);
    }

    header > button.search.clicked {
        background-color: var(--bg-white);
        cursor: default;

        svg {
            fill: var(--blue);
        }
    }
</style>
