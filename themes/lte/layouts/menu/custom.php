<?php

return [
                    ['label' => 'Geral', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'CPAs', 'icon' => 'fa fa-institution', 'url' => ['/cpai/index'],],
                    ['label' => 'OPMs', 'icon' => 'fa fa-institution', 'url' => ['/opm/index'],],
                    ['label' => 'Pessoas', 'icon' => 'fa fa-user', 'url' => ['/pessoas/index'],],
                    ['label' => 'Situação', 'icon' => 'fa fa-check-square-o', 'url' => ['/situacao/index'],],
                    ['label' => 'Pessoas - Situação', 'icon' => 'fa fa-refresh', 'url' => ['/pessoa-situacao/index'],],
                    ['label' => 'Login', 'url' => ['/user/security/login'], 'visible' => Yii::$app->user->isGuest],             
                    [
                        'label' => 'Usuários',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                                      
                                        ['label' => 'Administração', 'url' => ['/user/admin/index']],
                                        ['label' => 'Conta', 'url' => ['/user/settings/account']],
                                        
                                   
                                   ]
                         ],
                    [
                        'label' => 'Permissões',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                                      
                                        ['label' => 'Papéis', 'url' => ['/rbac/role']],
                                        ['label' => 'Permissões', 'url' => ['/rbac/permission']],
                                        ['label' => 'Atribuições', 'url' => ['/rbac/assignment']],
                                        
                                   
                                   ]
                         ],
            ];