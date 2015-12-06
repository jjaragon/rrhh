<?php

/**
 * This is the model class for table "system_usuarios".
 *
 * The followings are the available columns in table 'system_usuarios':
 * @property integer $user_id
 * @property string $nombre_completo
 * @property string $sw_estado
 * @property string $passwd
 * @property integer $perfil_id
 * @property string $login
 * @property integer $empleado_id
 * @property string $passwd_default
 * @property string $sw_empleado
 * @property integer $empresa_id
 * @property string $fecha_registro
 * @property string $firma
 * @property string $correo_interno
 * @property string $fecha_actualizacion_passwd
 * @property string $sw_postgresistrador
 *
 * The followings are the available model relations:
 * @property DesvinculacionEmpleados[] $desvinculacionEmpleadoses
 * @property DuracionesContrato[] $duracionesContratos
 * @property ContratosProximosAVencerAuditoria[] $contratosProximosAVencerAuditorias
 * @property ElementosVisualizacionEstadistica[] $elementosVisualizacionEstadisticas
 * @property EmpleadosAreas[] $empleadosAreases
 * @property EmpleadosAuditoria[] $empleadosAuditorias
 * @property EmpleadosComprobantesNominaEnvios[] $empleadosComprobantesNominaEnvioses
 * @property EmpleadosComprobantesNominaDetalle[] $empleadosComprobantesNominaDetalles
 * @property EmpleadosComprobantesNomina[] $empleadosComprobantesNominas
 * @property ContratoEmpleadosAuditoria[] $contratoEmpleadosAuditorias
 * @property EstadosAspirantesConvocatorias[] $estadosAspirantesConvocatoriases
 * @property ConvocatoriasAuditoria[] $convocatoriasAuditorias
 * @property EstadosHvRevision[] $estadosHvRevisions
 * @property EtapasConvocatoriasCargos[] $etapasConvocatoriasCargoses
 * @property EtapasConvocatoriasUsuarios[] $etapasConvocatoriasUsuarioses
 * @property EtapasConvocatoriasUsuarios[] $etapasConvocatoriasUsuarioses1
 * @property EvaluacionDesempenoCompetenciasAuditoria[] $evaluacionDesempenoCompetenciasAuditorias
 * @property EvaluacionDesempenoCompetenciasDetalleAuditoria[] $evaluacionDesempenoCompetenciasDetalleAuditorias
 * @property EvaluacionDesempenoCompetenciasDetalle[] $evaluacionDesempenoCompetenciasDetalles
 * @property AnexoContratoTemp[] $anexoContratoTemps
 * @property AnexoPruebasTemp[] $anexoPruebasTemps
 * @property AnexoSeguridadSocialTemp[] $anexoSeguridadSocialTemps
 * @property AspirantesConvocatoriasAuditoria[] $aspirantesConvocatoriasAuditorias
 * @property EvaluacionDesempenoCompetenciasResumenDetalle[] $evaluacionDesempenoCompetenciasResumenDetalles
 * @property EvaluacionDesempenoCompetenciasResumen[] $evaluacionDesempenoCompetenciasResumens
 * @property AuditoriaMensajeriaInterna[] $auditoriaMensajeriaInternas
 * @property BeneficiariosSeguridadSocial[] $beneficiariosSeguridadSocials
 * @property CalificacionesEvaluacionDesempeno[] $calificacionesEvaluacionDesempenos
 * @property EvaluacionDesempenoDetalleCancelacion[] $evaluacionDesempenoDetalleCancelacions
 * @property CambiosSeguridadSocial[] $cambiosSeguridadSocials
 * @property CambiosSeguridadSocial[] $cambiosSeguridadSocials1
 * @property EvaluacionDesempenoPlanMejoraActividadesAuditoria[] $evaluacionDesempenoPlanMejoraActividadesAuditorias
 * @property EvaluacionDesempenoPlanMejoraActividades[] $evaluacionDesempenoPlanMejoraActividades
 * @property ComprobantesNomina[] $comprobantesNominas
 * @property ConceptosCalificacionEtapasCualitativas[] $conceptosCalificacionEtapasCualitativases
 * @property ConceptosReferenciacionLaboral[] $conceptosReferenciacionLaborals
 * @property CertificadoEmpleadosAuditoria[] $certificadoEmpleadosAuditorias
 * @property EvaluacionDesempenoPlanMejoraAuditoria[] $evaluacionDesempenoPlanMejoraAuditorias
 * @property ContactoAspiranteConvocatorias[] $contactoAspiranteConvocatoriases
 * @property ChequeoHvRevision[] $chequeoHvRevisions
 * @property EvaluacionDesempenoPlanMejoraDetalleAuditoria[] $evaluacionDesempenoPlanMejoraDetalleAuditorias
 * @property ComportamientosCompetencias[] $comportamientosCompetenciases
 * @property EvaluacionDesempenoCompetenciasEstados[] $evaluacionDesempenoCompetenciasEstadoses
 * @property CruceComponentesItems[] $cruceComponentesItems
 * @property EvaluacionDesempenoPlanMejoraDetalle[] $evaluacionDesempenoPlanMejoraDetalles
 * @property EvaluacionDesempenoPlanMejoraEstados[] $evaluacionDesempenoPlanMejoraEstadoses
 * @property EvaluacionDesempenoCompetencias[] $evaluacionDesempenoCompetenciases
 * @property EvaluacionDesempenoPlanMejora[] $evaluacionDesempenoPlanMejoras
 * @property FiltrosCamposInforme[] $filtrosCamposInformes
 * @property GruposEnvioCorreo[] $gruposEnvioCorreos
 * @property HistorialDatosPerfil[] $historialDatosPerfils
 * @property HvRevisionDetalle[] $hvRevisionDetalles
 * @property IntensidadHoraria[] $intensidadHorarias
 * @property IntervalosEdad[] $intervalosEdads
 * @property IntervalosEvaluacionDesempeno[] $intervalosEvaluacionDesempenos
 * @property IntervalosParametrosEvaluacion[] $intervalosParametrosEvaluacions
 * @property ListaChequeoHvRevision[] $listaChequeoHvRevisions
 * @property ListaDocumentosVinculacionAuditoria[] $listaDocumentosVinculacionAuditorias
 * @property ListaDocumentosVinculacionImpresionPlantilla[] $listaDocumentosVinculacionImpresionPlantillas
 * @property ListaDocumentosVinculacion[] $listaDocumentosVinculacions
 * @property ListaEtnias[] $listaEtniases
 * @property ListaSalariosMinimos[] $listaSalariosMinimoses
 * @property MensajeriaInterna[] $mensajeriaInternas
 * @property MotivosCancelacionEvaluacionDesempeno[] $motivosCancelacionEvaluacionDesempenos
 * @property MotivosRetiroPersonal[] $motivosRetiroPersonals
 * @property NotificacionesPerfiles[] $notificacionesPerfiles
 * @property Notificaciones[] $notificaciones
 * @property ParametrosTablasUsuarios[] $parametrosTablasUsuarioses
 * @property FormularioInforme[] $formularioInformes
 * @property PermisoUsuariosInformes[] $permisoUsuariosInformes
 * @property PermisoUsuariosInformes[] $permisoUsuariosInformes1
 * @property PermisosEmpleadosAnexos[] $permisosEmpleadosAnexoses
 * @property PonderacionComponentePerfilCargo[] $ponderacionComponentePerfilCargos
 * @property PlantillasDocumentosCargos[] $plantillasDocumentosCargoses
 * @property ComponentesPlantilla[] $componentesPlantillas
 * @property PlantillasDocumentosComponentes[] $plantillasDocumentosComponentes
 * @property PlantillasDocumentos[] $plantillasDocumentoses
 * @property PonderacionParametrosEvaluacionCargo[] $ponderacionParametrosEvaluacionCargos
 * @property ProgramacionEvaluacionDesempenoAuditoria[] $programacionEvaluacionDesempenoAuditorias
 * @property ProgramacionEvaluacionDesempenoAuditoria[] $programacionEvaluacionDesempenoAuditorias1
 * @property MotivosCancelacionProgramacionEvaluacionDesempeno[] $motivosCancelacionProgramacionEvaluacionDesempenos
 * @property ProgramacionEvaluacionDesempenoDetalleCancelacion[] $programacionEvaluacionDesempenoDetalleCancelacions
 * @property ProgramacionEvaluacionDesempenoEstados[] $programacionEvaluacionDesempenoEstadoses
 * @property ProgramacionEvaluacionDesempeno[] $programacionEvaluacionDesempenos
 * @property ProgramacionEvaluacionDesempeno[] $programacionEvaluacionDesempenos1
 * @property ProgramacionPruebasAspirantesAuditoria[] $programacionPruebasAspirantesAuditorias
 * @property ProgramacionPruebas[] $programacionPruebases
 * @property RangosHorariosProgramacionPruebas[] $rangosHorariosProgramacionPruebases
 * @property RangosHorariosProgramacionPruebas[] $rangosHorariosProgramacionPruebases1
 * @property RangosHorariosPruebas[] $rangosHorariosPruebases
 * @property ReferenciacionLaboralAspiranteDatos[] $referenciacionLaboralAspiranteDatoses
 * @property ReferenciacionLaboralAspiranteItems[] $referenciacionLaboralAspiranteItems
 * @property RegistroCalificacionEtapaAspirante[] $registroCalificacionEtapaAspirantes
 * @property RegistroCalificacionReferenciacionAspirante[] $registroCalificacionReferenciacionAspirantes
 * @property CruceComponentes[] $cruceComponentes
 * @property CruceComponentesDetalle[] $cruceComponentesDetalles
 * @property RestriccionesHvRevision[] $restriccionesHvRevisions
 * @property Aspirantes[] $aspirantes
 * @property ResumenInformeSeleccionAuditoria[] $resumenInformeSeleccionAuditorias
 * @property ResumenInformeSeleccionDetalleComponentes[] $resumenInformeSeleccionDetalleComponentes
 * @property ResumenInformeSeleccionDetalleComponentes[] $resumenInformeSeleccionDetalleComponentes1
 * @property ResumenInformeSeleccionDetalleParametros[] $resumenInformeSeleccionDetalleParametroses
 * @property ResumenInformeSeleccionDetalleParametros[] $resumenInformeSeleccionDetalleParametroses1
 * @property ResumenInformeSeleccion[] $resumenInformeSeleccions
 * @property ResumenInformeSeleccion[] $resumenInformeSeleccions1
 * @property EntidadesSeguridadSocial[] $entidadesSeguridadSocials
 * @property SeguridadSocialContratoEmpleado[] $seguridadSocialContratoEmpleados
 * @property SeguridadSocialParametros[] $seguridadSocialParametroses
 * @property SitiosProgramacionPruebas[] $sitiosProgramacionPruebases
 * @property SolicitudDocumentosVinculacionAuditoria[] $solicitudDocumentosVinculacionAuditorias
 * @property SolicitudDocumentosVinculacion[] $solicitudDocumentosVinculacions
 * @property SolicitudPersonalAuditoria[] $solicitudPersonalAuditorias
 * @property MotivosAprobacionTrasladoPersonal[] $motivosAprobacionTrasladoPersonals
 * @property MotivosRechazoTrasladoPersonal[] $motivosRechazoTrasladoPersonals
 * @property SolicitudTrasladoPersonalAuditoria[] $solicitudTrasladoPersonalAuditorias
 * @property EstadosSolicitudTraslado[] $estadosSolicitudTraslados
 * @property SolicitudTrasladoPersonal[] $solicitudTrasladoPersonals
 * @property ListaMotivosSolicitudPermiso[] $listaMotivosSolicitudPermisos
 * @property ListaMotivosRechazoSolicitudPermiso[] $listaMotivosRechazoSolicitudPermisos
 * @property SolicitudesPermisoEmpleadosAuditoria[] $solicitudesPermisoEmpleadosAuditorias
 * @property SolicitudesPermisoEmpleados[] $solicitudesPermisoEmpleadoses
 * @property SolicitudesPermisoEmpleadosEstados[] $solicitudesPermisoEmpleadosEstadoses
 * @property EstadosProgramacionPruebasAspirantes[] $estadosProgramacionPruebasAspirantes
 * @property ProgramacionPruebasAspirantes[] $programacionPruebasAspirantes
 * @property ProgramacionPruebasAspirantes[] $programacionPruebasAspirantes1
 * @property SystemSubModulosOpciones[] $systemSubModulosOpciones
 * @property SystemSubModulosOpcionesUsuarios[] $systemSubModulosOpcionesUsuarioses
 * @property SystemSubModulosOpcionesUsuarios[] $systemSubModulosOpcionesUsuarioses1
 * @property SystemUsuariosAreas[] $systemUsuariosAreases
 * @property SystemUsuariosPermisosAdicionales[] $systemUsuariosPermisosAdicionales
 * @property SystemUsuariosPermisosAdicionales[] $systemUsuariosPermisosAdicionales1
 * @property HojaDeVida[] $hojaDeVidas
 * @property HojaDeVida[] $hojaDeVidas1
 * @property HojaDeVida[] $hojaDeVidas2
 * @property GruposDocumentosSistema[] $gruposDocumentosSistemas
 * @property ClasificacionDocumentos[] $clasificacionDocumentoses
 * @property TipoGraficosEstadistica[] $tipoGraficosEstadisticas
 * @property NivelesAcademicos[] $nivelesAcademicoses
 * @property TipoUniversidadesUbicaciones[] $tipoUniversidadesUbicaciones
 * @property TiposDocumentosSistemaCargos[] $tiposDocumentosSistemaCargoses
 * @property TipoDocumentosSistema[] $tipoDocumentosSistemas
 * @property TiposDocumentosSistemaUsuarios[] $tiposDocumentosSistemaUsuarioses
 * @property TiposDocumentosSistemaUsuarios[] $tiposDocumentosSistemaUsuarioses1
 * @property TrasladoConvocatorias[] $trasladoConvocatoriases
 * @property ParametrosEvaluacion[] $parametrosEvaluacions
 * @property IntervalosDifusosParametrosEvaluacion[] $intervalosDifusosParametrosEvaluacions
 * @property Convocatorias[] $convocatoriases
 * @property RelacionComponenteCampo[] $relacionComponenteCampos
 * @property Competencias[] $competenciases
 * @property CampoComponente[] $campoComponentes
 * @property SolicitudPersonal[] $solicitudPersonals
 * @property SolicitudPersonal[] $solicitudPersonals1
 * @property SolicitudPersonal[] $solicitudPersonals2
 * @property SolicitudPersonal[] $solicitudPersonals3
 * @property VinculacionAuditoria[] $vinculacionAuditorias
 * @property ContratoEmpleados[] $contratoEmpleadoses
 * @property AspirantesConvocatorias[] $aspirantesConvocatoriases
 * @property EstadosVinculacion[] $estadosVinculacions
 * @property Empresas $empresa
 * @property Empleados $empleado
 * @property Perfiles $perfil
 * @property Vinculacion[] $vinculacions
 * @property TipoPais[] $tipoPaises
 */
class SystemUsuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'system_usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_completo, sw_estado, perfil_id, login, fecha_registro, correo_interno', 'required'),
			array('perfil_id, empleado_id, empresa_id', 'numerical', 'integerOnly'=>true),
			array('nombre_completo, passwd', 'length', 'max'=>128),
			array('sw_estado, sw_empleado, sw_postgresistrador', 'length', 'max'=>1),
			array('login, passwd_default', 'length', 'max'=>8),
			array('correo_interno', 'length', 'max'=>64),
			array('firma, fecha_actualizacion_passwd', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, nombre_completo, sw_estado, passwd, perfil_id, login, empleado_id, passwd_default, sw_empleado, empresa_id, fecha_registro, firma, correo_interno, fecha_actualizacion_passwd, sw_postgresistrador', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'desvinculacionEmpleadoses' => array(self::HAS_MANY, 'DesvinculacionEmpleados', 'user_desvincula'),
			'duracionesContratos' => array(self::HAS_MANY, 'DuracionesContrato', 'user_registra'),
			'contratosProximosAVencerAuditorias' => array(self::HAS_MANY, 'ContratosProximosAVencerAuditoria', 'user_registra'),
			'elementosVisualizacionEstadisticas' => array(self::HAS_MANY, 'ElementosVisualizacionEstadistica', 'user_id'),
			'empleadosAreases' => array(self::HAS_MANY, 'EmpleadosAreas', 'user_registra'),
			'empleadosAuditorias' => array(self::HAS_MANY, 'EmpleadosAuditoria', 'user_registra'),
			'empleadosComprobantesNominaEnvioses' => array(self::HAS_MANY, 'EmpleadosComprobantesNominaEnvios', 'user_registra'),
			'empleadosComprobantesNominaDetalles' => array(self::HAS_MANY, 'EmpleadosComprobantesNominaDetalle', 'user_registra'),
			'empleadosComprobantesNominas' => array(self::HAS_MANY, 'EmpleadosComprobantesNomina', 'user_registra'),
			'contratoEmpleadosAuditorias' => array(self::HAS_MANY, 'ContratoEmpleadosAuditoria', 'user_id'),
			'estadosAspirantesConvocatoriases' => array(self::HAS_MANY, 'EstadosAspirantesConvocatorias', 'user_registra'),
			'convocatoriasAuditorias' => array(self::HAS_MANY, 'ConvocatoriasAuditoria', 'user_registra'),
			'estadosHvRevisions' => array(self::HAS_MANY, 'EstadosHvRevision', 'user_registra'),
			'etapasConvocatoriasCargoses' => array(self::HAS_MANY, 'EtapasConvocatoriasCargos', 'user_registra'),
			'etapasConvocatoriasUsuarioses' => array(self::HAS_MANY, 'EtapasConvocatoriasUsuarios', 'user_id'),
			'etapasConvocatoriasUsuarioses1' => array(self::HAS_MANY, 'EtapasConvocatoriasUsuarios', 'user_registra'),
			'evaluacionDesempenoCompetenciasAuditorias' => array(self::HAS_MANY, 'EvaluacionDesempenoCompetenciasAuditoria', 'user_registra'),
			'evaluacionDesempenoCompetenciasDetalleAuditorias' => array(self::HAS_MANY, 'EvaluacionDesempenoCompetenciasDetalleAuditoria', 'user_registra'),
			'evaluacionDesempenoCompetenciasDetalles' => array(self::HAS_MANY, 'EvaluacionDesempenoCompetenciasDetalle', 'user_registra'),
			'anexoContratoTemps' => array(self::HAS_MANY, 'AnexoContratoTemp', 'user_id'),
			'anexoPruebasTemps' => array(self::HAS_MANY, 'AnexoPruebasTemp', 'user_id'),
			'anexoSeguridadSocialTemps' => array(self::HAS_MANY, 'AnexoSeguridadSocialTemp', 'user_registra'),
			'aspirantesConvocatoriasAuditorias' => array(self::HAS_MANY, 'AspirantesConvocatoriasAuditoria', 'user_registra'),
			'evaluacionDesempenoCompetenciasResumenDetalles' => array(self::HAS_MANY, 'EvaluacionDesempenoCompetenciasResumenDetalle', 'user_registra'),
			'evaluacionDesempenoCompetenciasResumens' => array(self::HAS_MANY, 'EvaluacionDesempenoCompetenciasResumen', 'user_registra'),
			'auditoriaMensajeriaInternas' => array(self::HAS_MANY, 'AuditoriaMensajeriaInterna', 'remitente'),
			'beneficiariosSeguridadSocials' => array(self::HAS_MANY, 'BeneficiariosSeguridadSocial', 'user_registra'),
			'calificacionesEvaluacionDesempenos' => array(self::HAS_MANY, 'CalificacionesEvaluacionDesempeno', 'user_registra'),
			'evaluacionDesempenoDetalleCancelacions' => array(self::HAS_MANY, 'EvaluacionDesempenoDetalleCancelacion', 'user_cancela'),
			'cambiosSeguridadSocials' => array(self::HAS_MANY, 'CambiosSeguridadSocial', 'usuario_lectura'),
			'cambiosSeguridadSocials1' => array(self::HAS_MANY, 'CambiosSeguridadSocial', 'usuario_modifico'),
			'evaluacionDesempenoPlanMejoraActividadesAuditorias' => array(self::HAS_MANY, 'EvaluacionDesempenoPlanMejoraActividadesAuditoria', 'user_registra'),
			'evaluacionDesempenoPlanMejoraActividades' => array(self::HAS_MANY, 'EvaluacionDesempenoPlanMejoraActividades', 'user_registra'),
			'comprobantesNominas' => array(self::HAS_MANY, 'ComprobantesNomina', 'user_registra'),
			'conceptosCalificacionEtapasCualitativases' => array(self::HAS_MANY, 'ConceptosCalificacionEtapasCualitativas', 'user_registra'),
			'conceptosReferenciacionLaborals' => array(self::HAS_MANY, 'ConceptosReferenciacionLaboral', 'user_id'),
			'certificadoEmpleadosAuditorias' => array(self::HAS_MANY, 'CertificadoEmpleadosAuditoria', 'user_id'),
			'evaluacionDesempenoPlanMejoraAuditorias' => array(self::HAS_MANY, 'EvaluacionDesempenoPlanMejoraAuditoria', 'user_registra'),
			'contactoAspiranteConvocatoriases' => array(self::HAS_MANY, 'ContactoAspiranteConvocatorias', 'user_id'),
			'chequeoHvRevisions' => array(self::HAS_MANY, 'ChequeoHvRevision', 'user_id'),
			'evaluacionDesempenoPlanMejoraDetalleAuditorias' => array(self::HAS_MANY, 'EvaluacionDesempenoPlanMejoraDetalleAuditoria', 'user_registra'),
			'comportamientosCompetenciases' => array(self::HAS_MANY, 'ComportamientosCompetencias', 'user_registra'),
			'evaluacionDesempenoCompetenciasEstadoses' => array(self::HAS_MANY, 'EvaluacionDesempenoCompetenciasEstados', 'user_registra'),
			'cruceComponentesItems' => array(self::HAS_MANY, 'CruceComponentesItems', 'user_id'),
			'evaluacionDesempenoPlanMejoraDetalles' => array(self::HAS_MANY, 'EvaluacionDesempenoPlanMejoraDetalle', 'user_registra'),
			'evaluacionDesempenoPlanMejoraEstadoses' => array(self::HAS_MANY, 'EvaluacionDesempenoPlanMejoraEstados', 'user_registra'),
			'evaluacionDesempenoCompetenciases' => array(self::HAS_MANY, 'EvaluacionDesempenoCompetencias', 'user_registra'),
			'evaluacionDesempenoPlanMejoras' => array(self::HAS_MANY, 'EvaluacionDesempenoPlanMejora', 'user_registra'),
			'filtrosCamposInformes' => array(self::HAS_MANY, 'FiltrosCamposInforme', 'user_registra'),
			'gruposEnvioCorreos' => array(self::HAS_MANY, 'GruposEnvioCorreo', 'user_creacion'),
			'historialDatosPerfils' => array(self::HAS_MANY, 'HistorialDatosPerfil', 'usuario'),
			'hvRevisionDetalles' => array(self::HAS_MANY, 'HvRevisionDetalle', 'user_id'),
			'intensidadHorarias' => array(self::HAS_MANY, 'IntensidadHoraria', 'user_registra'),
			'intervalosEdads' => array(self::HAS_MANY, 'IntervalosEdad', 'user_registra'),
			'intervalosEvaluacionDesempenos' => array(self::HAS_MANY, 'IntervalosEvaluacionDesempeno', 'user_registra'),
			'intervalosParametrosEvaluacions' => array(self::HAS_MANY, 'IntervalosParametrosEvaluacion', 'user_id'),
			'listaChequeoHvRevisions' => array(self::HAS_MANY, 'ListaChequeoHvRevision', 'user_id'),
			'listaDocumentosVinculacionAuditorias' => array(self::HAS_MANY, 'ListaDocumentosVinculacionAuditoria', 'user_registra'),
			'listaDocumentosVinculacionImpresionPlantillas' => array(self::HAS_MANY, 'ListaDocumentosVinculacionImpresionPlantilla', 'user_registra'),
			'listaDocumentosVinculacions' => array(self::HAS_MANY, 'ListaDocumentosVinculacion', 'user_registra'),
			'listaEtniases' => array(self::HAS_MANY, 'ListaEtnias', 'user_registra'),
			'listaSalariosMinimoses' => array(self::HAS_MANY, 'ListaSalariosMinimos', 'user_registra'),
			'mensajeriaInternas' => array(self::HAS_MANY, 'MensajeriaInterna', 'user_id'),
			'motivosCancelacionEvaluacionDesempenos' => array(self::HAS_MANY, 'MotivosCancelacionEvaluacionDesempeno', 'user_registra'),
			'motivosRetiroPersonals' => array(self::HAS_MANY, 'MotivosRetiroPersonal', 'user_registra'),
			'notificacionesPerfiles' => array(self::HAS_MANY, 'NotificacionesPerfiles', 'user_registra'),
			'notificaciones' => array(self::HAS_MANY, 'Notificaciones', 'user_registra'),
			'parametrosTablasUsuarioses' => array(self::HAS_MANY, 'ParametrosTablasUsuarios', 'user_id'),
			'formularioInformes' => array(self::HAS_MANY, 'FormularioInforme', 'user_registra'),
			'permisoUsuariosInformes' => array(self::HAS_MANY, 'PermisoUsuariosInformes', 'user_registra'),
			'permisoUsuariosInformes1' => array(self::HAS_MANY, 'PermisoUsuariosInformes', 'user_id'),
			'permisosEmpleadosAnexoses' => array(self::HAS_MANY, 'PermisosEmpleadosAnexos', 'user_registra'),
			'ponderacionComponentePerfilCargos' => array(self::HAS_MANY, 'PonderacionComponentePerfilCargo', 'user_registra'),
			'plantillasDocumentosCargoses' => array(self::HAS_MANY, 'PlantillasDocumentosCargos', 'user_registra'),
			'componentesPlantillas' => array(self::HAS_MANY, 'ComponentesPlantilla', 'user_registra'),
			'plantillasDocumentosComponentes' => array(self::HAS_MANY, 'PlantillasDocumentosComponentes', 'user_registra'),
			'plantillasDocumentoses' => array(self::HAS_MANY, 'PlantillasDocumentos', 'user_registra'),
			'ponderacionParametrosEvaluacionCargos' => array(self::HAS_MANY, 'PonderacionParametrosEvaluacionCargo', 'user_registra'),
			'programacionEvaluacionDesempenoAuditorias' => array(self::HAS_MANY, 'ProgramacionEvaluacionDesempenoAuditoria', 'user_evalua'),
			'programacionEvaluacionDesempenoAuditorias1' => array(self::HAS_MANY, 'ProgramacionEvaluacionDesempenoAuditoria', 'user_registra'),
			'motivosCancelacionProgramacionEvaluacionDesempenos' => array(self::HAS_MANY, 'MotivosCancelacionProgramacionEvaluacionDesempeno', 'user_registra'),
			'programacionEvaluacionDesempenoDetalleCancelacions' => array(self::HAS_MANY, 'ProgramacionEvaluacionDesempenoDetalleCancelacion', 'user_cancela'),
			'programacionEvaluacionDesempenoEstadoses' => array(self::HAS_MANY, 'ProgramacionEvaluacionDesempenoEstados', 'user_registra'),
			'programacionEvaluacionDesempenos' => array(self::HAS_MANY, 'ProgramacionEvaluacionDesempeno', 'user_evalua'),
			'programacionEvaluacionDesempenos1' => array(self::HAS_MANY, 'ProgramacionEvaluacionDesempeno', 'user_programa'),
			'programacionPruebasAspirantesAuditorias' => array(self::HAS_MANY, 'ProgramacionPruebasAspirantesAuditoria', 'user_id'),
			'programacionPruebases' => array(self::HAS_MANY, 'ProgramacionPruebas', 'user_id'),
			'rangosHorariosProgramacionPruebases' => array(self::HAS_MANY, 'RangosHorariosProgramacionPruebas', 'user_id_cancela'),
			'rangosHorariosProgramacionPruebases1' => array(self::HAS_MANY, 'RangosHorariosProgramacionPruebas', 'user_id'),
			'rangosHorariosPruebases' => array(self::HAS_MANY, 'RangosHorariosPruebas', 'user_id'),
			'referenciacionLaboralAspiranteDatoses' => array(self::HAS_MANY, 'ReferenciacionLaboralAspiranteDatos', 'user_id'),
			'referenciacionLaboralAspiranteItems' => array(self::HAS_MANY, 'ReferenciacionLaboralAspiranteItems', 'user_id'),
			'registroCalificacionEtapaAspirantes' => array(self::HAS_MANY, 'RegistroCalificacionEtapaAspirante', 'user_id'),
			'registroCalificacionReferenciacionAspirantes' => array(self::HAS_MANY, 'RegistroCalificacionReferenciacionAspirante', 'user_id'),
			'cruceComponentes' => array(self::HAS_MANY, 'CruceComponentes', 'user_registra'),
			'cruceComponentesDetalles' => array(self::HAS_MANY, 'CruceComponentesDetalle', 'user_id'),
			'restriccionesHvRevisions' => array(self::HAS_MANY, 'RestriccionesHvRevision', 'user_registra'),
			'aspirantes' => array(self::HAS_MANY, 'Aspirantes', 'user_id'),
			'resumenInformeSeleccionAuditorias' => array(self::HAS_MANY, 'ResumenInformeSeleccionAuditoria', 'user_registra'),
			'resumenInformeSeleccionDetalleComponentes' => array(self::HAS_MANY, 'ResumenInformeSeleccionDetalleComponentes', 'user_registra'),
			'resumenInformeSeleccionDetalleComponentes1' => array(self::HAS_MANY, 'ResumenInformeSeleccionDetalleComponentes', 'user_evalua'),
			'resumenInformeSeleccionDetalleParametroses' => array(self::HAS_MANY, 'ResumenInformeSeleccionDetalleParametros', 'user_registra'),
			'resumenInformeSeleccionDetalleParametroses1' => array(self::HAS_MANY, 'ResumenInformeSeleccionDetalleParametros', 'user_evalua'),
			'resumenInformeSeleccions' => array(self::HAS_MANY, 'ResumenInformeSeleccion', 'user_registra'),
			'resumenInformeSeleccions1' => array(self::HAS_MANY, 'ResumenInformeSeleccion', 'usuario_visto_bueno'),
			'entidadesSeguridadSocials' => array(self::HAS_MANY, 'EntidadesSeguridadSocial', 'user_registra'),
			'seguridadSocialContratoEmpleados' => array(self::HAS_MANY, 'SeguridadSocialContratoEmpleado', 'user_registra'),
			'seguridadSocialParametroses' => array(self::HAS_MANY, 'SeguridadSocialParametros', 'user_registra'),
			'sitiosProgramacionPruebases' => array(self::HAS_MANY, 'SitiosProgramacionPruebas', 'user_registra'),
			'solicitudDocumentosVinculacionAuditorias' => array(self::HAS_MANY, 'SolicitudDocumentosVinculacionAuditoria', 'user_registra'),
			'solicitudDocumentosVinculacions' => array(self::HAS_MANY, 'SolicitudDocumentosVinculacion', 'user_registra'),
			'solicitudPersonalAuditorias' => array(self::HAS_MANY, 'SolicitudPersonalAuditoria', 'user_id'),
			'motivosAprobacionTrasladoPersonals' => array(self::HAS_MANY, 'MotivosAprobacionTrasladoPersonal', 'user_registra'),
			'motivosRechazoTrasladoPersonals' => array(self::HAS_MANY, 'MotivosRechazoTrasladoPersonal', 'user_registra'),
			'solicitudTrasladoPersonalAuditorias' => array(self::HAS_MANY, 'SolicitudTrasladoPersonalAuditoria', 'user_registra'),
			'estadosSolicitudTraslados' => array(self::HAS_MANY, 'EstadosSolicitudTraslado', 'user_registra'),
			'solicitudTrasladoPersonals' => array(self::HAS_MANY, 'SolicitudTrasladoPersonal', 'user_registra'),
			'listaMotivosSolicitudPermisos' => array(self::HAS_MANY, 'ListaMotivosSolicitudPermiso', 'user_registra'),
			'listaMotivosRechazoSolicitudPermisos' => array(self::HAS_MANY, 'ListaMotivosRechazoSolicitudPermiso', 'user_registra'),
			'solicitudesPermisoEmpleadosAuditorias' => array(self::HAS_MANY, 'SolicitudesPermisoEmpleadosAuditoria', 'user_registra'),
			'solicitudesPermisoEmpleadoses' => array(self::HAS_MANY, 'SolicitudesPermisoEmpleados', 'user_registra'),
			'solicitudesPermisoEmpleadosEstadoses' => array(self::HAS_MANY, 'SolicitudesPermisoEmpleadosEstados', 'user_registra'),
			'estadosProgramacionPruebasAspirantes' => array(self::HAS_MANY, 'EstadosProgramacionPruebasAspirantes', 'user_id'),
			'programacionPruebasAspirantes' => array(self::HAS_MANY, 'ProgramacionPruebasAspirantes', 'responsable'),
			'programacionPruebasAspirantes1' => array(self::HAS_MANY, 'ProgramacionPruebasAspirantes', 'user_id'),
			'systemSubModulosOpciones' => array(self::HAS_MANY, 'SystemSubModulosOpciones', 'user_id'),
			'systemSubModulosOpcionesUsuarioses' => array(self::HAS_MANY, 'SystemSubModulosOpcionesUsuarios', 'user_id'),
			'systemSubModulosOpcionesUsuarioses1' => array(self::HAS_MANY, 'SystemSubModulosOpcionesUsuarios', 'user_registra'),
			'systemUsuariosAreases' => array(self::HAS_MANY, 'SystemUsuariosAreas', 'user_id'),
			'systemUsuariosPermisosAdicionales' => array(self::HAS_MANY, 'SystemUsuariosPermisosAdicionales', 'perfil_id'),
			'systemUsuariosPermisosAdicionales1' => array(self::HAS_MANY, 'SystemUsuariosPermisosAdicionales', 'user_id'),
			'hojaDeVidas' => array(self::HAS_MANY, 'HojaDeVida', 'user_id_clasifico'),
			'hojaDeVidas1' => array(self::HAS_MANY, 'HojaDeVida', 'user_id_inactivo'),
			'hojaDeVidas2' => array(self::HAS_MANY, 'HojaDeVida', 'user_id_valido'),
			'gruposDocumentosSistemas' => array(self::HAS_MANY, 'GruposDocumentosSistema', 'user_registra'),
			'clasificacionDocumentoses' => array(self::HAS_MANY, 'ClasificacionDocumentos', 'user_registra'),
			'tipoGraficosEstadisticas' => array(self::HAS_MANY, 'TipoGraficosEstadistica', 'user_id'),
			'nivelesAcademicoses' => array(self::HAS_MANY, 'NivelesAcademicos', 'user_registra'),
			'tipoUniversidadesUbicaciones' => array(self::HAS_MANY, 'TipoUniversidadesUbicaciones', 'user_registra'),
			'tiposDocumentosSistemaCargoses' => array(self::HAS_MANY, 'TiposDocumentosSistemaCargos', 'user_registra'),
			'tipoDocumentosSistemas' => array(self::HAS_MANY, 'TipoDocumentosSistema', 'user_registra'),
			'tiposDocumentosSistemaUsuarioses' => array(self::HAS_MANY, 'TiposDocumentosSistemaUsuarios', 'user_id'),
			'tiposDocumentosSistemaUsuarioses1' => array(self::HAS_MANY, 'TiposDocumentosSistemaUsuarios', 'user_registra'),
			'trasladoConvocatoriases' => array(self::HAS_MANY, 'TrasladoConvocatorias', 'user_registra'),
			'parametrosEvaluacions' => array(self::HAS_MANY, 'ParametrosEvaluacion', 'user_id'),
			'intervalosDifusosParametrosEvaluacions' => array(self::HAS_MANY, 'IntervalosDifusosParametrosEvaluacion', 'user_id'),
			'convocatoriases' => array(self::HAS_MANY, 'Convocatorias', 'user_id'),
			'relacionComponenteCampos' => array(self::HAS_MANY, 'RelacionComponenteCampo', 'user_id'),
			'competenciases' => array(self::HAS_MANY, 'Competencias', 'user_registra'),
			'campoComponentes' => array(self::HAS_MANY, 'CampoComponente', 'user_registro'),
			'solicitudPersonals' => array(self::HAS_MANY, 'SolicitudPersonal', 'user_aprobo'),
			'solicitudPersonals1' => array(self::HAS_MANY, 'SolicitudPersonal', 'user_avalo'),
			'solicitudPersonals2' => array(self::HAS_MANY, 'SolicitudPersonal', 'user_id'),
			'solicitudPersonals3' => array(self::HAS_MANY, 'SolicitudPersonal', 'user_visto_bueno'),
			'vinculacionAuditorias' => array(self::HAS_MANY, 'VinculacionAuditoria', 'user_registra'),
			'contratoEmpleadoses' => array(self::HAS_MANY, 'ContratoEmpleados', 'user_id'),
			'aspirantesConvocatoriases' => array(self::HAS_MANY, 'AspirantesConvocatorias', 'user_id'),
			'estadosVinculacions' => array(self::HAS_MANY, 'EstadosVinculacion', 'user_id'),
			'empresa' => array(self::BELONGS_TO, 'Empresas', 'empresa_id'),
			'empleado' => array(self::BELONGS_TO, 'Empleados', 'empleado_id'),
			'perfil' => array(self::BELONGS_TO, 'Perfiles', 'perfil_id'),
			'vinculacions' => array(self::HAS_MANY, 'Vinculacion', 'user_registra'),
			'tipoPaises' => array(self::HAS_MANY, 'TipoPais', 'user_registra'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'nombre_completo' => 'Nombre Completo',
			'sw_estado' => 'Sw Estado',
			'passwd' => 'Passwd',
			'perfil_id' => 'Perfil',
			'login' => 'Login',
			'empleado_id' => 'Empleado',
			'passwd_default' => 'Passwd Default',
			'sw_empleado' => 'Sw Empleado',
			'empresa_id' => 'Empresa',
			'fecha_registro' => 'Fecha Registro',
			'firma' => 'Firma',
			'correo_interno' => 'Correo Interno',
			'fecha_actualizacion_passwd' => 'Fecha Actualizacion Passwd',
			'sw_postgresistrador' => 'Sw Postgresistrador',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('nombre_completo',$this->nombre_completo,true);
		$criteria->compare('sw_estado',$this->sw_estado,true);
		$criteria->compare('passwd',$this->passwd,true);
		$criteria->compare('perfil_id',$this->perfil_id);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('empleado_id',$this->empleado_id);
		$criteria->compare('passwd_default',$this->passwd_default,true);
		$criteria->compare('sw_empleado',$this->sw_empleado,true);
		$criteria->compare('empresa_id',$this->empresa_id);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);
		$criteria->compare('firma',$this->firma,true);
		$criteria->compare('correo_interno',$this->correo_interno,true);
		$criteria->compare('fecha_actualizacion_passwd',$this->fecha_actualizacion_passwd,true);
		$criteria->compare('sw_postgresistrador',$this->sw_postgresistrador,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SystemUsuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
