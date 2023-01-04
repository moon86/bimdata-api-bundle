# OpenAPI\Server\Api\IfcApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addIfcErrorsDeprecated**](IfcApiInterface.md#addIfcErrorsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/errors | Add errors to model
[**bulkDeleteIfcClassificationsDeprecated**](IfcApiInterface.md#bulkDeleteIfcClassificationsDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/list_destroy | Remove all classifications from model&#39;s elements
[**bulkDeleteIfcPropertiesDeprecated**](IfcApiInterface.md#bulkDeleteIfcPropertiesDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_destroy | Delete many Property of a model
[**bulkDeleteIfcPropertyDefinitionsDeprecated**](IfcApiInterface.md#bulkDeleteIfcPropertyDefinitionsDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/bulk_destroy | Delete many PropertyDefinitions of a model
[**bulkDeleteIfcUnitsDeprecated**](IfcApiInterface.md#bulkDeleteIfcUnitsDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/bulk_destroy | Delete many Units of a model
[**bulkDeletePropertySetDeprecated**](IfcApiInterface.md#bulkDeletePropertySetDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/bulk_destroy | Delete many PropertySet of a model
[**bulkFullUpdateElementsDeprecated**](IfcApiInterface.md#bulkFullUpdateElementsDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (only changing fields may be defined)
[**bulkFullUpdateIfcPropertyDeprecated**](IfcApiInterface.md#bulkFullUpdateIfcPropertyDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update some fields of many properties of a model
[**bulkRemoveClassificationsOfElementDeprecated**](IfcApiInterface.md#bulkRemoveClassificationsOfElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/bulk_destroy | Remove many classifications from an element
[**bulkRemoveDocumentsOfElementDeprecated**](IfcApiInterface.md#bulkRemoveDocumentsOfElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents/bulk_destroy | Remove many documents from an element
[**bulkRemoveElementsFromClassificationDeprecated**](IfcApiInterface.md#bulkRemoveElementsFromClassificationDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{model_classification_pk}/element/bulk_destroy | Remove the classifications from all elements
[**bulkUpdateElementsDeprecated**](IfcApiInterface.md#bulkUpdateElementsDeprecated) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/bulk_update | Update many elements at once (all field must be defined)
[**bulkUpdateIfcPropertyDeprecated**](IfcApiInterface.md#bulkUpdateIfcPropertyDeprecated) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/bulk_update | Update all fields of many properties of a model
[**createAccessTokenDeprecated**](IfcApiInterface.md#createAccessTokenDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Create a token for this model
[**createBuildingDeprecated**](IfcApiInterface.md#createBuildingDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building | Create a building of a model
[**createBuildingPlanDeprecated**](IfcApiInterface.md#createBuildingPlanDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/add | Create a relation between a 2d model and a building
[**createCheckerDeprecated**](IfcApiInterface.md#createCheckerDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker | Create a checker to a model
[**createCheckerResultDeprecated**](IfcApiInterface.md#createCheckerResultDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result | Create a CheckerResult
[**createClassificationElementRelationsDeprecated**](IfcApiInterface.md#createClassificationElementRelationsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | Create association between existing classification and existing element
[**createClassificationsOfElementDeprecated**](IfcApiInterface.md#createClassificationsOfElementDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Create one or many classifications to an element
[**createElementDeprecated**](IfcApiInterface.md#createElementDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Create an element in the model
[**createElementPropertySetDeprecated**](IfcApiInterface.md#createElementPropertySetDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Create a PropertySets to an element
[**createElementPropertySetPropertyDefinitionDeprecated**](IfcApiInterface.md#createElementPropertySetPropertyDefinitionDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Create a Definition to a Property
[**createElementPropertySetPropertyDefinitionUnitDeprecated**](IfcApiInterface.md#createElementPropertySetPropertyDefinitionUnitDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Create a Unit to a Definition
[**createElementPropertySetPropertyDeprecated**](IfcApiInterface.md#createElementPropertySetPropertyDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Create a property to a PropertySet
[**createIfcDeprecated**](IfcApiInterface.md#createIfcDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/create-model | Make a PDF or Image file a Model
[**createIfcPropertyDefinitionDeprecated**](IfcApiInterface.md#createIfcPropertyDefinitionDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Create a PropertyDefinition on the model
[**createIfcUnitDeprecated**](IfcApiInterface.md#createIfcUnitDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Create a Unit on a model
[**createLayerDeprecated**](IfcApiInterface.md#createLayerDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Create a layer in the model
[**createMetaBuildingDeprecated**](IfcApiInterface.md#createMetaBuildingDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/create-metabuilding | Create an empty 3D Model
[**createPropertySetDeprecated**](IfcApiInterface.md#createPropertySetDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Create one or many PropertySet
[**createPropertySetElementRelationsDeprecated**](IfcApiInterface.md#createPropertySetElementRelationsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset-element | Create association between PropertySet and element
[**createRawElementsDeprecated**](IfcApiInterface.md#createRawElementsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Create elements in an optimized format
[**createSpaceDeprecated**](IfcApiInterface.md#createSpaceDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Create a space in the model
[**createStoreyDeprecated**](IfcApiInterface.md#createStoreyDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey | Create a storey of a model
[**createStoreyPlanDeprecated**](IfcApiInterface.md#createStoreyPlanDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/add | Create a relation between a 2d model and a storey
[**createSystemDeprecated**](IfcApiInterface.md#createSystemDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Create a system in the model
[**createTilesetDeprecated**](IfcApiInterface.md#createTilesetDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/tileset | Create the tileset of the model and upload all files
[**createZoneDeprecated**](IfcApiInterface.md#createZoneDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Create a zone in the model
[**createZoneSpaceDeprecated**](IfcApiInterface.md#createZoneSpaceDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Create a space in a zone
[**deleteAccessTokenDeprecated**](IfcApiInterface.md#deleteAccessTokenDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Delete a token
[**deleteBuildingDeprecated**](IfcApiInterface.md#deleteBuildingDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{uuid} | Delete a building of a model
[**deleteBuildingPlanDeprecated**](IfcApiInterface.md#deleteBuildingPlanDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/{id} | Delete the relation between a 2d model and a building
[**deleteCheckerDeprecated**](IfcApiInterface.md#deleteCheckerDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Delete a checker of a model
[**deleteCheckerResultDeprecated**](IfcApiInterface.md#deleteCheckerResultDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Delete a CheckerResult
[**deleteElementDeprecated**](IfcApiInterface.md#deleteElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Delete an element of a model
[**deleteIfcDeprecated**](IfcApiInterface.md#deleteIfcDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Delete a model
[**deleteIfcPropertyDefinitionDeprecated**](IfcApiInterface.md#deleteIfcPropertyDefinitionDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Delete a PropertyDefinitions of a model
[**deleteIfcPropertyDeprecated**](IfcApiInterface.md#deleteIfcPropertyDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Delete a Property of a model
[**deleteIfcUnitDeprecated**](IfcApiInterface.md#deleteIfcUnitDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Delete a Unit of a model
[**deleteIfcWithoutDocDeprecated**](IfcApiInterface.md#deleteIfcWithoutDocDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/delete-model | Delete the Model without deleting the related document
[**deleteLayerDeprecated**](IfcApiInterface.md#deleteLayerDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Delete a layer of a model
[**deletePropertySetDeprecated**](IfcApiInterface.md#deletePropertySetDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Delete a PropertySet of a model
[**deleteSpaceDeprecated**](IfcApiInterface.md#deleteSpaceDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Delete a space
[**deleteStoreyDeprecated**](IfcApiInterface.md#deleteStoreyDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{uuid} | Delete a storey of a model
[**deleteStoreyPlanDeprecated**](IfcApiInterface.md#deleteStoreyPlanDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/{id} | Delete the relation between a 2d model and a storey
[**deleteSystemDeprecated**](IfcApiInterface.md#deleteSystemDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Delete a system of a model
[**deleteZoneDeprecated**](IfcApiInterface.md#deleteZoneDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Delete a zone of a model
[**deleteZoneSpaceDeprecated**](IfcApiInterface.md#deleteZoneSpaceDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Delete a space of a zone
[**exportIfcDeprecated**](IfcApiInterface.md#exportIfcDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/export | Export IFC
[**fullUpdateElementDeprecated**](IfcApiInterface.md#fullUpdateElementDeprecated) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update all fields of an element
[**getAccessTokenDeprecated**](IfcApiInterface.md#getAccessTokenDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Retrieve one token created for this model
[**getAccessTokensDeprecated**](IfcApiInterface.md#getAccessTokensDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token | Retrieve all tokens created for this model
[**getBuildingDeprecated**](IfcApiInterface.md#getBuildingDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{uuid} | Retrieve a building of a model
[**getBuildingPlanPositioningDeprecated**](IfcApiInterface.md#getBuildingPlanPositioningDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the building
[**getBuildingsDeprecated**](IfcApiInterface.md#getBuildingsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building | Retrieve all buildings of a model
[**getCheckerDeprecated**](IfcApiInterface.md#getCheckerDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Retrieve a checker of a model
[**getCheckerResultDeprecated**](IfcApiInterface.md#getCheckerResultDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Retrieve one CheckerResult
[**getCheckerResultsDeprecated**](IfcApiInterface.md#getCheckerResultsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result | Retrieve all CheckerResults
[**getCheckersDeprecated**](IfcApiInterface.md#getCheckersDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker | Retrieve all checkers of a model
[**getClassificationsOfElementDeprecated**](IfcApiInterface.md#getClassificationsOfElementDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification | Retrieve all classifications of an element
[**getDocumentsOfElementDeprecated**](IfcApiInterface.md#getDocumentsOfElementDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents | Retrieve all documents of an element
[**getElementDeprecated**](IfcApiInterface.md#getElementDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Retrieve an element of a model
[**getElementLinkedDocumentsDeprecated**](IfcApiInterface.md#getElementLinkedDocumentsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/documents | Retrieve all documents linked to any element
[**getElementPropertySetDeprecated**](IfcApiInterface.md#getElementPropertySetDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Retrieve a PropertySet of an element
[**getElementPropertySetPropertiesDeprecated**](IfcApiInterface.md#getElementPropertySetPropertiesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Retrieve all Properties of a PropertySet
[**getElementPropertySetPropertyDefinitionDeprecated**](IfcApiInterface.md#getElementPropertySetPropertyDefinitionDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Retrieve a Definition of a Property
[**getElementPropertySetPropertyDefinitionUnitDeprecated**](IfcApiInterface.md#getElementPropertySetPropertyDefinitionUnitDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Retrieve a Unit of a Definition
[**getElementPropertySetPropertyDefinitionUnitsDeprecated**](IfcApiInterface.md#getElementPropertySetPropertyDefinitionUnitsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Retrieve all Units of a Definition
[**getElementPropertySetPropertyDefinitionsDeprecated**](IfcApiInterface.md#getElementPropertySetPropertyDefinitionsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Retrieve all Definitions of a PropertySet
[**getElementPropertySetPropertyDeprecated**](IfcApiInterface.md#getElementPropertySetPropertyDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Retrieve a Property of a PropertySet
[**getElementPropertySetsDeprecated**](IfcApiInterface.md#getElementPropertySetsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset | Retrieve all PropertySets of an element
[**getElementsDeprecated**](IfcApiInterface.md#getElementsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element | Retrieve all elements of a model
[**getElementsFromClassificationDeprecated**](IfcApiInterface.md#getElementsFromClassificationDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{model_classification_pk}/element | Retrieve all elements with the classification
[**getIfcClassificationsDeprecated**](IfcApiInterface.md#getIfcClassificationsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification | Retrieve all classifications in a model
[**getIfcDeprecated**](IfcApiInterface.md#getIfcDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Retrieve one model
[**getIfcMaterialDeprecated**](IfcApiInterface.md#getIfcMaterialDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material/{id} | Retrieve a material of a model
[**getIfcMaterialsDeprecated**](IfcApiInterface.md#getIfcMaterialsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/material | Retrieve all materials of a model
[**getIfcPropertiesDeprecated**](IfcApiInterface.md#getIfcPropertiesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property | Retrieve all Properties of a model
[**getIfcPropertyDefinitionDeprecated**](IfcApiInterface.md#getIfcPropertyDefinitionDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Retrieve a PropertyDefinition of a model
[**getIfcPropertyDefinitionsDeprecated**](IfcApiInterface.md#getIfcPropertyDefinitionsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition | Retrieve all PropertyDefinitions of a model
[**getIfcPropertyDeprecated**](IfcApiInterface.md#getIfcPropertyDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Retrieve a Property of a model
[**getIfcUnitDeprecated**](IfcApiInterface.md#getIfcUnitDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Retrieve a Unit of a model
[**getIfcUnitsDeprecated**](IfcApiInterface.md#getIfcUnitsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit | Retrieve all Units of a model
[**getIfcsDeprecated**](IfcApiInterface.md#getIfcsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc | Retrieve all models
[**getLayerDeprecated**](IfcApiInterface.md#getLayerDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Retrieve a layer of a model
[**getLayersDeprecated**](IfcApiInterface.md#getLayersDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer | Retrieve all layers of a model
[**getMaterialDeprecated**](IfcApiInterface.md#getMaterialDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material/{id} | Retrieve a material of a model
[**getMaterialsDeprecated**](IfcApiInterface.md#getMaterialsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/material | Retrieve all materials of a model
[**getProcessorHandlerDeprecated**](IfcApiInterface.md#getProcessorHandlerDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Retrieve a processor handler
[**getProcessorHandlersDeprecated**](IfcApiInterface.md#getProcessorHandlersDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler | Get all processor handlers
[**getPropertySetDeprecated**](IfcApiInterface.md#getPropertySetDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Retrieve a PropertySet of a model
[**getPropertySetsDeprecated**](IfcApiInterface.md#getPropertySetsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset | Retrieve all PropertySets of a model
[**getRawElementsDeprecated**](IfcApiInterface.md#getRawElementsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/raw | Retrieve all elements in a optimized format
[**getSimpleElementDeprecated**](IfcApiInterface.md#getSimpleElementDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid}/simple | Retrieve an element of a model with a simple value representation
[**getSimpleElementsDeprecated**](IfcApiInterface.md#getSimpleElementsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/simple | Retrieve all elements of a model with a simple value representation
[**getSpaceDeprecated**](IfcApiInterface.md#getSpaceDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Retrieve one space of the model
[**getSpacesDeprecated**](IfcApiInterface.md#getSpacesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space | Retrieve all spaces of the model
[**getStoreyDeprecated**](IfcApiInterface.md#getStoreyDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{uuid} | Retrieve a storey of a model
[**getStoreyPlanPositioningDeprecated**](IfcApiInterface.md#getStoreyPlanPositioningDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the storey
[**getStoreysDeprecated**](IfcApiInterface.md#getStoreysDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey | Retrieve all storeys of a model
[**getSystemDeprecated**](IfcApiInterface.md#getSystemDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Retrieve a system of a model
[**getSystemsDeprecated**](IfcApiInterface.md#getSystemsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system | Retrieve all systems of a model
[**getTilesetDeprecated**](IfcApiInterface.md#getTilesetDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/tileset | Retrieve the tileset of the model
[**getZoneDeprecated**](IfcApiInterface.md#getZoneDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Retrieve one zone of a model
[**getZoneSpaceDeprecated**](IfcApiInterface.md#getZoneSpaceDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Retrieve one space of a zone
[**getZoneSpacesDeprecated**](IfcApiInterface.md#getZoneSpacesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space | Retrieve all spaces of a zone
[**getZonesDeprecated**](IfcApiInterface.md#getZonesDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone | Retrieve zones of a model
[**launchNewCheckDeprecated**](IfcApiInterface.md#launchNewCheckDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id}/launch-check | Launch a new check on the model
[**linkDocumentsOfElementDeprecated**](IfcApiInterface.md#linkDocumentsOfElementDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents | Link one or many documents to an element
[**listClassificationElementRelationsDeprecated**](IfcApiInterface.md#listClassificationElementRelationsDeprecated) | **GET** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification-element | List all associations between classifications and elements
[**mergeIfcsDeprecated**](IfcApiInterface.md#mergeIfcsDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/merge | Merge IFC files
[**optimizeIfcDeprecated**](IfcApiInterface.md#optimizeIfcDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/optimize | Optimize the IFC
[**removeAllElementPropertySetDeprecated**](IfcApiInterface.md#removeAllElementPropertySetDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/all | Remove all property sets from element
[**removeClassificationOfElementDeprecated**](IfcApiInterface.md#removeClassificationOfElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/classification/{id} | Remove a classification from an element
[**removeDocumentOfElementDeprecated**](IfcApiInterface.md#removeDocumentOfElementDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/documents/{id} | Remove a documents from an element
[**removeElementPropertySetDeprecated**](IfcApiInterface.md#removeElementPropertySetDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{id} | Remove a PropertySet from an element
[**removeElementPropertySetPropertyDefinitionDeprecated**](IfcApiInterface.md#removeElementPropertySetPropertyDefinitionDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Delete a Definition to a Property
[**removeElementPropertySetPropertyDefinitionUnitDeprecated**](IfcApiInterface.md#removeElementPropertySetPropertyDefinitionUnitDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Remove a Unit from a Definition
[**removeElementPropertySetPropertyDeprecated**](IfcApiInterface.md#removeElementPropertySetPropertyDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Remove a property from a PropertySet
[**removeElementsFromClassificationDeprecated**](IfcApiInterface.md#removeElementsFromClassificationDeprecated) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/classification/{model_classification_pk}/element/{uuid} | Remove the classification from all elements
[**reprocessIfcDeprecated**](IfcApiInterface.md#reprocessIfcDeprecated) | **POST** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/reprocess | Reprocess Model file
[**updateAccessTokenDeprecated**](IfcApiInterface.md#updateAccessTokenDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/access_token/{token} | Update some fields of a token
[**updateBuildingDeprecated**](IfcApiInterface.md#updateBuildingDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{uuid} | Update some fields of a building
[**updateBuildingPlanPositioningDeprecated**](IfcApiInterface.md#updateBuildingPlanPositioningDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/{id}/positioning | Update the postioning of the plan in the building
[**updateCheckerDeprecated**](IfcApiInterface.md#updateCheckerDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{id} | Update some fields of a checker of a model
[**updateCheckerResultDeprecated**](IfcApiInterface.md#updateCheckerResultDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/checker/{checker_pk}/result/{id} | Update some fields of a CheckerResult
[**updateElementDeprecated**](IfcApiInterface.md#updateElementDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{uuid} | Update some fields of an element
[**updateElementPropertySetPropertyDeprecated**](IfcApiInterface.md#updateElementPropertySetPropertyDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element
[**updateIfcDeprecated**](IfcApiInterface.md#updateIfcDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id} | Update some fields of a model
[**updateIfcFilesDeprecated**](IfcApiInterface.md#updateIfcFilesDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{id}/files | Update models file (gltf, svg, structure, etc)
[**updateIfcPropertyDefinitionDeprecated**](IfcApiInterface.md#updateIfcPropertyDefinitionDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertydefinition/{id} | Update some fields of many PropertyDefinitions of a model
[**updateIfcPropertyDeprecated**](IfcApiInterface.md#updateIfcPropertyDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/property/{id} | Update some fields of a Property
[**updateIfcUnitDeprecated**](IfcApiInterface.md#updateIfcUnitDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/unit/{id} | Update some fields of a Unit of a model
[**updateLayerDeprecated**](IfcApiInterface.md#updateLayerDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/layer/{id} | Update some fields of a layer
[**updateOrderBuildingPlanDeprecated**](IfcApiInterface.md#updateOrderBuildingPlanDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/building/{building_uuid}/plan/order | Update order of all plan of a building
[**updateOrderStoreyPlanDeprecated**](IfcApiInterface.md#updateOrderStoreyPlanDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/order | Update order of all plan of a storey
[**updateOrderStoreysDeprecated**](IfcApiInterface.md#updateOrderStoreysDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/order | Update order of all storey of a model
[**updateProcessorHandlerDeprecated**](IfcApiInterface.md#updateProcessorHandlerDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/processorhandler/{id} | Update the status of a processor handler
[**updatePropertySetDeprecated**](IfcApiInterface.md#updatePropertySetDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/propertyset/{id} | Update some fields of a PropertySet
[**updateSpaceDeprecated**](IfcApiInterface.md#updateSpaceDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/space/{id} | Update some fields of a space
[**updateStoreyDeprecated**](IfcApiInterface.md#updateStoreyDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{uuid} | Update some fields of a storey
[**updateStoreyPlanPositioningDeprecated**](IfcApiInterface.md#updateStoreyPlanPositioningDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/storey/{storey_uuid}/plan/{id}/positioning | Update the postioning of the plan in the storey
[**updateSystemDeprecated**](IfcApiInterface.md#updateSystemDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/system/{uuid} | Update some fields of a system
[**updateZoneDeprecated**](IfcApiInterface.md#updateZoneDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{id} | Update some fields of a zone
[**updateZoneSpaceDeprecated**](IfcApiInterface.md#updateZoneSpaceDeprecated) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/ifc/{ifc_pk}/zone/{zone_pk}/space/{id} | Update some fields of a space


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\IfcApi:
        tags:
            - { name: "open_api_server.api", api: "ifc" }
    # ...
```

## **addIfcErrorsDeprecated**
> OpenAPI\Server\Model\ModelErrors addIfcErrorsDeprecated($cloudPk, $id, $projectPk, $modelErrorsRequest)

Add errors to model

Model errors are warnings and errors during model process. They alert about missing elements or malformed files  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#addIfcErrorsDeprecated
     */
    public function addIfcErrorsDeprecated(int $cloudPk, int $id, int $projectPk, ?ModelErrorsRequest $modelErrorsRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |
 **modelErrorsRequest** | [**OpenAPI\Server\Model\ModelErrorsRequest**](../Model/ModelErrorsRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\ModelErrors**](../Model/ModelErrors.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkDeleteIfcClassificationsDeprecated**
> bulkDeleteIfcClassificationsDeprecated($cloudPk, $ifcPk, $projectPk)

Remove all classifications from model's elements

Delete relation between filtered classifications (eg. /classifications?name=untec) and all mode's elements. No classification will be deleted on this endpoint, only the relation between model's elements and their classification.  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkDeleteIfcClassificationsDeprecated
     */
    public function bulkDeleteIfcClassificationsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **ifcPk** | **int**|  |
 **projectPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkDeleteIfcPropertiesDeprecated**
> bulkDeleteIfcPropertiesDeprecated($cloudPk, $ifcPk, $projectPk)

Delete many Property of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkDeleteIfcPropertiesDeprecated
     */
    public function bulkDeleteIfcPropertiesDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkDeleteIfcPropertyDefinitionsDeprecated**
> bulkDeleteIfcPropertyDefinitionsDeprecated($cloudPk, $ifcPk, $projectPk)

Delete many PropertyDefinitions of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkDeleteIfcPropertyDefinitionsDeprecated
     */
    public function bulkDeleteIfcPropertyDefinitionsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkDeleteIfcUnitsDeprecated**
> bulkDeleteIfcUnitsDeprecated($cloudPk, $ifcPk, $projectPk)

Delete many Units of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkDeleteIfcUnitsDeprecated
     */
    public function bulkDeleteIfcUnitsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkDeletePropertySetDeprecated**
> bulkDeletePropertySetDeprecated($cloudPk, $ifcPk, $projectPk)

Delete many PropertySet of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkDeletePropertySetDeprecated
     */
    public function bulkDeletePropertySetDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkFullUpdateElementsDeprecated**
> OpenAPI\Server\Model\Element bulkFullUpdateElementsDeprecated($cloudPk, $ifcPk, $projectPk, $elementRequest, $classification, $classificationNotation, $type)

Update many elements at once (only changing fields may be defined)

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkFullUpdateElementsDeprecated
     */
    public function bulkFullUpdateElementsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $elementRequest, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **elementRequest** | [**OpenAPI\Server\Model\ElementRequest**](../Model/ElementRequest.md)|  |
 **classification** | **string**|  | [optional]
 **classificationNotation** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkFullUpdateIfcPropertyDeprecated**
> OpenAPI\Server\Model\Property bulkFullUpdateIfcPropertyDeprecated($cloudPk, $ifcPk, $projectPk, $propertyRequest)

Update some fields of many properties of a model

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkFullUpdateIfcPropertyDeprecated
     */
    public function bulkFullUpdateIfcPropertyDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $propertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyRequest** | [**OpenAPI\Server\Model\PropertyRequest**](../Model/PropertyRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkRemoveClassificationsOfElementDeprecated**
> bulkRemoveClassificationsOfElementDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk)

Remove many classifications from an element

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkRemoveClassificationsOfElementDeprecated
     */
    public function bulkRemoveClassificationsOfElementDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkRemoveDocumentsOfElementDeprecated**
> bulkRemoveDocumentsOfElementDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk)

Remove many documents from an element

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkRemoveDocumentsOfElementDeprecated
     */
    public function bulkRemoveDocumentsOfElementDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkRemoveElementsFromClassificationDeprecated**
> bulkRemoveElementsFromClassificationDeprecated($cloudPk, $ifcPk, $modelClassificationPk, $projectPk)

Remove the classifications from all elements

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkRemoveElementsFromClassificationDeprecated
     */
    public function bulkRemoveElementsFromClassificationDeprecated(int $cloudPk, int $ifcPk, int $modelClassificationPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **modelClassificationPk** | **int**| A unique integer value identifying this classification. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkUpdateElementsDeprecated**
> OpenAPI\Server\Model\Element bulkUpdateElementsDeprecated($cloudPk, $ifcPk, $projectPk, $elementRequest, $classification, $classificationNotation, $type)

Update many elements at once (all field must be defined)

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkUpdateElementsDeprecated
     */
    public function bulkUpdateElementsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $elementRequest, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **elementRequest** | [**OpenAPI\Server\Model\ElementRequest**](../Model/ElementRequest.md)|  |
 **classification** | **string**|  | [optional]
 **classificationNotation** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkUpdateIfcPropertyDeprecated**
> OpenAPI\Server\Model\Property bulkUpdateIfcPropertyDeprecated($cloudPk, $ifcPk, $projectPk, $propertyRequest)

Update all fields of many properties of a model

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#bulkUpdateIfcPropertyDeprecated
     */
    public function bulkUpdateIfcPropertyDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $propertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyRequest** | [**OpenAPI\Server\Model\PropertyRequest**](../Model/PropertyRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createAccessTokenDeprecated**
> OpenAPI\Server\Model\IfcAccessToken createAccessTokenDeprecated($cloudPk, $ifcPk, $projectPk, $ifcAccessTokenRequest)

Create a token for this model

Tokens are read_only by default and are valid 1 day  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createAccessTokenDeprecated
     */
    public function createAccessTokenDeprecated(int $cloudPk, int $ifcPk, int $projectPk, ?IfcAccessTokenRequest $ifcAccessTokenRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **ifcAccessTokenRequest** | [**OpenAPI\Server\Model\IfcAccessTokenRequest**](../Model/IfcAccessTokenRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createBuildingDeprecated**
> OpenAPI\Server\Model\Building createBuildingDeprecated($cloudPk, $ifcPk, $projectPk, $storeyBuildingRequest)

Create a building of a model

Create a building of a model.  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createBuildingDeprecated
     */
    public function createBuildingDeprecated(int $cloudPk, int $ifcPk, int $projectPk, StoreyBuildingRequest $storeyBuildingRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **storeyBuildingRequest** | [**OpenAPI\Server\Model\StoreyBuildingRequest**](../Model/StoreyBuildingRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createBuildingPlanDeprecated**
> OpenAPI\Server\Model\Building createBuildingPlanDeprecated($buildingUuid, $cloudPk, $ifcPk, $projectPk, $buildingModelPlanRequest)

Create a relation between a 2d model and a building

Create a relation between a 2d model and a building. The model type must be one of : ('DWG', 'DXF', 'PDF', 'JPEG', 'PNG')  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createBuildingPlanDeprecated
     */
    public function createBuildingPlanDeprecated(string $buildingUuid, int $cloudPk, int $ifcPk, int $projectPk, BuildingModelPlanRequest $buildingModelPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buildingUuid** | **string**|  |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **buildingModelPlanRequest** | [**OpenAPI\Server\Model\BuildingModelPlanRequest**](../Model/BuildingModelPlanRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createCheckerDeprecated**
> OpenAPI\Server\Model\IfcChecker createCheckerDeprecated($cloudPk, $ifcPk, $projectPk, $ifcCheckerRequest)

Create a checker to a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:write, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createCheckerDeprecated
     */
    public function createCheckerDeprecated(int $cloudPk, int $ifcPk, int $projectPk, ?IfcCheckerRequest $ifcCheckerRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **ifcCheckerRequest** | [**OpenAPI\Server\Model\IfcCheckerRequest**](../Model/IfcCheckerRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createCheckerResultDeprecated**
> OpenAPI\Server\Model\CheckerResult createCheckerResultDeprecated($checkerPk, $cloudPk, $ifcPk, $projectPk, $checkerResultRequest)

Create a CheckerResult

TCreate a CheckerResult  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createCheckerResultDeprecated
     */
    public function createCheckerResultDeprecated(int $checkerPk, int $cloudPk, int $ifcPk, int $projectPk, ?CheckerResultRequest $checkerResultRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **checkerResultRequest** | [**OpenAPI\Server\Model\CheckerResultRequest**](../Model/CheckerResultRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createClassificationElementRelationsDeprecated**
> createClassificationElementRelationsDeprecated($cloudPk, $ifcPk, $projectPk, $elementClassificationRelationRequest)

Create association between existing classification and existing element

Create association between existing classification and existing element  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createClassificationElementRelationsDeprecated
     */
    public function createClassificationElementRelationsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $elementClassificationRelationRequest, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **elementClassificationRelationRequest** | [**OpenAPI\Server\Model\ElementClassificationRelationRequest**](../Model/ElementClassificationRelationRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createClassificationsOfElementDeprecated**
> OpenAPI\Server\Model\Classification createClassificationsOfElementDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk, $classificationRequest)

Create one or many classifications to an element

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors If classification created already exists, it will just be added to item's classifications and will not be duplicated  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createClassificationsOfElementDeprecated
     */
    public function createClassificationsOfElementDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, array $classificationRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **classificationRequest** | [**OpenAPI\Server\Model\ClassificationRequest**](../Model/ClassificationRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Classification**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createElementDeprecated**
> OpenAPI\Server\Model\Element createElementDeprecated($cloudPk, $ifcPk, $projectPk, $elementRequest, $classification, $classificationNotation, $type)

Create an element in the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createElementDeprecated
     */
    public function createElementDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $elementRequest, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **elementRequest** | [**OpenAPI\Server\Model\ElementRequest**](../Model/ElementRequest.md)|  |
 **classification** | **string**|  | [optional]
 **classificationNotation** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createElementPropertySetDeprecated**
> OpenAPI\Server\Model\PropertySet createElementPropertySetDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk, $propertySetRequest)

Create a PropertySets to an element

Create a PropertySets that will be automatically linked to the element  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createElementPropertySetDeprecated
     */
    public function createElementPropertySetDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, ?PropertySetRequest $propertySetRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**|  |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertySetRequest** | [**OpenAPI\Server\Model\PropertySetRequest**](../Model/PropertySetRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createElementPropertySetPropertyDefinitionDeprecated**
> OpenAPI\Server\Model\PropertyDefinition createElementPropertySetPropertyDefinitionDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk, $propertyPk, $propertysetPk, $propertyDefinitionRequest)

Create a Definition to a Property

Create a Definition to a Property  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createElementPropertySetPropertyDefinitionDeprecated
     */
    public function createElementPropertySetPropertyDefinitionDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int $propertyPk, int $propertysetPk, ?PropertyDefinitionRequest $propertyDefinitionRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyPk** | **int**| A unique integer value identifying this property. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |
 **propertyDefinitionRequest** | [**OpenAPI\Server\Model\PropertyDefinitionRequest**](../Model/PropertyDefinitionRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createElementPropertySetPropertyDefinitionUnitDeprecated**
> OpenAPI\Server\Model\Unit createElementPropertySetPropertyDefinitionUnitDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk, $propertyPk, $propertydefinitionPk, $propertysetPk, $unitRequest)

Create a Unit to a Definition

Create a Unit to a Definition  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createElementPropertySetPropertyDefinitionUnitDeprecated
     */
    public function createElementPropertySetPropertyDefinitionUnitDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int $propertyPk, int $propertydefinitionPk, int $propertysetPk, UnitRequest $unitRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyPk** | **int**| A unique integer value identifying this property. |
 **propertydefinitionPk** | **int**| A unique integer value identifying this property definition. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |
 **unitRequest** | [**OpenAPI\Server\Model\UnitRequest**](../Model/UnitRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createElementPropertySetPropertyDeprecated**
> OpenAPI\Server\Model\Property createElementPropertySetPropertyDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk, $propertysetPk, $propertyRequest)

Create a property to a PropertySet

Create a property to a PropertySet  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createElementPropertySetPropertyDeprecated
     */
    public function createElementPropertySetPropertyDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int $propertysetPk, PropertyRequest $propertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |
 **propertyRequest** | [**OpenAPI\Server\Model\PropertyRequest**](../Model/PropertyRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createIfcDeprecated**
> OpenAPI\Server\Model\Model createIfcDeprecated($cloudPk, $projectPk, $createModelRequest)

Make a PDF or Image file a Model

Make a PDF or Image file a Model to be used in BIMData services. If a model already exists, this route does nothing and returns a 201 with the model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createIfcDeprecated
     */
    public function createIfcDeprecated(int $cloudPk, int $projectPk, CreateModelRequest $createModelRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **projectPk** | **int**|  |
 **createModelRequest** | [**OpenAPI\Server\Model\CreateModelRequest**](../Model/CreateModelRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Model**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createIfcPropertyDefinitionDeprecated**
> OpenAPI\Server\Model\PropertyDefinition createIfcPropertyDefinitionDeprecated($cloudPk, $ifcPk, $projectPk, $propertyDefinitionRequest)

Create a PropertyDefinition on the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createIfcPropertyDefinitionDeprecated
     */
    public function createIfcPropertyDefinitionDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $propertyDefinitionRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyDefinitionRequest** | [**OpenAPI\Server\Model\PropertyDefinitionRequest**](../Model/PropertyDefinitionRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createIfcUnitDeprecated**
> OpenAPI\Server\Model\Unit createIfcUnitDeprecated($cloudPk, $ifcPk, $projectPk, $unitRequest)

Create a Unit on a model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createIfcUnitDeprecated
     */
    public function createIfcUnitDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $unitRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **unitRequest** | [**OpenAPI\Server\Model\UnitRequest**](../Model/UnitRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createLayerDeprecated**
> OpenAPI\Server\Model\Layer createLayerDeprecated($cloudPk, $ifcPk, $projectPk, $layerRequest)

Create a layer in the model

The IFC file will not be updated. The created layer will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createLayerDeprecated
     */
    public function createLayerDeprecated(int $cloudPk, int $ifcPk, int $projectPk, LayerRequest $layerRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **layerRequest** | [**OpenAPI\Server\Model\LayerRequest**](../Model/LayerRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Layer**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createMetaBuildingDeprecated**
> OpenAPI\Server\Model\Model createMetaBuildingDeprecated($cloudPk, $projectPk, $createBuildingByNameRequest)

Create an empty 3D Model

Create an empty 3D Model to be used in BIMData services  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createMetaBuildingDeprecated
     */
    public function createMetaBuildingDeprecated(int $cloudPk, int $projectPk, CreateBuildingByNameRequest $createBuildingByNameRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **projectPk** | **int**|  |
 **createBuildingByNameRequest** | [**OpenAPI\Server\Model\CreateBuildingByNameRequest**](../Model/CreateBuildingByNameRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Model**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createPropertySetDeprecated**
> OpenAPI\Server\Model\PropertySet createPropertySetDeprecated($cloudPk, $ifcPk, $projectPk, $propertySetRequest)

Create one or many PropertySet

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createPropertySetDeprecated
     */
    public function createPropertySetDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $propertySetRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertySetRequest** | [**OpenAPI\Server\Model\PropertySetRequest**](../Model/PropertySetRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createPropertySetElementRelationsDeprecated**
> createPropertySetElementRelationsDeprecated($cloudPk, $ifcPk, $projectPk, $elementPropertySetRelationRequest)

Create association between PropertySet and element

Create association between PropertySet and element  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createPropertySetElementRelationsDeprecated
     */
    public function createPropertySetElementRelationsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $elementPropertySetRelationRequest, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **elementPropertySetRelationRequest** | [**OpenAPI\Server\Model\ElementPropertySetRelationRequest**](../Model/ElementPropertySetRelationRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createRawElementsDeprecated**
> createRawElementsDeprecated($cloudPk, $ifcPk, $projectPk, $rawElementsRequest)

Create elements in an optimized format

Create many elements in an optimized format to reduce JSON size and avoid redudancy. The IFC file will not be updated. The created elements will be accessible over the API and when exporting an IFC file. You can use the same optimized structure to post multiple elements, property_sets, properties, definitions and units at once. For performance reasons, we do not check the validity of the json. If the json is malformed, an error 500 without more explaination may be returned instead of a 400.  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createRawElementsDeprecated
     */
    public function createRawElementsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, RawElementsRequest $rawElementsRequest, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rawElementsRequest** | [**OpenAPI\Server\Model\RawElementsRequest**](../Model/RawElementsRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createSpaceDeprecated**
> OpenAPI\Server\Model\Space createSpaceDeprecated($cloudPk, $ifcPk, $projectPk, $spaceRequest)

Create a space in the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createSpaceDeprecated
     */
    public function createSpaceDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $spaceRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **spaceRequest** | [**OpenAPI\Server\Model\SpaceRequest**](../Model/SpaceRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Space**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createStoreyDeprecated**
> OpenAPI\Server\Model\Storey createStoreyDeprecated($cloudPk, $ifcPk, $projectPk, $storeyBuildingRequest)

Create a storey of a model

Create a storey of a model.  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createStoreyDeprecated
     */
    public function createStoreyDeprecated(int $cloudPk, int $ifcPk, int $projectPk, StoreyBuildingRequest $storeyBuildingRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **storeyBuildingRequest** | [**OpenAPI\Server\Model\StoreyBuildingRequest**](../Model/StoreyBuildingRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createStoreyPlanDeprecated**
> OpenAPI\Server\Model\Storey createStoreyPlanDeprecated($cloudPk, $ifcPk, $projectPk, $storeyUuid, $storeyModelPlanRequest)

Create a relation between a 2d model and a storey

Create a relation between a 2d model and a storey. The model type must be one of : ('DWG', 'DXF', 'PDF', 'JPEG', 'PNG')  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createStoreyPlanDeprecated
     */
    public function createStoreyPlanDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $storeyUuid, StoreyModelPlanRequest $storeyModelPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **storeyUuid** | **string**|  |
 **storeyModelPlanRequest** | [**OpenAPI\Server\Model\StoreyModelPlanRequest**](../Model/StoreyModelPlanRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createSystemDeprecated**
> OpenAPI\Server\Model\System createSystemDeprecated($cloudPk, $ifcPk, $projectPk, $systemRequest)

Create a system in the model

The IFC file will not be updated. The created system will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createSystemDeprecated
     */
    public function createSystemDeprecated(int $cloudPk, int $ifcPk, int $projectPk, SystemRequest $systemRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **systemRequest** | [**OpenAPI\Server\Model\SystemRequest**](../Model/SystemRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\System**](../Model/System.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createTilesetDeprecated**
> createTilesetDeprecated($cloudPk, $id, $projectPk)

Create the tileset of the model and upload all files

This route is internaly used by BIMData, you probably don't want to use it  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createTilesetDeprecated
     */
    public function createTilesetDeprecated(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createZoneDeprecated**
> OpenAPI\Server\Model\Zone createZoneDeprecated($cloudPk, $ifcPk, $projectPk, $zoneRequest, $color)

Create a zone in the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created zone will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createZoneDeprecated
     */
    public function createZoneDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $zoneRequest, ?string $color, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **zoneRequest** | [**OpenAPI\Server\Model\ZoneRequest**](../Model/ZoneRequest.md)|  |
 **color** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Zone**](../Model/Zone.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createZoneSpaceDeprecated**
> OpenAPI\Server\Model\ZoneSpace createZoneSpaceDeprecated($cloudPk, $ifcPk, $projectPk, $zonePk, $zoneSpaceRequest)

Create a space in a zone

The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#createZoneSpaceDeprecated
     */
    public function createZoneSpaceDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int $zonePk, ZoneSpaceRequest $zoneSpaceRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **zonePk** | **int**| A unique integer value identifying this zone. |
 **zoneSpaceRequest** | [**OpenAPI\Server\Model\ZoneSpaceRequest**](../Model/ZoneSpaceRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteAccessTokenDeprecated**
> deleteAccessTokenDeprecated($cloudPk, $ifcPk, $projectPk, $token)

Delete a token

Deleting a token will revoke it.  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteAccessTokenDeprecated
     */
    public function deleteAccessTokenDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $token, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **token** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteBuildingDeprecated**
> deleteBuildingDeprecated($cloudPk, $ifcPk, $projectPk, $uuid)

Delete a building of a model

Delete a building of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteBuildingDeprecated
     */
    public function deleteBuildingDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteBuildingPlanDeprecated**
> deleteBuildingPlanDeprecated($buildingUuid, $cloudPk, $id, $ifcPk, $projectPk)

Delete the relation between a 2d model and a building

Delete the relation between a 2d model and a building  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteBuildingPlanDeprecated
     */
    public function deleteBuildingPlanDeprecated(string $buildingUuid, int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buildingUuid** | **string**|  |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this element. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteCheckerDeprecated**
> deleteCheckerDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Delete a checker of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:write, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteCheckerDeprecated
     */
    public function deleteCheckerDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ifc checker. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteCheckerResultDeprecated**
> deleteCheckerResultDeprecated($checkerPk, $cloudPk, $id, $ifcPk, $projectPk)

Delete a CheckerResult

Delete a CheckerResult  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteCheckerResultDeprecated
     */
    public function deleteCheckerResultDeprecated(int $checkerPk, int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this checker result. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteElementDeprecated**
> deleteElementDeprecated($cloudPk, $ifcPk, $projectPk, $uuid)

Delete an element of a model

The IFC file will not be updated. The remaining elements are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteElementDeprecated
     */
    public function deleteElementDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteIfcDeprecated**
> deleteIfcDeprecated($cloudPk, $id, $projectPk)

Delete a model

It will also delete the related document  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteIfcDeprecated
     */
    public function deleteIfcDeprecated(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteIfcPropertyDefinitionDeprecated**
> deleteIfcPropertyDefinitionDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Delete a PropertyDefinitions of a model

Delete a PropertyDefinitions of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteIfcPropertyDefinitionDeprecated
     */
    public function deleteIfcPropertyDefinitionDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteIfcPropertyDeprecated**
> deleteIfcPropertyDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Delete a Property of a model

Delete a Property of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteIfcPropertyDeprecated
     */
    public function deleteIfcPropertyDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this property. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteIfcUnitDeprecated**
> deleteIfcUnitDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Delete a Unit of a model

Delete a Unit of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteIfcUnitDeprecated
     */
    public function deleteIfcUnitDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteIfcWithoutDocDeprecated**
> deleteIfcWithoutDocDeprecated($cloudPk, $id, $projectPk)

Delete the Model without deleting the related document

Delete the Model without deleting the related document  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteIfcWithoutDocDeprecated
     */
    public function deleteIfcWithoutDocDeprecated(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteLayerDeprecated**
> deleteLayerDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Delete a layer of a model

The IFC file will not be updated. The remaining layers are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteLayerDeprecated
     */
    public function deleteLayerDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this layer. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deletePropertySetDeprecated**
> deletePropertySetDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Delete a PropertySet of a model

Delete a PropertySet of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deletePropertySetDeprecated
     */
    public function deletePropertySetDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteSpaceDeprecated**
> deleteSpaceDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Delete a space

It will not delete related zones. The IFC file will not be updated. The remaining spaces are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteSpaceDeprecated
     */
    public function deleteSpaceDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this space. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteStoreyDeprecated**
> deleteStoreyDeprecated($cloudPk, $ifcPk, $projectPk, $uuid)

Delete a storey of a model

Delete a storey of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteStoreyDeprecated
     */
    public function deleteStoreyDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteStoreyPlanDeprecated**
> deleteStoreyPlanDeprecated($cloudPk, $id, $ifcPk, $projectPk, $storeyUuid)

Delete the relation between a 2d model and a storey

Delete the relation between a 2d model and a storey  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteStoreyPlanDeprecated
     */
    public function deleteStoreyPlanDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, string $storeyUuid, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this element. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **storeyUuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteSystemDeprecated**
> deleteSystemDeprecated($cloudPk, $ifcPk, $projectPk, $uuid)

Delete a system of a model

The IFC file will not be updated. The remaining systems are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteSystemDeprecated
     */
    public function deleteSystemDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteZoneDeprecated**
> deleteZoneDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Delete a zone of a model

The IFC file will not be updated. The remaining zones are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteZoneDeprecated
     */
    public function deleteZoneDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this zone. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteZoneSpaceDeprecated**
> deleteZoneSpaceDeprecated($cloudPk, $id, $ifcPk, $projectPk, $zonePk)

Delete a space of a zone

The IFC file will not be updated. The remaining spaces are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#deleteZoneSpaceDeprecated
     */
    public function deleteZoneSpaceDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int $zonePk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this space. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **zonePk** | **int**| A unique integer value identifying this zone. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **exportIfcDeprecated**
> OpenAPI\Server\Model\IfcExport exportIfcDeprecated($cloudPk, $id, $projectPk, $ifcExportRequest)

Export IFC

Only works for IFC files. Export IFC as requested in parameters. When the export is finished, a new IFC file with will be created in the same folder than the original IFC. You can query the folder or subscribe to the new document webhook to retrieve the result  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#exportIfcDeprecated
     */
    public function exportIfcDeprecated(int $cloudPk, int $id, int $projectPk, IfcExportRequest $ifcExportRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |
 **ifcExportRequest** | [**OpenAPI\Server\Model\IfcExportRequest**](../Model/IfcExportRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\IfcExport**](../Model/IfcExport.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **fullUpdateElementDeprecated**
> OpenAPI\Server\Model\Element fullUpdateElementDeprecated($cloudPk, $ifcPk, $projectPk, $uuid, $elementRequest)

Update all fields of an element

Update all fields of an element. The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#fullUpdateElementDeprecated
     */
    public function fullUpdateElementDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, ElementRequest $elementRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |
 **elementRequest** | [**OpenAPI\Server\Model\ElementRequest**](../Model/ElementRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getAccessTokenDeprecated**
> OpenAPI\Server\Model\IfcAccessToken getAccessTokenDeprecated($cloudPk, $ifcPk, $projectPk, $token)

Retrieve one token created for this model

Retrieve one token created for this model  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getAccessTokenDeprecated
     */
    public function getAccessTokenDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $token, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **token** | **string**|  |

### Return type

[**OpenAPI\Server\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getAccessTokensDeprecated**
> OpenAPI\Server\Model\IfcAccessToken getAccessTokensDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all tokens created for this model

Retrieve all tokens created for this model  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getAccessTokensDeprecated
     */
    public function getAccessTokensDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getBuildingDeprecated**
> OpenAPI\Server\Model\Building getBuildingDeprecated($cloudPk, $ifcPk, $projectPk, $uuid)

Retrieve a building of a model

Retrieve a building of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getBuildingDeprecated
     */
    public function getBuildingDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getBuildingPlanPositioningDeprecated**
> OpenAPI\Server\Model\PositioningPlan getBuildingPlanPositioningDeprecated($buildingUuid, $cloudPk, $id, $ifcPk, $projectPk)

Retrieve the postioning of the plan in the building

Retrieve the postioning of the plan in the building  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getBuildingPlanPositioningDeprecated
     */
    public function getBuildingPlanPositioningDeprecated(string $buildingUuid, int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buildingUuid** | **string**|  |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this element. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PositioningPlan**](../Model/PositioningPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getBuildingsDeprecated**
> OpenAPI\Server\Model\Building getBuildingsDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all buildings of a model

Retrieve all buildings of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getBuildingsDeprecated
     */
    public function getBuildingsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCheckerDeprecated**
> OpenAPI\Server\Model\IfcChecker getCheckerDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve a checker of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:read, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getCheckerDeprecated
     */
    public function getCheckerDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ifc checker. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCheckerResultDeprecated**
> OpenAPI\Server\Model\CheckerResult getCheckerResultDeprecated($checkerPk, $cloudPk, $id, $ifcPk, $projectPk)

Retrieve one CheckerResult

Retrieve one CheckerResult  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getCheckerResultDeprecated
     */
    public function getCheckerResultDeprecated(int $checkerPk, int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this checker result. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCheckerResultsDeprecated**
> OpenAPI\Server\Model\CheckerResult getCheckerResultsDeprecated($checkerPk, $cloudPk, $ifcPk, $projectPk)

Retrieve all CheckerResults

Retrieve all CheckerResults  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getCheckerResultsDeprecated
     */
    public function getCheckerResultsDeprecated(int $checkerPk, int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCheckersDeprecated**
> OpenAPI\Server\Model\IfcChecker getCheckersDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all checkers of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:read, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getCheckersDeprecated
     */
    public function getCheckersDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getClassificationsOfElementDeprecated**
> OpenAPI\Server\Model\Classification getClassificationsOfElementDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk)

Retrieve all classifications of an element

Retrieve all classifications of an element  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getClassificationsOfElementDeprecated
     */
    public function getClassificationsOfElementDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Classification**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getDocumentsOfElementDeprecated**
> OpenAPI\Server\Model\Document getDocumentsOfElementDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk)

Retrieve all documents of an element

Retrieve all documents of an element  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getDocumentsOfElementDeprecated
     */
    public function getDocumentsOfElementDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementDeprecated**
> OpenAPI\Server\Model\Element getElementDeprecated($cloudPk, $ifcPk, $projectPk, $uuid)

Retrieve an element of a model

Retrieve an element of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementDeprecated
     */
    public function getElementDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementLinkedDocumentsDeprecated**
> OpenAPI\Server\Model\DocumentWithElementList getElementLinkedDocumentsDeprecated($cloudPk, $ifcPk, $projectPk, $classification, $classificationNotation, $type)

Retrieve all documents linked to any element

Retrieve all documents linked to any element with the list of uuids  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementLinkedDocumentsDeprecated
     */
    public function getElementLinkedDocumentsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **classification** | **string**|  | [optional]
 **classificationNotation** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\DocumentWithElementList**](../Model/DocumentWithElementList.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementPropertySetDeprecated**
> OpenAPI\Server\Model\PropertySet getElementPropertySetDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk)

Retrieve a PropertySet of an element

Retrieve a PropertySet of an element  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementPropertySetDeprecated
     */
    public function getElementPropertySetDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifcPk** | **int**|  |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementPropertySetPropertiesDeprecated**
> OpenAPI\Server\Model\Property getElementPropertySetPropertiesDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk, $propertysetPk)

Retrieve all Properties of a PropertySet

Retrieve all Properties of a PropertySet  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementPropertySetPropertiesDeprecated
     */
    public function getElementPropertySetPropertiesDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementPropertySetPropertyDefinitionDeprecated**
> OpenAPI\Server\Model\PropertyDefinition getElementPropertySetPropertyDefinitionDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk, $propertyPk, $propertysetPk)

Retrieve a Definition of a Property

Retrieve a Definition of a Property  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementPropertySetPropertyDefinitionDeprecated
     */
    public function getElementPropertySetPropertyDefinitionDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int $propertyPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyPk** | **int**| A unique integer value identifying this property. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |

### Return type

[**OpenAPI\Server\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementPropertySetPropertyDefinitionUnitDeprecated**
> OpenAPI\Server\Model\Unit getElementPropertySetPropertyDefinitionUnitDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk, $propertyPk, $propertydefinitionPk, $propertysetPk)

Retrieve a Unit of a Definition

Retrieve a Unit of a Definition  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementPropertySetPropertyDefinitionUnitDeprecated
     */
    public function getElementPropertySetPropertyDefinitionUnitDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int $propertyPk, int $propertydefinitionPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyPk** | **int**| A unique integer value identifying this property. |
 **propertydefinitionPk** | **int**| A unique integer value identifying this property definition. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |

### Return type

[**OpenAPI\Server\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementPropertySetPropertyDefinitionUnitsDeprecated**
> OpenAPI\Server\Model\Unit getElementPropertySetPropertyDefinitionUnitsDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk, $propertyPk, $propertydefinitionPk, $propertysetPk)

Retrieve all Units of a Definition

Retrieve all Units of a Definition  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementPropertySetPropertyDefinitionUnitsDeprecated
     */
    public function getElementPropertySetPropertyDefinitionUnitsDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int $propertyPk, int $propertydefinitionPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyPk** | **int**| A unique integer value identifying this property. |
 **propertydefinitionPk** | **int**| A unique integer value identifying this property definition. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |

### Return type

[**OpenAPI\Server\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementPropertySetPropertyDefinitionsDeprecated**
> OpenAPI\Server\Model\PropertyDefinition getElementPropertySetPropertyDefinitionsDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk, $propertyPk, $propertysetPk)

Retrieve all Definitions of a PropertySet

Retrieve all Definitions of a PropertySet  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementPropertySetPropertyDefinitionsDeprecated
     */
    public function getElementPropertySetPropertyDefinitionsDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int $propertyPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyPk** | **int**| A unique integer value identifying this property. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |

### Return type

[**OpenAPI\Server\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementPropertySetPropertyDeprecated**
> OpenAPI\Server\Model\Property getElementPropertySetPropertyDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk, $propertysetPk)

Retrieve a Property of a PropertySet

Retrieve a Property of a PropertySet  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementPropertySetPropertyDeprecated
     */
    public function getElementPropertySetPropertyDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementPropertySetsDeprecated**
> OpenAPI\Server\Model\PropertySet getElementPropertySetsDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk)

Retrieve all PropertySets of an element

Retrieve all PropertySets of an element  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementPropertySetsDeprecated
     */
    public function getElementPropertySetsDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**|  |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementsDeprecated**
> OpenAPI\Server\Model\Element getElementsDeprecated($cloudPk, $ifcPk, $projectPk, $classification, $classificationNotation, $type)

Retrieve all elements of a model

Retrieve all elements of a model. If not filtered, the json may be very large. To efficently retrieve all elements and their data, see getRawElements  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementsDeprecated
     */
    public function getElementsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **classification** | **string**|  | [optional]
 **classificationNotation** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementsFromClassificationDeprecated**
> OpenAPI\Server\Model\Element getElementsFromClassificationDeprecated($cloudPk, $ifcPk, $modelClassificationPk, $projectPk)

Retrieve all elements with the classification

Retrieve all elements with the classification  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getElementsFromClassificationDeprecated
     */
    public function getElementsFromClassificationDeprecated(int $cloudPk, int $ifcPk, int $modelClassificationPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **modelClassificationPk** | **int**| A unique integer value identifying this classification. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcClassificationsDeprecated**
> OpenAPI\Server\Model\Classification getIfcClassificationsDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all classifications in a model

Retrieve all classifications in a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcClassificationsDeprecated
     */
    public function getIfcClassificationsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **ifcPk** | **int**|  |
 **projectPk** | **int**|  |

### Return type

[**OpenAPI\Server\Model\Classification**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcDeprecated**
> OpenAPI\Server\Model\Model getIfcDeprecated($cloudPk, $id, $projectPk)

Retrieve one model

Retrieve one model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcDeprecated
     */
    public function getIfcDeprecated(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |

### Return type

[**OpenAPI\Server\Model\Model**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcMaterialDeprecated**
> OpenAPI\Server\Model\Material getIfcMaterialDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve a material of a model

Retrieve a material of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcMaterialDeprecated
     */
    public function getIfcMaterialDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this material. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcMaterialsDeprecated**
> OpenAPI\Server\Model\Material getIfcMaterialsDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all materials of a model

Retrieve all materials of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcMaterialsDeprecated
     */
    public function getIfcMaterialsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcPropertiesDeprecated**
> OpenAPI\Server\Model\Property getIfcPropertiesDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all Properties of a model

Retrieve all PropertySets of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcPropertiesDeprecated
     */
    public function getIfcPropertiesDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcPropertyDefinitionDeprecated**
> OpenAPI\Server\Model\PropertyDefinition getIfcPropertyDefinitionDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve a PropertyDefinition of a model

Retrieve a PropertyDefinition of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcPropertyDefinitionDeprecated
     */
    public function getIfcPropertyDefinitionDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcPropertyDefinitionsDeprecated**
> OpenAPI\Server\Model\PropertyDefinition getIfcPropertyDefinitionsDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all PropertyDefinitions of a model

Retrieve all PropertyDefinitions of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcPropertyDefinitionsDeprecated
     */
    public function getIfcPropertyDefinitionsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcPropertyDeprecated**
> OpenAPI\Server\Model\Property getIfcPropertyDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve a Property of a model

Retrieve a Property of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcPropertyDeprecated
     */
    public function getIfcPropertyDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this property. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcUnitDeprecated**
> OpenAPI\Server\Model\Unit getIfcUnitDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve a Unit of a model

Retrieve a Unit of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcUnitDeprecated
     */
    public function getIfcUnitDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcUnitsDeprecated**
> OpenAPI\Server\Model\Unit getIfcUnitsDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all Units of a model

Retrieve all Units of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcUnitsDeprecated
     */
    public function getIfcUnitsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getIfcsDeprecated**
> OpenAPI\Server\Model\Model getIfcsDeprecated($cloudPk, $projectPk, $source, $status, $type)

Retrieve all models

Retrieve all models. The field `type` allows you to discriminate which kind of model it is.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getIfcsDeprecated
     */
    public function getIfcsDeprecated(int $cloudPk, int $projectPk, ?string $source, ?array $status, ?array $type, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **projectPk** | **int**|  |
 **source** | **string**|  | [optional]
 **status** | [**string**](../Model/string.md)|  | [optional]
 **type** | [**string**](../Model/string.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Model**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getLayerDeprecated**
> OpenAPI\Server\Model\Layer getLayerDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve a layer of a model

Retrieve a layer of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getLayerDeprecated
     */
    public function getLayerDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this layer. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Layer**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getLayersDeprecated**
> OpenAPI\Server\Model\Layer getLayersDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all layers of a model

Retrieve all layers of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getLayersDeprecated
     */
    public function getLayersDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Layer**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getMaterialDeprecated**
> OpenAPI\Server\Model\Material getMaterialDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk)

Retrieve a material of a model

Retrieve a material of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getMaterialDeprecated
     */
    public function getMaterialDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this material. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getMaterialsDeprecated**
> OpenAPI\Server\Model\Material getMaterialsDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk)

Retrieve all materials of a model

Retrieve all materials of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getMaterialsDeprecated
     */
    public function getMaterialsDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProcessorHandlerDeprecated**
> OpenAPI\Server\Model\ProcessorHandler getProcessorHandlerDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve a processor handler

Retrieve a processor handler  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getProcessorHandlerDeprecated
     */
    public function getProcessorHandlerDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this processor handler. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProcessorHandlersDeprecated**
> OpenAPI\Server\Model\ProcessorHandler getProcessorHandlersDeprecated($cloudPk, $ifcPk, $projectPk)

Get all processor handlers

Get all processor handlers  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getProcessorHandlersDeprecated
     */
    public function getProcessorHandlersDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getPropertySetDeprecated**
> OpenAPI\Server\Model\PropertySet getPropertySetDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve a PropertySet of a model

Retrieve a PropertySet of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getPropertySetDeprecated
     */
    public function getPropertySetDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getPropertySetsDeprecated**
> OpenAPI\Server\Model\PropertySet getPropertySetsDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all PropertySets of a model

Retrieve all PropertySets of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getPropertySetsDeprecated
     */
    public function getPropertySetsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getRawElementsDeprecated**
> OpenAPI\Server\Model\RawElements getRawElementsDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all elements in a optimized format

Instead of a nested representation, this route respond with a flat structure and indices pointing to related object. The IFC file will not be updated. The created elements will be accessible over the API and when exporting an IFC file. Returns elements, property_sets, properties, definitions and units in a JSON optimized structure  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getRawElementsDeprecated
     */
    public function getRawElementsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\RawElements**](../Model/RawElements.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSimpleElementDeprecated**
> OpenAPI\Server\Model\SimpleElement getSimpleElementDeprecated($cloudPk, $ifcPk, $projectPk, $uuid)

Retrieve an element of a model with a simple value representation

Retrieve an element of a model with a simple value representation  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getSimpleElementDeprecated
     */
    public function getSimpleElementDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\SimpleElement**](../Model/SimpleElement.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSimpleElementsDeprecated**
> OpenAPI\Server\Model\SimpleElement getSimpleElementsDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all elements of a model with a simple value representation

Retrieve all elements of a model with a simple value representation  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getSimpleElementsDeprecated
     */
    public function getSimpleElementsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\SimpleElement**](../Model/SimpleElement.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSpaceDeprecated**
> OpenAPI\Server\Model\Space getSpaceDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve one space of the model

Retrieve one space of the model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getSpaceDeprecated
     */
    public function getSpaceDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this space. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Space**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSpacesDeprecated**
> OpenAPI\Server\Model\Space getSpacesDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all spaces of the model

Retrieve all spaces of the model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getSpacesDeprecated
     */
    public function getSpacesDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Space**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getStoreyDeprecated**
> OpenAPI\Server\Model\Storey getStoreyDeprecated($cloudPk, $ifcPk, $projectPk, $uuid)

Retrieve a storey of a model

Retrieve a storey of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getStoreyDeprecated
     */
    public function getStoreyDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getStoreyPlanPositioningDeprecated**
> OpenAPI\Server\Model\PositioningPlan getStoreyPlanPositioningDeprecated($cloudPk, $id, $ifcPk, $projectPk, $storeyUuid)

Retrieve the postioning of the plan in the storey

Retrieve the postioning of the plan in the storey  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getStoreyPlanPositioningDeprecated
     */
    public function getStoreyPlanPositioningDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, string $storeyUuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this element. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **storeyUuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\PositioningPlan**](../Model/PositioningPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getStoreysDeprecated**
> OpenAPI\Server\Model\Storey getStoreysDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all storeys of a model

Retrieve all storeys of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getStoreysDeprecated
     */
    public function getStoreysDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSystemDeprecated**
> OpenAPI\Server\Model\System getSystemDeprecated($cloudPk, $ifcPk, $projectPk, $uuid)

Retrieve a system of a model

Retrieve a system of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getSystemDeprecated
     */
    public function getSystemDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\System**](../Model/System.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSystemsDeprecated**
> OpenAPI\Server\Model\System getSystemsDeprecated($cloudPk, $ifcPk, $projectPk)

Retrieve all systems of a model

Retrieve all systems of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getSystemsDeprecated
     */
    public function getSystemsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\System**](../Model/System.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getTilesetDeprecated**
> getTilesetDeprecated($cloudPk, $id, $projectPk, $tileFormat)

Retrieve the tileset of the model

This is only availble if the model is a POINT_CLOUD  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getTilesetDeprecated
     */
    public function getTilesetDeprecated(int $cloudPk, int $id, int $projectPk, string $tileFormat, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |
 **tileFormat** | **string**|  | [optional] [default to &#39;pnts&#39;]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getZoneDeprecated**
> OpenAPI\Server\Model\Zone getZoneDeprecated($cloudPk, $id, $ifcPk, $projectPk)

Retrieve one zone of a model

Retrieve one zone of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getZoneDeprecated
     */
    public function getZoneDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this zone. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Zone**](../Model/Zone.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getZoneSpaceDeprecated**
> OpenAPI\Server\Model\ZoneSpace getZoneSpaceDeprecated($cloudPk, $id, $ifcPk, $projectPk, $zonePk)

Retrieve one space of a zone

Retrieve one space of a zone  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getZoneSpaceDeprecated
     */
    public function getZoneSpaceDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int $zonePk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this space. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **zonePk** | **int**| A unique integer value identifying this zone. |

### Return type

[**OpenAPI\Server\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getZoneSpacesDeprecated**
> OpenAPI\Server\Model\ZoneSpace getZoneSpacesDeprecated($cloudPk, $ifcPk, $projectPk, $zonePk)

Retrieve all spaces of a zone

Retrieve all spaces of a zone  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getZoneSpacesDeprecated
     */
    public function getZoneSpacesDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int $zonePk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **zonePk** | **int**| A unique integer value identifying this zone. |

### Return type

[**OpenAPI\Server\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getZonesDeprecated**
> OpenAPI\Server\Model\Zone getZonesDeprecated($cloudPk, $ifcPk, $projectPk, $color)

Retrieve zones of a model

Retrieve parent zones of a model. Children zones we'll be in the 'zones' field  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#getZonesDeprecated
     */
    public function getZonesDeprecated(int $cloudPk, int $ifcPk, int $projectPk, ?string $color, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **color** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Zone**](../Model/Zone.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **launchNewCheckDeprecated**
> launchNewCheckDeprecated($cloudPk, $id, $ifcPk, $projectPk, $ifcCheckerRequest)

Launch a new check on the model

A nex check will be played with the current state of elements, properties, etc.  Required scopes: check:write, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#launchNewCheckDeprecated
     */
    public function launchNewCheckDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?IfcCheckerRequest $ifcCheckerRequest, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ifc checker. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **ifcCheckerRequest** | [**OpenAPI\Server\Model\IfcCheckerRequest**](../Model/IfcCheckerRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **linkDocumentsOfElementDeprecated**
> OpenAPI\Server\Model\Document linkDocumentsOfElementDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk, $requestBody)

Link one or many documents to an element

Bulk relation create available. You can either post an id or a list of ids. Is you post a list, the response will be a list (in the same order) of created relation or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#linkDocumentsOfElementDeprecated
     */
    public function linkDocumentsOfElementDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, array $requestBody, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **requestBody** | [**int**](../Model/int.md)|  |

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **listClassificationElementRelationsDeprecated**
> OpenAPI\Server\Model\ElementClassificationRelation listClassificationElementRelationsDeprecated($cloudPk, $ifcPk, $projectPk)

List all associations between classifications and elements

List all associations between classifications and elements  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#listClassificationElementRelationsDeprecated
     */
    public function listClassificationElementRelationsDeprecated(int $cloudPk, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\ElementClassificationRelation**](../Model/ElementClassificationRelation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mergeIfcsDeprecated**
> mergeIfcsDeprecated($cloudPk, $projectPk, $ifcMergeRequest)

Merge IFC files

Only works for IFC files. Merge IFC files. The merged IFC file will be put in the same folder that the first IFC of the list  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#mergeIfcsDeprecated
     */
    public function mergeIfcsDeprecated(int $cloudPk, int $projectPk, IfcMergeRequest $ifcMergeRequest, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **projectPk** | **int**|  |
 **ifcMergeRequest** | [**OpenAPI\Server\Model\IfcMergeRequest**](../Model/IfcMergeRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **optimizeIfcDeprecated**
> optimizeIfcDeprecated($cloudPk, $id, $projectPk, $ifcOptimizeRequest)

Optimize the IFC

Only works for IFC files. Optimize the IFC. A new optimized IFC file will be put in the same folder that the original IFC  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#optimizeIfcDeprecated
     */
    public function optimizeIfcDeprecated(int $cloudPk, int $id, int $projectPk, ?IfcOptimizeRequest $ifcOptimizeRequest, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |
 **ifcOptimizeRequest** | [**OpenAPI\Server\Model\IfcOptimizeRequest**](../Model/IfcOptimizeRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeAllElementPropertySetDeprecated**
> removeAllElementPropertySetDeprecated($cloudPk, $elementUuid, $ifcPk, $projectPk)

Remove all property sets from element

Remove all property sets from element. Property Sets will not be deleted, just detached from element  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#removeAllElementPropertySetDeprecated
     */
    public function removeAllElementPropertySetDeprecated(int $cloudPk, string $elementUuid, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **ifcPk** | **int**|  |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeClassificationOfElementDeprecated**
> removeClassificationOfElementDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk)

Remove a classification from an element

The classification will not be deleted  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#removeClassificationOfElementDeprecated
     */
    public function removeClassificationOfElementDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this classification. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeDocumentOfElementDeprecated**
> removeDocumentOfElementDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk)

Remove a documents from an element

The document will not be deleted  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#removeDocumentOfElementDeprecated
     */
    public function removeDocumentOfElementDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this document. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeElementPropertySetDeprecated**
> removeElementPropertySetDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk)

Remove a PropertySet from an element

Delete the relation between the element and the property set. Does not delete any object  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#removeElementPropertySetDeprecated
     */
    public function removeElementPropertySetDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifcPk** | **int**|  |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeElementPropertySetPropertyDefinitionDeprecated**
> removeElementPropertySetPropertyDefinitionDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk, $propertyPk, $propertysetPk)

Delete a Definition to a Property

Delete a Definition to a Property  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#removeElementPropertySetPropertyDefinitionDeprecated
     */
    public function removeElementPropertySetPropertyDefinitionDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int $propertyPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyPk** | **int**| A unique integer value identifying this property. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeElementPropertySetPropertyDefinitionUnitDeprecated**
> removeElementPropertySetPropertyDefinitionUnitDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk, $propertyPk, $propertydefinitionPk, $propertysetPk)

Remove a Unit from a Definition

Remove a Unit from a Definition  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#removeElementPropertySetPropertyDefinitionUnitDeprecated
     */
    public function removeElementPropertySetPropertyDefinitionUnitDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int $propertyPk, int $propertydefinitionPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertyPk** | **int**| A unique integer value identifying this property. |
 **propertydefinitionPk** | **int**| A unique integer value identifying this property definition. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeElementPropertySetPropertyDeprecated**
> removeElementPropertySetPropertyDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk, $propertysetPk)

Remove a property from a PropertySet

Remove a property from a PropertySet  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#removeElementPropertySetPropertyDeprecated
     */
    public function removeElementPropertySetPropertyDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeElementsFromClassificationDeprecated**
> removeElementsFromClassificationDeprecated($cloudPk, $ifcPk, $modelClassificationPk, $projectPk, $uuid)

Remove the classification from all elements

Remove the classification from all elements. No element nor classification will be deleted  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#removeElementsFromClassificationDeprecated
     */
    public function removeElementsFromClassificationDeprecated(int $cloudPk, int $ifcPk, int $modelClassificationPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **modelClassificationPk** | **int**| A unique integer value identifying this classification. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **reprocessIfcDeprecated**
> reprocessIfcDeprecated($cloudPk, $id, $projectPk)

Reprocess Model file

Reprocess the model. All data that are not in the original model files will be lost  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#reprocessIfcDeprecated
     */
    public function reprocessIfcDeprecated(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateAccessTokenDeprecated**
> OpenAPI\Server\Model\IfcAccessToken updateAccessTokenDeprecated($cloudPk, $ifcPk, $projectPk, $token, $patchedIfcAccessTokenRequest)

Update some fields of a token

You can update the expiration date or the read_only field  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateAccessTokenDeprecated
     */
    public function updateAccessTokenDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $token, ?PatchedIfcAccessTokenRequest $patchedIfcAccessTokenRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **token** | **string**|  |
 **patchedIfcAccessTokenRequest** | [**OpenAPI\Server\Model\PatchedIfcAccessTokenRequest**](../Model/PatchedIfcAccessTokenRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateBuildingDeprecated**
> OpenAPI\Server\Model\Building updateBuildingDeprecated($cloudPk, $ifcPk, $projectPk, $uuid, $patchedStoreyBuildingRequest)

Update some fields of a building

Update some fields of a building  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateBuildingDeprecated
     */
    public function updateBuildingDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, ?PatchedStoreyBuildingRequest $patchedStoreyBuildingRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |
 **patchedStoreyBuildingRequest** | [**OpenAPI\Server\Model\PatchedStoreyBuildingRequest**](../Model/PatchedStoreyBuildingRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateBuildingPlanPositioningDeprecated**
> OpenAPI\Server\Model\PositioningPlan updateBuildingPlanPositioningDeprecated($buildingUuid, $cloudPk, $id, $ifcPk, $projectPk, $patchedPositioningPlanRequest)

Update the postioning of the plan in the building

Update the postioning of the plan in the building  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateBuildingPlanPositioningDeprecated
     */
    public function updateBuildingPlanPositioningDeprecated(string $buildingUuid, int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedPositioningPlanRequest $patchedPositioningPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buildingUuid** | **string**|  |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this element. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedPositioningPlanRequest** | [**OpenAPI\Server\Model\PatchedPositioningPlanRequest**](../Model/PatchedPositioningPlanRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\PositioningPlan**](../Model/PositioningPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateCheckerDeprecated**
> OpenAPI\Server\Model\IfcChecker updateCheckerDeprecated($cloudPk, $id, $ifcPk, $projectPk, $patchedIfcCheckerRequest)

Update some fields of a checker of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:write, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateCheckerDeprecated
     */
    public function updateCheckerDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedIfcCheckerRequest $patchedIfcCheckerRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ifc checker. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedIfcCheckerRequest** | [**OpenAPI\Server\Model\PatchedIfcCheckerRequest**](../Model/PatchedIfcCheckerRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateCheckerResultDeprecated**
> OpenAPI\Server\Model\CheckerResult updateCheckerResultDeprecated($checkerPk, $cloudPk, $id, $ifcPk, $projectPk, $patchedCheckerResultRequest)

Update some fields of a CheckerResult

Update some fields of a CheckerResult  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateCheckerResultDeprecated
     */
    public function updateCheckerResultDeprecated(int $checkerPk, int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedCheckerResultRequest $patchedCheckerResultRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this checker result. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedCheckerResultRequest** | [**OpenAPI\Server\Model\PatchedCheckerResultRequest**](../Model/PatchedCheckerResultRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateElementDeprecated**
> OpenAPI\Server\Model\Element updateElementDeprecated($cloudPk, $ifcPk, $projectPk, $uuid, $patchedElementRequest)

Update some fields of an element

Update some fields of an element. The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateElementDeprecated
     */
    public function updateElementDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, ?PatchedElementRequest $patchedElementRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |
 **patchedElementRequest** | [**OpenAPI\Server\Model\PatchedElementRequest**](../Model/PatchedElementRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateElementPropertySetPropertyDeprecated**
> OpenAPI\Server\Model\Property updateElementPropertySetPropertyDeprecated($cloudPk, $elementUuid, $id, $ifcPk, $projectPk, $propertysetPk, $patchedPropertyRequest)

Update a property from an element

Update a property value from an element. If the element is the only one to have this property, the property will be update in place. If many elements share this property, a new property will be created to replace the property for this element. Keeping the property for all other elements. If you want to update the property of all elements, see updateIfcProperty  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateElementPropertySetPropertyDeprecated
     */
    public function updateElementPropertySetPropertyDeprecated(int $cloudPk, string $elementUuid, int $id, int $ifcPk, int $projectPk, int $propertysetPk, ?PatchedPropertyRequest $patchedPropertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **elementUuid** | **string**|  |
 **id** | **int**| A unique integer value identifying this property. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **propertysetPk** | **int**| A unique integer value identifying this property set. |
 **patchedPropertyRequest** | [**OpenAPI\Server\Model\PatchedPropertyRequest**](../Model/PatchedPropertyRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateIfcDeprecated**
> OpenAPI\Server\Model\Model updateIfcDeprecated($cloudPk, $id, $projectPk, $patchedModelRequest)

Update some fields of a model

Update some fields of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateIfcDeprecated
     */
    public function updateIfcDeprecated(int $cloudPk, int $id, int $projectPk, ?PatchedModelRequest $patchedModelRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |
 **patchedModelRequest** | [**OpenAPI\Server\Model\PatchedModelRequest**](../Model/PatchedModelRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Model**](../Model/Model.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateIfcFilesDeprecated**
> OpenAPI\Server\Model\ModelFiles updateIfcFilesDeprecated($cloudPk, $id, $projectPk, $structureFile, $systemsFile, $mapFile, $gltfFile, $gltfWithOpeningsFile, $bvhTreeFile, $previewFile, $xktFile)

Update models file (gltf, svg, structure, etc)

This route does not accept JSON, only files as x-www-form-urlencoded  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateIfcFilesDeprecated
     */
    public function updateIfcFilesDeprecated(int $cloudPk, int $id, int $projectPk, ?UploadedFile $structureFile, ?UploadedFile $systemsFile, ?UploadedFile $mapFile, ?UploadedFile $gltfFile, ?UploadedFile $gltfWithOpeningsFile, ?UploadedFile $bvhTreeFile, ?UploadedFile $previewFile, ?UploadedFile $xktFile, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**|  |
 **structureFile** | **UploadedFile****UploadedFile**|  | [optional]
 **systemsFile** | **UploadedFile****UploadedFile**|  | [optional]
 **mapFile** | **UploadedFile****UploadedFile**|  | [optional]
 **gltfFile** | **UploadedFile****UploadedFile**|  | [optional]
 **gltfWithOpeningsFile** | **UploadedFile****UploadedFile**|  | [optional]
 **bvhTreeFile** | **UploadedFile****UploadedFile**|  | [optional]
 **previewFile** | **UploadedFile****UploadedFile**|  | [optional]
 **xktFile** | **UploadedFile****UploadedFile**|  | [optional]

### Return type

[**OpenAPI\Server\Model\ModelFiles**](../Model/ModelFiles.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateIfcPropertyDefinitionDeprecated**
> OpenAPI\Server\Model\PropertyDefinition updateIfcPropertyDefinitionDeprecated($cloudPk, $id, $ifcPk, $projectPk, $patchedPropertyDefinitionRequest)

Update some fields of many PropertyDefinitions of a model

Update some fields of many PropertyDefinitions of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateIfcPropertyDefinitionDeprecated
     */
    public function updateIfcPropertyDefinitionDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedPropertyDefinitionRequest $patchedPropertyDefinitionRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this property definition. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedPropertyDefinitionRequest** | [**OpenAPI\Server\Model\PatchedPropertyDefinitionRequest**](../Model/PatchedPropertyDefinitionRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateIfcPropertyDeprecated**
> OpenAPI\Server\Model\Property updateIfcPropertyDeprecated($cloudPk, $id, $ifcPk, $projectPk, $patchedPropertyRequest)

Update some fields of a Property

Update some fields of a Property  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateIfcPropertyDeprecated
     */
    public function updateIfcPropertyDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedPropertyRequest $patchedPropertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this property. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedPropertyRequest** | [**OpenAPI\Server\Model\PatchedPropertyRequest**](../Model/PatchedPropertyRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateIfcUnitDeprecated**
> OpenAPI\Server\Model\Unit updateIfcUnitDeprecated($cloudPk, $id, $ifcPk, $projectPk, $patchedUnitRequest)

Update some fields of a Unit of a model

Update some fields of a Unit of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateIfcUnitDeprecated
     */
    public function updateIfcUnitDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedUnitRequest $patchedUnitRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this unit. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedUnitRequest** | [**OpenAPI\Server\Model\PatchedUnitRequest**](../Model/PatchedUnitRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateLayerDeprecated**
> OpenAPI\Server\Model\Layer updateLayerDeprecated($cloudPk, $id, $ifcPk, $projectPk, $patchedLayerRequest)

Update some fields of a layer

Update some fields of a layer. The IFC file will not be updated. The created layer will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateLayerDeprecated
     */
    public function updateLayerDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedLayerRequest $patchedLayerRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this layer. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedLayerRequest** | [**OpenAPI\Server\Model\PatchedLayerRequest**](../Model/PatchedLayerRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Layer**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateOrderBuildingPlanDeprecated**
> OpenAPI\Server\Model\Storey updateOrderBuildingPlanDeprecated($buildingUuid, $cloudPk, $ifcPk, $projectPk, $requestBody)

Update order of all plan of a building

Update order of all plan of a building  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateOrderBuildingPlanDeprecated
     */
    public function updateOrderBuildingPlanDeprecated(string $buildingUuid, int $cloudPk, int $ifcPk, int $projectPk, array $requestBody, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buildingUuid** | **string**|  |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **requestBody** | [**int**](../Model/int.md)|  |

### Return type

[**OpenAPI\Server\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateOrderStoreyPlanDeprecated**
> OpenAPI\Server\Model\Storey updateOrderStoreyPlanDeprecated($cloudPk, $ifcPk, $projectPk, $storeyUuid, $requestBody)

Update order of all plan of a storey

Update order of all plan of a storey  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateOrderStoreyPlanDeprecated
     */
    public function updateOrderStoreyPlanDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $storeyUuid, array $requestBody, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **storeyUuid** | **string**|  |
 **requestBody** | [**int**](../Model/int.md)|  |

### Return type

[**OpenAPI\Server\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateOrderStoreysDeprecated**
> OpenAPI\Server\Model\Storey updateOrderStoreysDeprecated($cloudPk, $ifcPk, $projectPk, $requestBody)

Update order of all storey of a model

Update order of all storey of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateOrderStoreysDeprecated
     */
    public function updateOrderStoreysDeprecated(int $cloudPk, int $ifcPk, int $projectPk, array $requestBody, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **requestBody** | [**string**](../Model/string.md)|  |

### Return type

[**OpenAPI\Server\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateProcessorHandlerDeprecated**
> OpenAPI\Server\Model\ProcessorHandler updateProcessorHandlerDeprecated($cloudPk, $id, $ifcPk, $projectPk, $patchedProcessorHandlerRequest)

Update the status of a processor handler

Update the status of a processor handler  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateProcessorHandlerDeprecated
     */
    public function updateProcessorHandlerDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedProcessorHandlerRequest $patchedProcessorHandlerRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this processor handler. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedProcessorHandlerRequest** | [**OpenAPI\Server\Model\PatchedProcessorHandlerRequest**](../Model/PatchedProcessorHandlerRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updatePropertySetDeprecated**
> OpenAPI\Server\Model\PropertySet updatePropertySetDeprecated($cloudPk, $id, $ifcPk, $projectPk, $patchedPropertySetRequest)

Update some fields of a PropertySet

Update some fields of a PropertySet  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updatePropertySetDeprecated
     */
    public function updatePropertySetDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedPropertySetRequest $patchedPropertySetRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this property set. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedPropertySetRequest** | [**OpenAPI\Server\Model\PatchedPropertySetRequest**](../Model/PatchedPropertySetRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateSpaceDeprecated**
> OpenAPI\Server\Model\Space updateSpaceDeprecated($cloudPk, $id, $ifcPk, $projectPk, $patchedSpaceRequest)

Update some fields of a space

Update some fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateSpaceDeprecated
     */
    public function updateSpaceDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedSpaceRequest $patchedSpaceRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this space. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedSpaceRequest** | [**OpenAPI\Server\Model\PatchedSpaceRequest**](../Model/PatchedSpaceRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Space**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateStoreyDeprecated**
> OpenAPI\Server\Model\Storey updateStoreyDeprecated($cloudPk, $ifcPk, $projectPk, $uuid, $patchedStoreyBuildingRequest)

Update some fields of a storey

Update some fields of a storey  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateStoreyDeprecated
     */
    public function updateStoreyDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, ?PatchedStoreyBuildingRequest $patchedStoreyBuildingRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |
 **patchedStoreyBuildingRequest** | [**OpenAPI\Server\Model\PatchedStoreyBuildingRequest**](../Model/PatchedStoreyBuildingRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateStoreyPlanPositioningDeprecated**
> OpenAPI\Server\Model\PositioningPlan updateStoreyPlanPositioningDeprecated($cloudPk, $id, $ifcPk, $projectPk, $storeyUuid, $patchedPositioningPlanRequest)

Update the postioning of the plan in the storey

Update the postioning of the plan in the storey  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateStoreyPlanPositioningDeprecated
     */
    public function updateStoreyPlanPositioningDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, string $storeyUuid, ?PatchedPositioningPlanRequest $patchedPositioningPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this element. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **storeyUuid** | **string**|  |
 **patchedPositioningPlanRequest** | [**OpenAPI\Server\Model\PatchedPositioningPlanRequest**](../Model/PatchedPositioningPlanRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\PositioningPlan**](../Model/PositioningPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateSystemDeprecated**
> OpenAPI\Server\Model\System updateSystemDeprecated($cloudPk, $ifcPk, $projectPk, $uuid, $patchedSystemRequest)

Update some fields of a system

Update some fields of a system. The IFC file will not be updated. The created system will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateSystemDeprecated
     */
    public function updateSystemDeprecated(int $cloudPk, int $ifcPk, int $projectPk, string $uuid, ?PatchedSystemRequest $patchedSystemRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **uuid** | **string**|  |
 **patchedSystemRequest** | [**OpenAPI\Server\Model\PatchedSystemRequest**](../Model/PatchedSystemRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\System**](../Model/System.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateZoneDeprecated**
> OpenAPI\Server\Model\Zone updateZoneDeprecated($cloudPk, $id, $ifcPk, $projectPk, $patchedZoneRequest)

Update some fields of a zone

Update some fields of a zone. The IFC file will not be updated. The created zone will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateZoneDeprecated
     */
    public function updateZoneDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, ?PatchedZoneRequest $patchedZoneRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this zone. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedZoneRequest** | [**OpenAPI\Server\Model\PatchedZoneRequest**](../Model/PatchedZoneRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Zone**](../Model/Zone.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateZoneSpaceDeprecated**
> OpenAPI\Server\Model\ZoneSpace updateZoneSpaceDeprecated($cloudPk, $id, $ifcPk, $projectPk, $zonePk, $patchedZoneSpaceRequest)

Update some fields of a space

Update some fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/IfcApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\IfcApiInterface;

class IfcApi implements IfcApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of IfcApiInterface#updateZoneSpaceDeprecated
     */
    public function updateZoneSpaceDeprecated(int $cloudPk, int $id, int $ifcPk, int $projectPk, int $zonePk, ?PatchedZoneSpaceRequest $patchedZoneSpaceRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this space. |
 **ifcPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **zonePk** | **int**| A unique integer value identifying this zone. |
 **patchedZoneSpaceRequest** | [**OpenAPI\Server\Model\PatchedZoneSpaceRequest**](../Model/PatchedZoneSpaceRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\ZoneSpace**](../Model/ZoneSpace.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

