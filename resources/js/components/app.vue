<template>
<header>
        <nav class="containers">
            <div class="branding">
                <router-link to="/" style="text-decoration: none;">
                    <h1>Invoice App</h1>
                </router-link>
            
            </div>
            <ul class="nav-routes">
                <div >
                <a class="btn btn-secondary bt-3">
                    <router-link to="/">
                    Home
                </router-link>
                </a>
            </div>
                <div >
                <a class="btn btn-secondary bt-3">
                    <router-link to="/add/customer">
                    Add Customer
                </router-link>
                </a>
            </div>
            <div >
                <a class="btn btn-secondary bt-3">
                    <router-link to="/all/customer">
                    All Customer
                </router-link>
                </a>
            </div>
            <div >
                <a class="btn btn-secondary bt-3">
                    <router-link to="/add/product">
                        Add product
                    </router-link>
                </a>
            </div>
            <div >
                <a class="btn btn-secondary bt-3">
                    <router-link to="/all/product">
                        All product
                    </router-link>
                </a>
            </div>
            </ul>
        </nav>
    </header>
    <br>
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
            padding: 30px 25px;

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



