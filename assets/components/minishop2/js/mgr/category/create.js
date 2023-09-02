miniShop2.page.CreateCategory = function (config) {
    config = config || {record: {}};
    config.record = config.record || {};

    Ext.applyIf(config, {
        panelXType: 'minishop2-panel-category-create',
        mode: 'create'
    });
    miniShop2.page.CreateCategory.superclass.constructor.call(this, config);
};
Ext.extend(miniShop2.page.CreateCategory, MODx.page.CreateResource, {

    getButtons: function (config) {
        var buttons = [];
        var originals = MODx.page.CreateResource.prototype.getButtons.call(this, config);
        for (var i in originals) {
            if (!originals.hasOwnProperty(i)) {
                continue;
            }
            var button = originals[i];
            switch (button.id) {
                case 'modx-abtn-save':
                    button.text = '<i class="icon icon-check"></i> ' + button.text;
                    break;
                case 'modx-abtn-cancel':
                    button.text = '<i class="icon icon-ban"></i> ' + button.text;
                    button.handler = this.cancel;
                    break;
                case 'modx-abtn-help':
                    button.text = '<i class="icon icon-question-circle"></i>';
                    break;
            }
            buttons.push(button)
        }

        return buttons;
    },

    cancel: function () {
        var id = MODx.request.parent;
        var action = id != 0
            ? 'resource/update'
            : 'welcome';

        MODx.loadPage(action, 'id=' + id)
    },

});
Ext.reg('minishop2-page-category-create', miniShop2.page.CreateCategory);


miniShop2.panel.CreateCategory = function (config) {
    config = config || {};
    miniShop2.panel.CreateCategory.superclass.constructor.call(this, config);
};
Ext.extend(miniShop2.panel.CreateCategory, miniShop2.panel.Category);
Ext.reg('minishop2-panel-category-create', miniShop2.panel.CreateCategory);
