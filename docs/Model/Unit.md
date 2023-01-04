# Unit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly] 
**type** | **string** | IfcDerivedUnit, IfcContextDependentUnit, IfcConversionBasedUnit, IfcSIUnit or IfcMonetaryUnit | 
**name** | **string** | Name of the unit (ex: DEGREE) | [optional] 
**unitType** | **string** | IFC type of the unit or user defined type (ex: PLANEANGLEUNIT for DEGREE and RADIAN) | [optional] 
**prefix** | **string** | Litteral prefix for scale (ex: MILLI, KILO, etc..) | [optional] 
**dimensions** | **float** | List of 7 units dimensions | [optional] 
**conversionFactor** | **float** | Factor of conversion and base unit id (ex: DEGREE from RADIAN with factor 0.0174532925199433) | [optional] 
**conversionBaseunit** | [**OpenAPI\Server\Model\Unit**](Unit.md) |  | [optional] 
**elements** | [**AnyType**](AnyType.md) | List of constitutive unit elements by id with corresponding exponent (ex: [meterID/1, secondID/-1] for velocity) | [optional] 
**isDefault** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


