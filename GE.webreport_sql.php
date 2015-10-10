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
    
    
    
    class GE_webreport_sqlPage extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                new OracleConnectionFactory(),
                GetConnectionOptions(),
                '"GE"."webreport_sql"');
            $field = new IntegerField('id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new StringField('sqlname');
            $this->dataset->AddField($field, false);
            $field = new BlobField('sqlcontent');
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
            $grid->SearchControl = new SimpleSearch('GE_webreport_sqlssearch', $this->dataset,
                array('id', 'sqlname'),
                array($this->RenderText('Id'), $this->RenderText('Sqlname')),
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
            $this->AdvancedSearchControl = new AdvancedSearchControl('GE_webreport_sqlasearch', $this->dataset, $this->GetLocalizerCaptions(), $this->GetColumnVariableContainer(), $this->CreateLinkBuilder());
            $this->AdvancedSearchControl->setTimerInterval(1000);
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('id', $this->RenderText('Id')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateStringSearchInput('sqlname', $this->RenderText('Sqlname')));
            $this->AdvancedSearchControl->AddSearchColumn($this->AdvancedSearchControl->CreateBlobSearchInput('sqlcontent', $this->RenderText('Sqlcontent')));
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
            // View column for id field
            //
            $column = new TextViewColumn('id', 'Id', $this->dataset);
            $column->SetOrderable(true);
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for sqlname field
            //
            $column = new TextViewColumn('sqlname', 'Sqlname', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('GE_webreport_sqlGrid_sqlname_handler_list');
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for sqlcontent field
            //
            $column = new DownloadDataColumn('sqlcontent', 'Sqlcontent', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $column->SetDescription($this->RenderText(''));
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
        }
    
        protected function AddSingleRecordViewColumns(Grid $grid)
        {
            //
            // View column for id field
            //
            $column = new TextViewColumn('id', 'Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for sqlname field
            //
            $column = new TextViewColumn('sqlname', 'Sqlname', $this->dataset);
            $column->SetOrderable(true);
            $column->SetMaxLength(75);
            $column->SetFullTextWindowHandlerName('GE_webreport_sqlGrid_sqlname_handler_view');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for sqlcontent field
            //
            $column = new DownloadDataColumn('sqlcontent', 'Sqlcontent', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for id field
            //
            $editor = new TextEdit('id_edit');
            $editColumn = new CustomEditColumn('Id', 'id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for sqlname field
            //
            $editor = new TextEdit('sqlname_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Sqlname', 'sqlname', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for sqlcontent field
            //
            $editor = new ImageUploader('sqlcontent_edit');
            $editor->SetShowImage(false);
            $editColumn = new FileUploadingColumn('Sqlcontent', 'sqlcontent', $editor, $this->dataset, false, false, 'GE_webreport_sqlGrid_sqlcontent_handler_edit');
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for id field
            //
            $editor = new TextEdit('id_edit');
            $editColumn = new CustomEditColumn('Id', 'id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $this->RenderText($editColumn->GetCaption())));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for sqlname field
            //
            $editor = new TextEdit('sqlname_edit');
            $editor->SetSize(100);
            $editor->SetMaxLength(100);
            $editColumn = new CustomEditColumn('Sqlname', 'sqlname', $editor, $this->dataset);
            $editColumn->SetAllowSetToNull(true);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            
            //
            // Edit column for sqlcontent field
            //
            $editor = new ImageUploader('sqlcontent_edit');
            $editor->SetShowImage(false);
            $editColumn = new FileUploadingColumn('Sqlcontent', 'sqlcontent', $editor, $this->dataset, false, false, 'GE_webreport_sqlGrid_sqlcontent_handler_insert');
            $editColumn->SetAllowSetToNull(true);
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
            // View column for id field
            //
            $column = new TextViewColumn('id', 'Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for sqlname field
            //
            $column = new TextViewColumn('sqlname', 'Sqlname', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for sqlcontent field
            //
            $column = new DownloadDataColumn('sqlcontent', 'Sqlcontent', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
            $grid->AddPrintColumn($column);
        }
    
        protected function AddExportColumns(Grid $grid)
        {
            //
            // View column for id field
            //
            $column = new TextViewColumn('id', 'Id', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for sqlname field
            //
            $column = new TextViewColumn('sqlname', 'Sqlname', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for sqlcontent field
            //
            $column = new DownloadDataColumn('sqlcontent', 'Sqlcontent', $this->dataset, $this->GetLocalizerCaptions()->GetMessageString('Download'));
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
        
        public function GetModalGridDeleteHandler() { return 'GE_webreport_sql_modal_delete'; }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset, 'GE_webreport_sqlGrid');
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
            // View column for sqlname field
            //
            $column = new TextViewColumn('sqlname', 'Sqlname', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'GE_webreport_sqlGrid_sqlname_handler_list', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'sqlcontent', 'sqlcontent_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);//
            // View column for sqlname field
            //
            $column = new TextViewColumn('sqlname', 'Sqlname', $this->dataset);
            $column->SetOrderable(true);
            $handler = new ShowTextBlobHandler($this->dataset, $this, 'GE_webreport_sqlGrid_sqlname_handler_view', $column);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'sqlcontent', 'sqlcontent_handler', '', '', true);
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new ImageHTTPHandler($this->dataset, 'sqlcontent', 'GE_webreport_sqlGrid_sqlcontent_handler_edit', new NullFilter());
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new ImageHTTPHandler($this->dataset, 'sqlcontent', 'GE_webreport_sqlGrid_sqlcontent_handler_insert', new NullFilter());
            GetApplication()->RegisterHTTPHandler($handler);
            $handler = new DownloadHTTPHandler($this->dataset, 'sqlcontent', 'sqlcontent_handler', '', '', true);
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
        $Page = new GE_webreport_sqlPage("GE.webreport_sql.php", "GE_webreport_sql", GetCurrentUserGrantForDataSource("GE.webreport_sql"), 'UTF-8');
        $Page->SetShortCaption('Webreport Sql');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetCaption('Webreport Sql');
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("GE.webreport_sql"));
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
	
