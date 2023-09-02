Ext.namespace('miniShop2.utils');

miniShop2.utils.formatDate = function (string) {
    if (string && string != '0000-00-00 00:00:00' && string != '-1-11-30 00:00:00' && string != 0) {
        var date = /^[0-9]+$/.test(string)
            ? new Date(string * 1000)
            : new Date(string.replace(/(\d+)-(\d+)-(\d+)/, '$2/$3/$1'));

        return date.strftime(MODx.config['ms2_date_format']);
    } else {
        return '&nbsp;';
    }
};

miniShop2.utils.userLink = function (value, id, blank) {
    if (!value) {
        return '';
    } else if (!id) {
        return value;
    }

    return String.format(
        '<a href="?a=security/user/update&id={0}" class="ms2-link" target="{1}">{2}</a>',
        id,
        (blank ? '_blank' : '_self'),
        value
    );
};

miniShop2.utils.productLink = function (value, id, blank) {
    if (!value) {
        return '';
    } else if (!id) {
        return value;
    }

    return String.format(
        '<a href="index.php?a=resource/update&id={0}" class="ms2-link" target="{1}">{2}</a>',
        id,
        (blank ? '_blank' : '_self'),
        value
    );
};

miniShop2.utils.renderImage = function (value) {
    if (Ext.isEmpty(value)) {
        value = miniShop2.config['default_thumb'];
    } else {
        if (!/\/\//.test(value)) {
            if (!/^\//.test(value)) {
                value = '/' + value;
            }
        }
    }

    return String.format('<img src="{0}" />', value);
};

miniShop2.utils.renderBoolean = function (value) {
    var color, text;
    if (value == 0 || value == false || value == undefined) {
        color = 'red';
        text = _('no');
    } else {
        color = 'green';
        text = _('yes');
    }

    return String.format('<span class="{0}">{1}</span>', color, text);
};

miniShop2.utils.getMenu = function (actions, grid, selected) {
    var menu = [];
    var cls, icon, title, action = '';

    var has_delete = false;
    for (var i in actions) {
        if (!actions.hasOwnProperty(i)) {
            continue;
        }

        var a = actions[i];
        if (!a['menu']) {
            if (a == '-') {
                menu.push('-');
            }
            continue;
        } else if (menu.length > 0 && !has_delete && (/^remove/i.test(a['action']) || /^delete/i.test(a['action']))) {
            menu.push('-');
            has_delete = true;
        }

        if (selected.length > 1) {
            if (!a['multiple']) {
                continue;
            } else if (typeof(a['multiple']) == 'string') {
                a['title'] = a['multiple'];
            }
        }

        icon = a['icon'] ? a['icon'] : '';
        if (typeof(a['cls']) == 'object') {
            if (typeof(a['cls']['menu']) != 'undefined') {
                icon += ' ' + a['cls']['menu'];
            }
        } else {
            cls = a['cls'] ? a['cls'] : '';
        }
        title = a['title'] ? a['title'] : a['title'];
        action = a['action'] ? grid[a['action']] : '';

        menu.push({
            handler: action,
            text: String.format(
                '<span class="{0}"><i class="x-menu-item-icon {1}"></i>{2}</span>',
                cls,
                icon,
                title
            ),
        scope: grid
        });
    }

    return menu;
};

miniShop2.utils.renderActions = function (value, props, row) {
    var res = [];
    var cls, icon, title, action, item = '';
    for (var i in row.data.actions) {
        if (!row.data.actions.hasOwnProperty(i)) {
            continue;
        }
        var a = row.data.actions[i];
        if (!a['button']) {
            continue;
        }

        icon = a['icon'] ? a['icon'] : '';
        if (typeof(a['cls']) == 'object') {
            if (typeof(a['cls']['button']) != 'undefined') {
                icon += ' ' + a['cls']['button'];
            }
        } else {
            cls = a['cls'] ? a['cls'] : '';
        }
        action = a['action'] ? a['action'] : '';
        title = a['title'] ? a['title'] : '';

        item = String.format(
            '<li class="{0}"><button class="btn btn-default {1}" action="{2}" title="{3}"></button></li>',
            cls,
            icon,
            action,
            title
        );

        res.push(item);
    }

    return String.format(
        '<ul class="minishop2-row-actions">{0}</ul>',
        res.join('')
    );
};

miniShop2.utils.Hash = {
    get: function () {
        var vars = {}, hash, splitter, hashes;
        if (!this.oldbrowser()) {
            var pos = window.location.href.indexOf('?');
            hashes = (pos != -1) ? decodeURIComponent(window.location.href.substr(pos + 1)) : '';
            splitter = '&';
        } else {
            hashes = decodeURIComponent(window.location.hash.substr(1));
            splitter = '/';
        }

        if (hashes.length == 0) {
            return vars;
        } else {
            hashes = hashes.split(splitter);
        }

        for (var i in hashes) {
            if (hashes.hasOwnProperty(i)) {
                hash = hashes[i].split('=');
                if (typeof hash[1] == 'undefined') {
                    vars['anchor'] = hash[0];
                } else {
                    vars[hash[0]] = hash[1];
                }
            }
        }
        return vars;
    },

    set: function (vars) {
        var hash = '';
        for (var i in vars) {
            if (vars.hasOwnProperty(i)) {
                hash += '&' + i + '=' + vars[i];
            }
        }

        if (!this.oldbrowser()) {
            if (hash.length != 0) {
                hash = '?' + hash.substr(1);
            }
            window.history.pushState(hash, '', document.location.pathname + hash);
        } else {
            window.location.hash = hash.substr(1);
        }
    },

    add: function (key, val) {
        var hash = this.get();
        hash[key] = val;
        this.set(hash);
    },

    remove: function (key) {
        var hash = this.get();
        delete hash[key];
        this.set(hash);
    },

    clear: function () {
        this.set({});
    },

    oldbrowser: function () {
        return !(window.history && history.pushState);
    },
};

miniShop2.utils.formatSize = function (size) {
    if (size >= 1048576) {
        size = Math.round(size / 1048576).toFixed(2) + ' Mb';
    } else if (size >= 1024) {
        size = Math.round(size / 1024) + ' Kb';
    } else {
        size += ' B';
    }

    return size;
};

miniShop2.utils.getExtField = function (config, key, option, context) {
    config = config || {};
    if (!config.record) {
        config.record = {};
    }

    option = option || {};
    context = context || 'data-field';

    var name = '';
    switch (context) {
        case 'extra-column':
        case 'extra-field':
            name =  'options-' + key;
            break;
        default:
            name = key;
            break;
    }

    var field = option;
    if (typeof option.ext_field == 'string') {
        field = Ext.util.JSON.decode(option.ext_field);
    }
    var column = {
        sortable: false,
        dataIndex: name,
    };

    var help = '';
    if (_('resource_' + key + '_help')) {
        help = '<br/>' + _('resource_' + key + '_help');
    } else if (_('ms2_product_' + key + '_help')) {
        help = '<br/>' + _('ms2_product_' + key + '_help');
    } else if (option.description) {
        help = '<br/>' + option.description;
    }

    field = Ext.applyIf(field, {
        id: 'modx-resource-' + key,
        name: name,
        value: option.value || config.record[key] || '',
        description: '[[+' + key + ']]' + help,
        fieldLabel: option.caption || _('ms2_product_' + key) || key,
        fieldKey: key,
        allowBlank: Boolean(1 - parseInt(option.required || 0)),
        enableKeyEvents: true,
        listeners: config.listeners || {},
        category: option.category,
        category_name: option.category_name,
        msgTarget: 'under',
    });

    if (field.allowBlank === false) {
        field.fieldLabel = field.fieldLabel + ' <span class="required red">*</span>'
    }

    switch (field.xtype) {
        case 'minishop2-combo-options':
            if (context.indexOf('column') > 0) {
                field.disabled = true;
                field.xtype = 'textfield';
            }
            break;
        case 'minishop2-xdatetime':
            field.anchor = '95%';
            field.fieldColumnWidth = '75';
            break;
        case 'xdatetime':
            field.anchor = '25.5%';
            if (typeof field.value !== 'string') {
                field.value = '';
            }
            break;
        case 'minishop2-combo-user':
            field.anchor = '95%';
            field.fieldColumnWidth = '75';
            break;
        case 'xcheckbox':
            field.hideLabel = true;
            field.boxLabel = field.fieldLabel;
            field.checked = field.value ? 1 : 0;
            if (context.indexOf('column') > 0) {
                field.xtype = 'modx-combo-boolean';
                field.renderer = 'boolean';
            }
            break;
        case 'textname':
            field.anchor = '100%';
            field.maxLength = 255;
            break;
        case 'boolean':
        case 'modx-combo-boolean':
        case 'combo-boolean':
            field.anchor = '25%';
            field.hiddenName = field.name;
            field.renderer = 'boolean';
            break;
        default:
            field.anchor = '100%';
    }

    field.cls = 'option-in-' + context + ' option-' + field.xtype + ' ' + (field.cls || '');
    field.ctCls = 'option-in-' + context + ' option-' + field.xtype + ' ' + (field.ctCls || '');

    switch (context) {
        case 'extra-column':
            column = Ext.applyIf(column, {
                width: field.fieldColumnWidth || 50,
                header: field.fieldLabel,
                editor: field
            });
            return (function (o,a,b) {
                return o[a] = b,o})({},option.key,column);
        case 'extra-field':
        case 'data-field':
            return field;
            break;
        default:
            return false;
    }
};

miniShop2.utils.renderBadge = function (value, cell, row) {
    var color = row.data.color || 'CACACA',
        textColor = '000000';

    if (row.data.color) {
        // HEX to RGB
        var r = g = b = 0;
        r = '0x' + color[0] + color[1];
        g = '0x' + color[2] + color[3];
        b = '0x' + color[4] + color[5];

        r /= 255;
        g /= 255;
        b /= 255;

        // RGB to HEX
        var cmin = Math.min(r,g,b),
            cmax = Math.max(r,g,b),
            delta = cmax - cmin,
            h = s = l = 0;

        if (delta == 0) {
            h = 0;
        } else if (cmax == r) {
            h = ((g - b) / delta) % 6;
        } else if (cmax == g) {
            h = (b - r) / delta + 2;
        } else {
            h = (r - g) / delta + 4;
        }

        h = Math.round(h * 60);

        if (h < 0) {
            h += 360;
        }

        l = (cmax + cmin) / 2;
        s = delta == 0 ? 0 : delta / (1 - Math.abs(2 * l - 1));
        s = +(s * 100).toFixed(1);
        l = +(l * 100).toFixed(1);

        textColor = l > 50 ? '000000' : 'FFFFFF';
    }


    //noinspection CssInvalidPropertyValue
    return row.data.hasOwnProperty('active') && !row.data.active
        ? value
        : String.format('<span class="minishop2-row-badge" style="background-color:#{0};color:#{1}">{2}</span>', color, textColor, value);
};

/*
miniShop2.getOptCaption = function (field) {
var opts = miniShop2.config['option_fields'];
if (!opts) {
return '';
}
for (var i = 0, len = opts.length; i < len; i++) {
if (opts[i]['key'] == field) {
return opts[i]['caption'];
}
}
return '';
};
*/
