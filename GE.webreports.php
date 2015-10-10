<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                                   ATTENTION!
 * If you see this message in your browser (Internet Explorer, Mozilla Firefox, Google Chrome, etc.)
 * this means that PHP is not properly installed on your web server. Please refer to the PHP manual
 * for more details: http://php.net/manual/install.php 
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */


    include_once dirname(__FILE__) . '/' . 'components/utils/check_utils.php';
    CheckPHPVersion();
    CheckTemplatesCacheFolderIsExistsAndWritable();


    include_once dirname(__FILE__) . '/' . 'phpgen_settings.php';
    include_once dirname(__FILE__) . '/' . 'database_engine/oracle_engine.php';
    include_once dirname(__FILE__) . '/' . 'components/page.php';


    function GetConnectionOptions()
    {
        $result = GetGlobalConnectionOptions();
        $result['client_encoding'] = 'AL32UTF8';
        GetApplication()->GetUserAuthorizationStrategy()->ApplyIdentityToConnectionOptions($result);
        return $result;
    }

    
    // OnGlobalBeforePageExecute event handler
    
    
    // OnBeforePageExecute event handler
    
    
    
    class GE_webreportsPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new OracleConnectionFactory(),
                GetConnectionOptions(),
                '"GE"."webreports"');
            $field = new IntegerField('rpt_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new StringField('rpt_name');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('rpt_title');
            $this->dataset->AddField($field, false);
            $field = new DateField('rpt_cdate');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new DateField('rpt_mdate');
            $this->dataset->AddField($field, false);
            $field = new BlobField('rpt_content');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('rpt_owner');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('rpt_status');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('rpt_type');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
        }
    
        protected function DoPrepare() {
    
        }
    
        protected function CreatePageNavigator()
        {
            $result = new CompositePageNavigator($this);
            
            $partitionNavigator = new PageNavigator('pnav', $this, $this->dataset);
            $partitionNavigator->SetRowsPerPage(20);
            $result->AddPageNavigator($partitionNavigator);
            
            return $result;
        }
    
        public function GetPageList()
        {
            $currentPageCaption = $this->GetShortCaption();
            $result = new PageList($this);
            $result->AddGroup($this->RenderText('Default'));
            if (GetCurrentUserGrantForDataSource('GE.BEBEDOR')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('BEBEDOR'), 'GE.BEBEDOR.php', $this->RenderText('BEBEDOR'), $currentPageCaption == $this->RenderText('BEBEDOR'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.CATEGORIA_INTERES')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('CATEGORIA INTERES'), 'GE.CATEGORIA_INTERES.php', $this->RenderText('CATEGORIA INTERES'), $currentPageCaption == $this->RenderText('CATEGORIA INTERES'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.CIUDAD')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('CIUDAD'), 'GE.CIUDAD.php', $this->RenderText('CIUDAD'), $currentPageCaption == $this->RenderText('CIUDAD'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.COLOR_OJOS')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('COLOR OJOS'), 'GE.COLOR_OJOS.php', $this->RenderText('COLOR OJOS'), $currentPageCaption == $this->RenderText('COLOR OJOS'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.webreports')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Webreports'), 'GE.webreports.php', $this->RenderText('Webreports'), $currentPageCaption == $this->RenderText('Webreports'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.webreport_style')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Webreport Style'), 'GE.webreport_style.php', $this->RenderText('Webreport Style'), $currentPageCaption == $this->RenderText('Webreport Style'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.webreport_sql')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Webreport Sql'), 'GE.webreport_sql.php', $this->RenderText('Webreport Sql'), $currentPageCaption == $this->RenderText('Webreport Sql'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.WINK')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('WINK'), 'GE.WINK.php', $this->RenderText('WINK'), $currentPageCaption == $this->RenderText('WINK'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.webreport_admin')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('Webreport Admin'), 'GE.webreport_admin.php', $this->RenderText('Webreport Admin'), $currentPageCaption == $this->RenderText('Webreport Admin'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.VISITA')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('VISITA'), 'GE.VISITA.php', $this->RenderText('VISITA'), $currentPageCaption == $this->RenderText('VISITA'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.TIPO_RELACION')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('TIPO RELACION'), 'GE.TIPO_RELACION.php', $this->RenderText('TIPO RELACION'), $currentPageCaption == $this->RenderText('TIPO RELACION'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.SALARIO')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('SALARIO'), 'GE.SALARIO.php', $this->RenderText('SALARIO'), $currentPageCaption == $this->RenderText('SALARIO'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.RELIGION')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('RELIGION'), 'GE.RELIGION.php', $this->RenderText('RELIGION'), $currentPageCaption == $this->RenderText('RELIGION'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PERSONA_DISPONIBLEXRELIGION')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PERSONA DISPONIBLEXRELIGION'), 'GE.PERSONA_DISPONIBLEXRELIGION.php', $this->RenderText('PERSONA DISPONIBLEXRELIGION'), $currentPageCaption == $this->RenderText('PERSONA DISPONIBLEXRELIGION'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PERSONA_DISPONIBLEXOCUPACION')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PERSONA DISPONIBLEXOCUPACION'), 'GE.PERSONA_DISPONIBLEXOCUPACION.php', $this->RenderText('PERSONA DISPONIBLEXOCUPACION'), $currentPageCaption == $this->RenderText('PERSONA DISPONIBLEXOCUPACION'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PERSONA_DISPONIBLEXMASCOTA')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PERSONA DISPONIBLEXMASCOTA'), 'GE.PERSONA_DISPONIBLEXMASCOTA.php', $this->RenderText('PERSONA DISPONIBLEXMASCOTA'), $currentPageCaption == $this->RenderText('PERSONA DISPONIBLEXMASCOTA'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PERSONA_DISPONIBLEXINTERES')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PERSONA DISPONIBLEXINTERES'), 'GE.PERSONA_DISPONIBLEXINTERES.php', $this->RenderText('PERSONA DISPONIBLEXINTERES'), $currentPageCaption == $this->RenderText('PERSONA DISPONIBLEXINTERES'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PERSONA_DISPONIBLEXEJERCICIO')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PERSONA DISPONIBLEXEJERCICIO'), 'GE.PERSONA_DISPONIBLEXEJERCICIO.php', $this->RenderText('PERSONA DISPONIBLEXEJERCICIO'), $currentPageCaption == $this->RenderText('PERSONA DISPONIBLEXEJERCICIO'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PERSONA_DISPONIBLEXCOLOR_PELO')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PERSONA DISPONIBLEXCOLOR PELO'), 'GE.PERSONA_DISPONIBLEXCOLOR_PELO.php', $this->RenderText('PERSONA DISPONIBLEXCOLOR PELO'), $currentPageCaption == $this->RenderText('PERSONA DISPONIBLEXCOLOR PELO'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PERSONA_DISPONIBLEXIDIOMA')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PERSONA DISPONIBLEXIDIOMA'), 'GE.PERSONA_DISPONIBLEXIDIOMA.php', $this->RenderText('PERSONA DISPONIBLEXIDIOMA'), $currentPageCaption == $this->RenderText('PERSONA DISPONIBLEXIDIOMA'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PERSONA_DISPONIBLE')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PERSONA DISPONIBLE'), 'GE.PERSONA_DISPONIBLE.php', $this->RenderText('PERSONA DISPONIBLE'), $currentPageCaption == $this->RenderText('PERSONA DISPONIBLE'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PERSONA')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PERSONA'), 'GE.PERSONA.php', $this->RenderText('PERSONA'), $currentPageCaption == $this->RenderText('PERSONA'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PARAMETROS')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PARAMETROS'), 'GE.PARAMETROS.php', $this->RenderText('PARAMETROS'), $currentPageCaption == $this->RenderText('PARAMETROS'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.PAIS')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('PAIS'), 'GE.PAIS.php', $this->RenderText('PAIS'), $currentPageCaption == $this->RenderText('PAIS'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.OCUPACIONXCATEGORIA_OCUPACION')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('OCUPACIONXCATEGORIA OCUPACION'), 'GE.OCUPACIONXCATEGORIA_OCUPACION.php', $this->RenderText('OCUPACIONXCATEGORIA OCUPACION'), $currentPageCaption == $this->RenderText('OCUPACIONXCATEGORIA OCUPACION'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.OCUPACION')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('OCUPACION'), 'GE.OCUPACION.php', $this->RenderText('OCUPACION'), $currentPageCaption == $this->RenderText('OCUPACION'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.MASCOTA')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('MASCOTA'), 'GE.MASCOTA.php', $this->RenderText('MASCOTA'), $currentPageCaption == $this->RenderText('MASCOTA'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.NIVEL_EDUCACION')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('NIVEL EDUCACION'), 'GE.NIVEL_EDUCACION.php', $this->RenderText('NIVEL EDUCACION'), $currentPageCaption == $this->RenderText('NIVEL EDUCACION'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.INTERESXCATEGORIA_INTERES')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('INTERESXCATEGORIA INTERES'), 'GE.INTERESXCATEGORIA_INTERES.php', $this->RenderText('INTERESXCATEGORIA INTERES'), $currentPageCaption == $this->RenderText('INTERESXCATEGORIA INTERES'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.INTERES')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('INTERES'), 'GE.INTERES.php', $this->RenderText('INTERES'), $currentPageCaption == $this->RenderText('INTERES'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.IDIOMA')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('IDIOMA'), 'GE.IDIOMA.php', $this->RenderText('IDIOMA'), $currentPageCaption == $this->RenderText('IDIOMA'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.GENERO')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('GENERO'), 'GE.GENERO.php', $this->RenderText('GENERO'), $currentPageCaption == $this->RenderText('GENERO'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.FUMADOR')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('FUMADOR'), 'GE.FUMADOR.php', $this->RenderText('FUMADOR'), $currentPageCaption == $this->RenderText('FUMADOR'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.FRECUENCIA_EJERCICIO')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('FRECUENCIA EJERCICIO'), 'GE.FRECUENCIA_EJERCICIO.php', $this->RenderText('FRECUENCIA EJERCICIO'), $currentPageCaption == $this->RenderText('FRECUENCIA EJERCICIO'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.EVENTO')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('EVENTO'), 'GE.EVENTO.php', $this->RenderText('EVENTO'), $currentPageCaption == $this->RenderText('EVENTO'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.FOTO')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('FOTO'), 'GE.FOTO.php', $this->RenderText('FOTO'), $currentPageCaption == $this->RenderText('FOTO'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.ESTADO_CIVIL')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('ESTADO CIVIL'), 'GE.ESTADO_CIVIL.php', $this->RenderText('ESTADO CIVIL'), $currentPageCaption == $this->RenderText('ESTADO CIVIL'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.EJERCICIO')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('EJERCICIO'), 'GE.EJERCICIO.php', $this->RenderText('EJERCICIO'), $currentPageCaption == $this->RenderText('EJERCICIO'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.EDAD')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('EDAD'), 'GE.EDAD.php', $this->RenderText('EDAD'), $currentPageCaption == $this->RenderText('EDAD'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.CONTEXTURA')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('CONTEXTURA'), 'GE.CONTEXTURA.php', $this->RenderText('CONTEXTURA'), $currentPageCaption == $this->RenderText('CONTEXTURA'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.COLOR_PIEL')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('COLOR PIEL'), 'GE.COLOR_PIEL.php', $this->RenderText('COLOR PIEL'), $currentPageCaption == $this->RenderText('COLOR PIEL'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.COLOR_PELO')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('COLOR PELO'), 'GE.COLOR_PELO.php', $this->RenderText('COLOR PELO'), $currentPageCaption == $this->RenderText('COLOR PELO'), false, $this->RenderText('Default')));
            if (GetCurrentUserGrantForDataSource('GE.CATEGORIA_OCUPACION')->HasViewGrant())
                $result->AddPage(new PageLink($this->RenderText('CATEGORIA OCUPACION'), 'GE.CATEGORIA_OCUPACION.php', $this->RenderText('CATEGORIA OCUPACION'), $currentPageCaption == $this->RenderText('CATEGORIA OCUPACION'), false, $this->RenderText('Default')));
            
            if ( HasAdminPage() && GetApplication()->HasAdminGrantForCurrentUser() ) {
              $result->AddGroup('Admin area');
              $result->AddPage(new PageLink($this->GetLocalizerCaptions()->GetMessageString('AdminPage'), 'phpgen_admin.php', $this->GetLocalizerCaptions()->GetMessageString('AdminPage'), false, false, 'Admin area'));
            }
            return $result;
        }
    
        protected function CreateRssGenerator()
        {
            return null;
        }
    
        protected function CreateGridSearchControl(Grid $grid)
        {
            $grid->UseFilter = true;
            $grid->SearchControl = new SimpleSearch('GE_webreportsssearch', $this->dataset,
                array('rpt_id', 'rpt_name', 'rpt_title', 'rpt_cdate', 'rpt_mdate', 'rpt_owner', 'rpt_status', 'rpt_type'),
                array($this->RenderText('Rpt Id'), $this->RenderText('Rpt Name'), $this->RenderText('Rpt Title'), $this->RenderText('Rpt Cdate'), $this->RenderText('Rpt Mdate'), $this->RenderText('Rpt Owner'), $this->RenderText('Rpt Status'), $this->RenderText('Rpt Type')),
                array(
                    '=' => $this->GetLocalizerCaptions()->GetMessageString('equals'),
                    '<>' => $this->GetLocalizerCaptions()->GetMessageString('doesNotEquals'),
                    '<' => $this->GetLocalizerCaptions()->GetMessageString('isLessThan'),
                    '<=' => $this->GetLocalizerCaptions()->GetMessageString('isLessThanOrEqualsTo'),
                    '>' => $this->GetLocalizerCaptions()->GetMessageString('isGreaterThan'),
                    '>=' => $this->GetLocalizerCaptions()->GetMessageString('isGreaterThanOrEqualsTo'),
                    'ILIKE' => $this->GetLocalizerCaptions()->GetMessageString('Like'),
                    'STARTS' => $this->GetLocalizerCaptions()->GetMessageString('StartsWith'),
                    'ENDS' => $this->GetLocalizerCaptions()->GetMessageString('EndsWith'),
                    'CONTAINS' => $this->GetLocalizerCaptions()->GetMessageString('Contains')
                    ), $this->GetLocalizerCaptions(), $this, 'CONTAINS'
                );
        }
    
        protected function CreateGridAdvancedSearchControl(Grid $grid)
        {
            $this->AdvancedSearchControl = new AdvancedSearchControl('GE_webreportsasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('rpt_id', $this->RenderText('Rpt Id')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('rpt_name', $this->RenderText('Rpt Name')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('rpt_title', $this->RenderText('Rpt Title')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateDateTimeSearchInput('rpt_cdate', $this->RenderText('Rpt Cdate'), 'Y-m-d'));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateDateTimeSearchInput('rpt_mdate', $this->RenderText('Rpt Mdate'), 'Y-m-d'));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateBlobSearchInput('rpt_content', $this->RenderText('Rpt Content')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('rpt_owner', $this->RenderText('Rpt Owner')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('rpt_status', $this->RenderText('Rpt Status')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('rpt_type', $this->RenderText('Rpt Type')));
        }
    
        protected function AddOperationsColumns(Grid $grid)
        {
            $actionsBandName = 'actions';
            $grid->AddBandToBegin($actionsBandName, $this->GetLocalizerCaptions()->GetMessageString('Actions'), true);
            if ($this->GetSecurityInfo()->HasViewGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('View'), OPERATION_VIEW, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
            }
            if ($this->GetSecurityInfo()->HasEditGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('Edit'), OPERATION_EDIT, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
                $column->OnShow->AddListener('ShowEditButtonHandler', $this);
            }
            if ($this->GetSecurityInfo()->HasDeleteGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('Delete'), OPERATION_DELETE, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
                $column->OnShow->AddListener('ShowDeleteButtonHandler', $this);
                $column->SetAdditionalAttribute('data-modal-delete', 'true');
                $column->SetAdditionalAttribute('data-delete-handler-name', $this->GetModalGridDeleteHandler());
            }
            if ($this->GetSecurityInfo()->HasAddGrant())
            {
                $column = new RowOperationByLinkColumn($this->GetLocalizerCaptions()->GetMessageString('Copy'), OPERATION_COPY, $this->dataset);
                $grid->AddViewColumn($column, $actionsBandName);
            }
        }
    
        protected function AddFieldColumns(Grid $grid)
        {
            //
            // View column for rpt_id field
            //
            $column = new TextViewColumn('rpt_id', 'Rpt Id', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for rpt_name field
            //
            $column = new TextViewColumn('rpt_name', 'Rpt Name', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('GE_webreportsGrid_rpt_name_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for rpt_title field
            //
            $column = new TextViewColumn('rpt_title', 'Rpt Title', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('GE_webreportsGrid_rpt_title_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for rpt_cdate field
            //
            $column = new DateTimeViewColumn('rpt_cdate', 'Rpt Cdate', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for rpt_mdate field
            //
            $column = new DateTimeViewColumn('rpt_mdate', 'Rpt Mdate', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for rpt_content field
            //
            $column = new DownloadDataColumn('rpt_content', 'Rpt Content', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for rpt_owner field
            //
            $column = new TextViewColumn('rpt_owner', 'Rpt Owner', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('GE_webreportsGrid_rpt_owner_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for rpt_status field
            //
            $column = new TextViewColumn('rpt_status', 'Rpt Status', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for rpt_type field
            //
            $column = new TextViewColumn('rpt_type', 'Rpt Type', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
        }
    
        protected function AddSingleRecordViewColumns(Grid $grid)
        {
            //
            // View column for rpt_id field
            //
            $column = new TextViewColumn('rpt_id', 'Rpt Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for rpt_name field
            //
            $column = new TextViewColumn('rpt_name', 'Rpt Name', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('GE_webreportsGrid_rpt_name_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for rpt_title field
            //
            $column = new TextViewColumn('rpt_title', 'Rpt Title', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('GE_webreportsGrid_rpt_title_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for rpt_cdate field
            //
            $column = new DateTimeViewColumn('rpt_cdate', 'Rpt Cdate', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for rpt_mdate field
            //
            $column = new DateTimeViewColumn('rpt_mdate', 'Rpt Mdate', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for rpt_content field
            //
            $column = new DownloadDataColumn('rpt_content', 'Rpt Content', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for rpt_owner field
            //
            $column = new TextViewColumn('rpt_owner', 'Rpt Owner', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('GE_webreportsGrid_rpt_owner_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for rpt_status field
            //
            $column = new TextViewColumn('rpt_status', 'Rpt Status', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for rpt_type field
            //
            $column = new TextViewColumn('rpt_type', 'Rpt Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for rpt_id field
            //
            $editor = new TextEdit('rpt_id_edit');
            $editColumn = new CustomEditColumn('Rpt Id', 'rpt_id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for rpt_name field
            //
            $editor = new TextEdit('rpt_name_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Rpt Name', 'rpt_name', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for rpt_title field
            //
            $editor = new TextAreaEdit('rpt_title_edit', 50, 8);
            $editColumn = new CustomEditColumn('Rpt Title', 'rpt_title', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for rpt_cdate field
            //
            $editor = new DateTimeEdit('rpt_cdate_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Rpt Cdate', 'rpt_cdate', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for rpt_mdate field
            //
            $editor = new DateTimeEdit('rpt_mdate_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Rpt Mdate', 'rpt_mdate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for rpt_content field
            //
            $editor = new ImageUploader('rpt_content_edit');
            $editor->SetShowImage(false);
            $editColumn = new FileUploadingColumn('Rpt Content', 'rpt_content', $editor, $this->dataset, false, false, 'GE_webreportsGrid_rpt_content_handler_edit');
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for rpt_owner field
            //
            $editor = new TextEdit('rpt_owner_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Rpt Owner', 'rpt_owner', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for rpt_status field
            //
            $editor = new TextEdit('rpt_status_edit');
            $editor->SetSize(10);
            $editor->SetMaxLength(10);
            $editColumn = new CustomEditColumn('Rpt Status', 'rpt_status', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for rpt_type field
            //
            $editor = new TextEdit('rpt_type_edit');
            $editor->SetSize(10);
            $editor->SetMaxLength(10);
            $editColumn = new CustomEditColumn('Rpt Type', 'rpt_type', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for rpt_id field
            //
            $editor = new TextEdit('rpt_id_edit');
            $editColumn = new CustomEditColumn('Rpt Id', 'rpt_id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for rpt_name field
            //
            $editor = new TextEdit('rpt_name_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Rpt Name', 'rpt_name', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for rpt_title field
            //
            $editor = new TextAreaEdit('rpt_title_edit', 50, 8);
            $editColumn = new CustomEditColumn('Rpt Title', 'rpt_title', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for rpt_cdate field
            //
            $editor = new DateTimeEdit('rpt_cdate_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Rpt Cdate', 'rpt_cdate', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for rpt_mdate field
            //
            $editor = new DateTimeEdit('rpt_mdate_edit', false, 'Y-m-d H:i:s', GetFirstDayOfWeek());
            $editColumn = new CustomEditColumn('Rpt Mdate', 'rpt_mdate', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for rpt_content field
            //
            $editor = new ImageUploader('rpt_content_edit');
            $editor->SetShowImage(false);
            $editColumn = new FileUploadingColumn('Rpt Content', 'rpt_content', $editor, $this->dataset, false, false, 'GE_webreportsGrid_rpt_content_handler_insert');
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for rpt_owner field
            //
            $editor = new TextEdit('rpt_owner_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Rpt Owner', 'rpt_owner', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for rpt_status field
            //
            $editor = new TextEdit('rpt_status_edit');
            $editor->SetSize(10);
            $editor->SetMaxLength(10);
            $editColumn = new CustomEditColumn('Rpt Status', 'rpt_status', $editor, $this->dataset);
            $editColumn->SetAllowSetToDefault(true);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for rpt_type field
            //
            $editor = new TextEdit('rpt_type_edit');
            $editor->SetSize(10);
            $editor->SetMaxLength(10);
            $editColumn = new CustomEditColumn('Rpt Type', 'rpt_type', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            if ($this->GetSecurityInfo()->HasAddGrant())
            {
                $grid->SetShowAddButton(true);
                $grid->SetShowInlineAddButton(false);
            }
            else
            {
                $grid->SetShowInlineAddButton(false);
                $grid->SetShowAddButton(false);
            }
        }
    
        protected function AddPrintColumns(Grid $grid)
        {
            //
            // View column for rpt_id field
            //
            $column = new TextViewColumn('rpt_id', 'Rpt Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for rpt_name field
            //
            $column = new TextViewColumn('rpt_name', 'Rpt Name', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for rpt_title field
            //
            $column = new TextViewColumn('rpt_title', 'Rpt Title', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for rpt_cdate field
            //
            $column = new DateTimeViewColumn('rpt_cdate', 'Rpt Cdate', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for rpt_mdate field
            //
            $column = new DateTimeViewColumn('rpt_mdate', 'Rpt Mdate', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for rpt_content field
            //
            $column = new DownloadDataColumn('rpt_content', 'Rpt Content', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddPrintColumn($column);
            
            //
            // View column for rpt_owner field
            //
            $column = new TextViewColumn('rpt_owner', 'Rpt Owner', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for rpt_status field
            //
            $column = new TextViewColumn('rpt_status', 'Rpt Status', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for rpt_type field
            //
            $column = new TextViewColumn('rpt_type', 'Rpt Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
        }
    
        protected function AddExportColumns(Grid $grid)
        {
            //
            // View column for rpt_id field
            //
            $column = new TextViewColumn('rpt_id', 'Rpt Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for rpt_name field
            //
            $column = new TextViewColumn('rpt_name', 'Rpt Name', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for rpt_title field
            //
            $column = new TextViewColumn('rpt_title', 'Rpt Title', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for rpt_cdate field
            //
            $column = new DateTimeViewColumn('rpt_cdate', 'Rpt Cdate', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for rpt_mdate field
            //
            $column = new DateTimeViewColumn('rpt_mdate', 'Rpt Mdate', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d');
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for rpt_content field
            //
            $column = new DownloadDataColumn('rpt_content', 'Rpt Content', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddExportColumn($column);
            
            //
            // View column for rpt_owner field
            //
            $column = new TextViewColumn('rpt_owner', 'Rpt Owner', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for rpt_status field
            //
            $column = new TextViewColumn('rpt_status', 'Rpt Status', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for rpt_type field
            //
            $column = new TextViewColumn('rpt_type', 'Rpt Type', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
        }
    
        public function GetPageDirection()
        {
            return null;
        }
    
        protected function ApplyCommonColumnEditProperties(CustomEditColumn $column)
        {
            $column->SetDisplaySetToNullCheckBox(false);
            $column->SetDisplaySetToDefaultCheckBox(false);
    		$column->SetVariableContainer($this->GetColumnVariableContainer());
        }
    
        function GetCustomClientScript()
        {
            return ;
        }
        
        function GetOnPageLoadedClientScript()
        {
            return ;
        }
        public function ShowEditButtonHandler(&$show)
        {
            if ($this->GetRecordPermission() != null)
                $show = $this->GetRecordPermission()->HasEditGrant($this->GetDataset());
        }
        public function ShowDeleteButtonHandler(&$show)
        {
            if ($this->GetRecordPermission() != null)
                $show = $this->GetRecordPermission()->HasDeleteGrant($this->GetDataset());
        }
        
        public function GetModalGridDeleteHandler() { return 'GE_webreports_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'GE_webreportsGrid');
            if ($this->GetSecurityInfo()->HasDeleteGrant())
               $result->SetAllowDeleteSelected(false);
            else
               $result->SetAllowDeleteSelected(false);   
            
            ApplyCommonPageSettings($this, $result);
            
            $result->SetUseImagesForActions(false);
            $result->SetUseFixedHeader(false);
            $result->SetShowLineNumbers(false);
            
            $result->SetHighlightRowAtHover(false);
            $result->SetWidth('');
            $this->CreateGridSearchControl($result);
            $this->CreateGridAdvancedSearchControl($result);
            $this->AddOperationsColumns($result);
            $this->AddFieldColumns($result);
            $this->AddSingleRecordViewColumns($result);
            $this->AddEditColumns($result);
            $this->AddInsertColumns($result);
            $this->AddPrintColumns($result);
            $this->AddExportColumns($result);
    
            $this->SetShowPageList(true);
            $this->SetHidePageListByDefault(false);
            $this->SetExportToExcelAvailable(false);
            $this->SetExportToWordAvailable(false);
            $this->SetExportToXmlAvailable(false);
            $this->SetExportToCsvAvailable(false);
            $this->SetExportToPdfAvailable(false);
            $this->SetPrinterFriendlyAvailable(false);
            $this->SetSimpleSearchAvailable(true);
            $this->SetAdvancedSearchAvailable(false);
            $this->SetFilterRowAvailable(false);
            $this->SetVisualEffectsEnabled(true);
            $this->SetShowTopPageNavigator(true);
            $this->SetShowBottomPageNavigator(true);
    
            //
            // Http Handlers
            //
            //
            // View column for rpt_name field
            //
            $column = new TextViewColumn('rpt_name', 'Rpt Name', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'GE_webreportsGrid_rpt_name_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for rpt_title field
            //
            $column = new TextViewColumn('rpt_title', 'Rpt Title', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'GE_webreportsGrid_rpt_title_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'rpt_content', 'rpt_content_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for rpt_owner field
            //
            $column = new TextViewColumn('rpt_owner', 'Rpt Owner', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'GE_webreportsGrid_rpt_owner_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for rpt_name field
            //
            $column = new TextViewColumn('rpt_name', 'Rpt Name', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'GE_webreportsGrid_rpt_name_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for rpt_title field
            //
            $column = new TextViewColumn('rpt_title', 'Rpt Title', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'GE_webreportsGrid_rpt_title_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'rpt_content', 'rpt_content_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);
            //
            // View column for rpt_owner field
            //
            $column = new TextViewColumn('rpt_owner', 'Rpt Owner', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'GE_webreportsGrid_rpt_owner_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new ImageHTTPHandler($this->dataset, 'rpt_content', 'GE_webreportsGrid_rpt_content_handler_edit', new NullFilter());
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new ImageHTTPHandler($this->dataset, 'rpt_content', 'GE_webreportsGrid_rpt_content_handler_insert', new NullFilter());
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'rpt_content', 'rpt_content_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);
            return $result;
        }
        
        public function OpenAdvancedSearchByDefault()
        {
            return false;
        }
    
        protected function DoGetGridHeader()
        {
            return '';
        }
    }



    try
    {
        $Page = new GE_webreportsPage("GE.webreports.php", "GE_webreports", GetCurrentUserGrantForDataSource("GE.webreports"), 'UTF-8');
        $Page->SetShortCaption('Webreports');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('Webreports');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("GE.webreports"));
        GetApplication()->SetEnableLessRunTimeCompile(GetEnableLessFilesRunTimeCompilation());
        GetApplication()->SetCanUserChangeOwnPassword(
            !function_exists('CanUserChangeOwnPassword') || CanUserChangeOwnPassword());
        GetApplication()->SetMainPage($Page);
        GetApplication()->Run();
    }
    catch(Exception $e)
    {
        ShowErrorPage($e->getMessage());
    }
	
