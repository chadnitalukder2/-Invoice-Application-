<template>
<header>
        <nav class="containers">
            <div class="branding">
                <h1>Vue Todos</h1>
            </div>
            <ul class="nav-routes">
                <RouterLink to="/">Home</RouterLink>
                <RouterLink to="/about">About</RouterLink>
            </ul>
        </nav>
    </header>
    <br>

    <button >
        <router-link to="/">
            Home
        </router-link>

    </button>
    <router-view></router-view>
</template>
<script>

</script>

<style lang="scss">
    header {
        background-color: #f1f1f1;
        nav {
            display: flex;
            align-items: center;
            padding: 25px 16px;

            .branding {
                display: flex;
                align-items: center;
                gap: 8px;
                img {
                    max-width: 50px;
                }

                h1 {
                    color: #6c5ce7;
                    font-size: 24px;
                }
            }

            .nav-routes {
                display: flex;
                flex: 1;
                justify-content: flex-end;
                gap: 12px;
                list-style: none;

                a {
                    text-decoration: none;
                    color: #6c5ce7;
                }
            }
        }
    }
</style>



