/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2020 Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

define('views/admin/layouts/index', 'view', function (Dep) {

    return Dep.extend({

        template: 'admin/layouts/index',

        scopeList: null,

        typeList: [
            'list',
            'detail',
            'listSmall',
            'detailSmall',
            'filters',
            'massUpdate',
            'relationships',
            'sidePanelsDetail',
            'sidePanelsEdit',
            'sidePanelsDetailSmall',
            'sidePanelsEditSmall',
        ],

        scope: null,

        type: null,

        data: function () {
            return {
                scopeList: this.scopeList,
                typeList: this.typeList,
                scope: this.scope,
                layoutScopeDataList: this.getLayoutScopeDataList(),
            };
        },

        events: {
            'click #layouts-menu button.layout-link': function (e) {
                var scope = $(e.currentTarget).data('scope');
                var type = $(e.currentTarget).data('type');
                if (this.getView('content')) {
                    if (this.scope == scope && this.type == type) {
                        return;
                    }
                }
                $("#layouts-menu button.layout-link").removeClass('disabled');
                $(e.target).addClass('disabled');
                this.openLayout(scope, type);
            },
        },

        getLayoutScopeDataList: function () {
            var dataList = [];
            this.scopeList.forEach(function (scope) {
                var item = {};
                item.scope = scope;
                item.typeList = Espo.Utils.clone(this.typeList);

                if (
                    !this.getMetadata().get(['clientDefs', scope, 'defaultSidePanelDisabled'])
                    &&
                    !this.getMetadata().get(['clientDefs', scope, 'defaultSidePanelFieldList'])
                ) {
                    item.typeList.push('defaultSidePanel');
                }

                var additionalLayouts = this.getMetadata().get(['clientDefs', scope, 'additionalLayouts']) || {};
                for (var aItem in additionalLayouts) {
                    item.typeList.push(aItem);
                }

                if (this.getMetadata().get(['clientDefs', scope, 'kanbanViewMode'])) {
                    item.typeList.push('kanban');
                }

                item.typeList = item.typeList.filter(function (name) {
                    return !this.getMetadata().get(['clientDefs', scope, 'layout' + Espo.Utils.upperCaseFirst(name) + 'Disabled'])
                }, this);

                dataList.push(item);
            }, this);

            return dataList;
        },

        setup: function () {
            this.scopeList = [];

            var scopeFullList = this.getMetadata().getScopeList().sort(function (v1, v2) {
                return this.translate(v1, 'scopeNamesPlural').localeCompare(this.translate(v2, 'scopeNamesPlural'));
            }.bind(this));

            scopeFullList.forEach(function (scope) {
                if (this.getMetadata().get('scopes.' + scope + '.entity') &&
                    this.getMetadata().get('scopes.' + scope + '.layouts')) {
                    this.scopeList.push(scope);
                }
            }, this);

            this.on('after:render', function () {
                $("#layouts-menu button[data-scope='" + this.options.scope + "'][data-type='" + this.options.type + "']").addClass('disabled');
                this.renderLayoutHeader();
                if (!this.options.scope) {
                    this.renderDefaultPage();
                }
                if (this.scope) {
                    this.openLayout(this.options.scope, this.options.type);
                }
            });

            this.scope = this.options.scope || null;
            this.type = this.options.type || null;
        },

        openLayout: function (scope, type) {
            this.scope = scope;
            this.type = type;

            this.getRouter().navigate('#Admin/layouts/scope=' + scope + '&type=' + type, {trigger: false});

            this.notify('Loading...');

            var typeReal = this.getMetadata().get('clientDefs.' + scope + '.additionalLayouts.' + type + '.type') || type;

            this.createView('content', 'views/admin/layouts/' + Espo.Utils.camelCaseToHyphen(typeReal), {
                el: '#layout-content',
                scope: scope,
                type: type,
            }, function (view) {
                this.renderLayoutHeader();
                view.render();
                this.notify(false);
                $(window).scrollTop(0);
            }.bind(this));
        },

        renderDefaultPage: function () {
            $("#layout-header").html('').hide();
            $("#layout-content").html(this.translate('selectLayout', 'messages', 'Admin'));
        },

        renderLayoutHeader: function () {
            if (!this.scope) {
                $("#layout-header").html("");
                return;
            }
            $("#layout-header").show().html(this.getLanguage().translate(this.scope, 'scopeNamesPlural') +
                " <span class=\"breadcrumb-separator\"><span class=\"chevron-right\"></span></span> " +
                this.getLanguage().translate(this.type, 'layouts', 'Admin'));
        },

        updatePageTitle: function () {
            this.setPageTitle(this.getLanguage().translate('Layout Manager', 'labels', 'Admin'));
        },
    });
});