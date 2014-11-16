var IH = {};

IH.Plugins = {};

IH.Plugins.Slider = function (node) {
    var items = node.find('.item'),
        index = 0,
        total = items.length;

    setInterval(function () {
        items.removeClass('fade-in');
        $(items[index]).addClass('fade-in');
        index = index === total-1 ? 0: index + 1;
    }, 2000);
};

$(function () {
    var slider = new IH.Plugins.Slider($('.carousel'));
});