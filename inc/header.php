<?php
/***************************************************************************/
/* print_header(...) */
/***************************************************************************/
function print_header() { ?>

    <header>
        <img id="wordmark" src="/~17ccv/a5/img/QueensWordmark_black_295x37_2x.png" alt="Queen's University"/>
        <div id="hero-image" class="bee">
            <div class="overlay"></div>
            <div id="site-title">
                <a href="/~17ccv/a5/index.php">Department of Agriculture</a>
                <img id="logo" src="/~17ccv/a5/img/queens-logo.png" alt="Queen's University Coat of Arms"/>
            </div>
            <nav>
                <ul>
                    <li><a href="/~17ccv/a5/about.php">About</a></li>
                    <li><a href="/~17ccv/a5/programs.php">Programs</a></li>
                    <li><form id="search-bar" method="POST" action="./search-results.php">
                            <div class="search-bar">
                                <div class="input-box-container">
                                    <label for="search" class="hidden">Search term (required): </label>
                                    <input type="text" class="search-input-box" name="search" id="search" placeholder="Search" maxlength="100" required />
                                    <input type="submit" class="hidden" value="SEARCH!"/>
                                </div>
                            </div>
                        </form>
                </ul>
            </nav>
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com/QueensComputing">
                        <i class="icon-facebook-square" aria-hidden="true" title="Facebook"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/queenscomputing">
                        <i class="icon-twitter-square" aria-hidden="true" title="Twitter"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <?php
}
?>