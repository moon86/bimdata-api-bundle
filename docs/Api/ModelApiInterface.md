# OpenAPI\Server\Api\ModelApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addModelErrors**](ModelApiInterface.md#addModelErrors) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/errors | Add errors to model
[**bulkDeleteModelClassifications**](ModelApiInterface.md#bulkDeleteModelClassifications) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/list_destroy | Remove all classifications from model&#39;s elements
[**bulkDeleteModelProperties**](ModelApiInterface.md#bulkDeleteModelProperties) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/bulk_destroy | Delete many Property of a model
[**bulkDeleteModelPropertyDefinitions**](ModelApiInterface.md#bulkDeleteModelPropertyDefinitions) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/bulk_destroy | Delete many PropertyDefinitions of a model
[**bulkDeleteModelUnits**](ModelApiInterface.md#bulkDeleteModelUnits) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/bulk_destroy | Delete many Units of a model
[**bulkDeletePropertySet**](ModelApiInterface.md#bulkDeletePropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/bulk_destroy | Delete many PropertySet of a model
[**bulkFullUpdateElements**](ModelApiInterface.md#bulkFullUpdateElements) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/bulk_update | Update many elements at once (only changing fields may be defined)
[**bulkFullUpdateModelProperty**](ModelApiInterface.md#bulkFullUpdateModelProperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/bulk_update | Update some fields of many properties of a model
[**bulkRemoveClassificationsOfElement**](ModelApiInterface.md#bulkRemoveClassificationsOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification/bulk_destroy | Remove many classifications from an element
[**bulkRemoveDocumentsOfElement**](ModelApiInterface.md#bulkRemoveDocumentsOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents/bulk_destroy | Remove many documents from an element
[**bulkRemoveElementsFromClassification**](ModelApiInterface.md#bulkRemoveElementsFromClassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/{model_classification_pk}/element/bulk_destroy | Remove the classifications from all elements
[**bulkUpdateElements**](ModelApiInterface.md#bulkUpdateElements) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/bulk_update | Update many elements at once (all field must be defined)
[**bulkUpdateModelProperty**](ModelApiInterface.md#bulkUpdateModelProperty) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/bulk_update | Update all fields of many properties of a model
[**createAccessToken**](ModelApiInterface.md#createAccessToken) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token | Create a token for this model
[**createBuilding**](ModelApiInterface.md#createBuilding) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building | Create a building of a model
[**createBuildingPlan**](ModelApiInterface.md#createBuildingPlan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/add | Create a relation between a 2d model and a building
[**createClassificationElementRelations**](ModelApiInterface.md#createClassificationElementRelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification-element | Create association between existing classification and existing element
[**createClassificationsOfElement**](ModelApiInterface.md#createClassificationsOfElement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification | Create one or many classifications to an element
[**createElement**](ModelApiInterface.md#createElement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element | Create an element in the model
[**createElementPropertySet**](ModelApiInterface.md#createElementPropertySet) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset | Create a PropertySets to an element
[**createElementPropertySetProperty**](ModelApiInterface.md#createElementPropertySetProperty) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Create a property to a PropertySet
[**createElementPropertySetPropertyDefinition**](ModelApiInterface.md#createElementPropertySetPropertyDefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Create a Definition to a Property
[**createElementPropertySetPropertyDefinitionUnit**](ModelApiInterface.md#createElementPropertySetPropertyDefinitionUnit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Create a Unit to a Definition
[**createLayer**](ModelApiInterface.md#createLayer) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer | Create a layer in the model
[**createMetaBuilding**](ModelApiInterface.md#createMetaBuilding) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/create-metabuilding | Create an empty 3D Model
[**createModel**](ModelApiInterface.md#createModel) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/create-model | Make a PDF or Image file a Model
[**createModelPropertyDefinition**](ModelApiInterface.md#createModelPropertyDefinition) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition | Create a PropertyDefinition on the model
[**createModelUnit**](ModelApiInterface.md#createModelUnit) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit | Create a Unit on a model
[**createPropertySet**](ModelApiInterface.md#createPropertySet) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset | Create one or many PropertySet
[**createPropertySetElementRelations**](ModelApiInterface.md#createPropertySetElementRelations) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset-element | Create association between PropertySet and element
[**createRawElements**](ModelApiInterface.md#createRawElements) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/raw | Create elements in an optimized format
[**createSpace**](ModelApiInterface.md#createSpace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space | Create a space in the model
[**createStorey**](ModelApiInterface.md#createStorey) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey | Create a storey of a model
[**createStoreyPlan**](ModelApiInterface.md#createStoreyPlan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/add | Create a relation between a 2d model and a storey
[**createSystem**](ModelApiInterface.md#createSystem) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system | Create a system in the model
[**createTileset**](ModelApiInterface.md#createTileset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/tileset | Create the tileset of the model and upload all files
[**createZone**](ModelApiInterface.md#createZone) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone | Create a zone in the model
[**createZoneSpace**](ModelApiInterface.md#createZoneSpace) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space | Create a space in a zone
[**deleteAccessToken**](ModelApiInterface.md#deleteAccessToken) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token/{token} | Delete a token
[**deleteBuilding**](ModelApiInterface.md#deleteBuilding) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{uuid} | Delete a building of a model
[**deleteBuildingPlan**](ModelApiInterface.md#deleteBuildingPlan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/{id} | Delete the relation between a 2d model and a building
[**deleteElement**](ModelApiInterface.md#deleteElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Delete an element of a model
[**deleteLayer**](ModelApiInterface.md#deleteLayer) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer/{id} | Delete a layer of a model
[**deleteModel**](ModelApiInterface.md#deleteModel) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{id} | Delete a model
[**deleteModelProperty**](ModelApiInterface.md#deleteModelProperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/{id} | Delete a Property of a model
[**deleteModelPropertyDefinition**](ModelApiInterface.md#deleteModelPropertyDefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/{id} | Delete a PropertyDefinitions of a model
[**deleteModelUnit**](ModelApiInterface.md#deleteModelUnit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/{id} | Delete a Unit of a model
[**deleteModelWithoutDoc**](ModelApiInterface.md#deleteModelWithoutDoc) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/delete-model | Delete the Model without deleting the related document
[**deletePropertySet**](ModelApiInterface.md#deletePropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/{id} | Delete a PropertySet of a model
[**deleteSpace**](ModelApiInterface.md#deleteSpace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space/{id} | Delete a space
[**deleteStorey**](ModelApiInterface.md#deleteStorey) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{uuid} | Delete a storey of a model
[**deleteStoreyPlan**](ModelApiInterface.md#deleteStoreyPlan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/{id} | Delete the relation between a 2d model and a storey
[**deleteSystem**](ModelApiInterface.md#deleteSystem) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system/{uuid} | Delete a system of a model
[**deleteZone**](ModelApiInterface.md#deleteZone) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{id} | Delete a zone of a model
[**deleteZoneSpace**](ModelApiInterface.md#deleteZoneSpace) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space/{id} | Delete a space of a zone
[**exportIfc**](ModelApiInterface.md#exportIfc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/export | Export IFC
[**fullUpdateElement**](ModelApiInterface.md#fullUpdateElement) | **PUT** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Update all fields of an element
[**getAccessToken**](ModelApiInterface.md#getAccessToken) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token/{token} | Retrieve one token created for this model
[**getAccessTokens**](ModelApiInterface.md#getAccessTokens) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token | Retrieve all tokens created for this model
[**getBuilding**](ModelApiInterface.md#getBuilding) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{uuid} | Retrieve a building of a model
[**getBuildingPlanPositioning**](ModelApiInterface.md#getBuildingPlanPositioning) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the building
[**getBuildings**](ModelApiInterface.md#getBuildings) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building | Retrieve all buildings of a model
[**getClassificationsOfElement**](ModelApiInterface.md#getClassificationsOfElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification | Retrieve all classifications of an element
[**getDocumentsOfElement**](ModelApiInterface.md#getDocumentsOfElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents | Retrieve all documents of an element
[**getElement**](ModelApiInterface.md#getElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Retrieve an element of a model
[**getElementLinkedDocuments**](ModelApiInterface.md#getElementLinkedDocuments) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/documents | Retrieve all documents linked to any element
[**getElementPropertySet**](ModelApiInterface.md#getElementPropertySet) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{id} | Retrieve a PropertySet of an element
[**getElementPropertySetProperties**](ModelApiInterface.md#getElementPropertySetProperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property | Retrieve all Properties of a PropertySet
[**getElementPropertySetProperty**](ModelApiInterface.md#getElementPropertySetProperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Retrieve a Property of a PropertySet
[**getElementPropertySetPropertyDefinition**](ModelApiInterface.md#getElementPropertySetPropertyDefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Retrieve a Definition of a Property
[**getElementPropertySetPropertyDefinitionUnit**](ModelApiInterface.md#getElementPropertySetPropertyDefinitionUnit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Retrieve a Unit of a Definition
[**getElementPropertySetPropertyDefinitionUnits**](ModelApiInterface.md#getElementPropertySetPropertyDefinitionUnits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit | Retrieve all Units of a Definition
[**getElementPropertySetPropertyDefinitions**](ModelApiInterface.md#getElementPropertySetPropertyDefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition | Retrieve all Definitions of a PropertySet
[**getElementPropertySets**](ModelApiInterface.md#getElementPropertySets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset | Retrieve all PropertySets of an element
[**getElements**](ModelApiInterface.md#getElements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element | Retrieve all elements of a model
[**getElementsFromClassification**](ModelApiInterface.md#getElementsFromClassification) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/{model_classification_pk}/element | Retrieve all elements with the classification
[**getLayer**](ModelApiInterface.md#getLayer) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer/{id} | Retrieve a layer of a model
[**getLayers**](ModelApiInterface.md#getLayers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer | Retrieve all layers of a model
[**getMaterial**](ModelApiInterface.md#getMaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/material/{id} | Retrieve a material of a model
[**getMaterials**](ModelApiInterface.md#getMaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/material | Retrieve all materials of a model
[**getModel**](ModelApiInterface.md#getModel) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{id} | Retrieve one model
[**getModelClassifications**](ModelApiInterface.md#getModelClassifications) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification | Retrieve all classifications in a model
[**getModelMaterial**](ModelApiInterface.md#getModelMaterial) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/material/{id} | Retrieve a material of a model
[**getModelMaterials**](ModelApiInterface.md#getModelMaterials) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/material | Retrieve all materials of a model
[**getModelProperties**](ModelApiInterface.md#getModelProperties) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property | Retrieve all Properties of a model
[**getModelProperty**](ModelApiInterface.md#getModelProperty) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/{id} | Retrieve a Property of a model
[**getModelPropertyDefinition**](ModelApiInterface.md#getModelPropertyDefinition) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/{id} | Retrieve a PropertyDefinition of a model
[**getModelPropertyDefinitions**](ModelApiInterface.md#getModelPropertyDefinitions) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition | Retrieve all PropertyDefinitions of a model
[**getModelUnit**](ModelApiInterface.md#getModelUnit) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/{id} | Retrieve a Unit of a model
[**getModelUnits**](ModelApiInterface.md#getModelUnits) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit | Retrieve all Units of a model
[**getModels**](ModelApiInterface.md#getModels) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model | Retrieve all models
[**getProcessorHandler**](ModelApiInterface.md#getProcessorHandler) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/processorhandler/{id} | Retrieve a processor handler
[**getProcessorHandlers**](ModelApiInterface.md#getProcessorHandlers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/processorhandler | Get all processor handlers
[**getPropertySet**](ModelApiInterface.md#getPropertySet) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/{id} | Retrieve a PropertySet of a model
[**getPropertySets**](ModelApiInterface.md#getPropertySets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset | Retrieve all PropertySets of a model
[**getRawElements**](ModelApiInterface.md#getRawElements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/raw | Retrieve all elements in a optimized format
[**getSimpleElement**](ModelApiInterface.md#getSimpleElement) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid}/simple | Retrieve an element of a model with a simple value representation
[**getSimpleElements**](ModelApiInterface.md#getSimpleElements) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/simple | Retrieve all elements of a model with a simple value representation
[**getSpace**](ModelApiInterface.md#getSpace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space/{id} | Retrieve one space of the model
[**getSpaces**](ModelApiInterface.md#getSpaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space | Retrieve all spaces of the model
[**getStorey**](ModelApiInterface.md#getStorey) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{uuid} | Retrieve a storey of a model
[**getStoreyPlanPositioning**](ModelApiInterface.md#getStoreyPlanPositioning) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/{id}/positioning | Retrieve the postioning of the plan in the storey
[**getStoreys**](ModelApiInterface.md#getStoreys) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey | Retrieve all storeys of a model
[**getSystem**](ModelApiInterface.md#getSystem) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system/{uuid} | Retrieve a system of a model
[**getSystems**](ModelApiInterface.md#getSystems) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system | Retrieve all systems of a model
[**getTileset**](ModelApiInterface.md#getTileset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/tileset | Retrieve the tileset of the model
[**getZone**](ModelApiInterface.md#getZone) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{id} | Retrieve one zone of a model
[**getZoneSpace**](ModelApiInterface.md#getZoneSpace) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space/{id} | Retrieve one space of a zone
[**getZoneSpaces**](ModelApiInterface.md#getZoneSpaces) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space | Retrieve all spaces of a zone
[**getZones**](ModelApiInterface.md#getZones) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone | Retrieve zones of a model
[**linkDocumentsOfElement**](ModelApiInterface.md#linkDocumentsOfElement) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents | Link one or many documents to an element
[**listClassificationElementRelations**](ModelApiInterface.md#listClassificationElementRelations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification-element | List all associations between classifications and elements
[**mergeIfcs**](ModelApiInterface.md#mergeIfcs) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/merge | Merge IFC files
[**optimizeIfc**](ModelApiInterface.md#optimizeIfc) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/optimize | Optimize the IFC
[**removeAllElementPropertySet**](ModelApiInterface.md#removeAllElementPropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/all | Remove all property sets from element
[**removeClassificationOfElement**](ModelApiInterface.md#removeClassificationOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/classification/{id} | Remove a classification from an element
[**removeDocumentOfElement**](ModelApiInterface.md#removeDocumentOfElement) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/documents/{id} | Remove a documents from an element
[**removeElementPropertySet**](ModelApiInterface.md#removeElementPropertySet) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{id} | Remove a PropertySet from an element
[**removeElementPropertySetProperty**](ModelApiInterface.md#removeElementPropertySetProperty) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Remove a property from a PropertySet
[**removeElementPropertySetPropertyDefinition**](ModelApiInterface.md#removeElementPropertySetPropertyDefinition) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{id} | Delete a Definition to a Property
[**removeElementPropertySetPropertyDefinitionUnit**](ModelApiInterface.md#removeElementPropertySetPropertyDefinitionUnit) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{property_pk}/propertydefinition/{propertydefinition_pk}/unit/{id} | Remove a Unit from a Definition
[**removeElementsFromClassification**](ModelApiInterface.md#removeElementsFromClassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/classification/{model_classification_pk}/element/{uuid} | Remove the classification from all elements
[**reprocessModel**](ModelApiInterface.md#reprocessModel) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/reprocess | Reprocess Model file
[**updateAccessToken**](ModelApiInterface.md#updateAccessToken) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/access_token/{token} | Update some fields of a token
[**updateBuilding**](ModelApiInterface.md#updateBuilding) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{uuid} | Update some fields of a building
[**updateBuildingPlanPositioning**](ModelApiInterface.md#updateBuildingPlanPositioning) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/{id}/positioning | Update the postioning of the plan in the building
[**updateElement**](ModelApiInterface.md#updateElement) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{uuid} | Update some fields of an element
[**updateElementPropertySetProperty**](ModelApiInterface.md#updateElementPropertySetProperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/element/{element_uuid}/propertyset/{propertyset_pk}/property/{id} | Update a property from an element
[**updateLayer**](ModelApiInterface.md#updateLayer) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/layer/{id} | Update some fields of a layer
[**updateModel**](ModelApiInterface.md#updateModel) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{id} | Update some fields of a model
[**updateModelFiles**](ModelApiInterface.md#updateModelFiles) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{id}/files | Update models file (gltf, svg, structure, etc)
[**updateModelProperty**](ModelApiInterface.md#updateModelProperty) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/property/{id} | Update some fields of a Property
[**updateModelPropertyDefinition**](ModelApiInterface.md#updateModelPropertyDefinition) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertydefinition/{id} | Update some fields of many PropertyDefinitions of a model
[**updateModelUnit**](ModelApiInterface.md#updateModelUnit) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/unit/{id} | Update some fields of a Unit of a model
[**updateOrderBuildingPlan**](ModelApiInterface.md#updateOrderBuildingPlan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/building/{building_uuid}/plan/order | Update order of all plan of a building
[**updateOrderStoreyPlan**](ModelApiInterface.md#updateOrderStoreyPlan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/order | Update order of all plan of a storey
[**updateOrderStoreys**](ModelApiInterface.md#updateOrderStoreys) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/order | Update order of all storey of a model
[**updateProcessorHandler**](ModelApiInterface.md#updateProcessorHandler) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/processorhandler/{id} | Update the status of a processor handler
[**updatePropertySet**](ModelApiInterface.md#updatePropertySet) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/propertyset/{id} | Update some fields of a PropertySet
[**updateSpace**](ModelApiInterface.md#updateSpace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/space/{id} | Update some fields of a space
[**updateStorey**](ModelApiInterface.md#updateStorey) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{uuid} | Update some fields of a storey
[**updateStoreyPlanPositioning**](ModelApiInterface.md#updateStoreyPlanPositioning) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/storey/{storey_uuid}/plan/{id}/positioning | Update the postioning of the plan in the storey
[**updateSystem**](ModelApiInterface.md#updateSystem) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/system/{uuid} | Update some fields of a system
[**updateZone**](ModelApiInterface.md#updateZone) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{id} | Update some fields of a zone
[**updateZoneSpace**](ModelApiInterface.md#updateZoneSpace) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/zone/{zone_pk}/space/{id} | Update some fields of a space


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\ModelApi:
        tags:
            - { name: "open_api_server.api", api: "model" }
    # ...
```

## **addModelErrors**
> OpenAPI\Server\Model\ModelErrors addModelErrors($cloudPk, $id, $projectPk, $modelErrorsRequest)

Add errors to model

Model errors are warnings and errors during model process. They alert about missing elements or malformed files  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#addModelErrors
     */
    public function addModelErrors(int $cloudPk, int $id, int $projectPk, ?ModelErrorsRequest $modelErrorsRequest, int &$responseCode, array &$responseHeaders): array|object|null
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

## **bulkDeleteModelClassifications**
> bulkDeleteModelClassifications($cloudPk, $modelPk, $projectPk)

Remove all classifications from model's elements

Delete relation between filtered classifications (eg. /classifications?name=untec) and all mode's elements. No classification will be deleted on this endpoint, only the relation between model's elements and their classification.  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkDeleteModelClassifications
     */
    public function bulkDeleteModelClassifications(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**|  |
 **projectPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkDeleteModelProperties**
> bulkDeleteModelProperties($cloudPk, $modelPk, $projectPk)

Delete many Property of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkDeleteModelProperties
     */
    public function bulkDeleteModelProperties(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkDeleteModelPropertyDefinitions**
> bulkDeleteModelPropertyDefinitions($cloudPk, $modelPk, $projectPk)

Delete many PropertyDefinitions of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkDeleteModelPropertyDefinitions
     */
    public function bulkDeleteModelPropertyDefinitions(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkDeleteModelUnits**
> bulkDeleteModelUnits($cloudPk, $modelPk, $projectPk)

Delete many Units of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkDeleteModelUnits
     */
    public function bulkDeleteModelUnits(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkDeletePropertySet**
> bulkDeletePropertySet($cloudPk, $modelPk, $projectPk)

Delete many PropertySet of a model

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkDeletePropertySet
     */
    public function bulkDeletePropertySet(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkFullUpdateElements**
> OpenAPI\Server\Model\Element bulkFullUpdateElements($cloudPk, $modelPk, $projectPk, $elementRequest, $classification, $classificationNotation, $type)

Update many elements at once (only changing fields may be defined)

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkFullUpdateElements
     */
    public function bulkFullUpdateElements(int $cloudPk, int $modelPk, int $projectPk, array $elementRequest, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **bulkFullUpdateModelProperty**
> OpenAPI\Server\Model\Property bulkFullUpdateModelProperty($cloudPk, $modelPk, $projectPk, $propertyRequest)

Update some fields of many properties of a model

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkFullUpdateModelProperty
     */
    public function bulkFullUpdateModelProperty(int $cloudPk, int $modelPk, int $projectPk, array $propertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **bulkRemoveClassificationsOfElement**
> bulkRemoveClassificationsOfElement($cloudPk, $elementUuid, $modelPk, $projectPk)

Remove many classifications from an element

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkRemoveClassificationsOfElement
     */
    public function bulkRemoveClassificationsOfElement(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkRemoveDocumentsOfElement**
> bulkRemoveDocumentsOfElement($cloudPk, $elementUuid, $modelPk, $projectPk)

Remove many documents from an element

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkRemoveDocumentsOfElement
     */
    public function bulkRemoveDocumentsOfElement(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkRemoveElementsFromClassification**
> bulkRemoveElementsFromClassification($cloudPk, $modelClassificationPk, $modelPk, $projectPk)

Remove the classifications from all elements

Bulk delete. You must send a list of ids in the body. These ids (or relations with these ids in case of many-to-many relation deletion) will be deleted   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkRemoveElementsFromClassification
     */
    public function bulkRemoveElementsFromClassification(int $cloudPk, int $modelClassificationPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelClassificationPk** | **int**| A unique integer value identifying this classification. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **bulkUpdateElements**
> OpenAPI\Server\Model\Element bulkUpdateElements($cloudPk, $modelPk, $projectPk, $elementRequest, $classification, $classificationNotation, $type)

Update many elements at once (all field must be defined)

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkUpdateElements
     */
    public function bulkUpdateElements(int $cloudPk, int $modelPk, int $projectPk, array $elementRequest, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **bulkUpdateModelProperty**
> OpenAPI\Server\Model\Property bulkUpdateModelProperty($cloudPk, $modelPk, $projectPk, $propertyRequest)

Update all fields of many properties of a model

Bulk update. Similar to update, but the body should be a list of objects to patch or put The response will be a list (in the same order) of updated objects or of errors if any If at least one update succeeded, the status code will be 200. If every update failed, the status code we'll be 400 with the list of errors

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#bulkUpdateModelProperty
     */
    public function bulkUpdateModelProperty(int $cloudPk, int $modelPk, int $projectPk, array $propertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createAccessToken**
> OpenAPI\Server\Model\IfcAccessToken createAccessToken($cloudPk, $modelPk, $projectPk, $ifcAccessTokenRequest)

Create a token for this model

Tokens are read_only by default and are valid 1 day  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createAccessToken
     */
    public function createAccessToken(int $cloudPk, int $modelPk, int $projectPk, ?IfcAccessTokenRequest $ifcAccessTokenRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createBuilding**
> OpenAPI\Server\Model\Building createBuilding($cloudPk, $modelPk, $projectPk, $storeyBuildingRequest)

Create a building of a model

Create a building of a model.  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createBuilding
     */
    public function createBuilding(int $cloudPk, int $modelPk, int $projectPk, StoreyBuildingRequest $storeyBuildingRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createBuildingPlan**
> OpenAPI\Server\Model\Building createBuildingPlan($buildingUuid, $cloudPk, $modelPk, $projectPk, $buildingModelPlanRequest)

Create a relation between a 2d model and a building

Create a relation between a 2d model and a building. The model type must be one of : ('DWG', 'DXF', 'PDF', 'JPEG', 'PNG')  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createBuildingPlan
     */
    public function createBuildingPlan(string $buildingUuid, int $cloudPk, int $modelPk, int $projectPk, BuildingModelPlanRequest $buildingModelPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createClassificationElementRelations**
> createClassificationElementRelations($cloudPk, $modelPk, $projectPk, $elementClassificationRelationRequest)

Create association between existing classification and existing element

Create association between existing classification and existing element  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createClassificationElementRelations
     */
    public function createClassificationElementRelations(int $cloudPk, int $modelPk, int $projectPk, array $elementClassificationRelationRequest, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createClassificationsOfElement**
> OpenAPI\Server\Model\Classification createClassificationsOfElement($cloudPk, $elementUuid, $modelPk, $projectPk, $classificationRequest)

Create one or many classifications to an element

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors If classification created already exists, it will just be added to item's classifications and will not be duplicated  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createClassificationsOfElement
     */
    public function createClassificationsOfElement(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, array $classificationRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createElement**
> OpenAPI\Server\Model\Element createElement($cloudPk, $modelPk, $projectPk, $elementRequest, $classification, $classificationNotation, $type)

Create an element in the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createElement
     */
    public function createElement(int $cloudPk, int $modelPk, int $projectPk, array $elementRequest, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createElementPropertySet**
> OpenAPI\Server\Model\PropertySet createElementPropertySet($cloudPk, $elementUuid, $modelPk, $projectPk, $propertySetRequest)

Create a PropertySets to an element

Create a PropertySets that will be automatically linked to the element  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createElementPropertySet
     */
    public function createElementPropertySet(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, ?PropertySetRequest $propertySetRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**|  |
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

## **createElementPropertySetProperty**
> OpenAPI\Server\Model\Property createElementPropertySetProperty($cloudPk, $elementUuid, $modelPk, $projectPk, $propertysetPk, $propertyRequest)

Create a property to a PropertySet

Create a property to a PropertySet  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createElementPropertySetProperty
     */
    public function createElementPropertySetProperty(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int $propertysetPk, PropertyRequest $propertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createElementPropertySetPropertyDefinition**
> OpenAPI\Server\Model\PropertyDefinition createElementPropertySetPropertyDefinition($cloudPk, $elementUuid, $modelPk, $projectPk, $propertyPk, $propertysetPk, $propertyDefinitionRequest)

Create a Definition to a Property

Create a Definition to a Property  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createElementPropertySetPropertyDefinition
     */
    public function createElementPropertySetPropertyDefinition(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int $propertyPk, int $propertysetPk, ?PropertyDefinitionRequest $propertyDefinitionRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createElementPropertySetPropertyDefinitionUnit**
> OpenAPI\Server\Model\Unit createElementPropertySetPropertyDefinitionUnit($cloudPk, $elementUuid, $modelPk, $projectPk, $propertyPk, $propertydefinitionPk, $propertysetPk, $unitRequest)

Create a Unit to a Definition

Create a Unit to a Definition  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createElementPropertySetPropertyDefinitionUnit
     */
    public function createElementPropertySetPropertyDefinitionUnit(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int $propertyPk, int $propertydefinitionPk, int $propertysetPk, UnitRequest $unitRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createLayer**
> OpenAPI\Server\Model\Layer createLayer($cloudPk, $modelPk, $projectPk, $layerRequest)

Create a layer in the model

The IFC file will not be updated. The created layer will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createLayer
     */
    public function createLayer(int $cloudPk, int $modelPk, int $projectPk, LayerRequest $layerRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createMetaBuilding**
> OpenAPI\Server\Model\Model createMetaBuilding($cloudPk, $projectPk, $createBuildingByNameRequest)

Create an empty 3D Model

Create an empty 3D Model to be used in BIMData services  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createMetaBuilding
     */
    public function createMetaBuilding(int $cloudPk, int $projectPk, CreateBuildingByNameRequest $createBuildingByNameRequest, int &$responseCode, array &$responseHeaders): array|object|null
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

## **createModel**
> OpenAPI\Server\Model\Model createModel($cloudPk, $projectPk, $createModelRequest)

Make a PDF or Image file a Model

Make a PDF or Image file a Model to be used in BIMData services. If a model already exists, this route does nothing and returns a 201 with the model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createModel
     */
    public function createModel(int $cloudPk, int $projectPk, CreateModelRequest $createModelRequest, int &$responseCode, array &$responseHeaders): array|object|null
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

## **createModelPropertyDefinition**
> OpenAPI\Server\Model\PropertyDefinition createModelPropertyDefinition($cloudPk, $modelPk, $projectPk, $propertyDefinitionRequest)

Create a PropertyDefinition on the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createModelPropertyDefinition
     */
    public function createModelPropertyDefinition(int $cloudPk, int $modelPk, int $projectPk, array $propertyDefinitionRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createModelUnit**
> OpenAPI\Server\Model\Unit createModelUnit($cloudPk, $modelPk, $projectPk, $unitRequest)

Create a Unit on a model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createModelUnit
     */
    public function createModelUnit(int $cloudPk, int $modelPk, int $projectPk, array $unitRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createPropertySet**
> OpenAPI\Server\Model\PropertySet createPropertySet($cloudPk, $modelPk, $projectPk, $propertySetRequest)

Create one or many PropertySet

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createPropertySet
     */
    public function createPropertySet(int $cloudPk, int $modelPk, int $projectPk, array $propertySetRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createPropertySetElementRelations**
> createPropertySetElementRelations($cloudPk, $modelPk, $projectPk, $elementPropertySetRelationRequest)

Create association between PropertySet and element

Create association between PropertySet and element  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createPropertySetElementRelations
     */
    public function createPropertySetElementRelations(int $cloudPk, int $modelPk, int $projectPk, array $elementPropertySetRelationRequest, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createRawElements**
> createRawElements($cloudPk, $modelPk, $projectPk, $rawElementsRequest)

Create elements in an optimized format

Create many elements in an optimized format to reduce JSON size and avoid redudancy. The IFC file will not be updated. The created elements will be accessible over the API and when exporting an IFC file. You can use the same optimized structure to post multiple elements, property_sets, properties, definitions and units at once. For performance reasons, we do not check the validity of the json. If the json is malformed, an error 500 without more explaination may be returned instead of a 400.  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createRawElements
     */
    public function createRawElements(int $cloudPk, int $modelPk, int $projectPk, RawElementsRequest $rawElementsRequest, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createSpace**
> OpenAPI\Server\Model\Space createSpace($cloudPk, $modelPk, $projectPk, $spaceRequest)

Create a space in the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createSpace
     */
    public function createSpace(int $cloudPk, int $modelPk, int $projectPk, array $spaceRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createStorey**
> OpenAPI\Server\Model\Storey createStorey($cloudPk, $modelPk, $projectPk, $storeyBuildingRequest)

Create a storey of a model

Create a storey of a model.  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createStorey
     */
    public function createStorey(int $cloudPk, int $modelPk, int $projectPk, StoreyBuildingRequest $storeyBuildingRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createStoreyPlan**
> OpenAPI\Server\Model\Storey createStoreyPlan($cloudPk, $modelPk, $projectPk, $storeyUuid, $storeyModelPlanRequest)

Create a relation between a 2d model and a storey

Create a relation between a 2d model and a storey. The model type must be one of : ('DWG', 'DXF', 'PDF', 'JPEG', 'PNG')  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createStoreyPlan
     */
    public function createStoreyPlan(int $cloudPk, int $modelPk, int $projectPk, string $storeyUuid, StoreyModelPlanRequest $storeyModelPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createSystem**
> OpenAPI\Server\Model\System createSystem($cloudPk, $modelPk, $projectPk, $systemRequest)

Create a system in the model

The IFC file will not be updated. The created system will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createSystem
     */
    public function createSystem(int $cloudPk, int $modelPk, int $projectPk, SystemRequest $systemRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createTileset**
> createTileset($cloudPk, $id, $projectPk)

Create the tileset of the model and upload all files

This route is internaly used by BIMData, you probably don't want to use it  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createTileset
     */
    public function createTileset(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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

## **createZone**
> OpenAPI\Server\Model\Zone createZone($cloudPk, $modelPk, $projectPk, $zoneRequest, $color)

Create a zone in the model

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  The IFC file will not be updated. The created zone will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createZone
     */
    public function createZone(int $cloudPk, int $modelPk, int $projectPk, array $zoneRequest, ?string $color, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **createZoneSpace**
> OpenAPI\Server\Model\ZoneSpace createZoneSpace($cloudPk, $modelPk, $projectPk, $zonePk, $zoneSpaceRequest)

Create a space in a zone

The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#createZoneSpace
     */
    public function createZoneSpace(int $cloudPk, int $modelPk, int $projectPk, int $zonePk, ZoneSpaceRequest $zoneSpaceRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **deleteAccessToken**
> deleteAccessToken($cloudPk, $modelPk, $projectPk, $token)

Delete a token

Deleting a token will revoke it.  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteAccessToken
     */
    public function deleteAccessToken(int $cloudPk, int $modelPk, int $projectPk, string $token, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **deleteBuilding**
> deleteBuilding($cloudPk, $modelPk, $projectPk, $uuid)

Delete a building of a model

Delete a building of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteBuilding
     */
    public function deleteBuilding(int $cloudPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **deleteBuildingPlan**
> deleteBuildingPlan($buildingUuid, $cloudPk, $id, $modelPk, $projectPk)

Delete the relation between a 2d model and a building

Delete the relation between a 2d model and a building  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteBuildingPlan
     */
    public function deleteBuildingPlan(string $buildingUuid, int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteElement**
> deleteElement($cloudPk, $modelPk, $projectPk, $uuid)

Delete an element of a model

The IFC file will not be updated. The remaining elements are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteElement
     */
    public function deleteElement(int $cloudPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **deleteLayer**
> deleteLayer($cloudPk, $id, $modelPk, $projectPk)

Delete a layer of a model

The IFC file will not be updated. The remaining layers are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteLayer
     */
    public function deleteLayer(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteModel**
> deleteModel($cloudPk, $id, $projectPk)

Delete a model

It will also delete the related document  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteModel
     */
    public function deleteModel(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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

## **deleteModelProperty**
> deleteModelProperty($cloudPk, $id, $modelPk, $projectPk)

Delete a Property of a model

Delete a Property of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteModelProperty
     */
    public function deleteModelProperty(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteModelPropertyDefinition**
> deleteModelPropertyDefinition($cloudPk, $id, $modelPk, $projectPk)

Delete a PropertyDefinitions of a model

Delete a PropertyDefinitions of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteModelPropertyDefinition
     */
    public function deleteModelPropertyDefinition(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteModelUnit**
> deleteModelUnit($cloudPk, $id, $modelPk, $projectPk)

Delete a Unit of a model

Delete a Unit of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteModelUnit
     */
    public function deleteModelUnit(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteModelWithoutDoc**
> deleteModelWithoutDoc($cloudPk, $id, $projectPk)

Delete the Model without deleting the related document

Delete the Model without deleting the related document  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteModelWithoutDoc
     */
    public function deleteModelWithoutDoc(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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

## **deletePropertySet**
> deletePropertySet($cloudPk, $id, $modelPk, $projectPk)

Delete a PropertySet of a model

Delete a PropertySet of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deletePropertySet
     */
    public function deletePropertySet(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteSpace**
> deleteSpace($cloudPk, $id, $modelPk, $projectPk)

Delete a space

It will not delete related zones. The IFC file will not be updated. The remaining spaces are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteSpace
     */
    public function deleteSpace(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteStorey**
> deleteStorey($cloudPk, $modelPk, $projectPk, $uuid)

Delete a storey of a model

Delete a storey of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteStorey
     */
    public function deleteStorey(int $cloudPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **deleteStoreyPlan**
> deleteStoreyPlan($cloudPk, $id, $modelPk, $projectPk, $storeyUuid)

Delete the relation between a 2d model and a storey

Delete the relation between a 2d model and a storey  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteStoreyPlan
     */
    public function deleteStoreyPlan(int $cloudPk, int $id, int $modelPk, int $projectPk, string $storeyUuid, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **deleteSystem**
> deleteSystem($cloudPk, $modelPk, $projectPk, $uuid)

Delete a system of a model

The IFC file will not be updated. The remaining systems are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteSystem
     */
    public function deleteSystem(int $cloudPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **deleteZone**
> deleteZone($cloudPk, $id, $modelPk, $projectPk)

Delete a zone of a model

The IFC file will not be updated. The remaining zones are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteZone
     */
    public function deleteZone(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteZoneSpace**
> deleteZoneSpace($cloudPk, $id, $modelPk, $projectPk, $zonePk)

Delete a space of a zone

The IFC file will not be updated. The remaining spaces are available in API and will be available when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#deleteZoneSpace
     */
    public function deleteZoneSpace(int $cloudPk, int $id, int $modelPk, int $projectPk, int $zonePk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **exportIfc**
> OpenAPI\Server\Model\IfcExport exportIfc($cloudPk, $id, $projectPk, $ifcExportRequest)

Export IFC

Only works for IFC files. Export IFC as requested in parameters. When the export is finished, a new IFC file with will be created in the same folder than the original IFC. You can query the folder or subscribe to the new document webhook to retrieve the result  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#exportIfc
     */
    public function exportIfc(int $cloudPk, int $id, int $projectPk, IfcExportRequest $ifcExportRequest, int &$responseCode, array &$responseHeaders): array|object|null
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

## **fullUpdateElement**
> OpenAPI\Server\Model\Element fullUpdateElement($cloudPk, $modelPk, $projectPk, $uuid, $elementRequest)

Update all fields of an element

Update all fields of an element. The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#fullUpdateElement
     */
    public function fullUpdateElement(int $cloudPk, int $modelPk, int $projectPk, string $uuid, ElementRequest $elementRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getAccessToken**
> OpenAPI\Server\Model\IfcAccessToken getAccessToken($cloudPk, $modelPk, $projectPk, $token)

Retrieve one token created for this model

Retrieve one token created for this model  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getAccessToken
     */
    public function getAccessToken(int $cloudPk, int $modelPk, int $projectPk, string $token, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getAccessTokens**
> OpenAPI\Server\Model\IfcAccessToken getAccessTokens($cloudPk, $modelPk, $projectPk)

Retrieve all tokens created for this model

Retrieve all tokens created for this model  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getAccessTokens
     */
    public function getAccessTokens(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\IfcAccessToken**](../Model/IfcAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getBuilding**
> OpenAPI\Server\Model\Building getBuilding($cloudPk, $modelPk, $projectPk, $uuid)

Retrieve a building of a model

Retrieve a building of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getBuilding
     */
    public function getBuilding(int $cloudPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getBuildingPlanPositioning**
> OpenAPI\Server\Model\PositioningPlan getBuildingPlanPositioning($buildingUuid, $cloudPk, $id, $modelPk, $projectPk)

Retrieve the postioning of the plan in the building

Retrieve the postioning of the plan in the building  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getBuildingPlanPositioning
     */
    public function getBuildingPlanPositioning(string $buildingUuid, int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PositioningPlan**](../Model/PositioningPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getBuildings**
> OpenAPI\Server\Model\Building getBuildings($cloudPk, $modelPk, $projectPk)

Retrieve all buildings of a model

Retrieve all buildings of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getBuildings
     */
    public function getBuildings(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Building**](../Model/Building.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getClassificationsOfElement**
> OpenAPI\Server\Model\Classification getClassificationsOfElement($cloudPk, $elementUuid, $modelPk, $projectPk)

Retrieve all classifications of an element

Retrieve all classifications of an element  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getClassificationsOfElement
     */
    public function getClassificationsOfElement(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Classification**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getDocumentsOfElement**
> OpenAPI\Server\Model\Document getDocumentsOfElement($cloudPk, $elementUuid, $modelPk, $projectPk)

Retrieve all documents of an element

Retrieve all documents of an element  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getDocumentsOfElement
     */
    public function getDocumentsOfElement(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElement**
> OpenAPI\Server\Model\Element getElement($cloudPk, $modelPk, $projectPk, $uuid)

Retrieve an element of a model

Retrieve an element of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElement
     */
    public function getElement(int $cloudPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getElementLinkedDocuments**
> OpenAPI\Server\Model\DocumentWithElementList getElementLinkedDocuments($cloudPk, $modelPk, $projectPk, $classification, $classificationNotation, $type)

Retrieve all documents linked to any element

Retrieve all documents linked to any element with the list of uuids  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementLinkedDocuments
     */
    public function getElementLinkedDocuments(int $cloudPk, int $modelPk, int $projectPk, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getElementPropertySet**
> OpenAPI\Server\Model\PropertySet getElementPropertySet($cloudPk, $elementUuid, $id, $modelPk, $projectPk)

Retrieve a PropertySet of an element

Retrieve a PropertySet of an element  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementPropertySet
     */
    public function getElementPropertySet(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**|  |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElementPropertySetProperties**
> OpenAPI\Server\Model\Property getElementPropertySetProperties($cloudPk, $elementUuid, $modelPk, $projectPk, $propertysetPk)

Retrieve all Properties of a PropertySet

Retrieve all Properties of a PropertySet  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementPropertySetProperties
     */
    public function getElementPropertySetProperties(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getElementPropertySetProperty**
> OpenAPI\Server\Model\Property getElementPropertySetProperty($cloudPk, $elementUuid, $id, $modelPk, $projectPk, $propertysetPk)

Retrieve a Property of a PropertySet

Retrieve a Property of a PropertySet  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementPropertySetProperty
     */
    public function getElementPropertySetProperty(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getElementPropertySetPropertyDefinition**
> OpenAPI\Server\Model\PropertyDefinition getElementPropertySetPropertyDefinition($cloudPk, $elementUuid, $id, $modelPk, $projectPk, $propertyPk, $propertysetPk)

Retrieve a Definition of a Property

Retrieve a Definition of a Property  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementPropertySetPropertyDefinition
     */
    public function getElementPropertySetPropertyDefinition(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int $propertyPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getElementPropertySetPropertyDefinitionUnit**
> OpenAPI\Server\Model\Unit getElementPropertySetPropertyDefinitionUnit($cloudPk, $elementUuid, $id, $modelPk, $projectPk, $propertyPk, $propertydefinitionPk, $propertysetPk)

Retrieve a Unit of a Definition

Retrieve a Unit of a Definition  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementPropertySetPropertyDefinitionUnit
     */
    public function getElementPropertySetPropertyDefinitionUnit(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int $propertyPk, int $propertydefinitionPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getElementPropertySetPropertyDefinitionUnits**
> OpenAPI\Server\Model\Unit getElementPropertySetPropertyDefinitionUnits($cloudPk, $elementUuid, $modelPk, $projectPk, $propertyPk, $propertydefinitionPk, $propertysetPk)

Retrieve all Units of a Definition

Retrieve all Units of a Definition  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementPropertySetPropertyDefinitionUnits
     */
    public function getElementPropertySetPropertyDefinitionUnits(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int $propertyPk, int $propertydefinitionPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getElementPropertySetPropertyDefinitions**
> OpenAPI\Server\Model\PropertyDefinition getElementPropertySetPropertyDefinitions($cloudPk, $elementUuid, $modelPk, $projectPk, $propertyPk, $propertysetPk)

Retrieve all Definitions of a PropertySet

Retrieve all Definitions of a PropertySet  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementPropertySetPropertyDefinitions
     */
    public function getElementPropertySetPropertyDefinitions(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int $propertyPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getElementPropertySets**
> OpenAPI\Server\Model\PropertySet getElementPropertySets($cloudPk, $elementUuid, $modelPk, $projectPk)

Retrieve all PropertySets of an element

Retrieve all PropertySets of an element  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementPropertySets
     */
    public function getElementPropertySets(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**|  |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getElements**
> OpenAPI\Server\Model\Element getElements($cloudPk, $modelPk, $projectPk, $classification, $classificationNotation, $type)

Retrieve all elements of a model

Retrieve all elements of a model. If not filtered, the json may be very large. To efficently retrieve all elements and their data, see getRawElements  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElements
     */
    public function getElements(int $cloudPk, int $modelPk, int $projectPk, ?string $classification, ?string $classificationNotation, ?string $type, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getElementsFromClassification**
> OpenAPI\Server\Model\Element getElementsFromClassification($cloudPk, $modelClassificationPk, $modelPk, $projectPk)

Retrieve all elements with the classification

Retrieve all elements with the classification  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getElementsFromClassification
     */
    public function getElementsFromClassification(int $cloudPk, int $modelClassificationPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelClassificationPk** | **int**| A unique integer value identifying this classification. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Element**](../Model/Element.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getLayer**
> OpenAPI\Server\Model\Layer getLayer($cloudPk, $id, $modelPk, $projectPk)

Retrieve a layer of a model

Retrieve a layer of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getLayer
     */
    public function getLayer(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Layer**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getLayers**
> OpenAPI\Server\Model\Layer getLayers($cloudPk, $modelPk, $projectPk)

Retrieve all layers of a model

Retrieve all layers of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getLayers
     */
    public function getLayers(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Layer**](../Model/Layer.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getMaterial**
> OpenAPI\Server\Model\Material getMaterial($cloudPk, $elementUuid, $id, $modelPk, $projectPk)

Retrieve a material of a model

Retrieve a material of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getMaterial
     */
    public function getMaterial(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getMaterials**
> OpenAPI\Server\Model\Material getMaterials($cloudPk, $elementUuid, $modelPk, $projectPk)

Retrieve all materials of a model

Retrieve all materials of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getMaterials
     */
    public function getMaterials(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModel**
> OpenAPI\Server\Model\Model getModel($cloudPk, $id, $projectPk)

Retrieve one model

Retrieve one model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModel
     */
    public function getModel(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

## **getModelClassifications**
> OpenAPI\Server\Model\Classification getModelClassifications($cloudPk, $modelPk, $projectPk)

Retrieve all classifications in a model

Retrieve all classifications in a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModelClassifications
     */
    public function getModelClassifications(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**|  |
 **projectPk** | **int**|  |

### Return type

[**OpenAPI\Server\Model\Classification**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModelMaterial**
> OpenAPI\Server\Model\Material getModelMaterial($cloudPk, $id, $modelPk, $projectPk)

Retrieve a material of a model

Retrieve a material of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModelMaterial
     */
    public function getModelMaterial(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModelMaterials**
> OpenAPI\Server\Model\Material getModelMaterials($cloudPk, $modelPk, $projectPk)

Retrieve all materials of a model

Retrieve all materials of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModelMaterials
     */
    public function getModelMaterials(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Material**](../Model/Material.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModelProperties**
> OpenAPI\Server\Model\Property getModelProperties($cloudPk, $modelPk, $projectPk)

Retrieve all Properties of a model

Retrieve all PropertySets of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModelProperties
     */
    public function getModelProperties(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModelProperty**
> OpenAPI\Server\Model\Property getModelProperty($cloudPk, $id, $modelPk, $projectPk)

Retrieve a Property of a model

Retrieve a Property of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModelProperty
     */
    public function getModelProperty(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Property**](../Model/Property.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModelPropertyDefinition**
> OpenAPI\Server\Model\PropertyDefinition getModelPropertyDefinition($cloudPk, $id, $modelPk, $projectPk)

Retrieve a PropertyDefinition of a model

Retrieve a PropertyDefinition of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModelPropertyDefinition
     */
    public function getModelPropertyDefinition(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModelPropertyDefinitions**
> OpenAPI\Server\Model\PropertyDefinition getModelPropertyDefinitions($cloudPk, $modelPk, $projectPk)

Retrieve all PropertyDefinitions of a model

Retrieve all PropertyDefinitions of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModelPropertyDefinitions
     */
    public function getModelPropertyDefinitions(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertyDefinition**](../Model/PropertyDefinition.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModelUnit**
> OpenAPI\Server\Model\Unit getModelUnit($cloudPk, $id, $modelPk, $projectPk)

Retrieve a Unit of a model

Retrieve a Unit of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModelUnit
     */
    public function getModelUnit(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModelUnits**
> OpenAPI\Server\Model\Unit getModelUnits($cloudPk, $modelPk, $projectPk)

Retrieve all Units of a model

Retrieve all Units of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModelUnits
     */
    public function getModelUnits(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Unit**](../Model/Unit.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getModels**
> OpenAPI\Server\Model\Model getModels($cloudPk, $projectPk, $source, $status, $type)

Retrieve all models

Retrieve all models. The field `type` allows you to discriminate which kind of model it is.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getModels
     */
    public function getModels(int $cloudPk, int $projectPk, ?string $source, ?array $status, ?array $type, int &$responseCode, array &$responseHeaders): array|object|null
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

## **getProcessorHandler**
> OpenAPI\Server\Model\ProcessorHandler getProcessorHandler($cloudPk, $id, $modelPk, $projectPk)

Retrieve a processor handler

Retrieve a processor handler  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getProcessorHandler
     */
    public function getProcessorHandler(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProcessorHandlers**
> OpenAPI\Server\Model\ProcessorHandler getProcessorHandlers($cloudPk, $modelPk, $projectPk)

Get all processor handlers

Get all processor handlers  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getProcessorHandlers
     */
    public function getProcessorHandlers(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\ProcessorHandler**](../Model/ProcessorHandler.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getPropertySet**
> OpenAPI\Server\Model\PropertySet getPropertySet($cloudPk, $id, $modelPk, $projectPk)

Retrieve a PropertySet of a model

Retrieve a PropertySet of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getPropertySet
     */
    public function getPropertySet(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getPropertySets**
> OpenAPI\Server\Model\PropertySet getPropertySets($cloudPk, $modelPk, $projectPk)

Retrieve all PropertySets of a model

Retrieve all PropertySets of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getPropertySets
     */
    public function getPropertySets(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\PropertySet**](../Model/PropertySet.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getRawElements**
> OpenAPI\Server\Model\RawElements getRawElements($cloudPk, $modelPk, $projectPk)

Retrieve all elements in a optimized format

Instead of a nested representation, this route respond with a flat structure and indices pointing to related object. The IFC file will not be updated. The created elements will be accessible over the API and when exporting an IFC file. Returns elements, property_sets, properties, definitions and units in a JSON optimized structure  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getRawElements
     */
    public function getRawElements(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\RawElements**](../Model/RawElements.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSimpleElement**
> OpenAPI\Server\Model\SimpleElement getSimpleElement($cloudPk, $modelPk, $projectPk, $uuid)

Retrieve an element of a model with a simple value representation

Retrieve an element of a model with a simple value representation  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getSimpleElement
     */
    public function getSimpleElement(int $cloudPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getSimpleElements**
> OpenAPI\Server\Model\SimpleElement getSimpleElements($cloudPk, $modelPk, $projectPk)

Retrieve all elements of a model with a simple value representation

Retrieve all elements of a model with a simple value representation  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getSimpleElements
     */
    public function getSimpleElements(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\SimpleElement**](../Model/SimpleElement.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSpace**
> OpenAPI\Server\Model\Space getSpace($cloudPk, $id, $modelPk, $projectPk)

Retrieve one space of the model

Retrieve one space of the model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getSpace
     */
    public function getSpace(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Space**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSpaces**
> OpenAPI\Server\Model\Space getSpaces($cloudPk, $modelPk, $projectPk)

Retrieve all spaces of the model

Retrieve all spaces of the model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getSpaces
     */
    public function getSpaces(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Space**](../Model/Space.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getStorey**
> OpenAPI\Server\Model\Storey getStorey($cloudPk, $modelPk, $projectPk, $uuid)

Retrieve a storey of a model

Retrieve a storey of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getStorey
     */
    public function getStorey(int $cloudPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getStoreyPlanPositioning**
> OpenAPI\Server\Model\PositioningPlan getStoreyPlanPositioning($cloudPk, $id, $modelPk, $projectPk, $storeyUuid)

Retrieve the postioning of the plan in the storey

Retrieve the postioning of the plan in the storey  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getStoreyPlanPositioning
     */
    public function getStoreyPlanPositioning(int $cloudPk, int $id, int $modelPk, int $projectPk, string $storeyUuid, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getStoreys**
> OpenAPI\Server\Model\Storey getStoreys($cloudPk, $modelPk, $projectPk)

Retrieve all storeys of a model

Retrieve all storeys of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getStoreys
     */
    public function getStoreys(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Storey**](../Model/Storey.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSystem**
> OpenAPI\Server\Model\System getSystem($cloudPk, $modelPk, $projectPk, $uuid)

Retrieve a system of a model

Retrieve a system of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getSystem
     */
    public function getSystem(int $cloudPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getSystems**
> OpenAPI\Server\Model\System getSystems($cloudPk, $modelPk, $projectPk)

Retrieve all systems of a model

Retrieve all systems of a model.  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getSystems
     */
    public function getSystems(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\System**](../Model/System.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getTileset**
> getTileset($cloudPk, $id, $projectPk, $tileFormat)

Retrieve the tileset of the model

This is only availble if the model is a POINT_CLOUD  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getTileset
     */
    public function getTileset(int $cloudPk, int $id, int $projectPk, string $tileFormat, int &$responseCode, array &$responseHeaders): void
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

## **getZone**
> OpenAPI\Server\Model\Zone getZone($cloudPk, $id, $modelPk, $projectPk)

Retrieve one zone of a model

Retrieve one zone of a model  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getZone
     */
    public function getZone(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Zone**](../Model/Zone.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getZoneSpace**
> OpenAPI\Server\Model\ZoneSpace getZoneSpace($cloudPk, $id, $modelPk, $projectPk, $zonePk)

Retrieve one space of a zone

Retrieve one space of a zone  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getZoneSpace
     */
    public function getZoneSpace(int $cloudPk, int $id, int $modelPk, int $projectPk, int $zonePk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getZoneSpaces**
> OpenAPI\Server\Model\ZoneSpace getZoneSpaces($cloudPk, $modelPk, $projectPk, $zonePk)

Retrieve all spaces of a zone

Retrieve all spaces of a zone  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getZoneSpaces
     */
    public function getZoneSpaces(int $cloudPk, int $modelPk, int $projectPk, int $zonePk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **getZones**
> OpenAPI\Server\Model\Zone getZones($cloudPk, $modelPk, $projectPk, $color)

Retrieve zones of a model

Retrieve parent zones of a model. Children zones we'll be in the 'zones' field  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#getZones
     */
    public function getZones(int $cloudPk, int $modelPk, int $projectPk, ?string $color, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **linkDocumentsOfElement**
> OpenAPI\Server\Model\Document linkDocumentsOfElement($cloudPk, $elementUuid, $modelPk, $projectPk, $requestBody)

Link one or many documents to an element

Bulk relation create available. You can either post an id or a list of ids. Is you post a list, the response will be a list (in the same order) of created relation or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors   Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#linkDocumentsOfElement
     */
    public function linkDocumentsOfElement(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, array $requestBody, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **listClassificationElementRelations**
> OpenAPI\Server\Model\ElementClassificationRelation listClassificationElementRelations($cloudPk, $modelPk, $projectPk)

List all associations between classifications and elements

List all associations between classifications and elements  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#listClassificationElementRelations
     */
    public function listClassificationElementRelations(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\ElementClassificationRelation**](../Model/ElementClassificationRelation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mergeIfcs**
> mergeIfcs($cloudPk, $projectPk, $ifcMergeRequest)

Merge IFC files

Only works for IFC files. Merge IFC files. The merged IFC file will be put in the same folder that the first IFC of the list  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#mergeIfcs
     */
    public function mergeIfcs(int $cloudPk, int $projectPk, IfcMergeRequest $ifcMergeRequest, int &$responseCode, array &$responseHeaders): void
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

## **optimizeIfc**
> optimizeIfc($cloudPk, $id, $projectPk, $ifcOptimizeRequest)

Optimize the IFC

Only works for IFC files. Optimize the IFC. A new optimized IFC file will be put in the same folder that the original IFC  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#optimizeIfc
     */
    public function optimizeIfc(int $cloudPk, int $id, int $projectPk, ?IfcOptimizeRequest $ifcOptimizeRequest, int &$responseCode, array &$responseHeaders): void
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

## **removeAllElementPropertySet**
> removeAllElementPropertySet($cloudPk, $elementUuid, $modelPk, $projectPk)

Remove all property sets from element

Remove all property sets from element. Property Sets will not be deleted, just detached from element  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#removeAllElementPropertySet
     */
    public function removeAllElementPropertySet(int $cloudPk, string $elementUuid, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**|  |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeClassificationOfElement**
> removeClassificationOfElement($cloudPk, $elementUuid, $id, $modelPk, $projectPk)

Remove a classification from an element

The classification will not be deleted  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#removeClassificationOfElement
     */
    public function removeClassificationOfElement(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeDocumentOfElement**
> removeDocumentOfElement($cloudPk, $elementUuid, $id, $modelPk, $projectPk)

Remove a documents from an element

The document will not be deleted  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#removeDocumentOfElement
     */
    public function removeDocumentOfElement(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeElementPropertySet**
> removeElementPropertySet($cloudPk, $elementUuid, $id, $modelPk, $projectPk)

Remove a PropertySet from an element

Delete the relation between the element and the property set. Does not delete any object  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#removeElementPropertySet
     */
    public function removeElementPropertySet(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**|  |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **removeElementPropertySetProperty**
> removeElementPropertySetProperty($cloudPk, $elementUuid, $id, $modelPk, $projectPk, $propertysetPk)

Remove a property from a PropertySet

Remove a property from a PropertySet  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#removeElementPropertySetProperty
     */
    public function removeElementPropertySetProperty(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **removeElementPropertySetPropertyDefinition**
> removeElementPropertySetPropertyDefinition($cloudPk, $elementUuid, $id, $modelPk, $projectPk, $propertyPk, $propertysetPk)

Delete a Definition to a Property

Delete a Definition to a Property  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#removeElementPropertySetPropertyDefinition
     */
    public function removeElementPropertySetPropertyDefinition(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int $propertyPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **removeElementPropertySetPropertyDefinitionUnit**
> removeElementPropertySetPropertyDefinitionUnit($cloudPk, $elementUuid, $id, $modelPk, $projectPk, $propertyPk, $propertydefinitionPk, $propertysetPk)

Remove a Unit from a Definition

Remove a Unit from a Definition  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#removeElementPropertySetPropertyDefinitionUnit
     */
    public function removeElementPropertySetPropertyDefinitionUnit(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int $propertyPk, int $propertydefinitionPk, int $propertysetPk, int &$responseCode, array &$responseHeaders): void
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **removeElementsFromClassification**
> removeElementsFromClassification($cloudPk, $modelClassificationPk, $modelPk, $projectPk, $uuid)

Remove the classification from all elements

Remove the classification from all elements. No element nor classification will be deleted  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#removeElementsFromClassification
     */
    public function removeElementsFromClassification(int $cloudPk, int $modelClassificationPk, int $modelPk, int $projectPk, string $uuid, int &$responseCode, array &$responseHeaders): void
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
 **modelClassificationPk** | **int**| A unique integer value identifying this classification. |
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **reprocessModel**
> reprocessModel($cloudPk, $id, $projectPk)

Reprocess Model file

Reprocess the model. All data that are not in the original model files will be lost  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#reprocessModel
     */
    public function reprocessModel(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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

## **updateAccessToken**
> OpenAPI\Server\Model\IfcAccessToken updateAccessToken($cloudPk, $modelPk, $projectPk, $token, $patchedIfcAccessTokenRequest)

Update some fields of a token

You can update the expiration date or the read_only field  Required scopes: ifc:token_manage, model:token_manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateAccessToken
     */
    public function updateAccessToken(int $cloudPk, int $modelPk, int $projectPk, string $token, ?PatchedIfcAccessTokenRequest $patchedIfcAccessTokenRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateBuilding**
> OpenAPI\Server\Model\Building updateBuilding($cloudPk, $modelPk, $projectPk, $uuid, $patchedStoreyBuildingRequest)

Update some fields of a building

Update some fields of a building  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateBuilding
     */
    public function updateBuilding(int $cloudPk, int $modelPk, int $projectPk, string $uuid, ?PatchedStoreyBuildingRequest $patchedStoreyBuildingRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateBuildingPlanPositioning**
> OpenAPI\Server\Model\PositioningPlan updateBuildingPlanPositioning($buildingUuid, $cloudPk, $id, $modelPk, $projectPk, $patchedPositioningPlanRequest)

Update the postioning of the plan in the building

Update the postioning of the plan in the building  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateBuildingPlanPositioning
     */
    public function updateBuildingPlanPositioning(string $buildingUuid, int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedPositioningPlanRequest $patchedPositioningPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateElement**
> OpenAPI\Server\Model\Element updateElement($cloudPk, $modelPk, $projectPk, $uuid, $patchedElementRequest)

Update some fields of an element

Update some fields of an element. The IFC file will not be updated. The created element will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateElement
     */
    public function updateElement(int $cloudPk, int $modelPk, int $projectPk, string $uuid, ?PatchedElementRequest $patchedElementRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateElementPropertySetProperty**
> OpenAPI\Server\Model\Property updateElementPropertySetProperty($cloudPk, $elementUuid, $id, $modelPk, $projectPk, $propertysetPk, $patchedPropertyRequest)

Update a property from an element

Update a property value from an element. If the element is the only one to have this property, the property will be update in place. If many elements share this property, a new property will be created to replace the property for this element. Keeping the property for all other elements. If you want to update the property of all elements, see updateIfcProperty  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateElementPropertySetProperty
     */
    public function updateElementPropertySetProperty(int $cloudPk, string $elementUuid, int $id, int $modelPk, int $projectPk, int $propertysetPk, ?PatchedPropertyRequest $patchedPropertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateLayer**
> OpenAPI\Server\Model\Layer updateLayer($cloudPk, $id, $modelPk, $projectPk, $patchedLayerRequest)

Update some fields of a layer

Update some fields of a layer. The IFC file will not be updated. The created layer will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateLayer
     */
    public function updateLayer(int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedLayerRequest $patchedLayerRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateModel**
> OpenAPI\Server\Model\Model updateModel($cloudPk, $id, $projectPk, $patchedModelRequest)

Update some fields of a model

Update some fields of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateModel
     */
    public function updateModel(int $cloudPk, int $id, int $projectPk, ?PatchedModelRequest $patchedModelRequest, int &$responseCode, array &$responseHeaders): array|object|null
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

## **updateModelFiles**
> OpenAPI\Server\Model\ModelFiles updateModelFiles($cloudPk, $id, $projectPk, $structureFile, $systemsFile, $mapFile, $gltfFile, $gltfWithOpeningsFile, $bvhTreeFile, $previewFile, $xktFile)

Update models file (gltf, svg, structure, etc)

This route does not accept JSON, only files as x-www-form-urlencoded  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateModelFiles
     */
    public function updateModelFiles(int $cloudPk, int $id, int $projectPk, ?UploadedFile $structureFile, ?UploadedFile $systemsFile, ?UploadedFile $mapFile, ?UploadedFile $gltfFile, ?UploadedFile $gltfWithOpeningsFile, ?UploadedFile $bvhTreeFile, ?UploadedFile $previewFile, ?UploadedFile $xktFile, int &$responseCode, array &$responseHeaders): array|object|null
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

## **updateModelProperty**
> OpenAPI\Server\Model\Property updateModelProperty($cloudPk, $id, $modelPk, $projectPk, $patchedPropertyRequest)

Update some fields of a Property

Update some fields of a Property  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateModelProperty
     */
    public function updateModelProperty(int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedPropertyRequest $patchedPropertyRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateModelPropertyDefinition**
> OpenAPI\Server\Model\PropertyDefinition updateModelPropertyDefinition($cloudPk, $id, $modelPk, $projectPk, $patchedPropertyDefinitionRequest)

Update some fields of many PropertyDefinitions of a model

Update some fields of many PropertyDefinitions of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateModelPropertyDefinition
     */
    public function updateModelPropertyDefinition(int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedPropertyDefinitionRequest $patchedPropertyDefinitionRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateModelUnit**
> OpenAPI\Server\Model\Unit updateModelUnit($cloudPk, $id, $modelPk, $projectPk, $patchedUnitRequest)

Update some fields of a Unit of a model

Update some fields of a Unit of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateModelUnit
     */
    public function updateModelUnit(int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedUnitRequest $patchedUnitRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateOrderBuildingPlan**
> OpenAPI\Server\Model\Storey updateOrderBuildingPlan($buildingUuid, $cloudPk, $modelPk, $projectPk, $requestBody)

Update order of all plan of a building

Update order of all plan of a building  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateOrderBuildingPlan
     */
    public function updateOrderBuildingPlan(string $buildingUuid, int $cloudPk, int $modelPk, int $projectPk, array $requestBody, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateOrderStoreyPlan**
> OpenAPI\Server\Model\Storey updateOrderStoreyPlan($cloudPk, $modelPk, $projectPk, $storeyUuid, $requestBody)

Update order of all plan of a storey

Update order of all plan of a storey  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateOrderStoreyPlan
     */
    public function updateOrderStoreyPlan(int $cloudPk, int $modelPk, int $projectPk, string $storeyUuid, array $requestBody, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateOrderStoreys**
> OpenAPI\Server\Model\Storey updateOrderStoreys($cloudPk, $modelPk, $projectPk, $requestBody)

Update order of all storey of a model

Update order of all storey of a model  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateOrderStoreys
     */
    public function updateOrderStoreys(int $cloudPk, int $modelPk, int $projectPk, array $requestBody, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateProcessorHandler**
> OpenAPI\Server\Model\ProcessorHandler updateProcessorHandler($cloudPk, $id, $modelPk, $projectPk, $patchedProcessorHandlerRequest)

Update the status of a processor handler

Update the status of a processor handler  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateProcessorHandler
     */
    public function updateProcessorHandler(int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedProcessorHandlerRequest $patchedProcessorHandlerRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updatePropertySet**
> OpenAPI\Server\Model\PropertySet updatePropertySet($cloudPk, $id, $modelPk, $projectPk, $patchedPropertySetRequest)

Update some fields of a PropertySet

Update some fields of a PropertySet  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updatePropertySet
     */
    public function updatePropertySet(int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedPropertySetRequest $patchedPropertySetRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateSpace**
> OpenAPI\Server\Model\Space updateSpace($cloudPk, $id, $modelPk, $projectPk, $patchedSpaceRequest)

Update some fields of a space

Update some fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateSpace
     */
    public function updateSpace(int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedSpaceRequest $patchedSpaceRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateStorey**
> OpenAPI\Server\Model\Storey updateStorey($cloudPk, $modelPk, $projectPk, $uuid, $patchedStoreyBuildingRequest)

Update some fields of a storey

Update some fields of a storey  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateStorey
     */
    public function updateStorey(int $cloudPk, int $modelPk, int $projectPk, string $uuid, ?PatchedStoreyBuildingRequest $patchedStoreyBuildingRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateStoreyPlanPositioning**
> OpenAPI\Server\Model\PositioningPlan updateStoreyPlanPositioning($cloudPk, $id, $modelPk, $projectPk, $storeyUuid, $patchedPositioningPlanRequest)

Update the postioning of the plan in the storey

Update the postioning of the plan in the storey  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateStoreyPlanPositioning
     */
    public function updateStoreyPlanPositioning(int $cloudPk, int $id, int $modelPk, int $projectPk, string $storeyUuid, ?PatchedPositioningPlanRequest $patchedPositioningPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateSystem**
> OpenAPI\Server\Model\System updateSystem($cloudPk, $modelPk, $projectPk, $uuid, $patchedSystemRequest)

Update some fields of a system

Update some fields of a system. The IFC file will not be updated. The created system will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateSystem
     */
    public function updateSystem(int $cloudPk, int $modelPk, int $projectPk, string $uuid, ?PatchedSystemRequest $patchedSystemRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateZone**
> OpenAPI\Server\Model\Zone updateZone($cloudPk, $id, $modelPk, $projectPk, $patchedZoneRequest)

Update some fields of a zone

Update some fields of a zone. The IFC file will not be updated. The created zone will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateZone
     */
    public function updateZone(int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedZoneRequest $patchedZoneRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

## **updateZoneSpace**
> OpenAPI\Server\Model\ZoneSpace updateZoneSpace($cloudPk, $id, $modelPk, $projectPk, $zonePk, $patchedZoneSpaceRequest)

Update some fields of a space

Update some fields of a space. The IFC file will not be updated. The created space will be accessible over the API and when exporting an IFC file  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ModelApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ModelApiInterface;

class ModelApi implements ModelApiInterface
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
     * Implementation of ModelApiInterface#updateZoneSpace
     */
    public function updateZoneSpace(int $cloudPk, int $id, int $modelPk, int $projectPk, int $zonePk, ?PatchedZoneSpaceRequest $patchedZoneSpaceRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **modelPk** | **int**| A unique integer value identifying this model. |
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

