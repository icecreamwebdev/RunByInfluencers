 window.addEventListener('load',function(){
        document.querySelector('.glider').addEventListener('glider-slide-visible', function(event){
            var glider = Glider(this);
            console.log('Slide Visible %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-slide-hidden', function(event){
            console.log('Slide Hidden %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-refresh', function(event){
            console.log('Refresh')
        });
        document.querySelector('.glider').addEventListener('glider-loaded', function(event){
            console.log('Loaded')
        });

        window._ = new Glider(document.querySelector('.glider'), {
            slidesToShow: 5, //'auto',
            slidesToScroll: 'auto',
            itemWidth: 3000,
            draggable: true,
            scrollLock: false,
            dots: '#dots',
            rewind: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToScroll: 'auto',
                        itemWidth: 305,
                        slidesToShow: 'auto',
                        exactWidth: true
                    }
                },
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToScroll: 5,
                        slidesToShow: 5,
                        itemWidth: 290,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToScroll: 5,
                        slidesToShow: 5,
                        itemWidth: 290,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToScroll: 4,
                        slidesToShow: 4,
                        itemWidth: 280,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToScroll: 3,
                        slidesToShow: 3,
                        itemWidth: 220,
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToScroll: 3,
                        slidesToShow: 3,
                        itemWidth: 220,
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToScroll: 2,
                        slidesToShow: 2,
                        itemWidth: 240,
                    }
                },
                {
                    breakpoint: 300,
                    settings: {
                        slidesToScroll: 2,
                        slidesToShow: 2,
                        itemWidth: 220,
                    }
                }
            ]
        });
      });