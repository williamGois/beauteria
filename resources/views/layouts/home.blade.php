@extends('layouts.app')

@section('content')
    <!-- Conteúdo específico da página home -->
    <div class="side-bar-wrapper">
            <div class="side-bar-close-trigger"></div>
            <div class="side-bar-container">
                <h2>Fale com um especialista</h2>
                <p class="paragraph small grey-80">Deixe sua dúvida ou comentário que retornaremos o mais breve possível!</p>
                <div class="spacer _16"></div>
                <div class="w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="619bd2a0d30852b185827204" data-wf-element-id="51a5e56a-f052-b41f-4b21-54eea0a92147">
                        <input class="text-field w-input" maxlength="256" name="Name-2" data-name="Name 2" placeholder="Seu Nome*" type="text" id="Name-2" required=""/>
                        <input class="text-field w-input" maxlength="256" name="Phone-2" data-name="Phone 2" placeholder="Seu Telefone*" type="tel" id="Phone-2" required=""/>
                        <select id="Category-2" name="Category-2" data-name="Category 2" required="" class="form-selector w-select">
                            <option value="Especialidades">Especialidades</option>
                            <option value="Perfumaria">Perfumaria</option>
                            <option value="Cosméticos">Cosméticos</option>
                            <option value="Ambientes">Ambientes</option>
                            <option value="Saneantes">Saneantes</option>
                            <option value="PVC">PVC</option>
                            <option value="Pet">Pet</option>
                        </select>
                        <textarea data-name="Comment 2" maxlength="5000" id="Comment-2" name="Comment-2" placeholder="Sua Mensagem" class="text-field area w-input"></textarea>
                        <div class="spacer _12"></div>
                        <input type="submit" data-wait="Please wait..." class="button primary w-button" value="Enviar"/>
                    </form>
                    <div class="success-message w-form-done">
                        <div>Obrigado! Sua submissão foi recebida!</div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div>Ops! Algo deu errado ao enviar o formulário.</div>
                    </div>
                </div>
                <div class="close-wrapper">
                    <div class="cross-icon w-embed">
                        <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.51471 3.51465L20.4853 20.4852" stroke="currentColor"/>
                            <path d="M20.4853 3.51465L3.51473 20.4852" stroke="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-overlay">
            <div class="overlay-transition"></div>
            <div class="logo-loader-wrapper">
                <img src="{{ asset('images/vms.png') }}" loading="lazy" alt="Logo" class="page-loader-logo"/>
            </div>
        </div>
        <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation w-nav">
            <div class="container nav">
                <div class="nav-grid">
                    <div class="brand-logo-wrapper">
                        <a href="/" aria-current="page" class="nav-brand w-nav-brand w--current">
                            <img src="{{ asset('images/vms.png') }}" loading="lazy" alt="Logo" class="brand-img"/>
                        </a>
                    </div>
                    <nav role="navigation" class="menu-nav w-nav-menu">
                        <a href="/#Sobre" class="nav-link w-nav-link">Sobre</a>
                        <a href="/#Segmentos" class="nav-link w-nav-link">Segmentos</a>
                        <a href="/#Galeria" class="nav-link w-nav-link">Galeria</a>
                        <a href="#Contatos" class="nav-link w-nav-link">Contatos</a>
                        <div class="button-wrapper">
                            <a href="#" class="button secondary nav w-inline-block">
                                <div class="button-content">
                                    <div class="button-text secondary">Fale conosco</div>
                                </div>
                                <div class="button-small-circle"></div>
                            </a>
                        </div>
                    </nav>
                    <div class="menu-button w-nav-button">
                        <div data-is-ix2-target="1" class="hamburger-icon" data-w-id="6bff00c8-e530-755f-826a-24de5374840f" data-animation-type="lottie" data-src="https://assets.website-files.com/619bd2a0d308525360827203/61d41f628c30ea2cbe3fff7d_hamburger.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1.3" data-duration="0" data-ix2-initial-state="0"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="section">
                <div class="container hero w-container">
                    <div class="grid">
                        <div class="grid-item _60 landscape-100">
                            <div class="hero-heading-wrapper">
                                <h1>Destacamos a singularidade natural de cada um.</h1>
                                <div class="hero-description-wrapper">
                                    <p class="paragraph grey">Na Vollmens Fragrances, cada fragrância é uma celebração da sua singularidade. Descubra aromas que realçam sua essência única e transformam a arte da perfumaria em uma expressão pessoal inconfundível.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item _40 landscape-100">
                            <div class="hero-img-container">
                                <div class="hero-img-wrapper">
                                    <img src="https://assets.website-files.com/619bd2a0d308525360827203/619fe21aeb17e0dcaab2294a_img-main.jpeg" loading="lazy" alt="Woman" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 65vw, 64vw" srcset="https://assets.website-files.com/619bd2a0d308525360827203/619fe21aeb17e0dcaab2294a_img-main-p-500.jpeg 500w, https://assets.website-files.com/619bd2a0d308525360827203/619fe21aeb17e0dcaab2294a_img-main-p-1080.jpeg 1080w, https://assets.website-files.com/619bd2a0d308525360827203/619fe21aeb17e0dcaab2294a_img-main.jpeg 1486w" class="hero-img"/>
                                    <div class="hero-button-wrapper">
                                        <a href="#Services" style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button primary w-inline-block">
                                            <div class="button-content">
                                                <div class="button-text">Nossos Serviços</div>
                                            </div>
                                            <div class="button-bg"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container small w-container">
                    <div class="grid">
                        <div class="grid-item">
                            <div class="center-wrapper">
                                <h3>
                                    Você está pronto para realçar sua beleza conosco? Deixe essa aventura acontecer.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Sobre" class="section">
                <div class="two-images-wrapper">
                    <div class="big-img">
                        <img src="https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big.jpeg" loading="lazy" data-w-id="cf25bdd2-3e07-0a8d-fbdd-9f8f7acdb5eb" alt="Cosmetic Stuff" srcset="https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big-p-500.jpeg 500w, https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big-p-800.jpeg 800w, https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big-p-1080.jpeg 1080w, https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big.jpeg 1406w" sizes="(max-width: 479px) 100vw, 46vw" class="parallax-img"/>
                    </div>
                    <div class="small-img opposite">
                        <img src="https://assets.website-files.com/619bd2a0d308525360827203/619ff9cde8762aa2d782c300_img-screen-small.jpeg" loading="lazy" data-w-id="2f814073-fdd9-ce6b-c285-c5d1613fb475" alt="Cosmetic Stuff" class="parallax-img"/>
                    </div>
                    <div class="center-block">
                        <div data-w-id="b8ab5825-ec57-18a0-e648-c8bf3250c041" class="center-content-wrapper">
                            <h3>Aroma, a Essência da Memória</h3>
                            <p>Na Vollmens Fragrances, transformamos essências em experiências memoráveis. Cada fragrância é uma viagem sensorial, criando momentos inesquecíveis e personalizados. Nosso compromisso é com a inovação e a qualidade, para que cada aroma seja uma assinatura única de emoções e sensações.</p>
                            <div class="spacer _20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Segmentos" class="section">
                <div class="container w-container">
                    <div class="grid tablet-reverse-direction">
                        <div class="grid-item _50 tablet-100">
                            <div class="_2up-wrapper">
                                <div class="decorative">Cuide-se</div>
                                <h2>Nossos Segmentos</h2>
                                <div class="grey">
                                    <p class="paragraph">Na Vollmens Fragrances, nossos segmentos refletem a paixão e a expertise na arte da perfumaria. Com uma abordagem inovadora e criativa, desenvolvemos fragrâncias únicas para diversas aplicações, desde perfumes pessoais até soluções para ambientes e produtos de cuidado pessoal.</p>
                                </div>
                                <div class="specialist-wrapper">
                                    <div class="w-dyn-list">
                                        <div role="list" class="w-dyn-items">
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="/prices/your-body" class="specialist-item w-inline-block">
                                                    <div class="specialist-link-wrapper horizontal">
                                                        <div class="specialist-link">Perfumaria</div>
                                                        <div class="specialist-arrow w-embed">
                                                            <svg width="100%" height="100%" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.6 2L10 6.5M10 6.5L5.6 11M10 6.5H2" stroke="currentColor"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph small wo-bottom-margin">Desperte emoções únicas com fragrâncias de excelência.</p>
                                                </a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="/prices/your-skin" class="specialist-item w-inline-block">
                                                    <div class="specialist-link-wrapper horizontal">
                                                        <div class="specialist-link">Cosméticos</div>
                                                        <div class="specialist-arrow w-embed">
                                                            <svg width="100%" height="100%" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.6 2L10 6.5M10 6.5L5.6 11M10 6.5H2" stroke="currentColor"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph small wo-bottom-margin">Realce a beleza e o cuidado com aromas que encantam.</p>
                                                </a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="/prices/your-hair" class="specialist-item w-inline-block">
                                                    <div class="specialist-link-wrapper horizontal">
                                                        <div class="specialist-link">Ambientes</div>
                                                        <div class="specialist-arrow w-embed">
                                                            <svg width="100%" height="100%" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.6 2L10 6.5M10 6.5L5.6 11M10 6.5H2" stroke="currentColor"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph small wo-bottom-margin">Transforme espaços com identidade olfativa marcante.</p>
                                                </a>
                                            </div>
                                            <div role="listitem" class="w-dyn-item">
                                                <a href="/prices/your-nails" class="specialist-item w-inline-block">
                                                    <div class="specialist-link-wrapper horizontal">
                                                        <div class="specialist-link">Saneantes</div>
                                                        <div class="specialist-arrow w-embed">
                                                            <svg width="100%" height="100%" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.6 2L10 6.5M10 6.5L5.6 11M10 6.5H2" stroke="currentColor"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph small wo-bottom-margin">Limpeza e bem-estar em cada aroma do lar.</p>
                                                </a>
                                            </div>

                                            <div role="listitem" class="w-dyn-item">
                                                <a href="/prices/your-nails" class="specialist-item w-inline-block">
                                                    <div class="specialist-link-wrapper horizontal">
                                                        <div class="specialist-link">PVC</div>
                                                        <div class="specialist-arrow w-embed">
                                                            <svg width="100%" height="100%" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.6 2L10 6.5M10 6.5L5.6 11M10 6.5H2" stroke="currentColor"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph small wo-bottom-margin">Inove com fragrâncias que dão vida a produtos industriais.</p>
                                                </a>
                                            </div>

                                            <div role="listitem" class="w-dyn-item">
                                                <a href="/prices/your-nails" class="specialist-item w-inline-block">
                                                    <div class="specialist-link-wrapper horizontal">
                                                        <div class="specialist-link">PET</div>
                                                        <div class="specialist-arrow w-embed">
                                                            <svg width="100%" height="100%" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.6 2L10 6.5M10 6.5L5.6 11M10 6.5H2" stroke="currentColor"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p class="paragraph small wo-bottom-margin">Conforto e alegria para os pets com fragrâncias especiais.</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item _50 tablet-100">
                            <div data-w-id="81fe73e2-cd2b-3a76-b3fc-e4e0f9c7dc93" class="img-wrapper">
                                <img src="https://assets.website-files.com/619bd2a0d308525360827203/61a20f3081dbc1ce363fca39_img-specialties.jpeg" loading="lazy" data-w-id="81fe73e2-cd2b-3a76-b3fc-e4e0f9c7dc94" alt="A woman touches their hands" srcset="https://assets.website-files.com/619bd2a0d308525360827203/61a20f3081dbc1ce363fca39_img-specialties-p-500.jpeg 500w, https://assets.website-files.com/619bd2a0d308525360827203/61a20f3081dbc1ce363fca39_img-specialties-p-800.jpeg 800w, https://assets.website-files.com/619bd2a0d308525360827203/61a20f3081dbc1ce363fca39_img-specialties-p-1080.jpeg 1080w, https://assets.website-files.com/619bd2a0d308525360827203/61a20f3081dbc1ce363fca39_img-specialties.jpeg 1140w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 90vw, 43vw" class="_2up-image"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-wrapper">
            <div id="Galeria" class="section">
                <div class="container w-container">
                    <div class="grid">
                        <div class="grid-item _60 landscape-100">
                            <div class="hero-heading-wrapper">
                                <h2 class="slider-heading">Bem-vindo ao Mundo Vollmens.</h2>
                                <div class="hero-description-wrapper">
                                    <p class="paragraph grey">Nossa paixão e expertise nos permitem transformar ingredientes naturais em experiências olfativas únicas, conectando pessoas através do poder dos aromas. Descubra um mundo onde cada fragrância é uma jornada sensorial inesquecível.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item _40 landscape-100">
                            <div class="hero-img-container">
                                <div class="hero-img-wrapper slider">
                                    <div class="hero-button-wrapper">
                                        <a href="#" class="button primary side-bar w-inline-block">
                                            <div class="button-content">
                                                <div class="button-text">Fale conosco</div>
                                            </div>
                                            <div class="button-bg"></div>
                                        </a>
                                    </div>
                                    <div data-delay="4000" data-animation="slide" class="slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
                                        <div class="slider-mask w-slider-mask">
                                            <div class="slider-slide w-slide">
                                                <img src="https://assets.website-files.com/619bd2a0d308525360827203/61d2d5ac12b5844c8c4c177b_gallery-1.jpeg" loading="lazy" alt="Minimal interior" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 65vw, 64vw" srcset="https://assets.website-files.com/619bd2a0d308525360827203/61d2d5ac12b5844c8c4c177b_gallery-1-p-500.jpeg 500w, https://assets.website-files.com/619bd2a0d308525360827203/61d2d5ac12b5844c8c4c177b_gallery-1-p-800.jpeg 800w, https://assets.website-files.com/619bd2a0d308525360827203/61d2d5ac12b5844c8c4c177b_gallery-1.jpeg 1140w" class="slider-image"/>
                                            </div>
                                            <div class="slider-slide w-slide">
                                                <img src="https://assets.website-files.com/619bd2a0d308525360827203/619ff9cde8762aa2d782c300_img-screen-small.jpeg" loading="lazy" alt="Cosmetic Stuff" class="slider-image"/>
                                            </div>
                                            <div class="slider-slide w-slide">
                                                <img src="https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big.jpeg" loading="lazy" alt="Cosmetic Stuff" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 65vw, 64vw" srcset="https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big-p-500.jpeg 500w, https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big-p-800.jpeg 800w, https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big-p-1080.jpeg 1080w, https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big.jpeg 1406w" class="slider-image"/>
                                            </div>
                                            <div class="slider-slide w-slide">
                                                <img src="https://assets.website-files.com/619bd2a0d308525360827203/61a22daee8f59f615f88fb04_img-price%20(1).jpeg" loading="lazy" alt="Towels" class="slider-image"/>
                                            </div>
                                            <div class="slider-slide w-slide">
                                                <img src="https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big.jpeg" loading="lazy" alt="Cosmetic Stuff" sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 991px) 65vw, 64vw" srcset="https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big-p-500.jpeg 500w, https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big-p-800.jpeg 800w, https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big-p-1080.jpeg 1080w, https://assets.website-files.com/619bd2a0d308525360827203/619ff9cd5befb79b0bddb913_img-screen-big.jpeg 1406w" class="slider-image"/>
                                            </div>
                                        </div>
                                        <div class="slider-container-arrow w-slider-arrow-left">
                                            <div class="slider-arrow w-embed">
                                                <svg width="100%" height="100%" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6544 0L14.0391 1.3984L3.79595 11.5166H25V13.4834H3.79595L14.0391 23.6016L12.6544 25L0 12.5L12.6544 0Z" fill="currentColor"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="slider-container-arrow right w-slider-arrow-right">
                                            <div class="slider-arrow w-embed">
                                                <svg width="100%" height="100%" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3456 0L10.9609 1.3984L21.204 11.5166H0V13.4834H21.204L10.9609 23.6016L12.3456 25L25 12.5L12.3456 0Z" fill="currentColor"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="slider-nav w-slider-nav w-round"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container w-container">
                    <div class="grid">
                        <div class="grid-item _50 landscape-100">
                            <div class="_2up-wrapper">
                                <div class="img-wrapper sticky">
                                    <img src="https://assets.website-files.com/619bd2a0d308525360827203/61d2dca2378dbfa24b288c59_img-owner%20(1).jpeg" loading="lazy" alt="Women lies on ground" class="_2up-image sticky"/>
                                    <div class="image-decorative white"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item _50 landscape-100">
                            <div class="_2up-wrapper padding-top">
                                <div class="decorative">Ame</div>
                                <h2>Cada Momento</h2>
                                <div class="grey">
                                    <p class="paragraph">Com Vollmens Fragrances, cada aroma é uma celebração. Descubra fragrâncias que enriquecem suas experiências diárias, transformando o cotidiano em algo extraordinariamente memorável.</p>
                                    <p class="paragraph">Ame a essência da vida: Vollmens Fragrances captura a beleza em cada aroma, convidando você a uma jornada sensorial inesquecível. Transforme seu dia a dia com fragrâncias que falam ao coração.</p>
                                    <p class="paragraph">Abrace a magia dos aromas com Vollmens Fragrances, onde cada fragrância é uma porta para novas emoções e experiências. Descubra o poder de um perfume para transformar momentos comuns em memórias extraordinárias.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrapper">
            <div id="Contatos" class="section">
                <div class="full-section-image">
                    <div class="center-content-wrapper center-aligment">
                        <div class="decorative">Endereço</div>
                        <div class="content">
                            <h2 class="_16-bottom-margin">VMS Distribuidora</h2>
                            <p class="paragraph large light">Av Liberdade Qd.202 Lt.01 GALPAO 02</p>
                            <p class="paragraph large light">Jardim Buriti Sereno</p>
                            <p class="paragraph large light">Aparecida de Goiânia - GO</p>
                            <p class="paragraph large light">74.943-400</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container footer w-container">
                    <div class="grid">
                        <div class="grid-item _50 tablet-100">
                            <div class="footer-items-wrapper">
                                <a href="#" class="footer-logo w-inline-block">
                                    <img src="{{ asset('images/vms.png') }}" loading="lazy" alt="Logo" class="footer-logo-img"/>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item _50 tablet-100">
                            <div class="footer-contact">
                                <h4>Caso tenha dúvidas, deixe seu número de telefone que entraremos em contato em breve!</h4>
                                <div class="form-block w-form">
                                    <form id="wf-form-Phone-Number" name="wf-form-Phone-Number" data-name="Phone Number" method="get" data-wf-page-id="619bd2a0d30852b185827204" data-wf-element-id="5f825ed3-bdab-7432-8713-7364b8e98f8c">
                                        <div class="filed-button">
                                            <input class="text-field absolute w-input" maxlength="256" name="Name" data-name="Name" placeholder="Seu Telefone" type="tel" id="phone" required=""/>
                                            <div class="button-arrow">
                                                <div class="specialist-arrow input w-embed">
                                                    <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.90118 0L7.01495 0.894976L13.5706 7.37062H0V8.62938H13.5706L7.01495 15.105L7.90118 16L16 8L7.90118 0Z" fill="currentColor"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <input type="submit" data-wait="" class="button in-field w-button" value=""/>
                                        </div>
                                    </form>
                                    <div class="success-message w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="w-form-fail">
                                        <div>Ops! Algo deu errado ao enviar o formulário.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-links-wrapper">
                                <div class="links-container">
                                    <a href="#Sobre" class="footer-small-link">Sobre</a>
                                    <a href="#Segmentos" class="footer-small-link">Segmentos</a>
                                    <a href="#Galeria" class="footer-small-link">Galeria</a>
                                    <a href="#" class="footer-small-link">Contatos</a>
                                </div>

                                <div class="links-container">
                                    <a href="mailto:adm@vms.ind.br" class="footer-small-link">adm@vms.ind.br</a>
                                    <a href="https://www.facebook.com/" class="footer-small-link">facebook</a>
                                    <a href="https://www.instagram.com/" class="footer-small-link">instagram</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="footer-bottom-wrapper">
                                <div class="paragraph extra-small">
                                    © All rights reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
