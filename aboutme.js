$.fn.moveIt = function(){
    let $window = $(window);
    let instances = [];

    $(this).each(function(){
        instances.push(new moveItItem($(this)));
    });

    window.onscroll = function(){
        let scrollTop = $window.scrollTop();
        instances.forEach(function(inst){
            inst.update(scrollTop);
        });
    }
}

let moveItItem = function(el){
    this.el = $(el);
    this.speed = parseInt(this.el.attr('data-scroll-speed'));
};

moveItItem.prototype.update = function(scrollTop){
    let pos = scrollTop / this.speed;
    this.el.css('transform', 'translateY(' + -pos + 'px)');
};

$(function(){
    $('[data-scroll-speed]').moveIt();
});
