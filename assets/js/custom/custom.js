jQuery(document).ready(function($){
    var portfolio = $('.container-fluid');
    var uzaUrl = 'http://uza/wp-json/uza_rest/v1/portfolio';

    $('#load_more_btn').on('click', function(){

        $.getJSON( uzaUrl, posts => { 

            var containerFluid = portfolio.append(`
                <div class="row uza-portfolio">
                    ${posts.map(item =>
                        `<div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                            <div class="single-portfolio-slide">
                                <img src="${item.image_url}" alt="">
                                <!-- Overlay Effect -->
                                <div class="overlay-effect">
                                    <h4>${item.title}</h4>
                                    <p>${item.content}</p>
                                </div>
                                <!-- View More -->
                                <div class="view-more-btn">
                                    <a href="${item.link}"><i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>`
                    ).join('')}
                </div>
                `);
        });
    });
});
