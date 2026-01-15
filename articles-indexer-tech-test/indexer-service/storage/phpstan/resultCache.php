<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1768462940,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.33',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80212,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedLooseComparisonRule: {phpstan.rules.rule: %strictRules.disallowedLooseComparison%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInDoWhileConditionRule: {phpstan.rules.rule: %strictRules.booleansInLoopConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInWhileConditionRule: {phpstan.rules.rule: %strictRules.booleansInLoopConditions%}, PHPStan\\Rules\\Cast\\UselessCastRule: {phpstan.rules.rule: %strictRules.uselessCast%}, PHPStan\\Rules\\Classes\\RequireParentConstructCallRule: {phpstan.rules.rule: %strictRules.requireParentConstructorCall%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedBacktickRule: {phpstan.rules.rule: %strictRules.disallowedBacktick%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule: {phpstan.rules.rule: %strictRules.disallowedEmpty%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule: {phpstan.rules.rule: %strictRules.disallowedImplicitArrayCreation%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule: {phpstan.rules.rule: %strictRules.disallowedShortTernary%}, PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule: {phpstan.rules.rule: %strictRules.overwriteVariablesWithLoop%}, PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule: {phpstan.rules.rule: %strictRules.overwriteVariablesWithLoop%}, PHPStan\\Rules\\Functions\\ArrayFilterStrictRule: {phpstan.rules.rule: %strictRules.strictArrayFilter%}, PHPStan\\Rules\\Functions\\ClosureUsesThisRule: {phpstan.rules.rule: %strictRules.closureUsesThis%}, PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule: {phpstan.rules.rule: %strictRules.matchingInheritedMethodNames%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryMinusRule: {phpstan.rules.rule: [%strictRules.numericOperandsInArithmeticOperators%, %featureToggles.bleedingEdge%]}, PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryPlusRule: {phpstan.rules.rule: [%strictRules.numericOperandsInArithmeticOperators%, %featureToggles.bleedingEdge%]}, PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule: {phpstan.rules.rule: %strictRules.dynamicCallOnStaticMethod%}, PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsCallableRule: {phpstan.rules.rule: %strictRules.dynamicCallOnStaticMethod%}, PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule: {phpstan.rules.rule: %strictRules.strictFunctionCalls%}, PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule: {phpstan.rules.rule: %strictRules.switchConditionsMatchingType%}, PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableMethodCallableRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallableRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableVariablesRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\Methods\\IllegalConstructorMethodCallRule: {phpstan.rules.rule: %strictRules.illegalConstructorMethodCall%}, PHPStan\\Rules\\Methods\\IllegalConstructorStaticCallRule: {phpstan.rules.rule: %strictRules.illegalConstructorMethodCall%}, PHPStan\\Rules\\Deprecations\\CallWithDeprecatedIniOptionRule: {phpstan.rules.rule: %featureToggles.bleedingEdge%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, strictRulesInstalled: true, polluteScopeWithLoopInitialAssignments: false, polluteScopeWithAlwaysIterableForeach: false, polluteScopeWithBlock: false, checkDynamicProperties: true, checkExplicitMixedMissingReturn: true, checkFunctionNameCase: true, checkInternalClassCaseSensitivity: true, reportMaybesInMethodSignatures: true, reportStaticMethodSignatures: true, reportMaybesInPropertyPhpDocTypes: true, reportWrongPhpDocTypeInVarTag: true, checkStrictPrintfPlaceholderTypes: true, strictRules: {allRules: true, disallowedLooseComparison: %strictRules.allRules%, booleansInConditions: %strictRules.allRules%, booleansInLoopConditions: [%strictRules.allRules%, %featureToggles.bleedingEdge%], uselessCast: %strictRules.allRules%, requireParentConstructorCall: %strictRules.allRules%, disallowedBacktick: %strictRules.allRules%, disallowedEmpty: %strictRules.allRules%, disallowedImplicitArrayCreation: %strictRules.allRules%, disallowedShortTernary: %strictRules.allRules%, overwriteVariablesWithLoop: %strictRules.allRules%, closureUsesThis: %strictRules.allRules%, matchingInheritedMethodNames: %strictRules.allRules%, numericOperandsInArithmeticOperators: %strictRules.allRules%, strictFunctionCalls: %strictRules.allRules%, dynamicCallOnStaticMethod: %strictRules.allRules%, switchConditionsMatchingType: %strictRules.allRules%, noVariableVariables: %strictRules.allRules%, strictArrayFilter: %strictRules.allRules%, illegalConstructorMethodCall: %strictRules.allRules%}, deprecationRulesInstalled: true, level: 8, paths: [C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app, C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\routes], tmpDir: C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\storage\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule, PHPStan\\Rules\\Deprecations\\FetchingDeprecatedConstRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanRuleHelper}, {class: PHPStan\\Rules\\Operators\\OperatorRuleHelper}, {class: PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule, arguments: {universalObjectCratesClasses: %universalObjectCratesClasses%}}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedLooseComparisonRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInDoWhileConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInWhileConditionRule}, {class: PHPStan\\Rules\\Cast\\UselessCastRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%, treatPhpDocTypesAsCertainTip: %tips.treatPhpDocTypesAsCertain%}}, {class: PHPStan\\Rules\\Classes\\RequireParentConstructCallRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedBacktickRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule}, {class: PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule}, {class: PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule}, {class: PHPStan\\Rules\\Functions\\ArrayFilterStrictRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%, checkNullables: %checkNullables%, treatPhpDocTypesAsCertainTip: %tips.treatPhpDocTypesAsCertain%}}, {class: PHPStan\\Rules\\Functions\\ClosureUsesThisRule}, {class: PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule}, {class: PHPStan\\Rules\\Methods\\IllegalConstructorMethodCallRule}, {class: PHPStan\\Rules\\Methods\\IllegalConstructorStaticCallRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryMinusRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryPlusRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule}, {class: PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule}, {class: PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsCallableRule}, {class: PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule}, {class: PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableMethodCallableRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallableRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableVariablesRule}, {class: PHPStan\\DependencyInjection\\LazyDeprecatedScopeResolverProvider}, {class: PHPStan\\Rules\\Deprecations\\DeprecatedScopeHelper, factory: @PHPStan\\DependencyInjection\\LazyDeprecatedScopeResolverProvider::get}, {class: PHPStan\\Rules\\Deprecations\\DefaultDeprecatedScopeResolver, tags: [phpstan.deprecations.deprecatedScopeResolver]}, {class: PHPStan\\Rules\\Deprecations\\CallWithDeprecatedIniOptionRule}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedClassConstantUsageExtension, tags: [phpstan.restrictedClassConstantUsageExtension]}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedFunctionUsageExtension, tags: [phpstan.restrictedFunctionUsageExtension]}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedMethodUsageExtension, tags: [phpstan.restrictedMethodUsageExtension]}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedPropertyUsageExtension, tags: [phpstan.restrictedPropertyUsageExtension]}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedClassNameUsageExtension, arguments: {bleedingEdge: %featureToggles.bleedingEdge%}, tags: [phpstan.restrictedClassNameUsageExtension]}}}',
  'analysedPaths' => 
  array (
    0 => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app',
    1 => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\routes',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/Users/jonat/repos/projects/hfs_setup/hfs/articles-indexer-tech-test/indexer-service/composer.lock' => '7fa33210fdd5565663d26d58a409f1b2f0b3ec1c',
  ),
  'composerInstalled' => 
  array (
    'C:/Users/jonat/repos/projects/hfs_setup/hfs/articles-indexer-tech-test/indexer-service/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brick/math' => 
        array (
          'pretty_version' => '0.14.1',
          'version' => '0.14.1.0',
          'reference' => 'f05858549e5f9d7bb45875a75583240a38a281d0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.47.0',
          ),
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.8.1',
          'version' => '3.8.1.0',
          'reference' => 'ff3725291bc4c7e6032b5a54776e3e5104c86db9',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.47.0',
          'version' => '12.47.0.0',
          'reference' => 'ab8114c2e78f32e64eb238fc4b495bea3f8b80ec',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.4',
          'version' => '1.2.4.0',
          'reference' => '49f92285ff5d6fc09816e976a004f8dec6a0ea30',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => 'c67b4195b75491e4dfc6b00b1c78b68d86f54c90',
          'type' => 'project',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.9',
          'version' => '0.3.9.0',
          'reference' => '5c41bf0555b7cfefaad4e66d3046675829581ac4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.52.0',
          'version' => '1.52.0.0',
          'reference' => '64ac7d8abb2dbcf2b76e61289451bae79066b0b3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.8',
          'version' => '2.0.8.0',
          'reference' => '7581a4407012f5f53365e11bafc520fd7f36bc9b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.11.0',
          'version' => '2.11.0.0',
          'reference' => '3d34b97c9a1747a81a3fde90482c092bd8b66468',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => '5966a8ba23e62bdb518dd9e0e665c2dbd4b5b277',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => 'ab4f9d0d672f601b102936aa728801dd1a11968d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.7.0',
          'version' => '7.7.0.0',
          'reference' => '8d587cddee53490f9b82bf203d3a9aa7ea4f9807',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.7.0',
          'version' => '7.7.0.0',
          'reference' => '62ccc1a0435e1c54e10ee6022df28d6c04c2946c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.0',
          'version' => '3.11.0.0',
          'reference' => 'bdb375400dcd162624531666db4799b36b64e4a1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '2befc2f42d7c715fd9d95efc31b1081e5d765004',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.1',
          'version' => '4.1.1.0',
          'reference' => 'c99059c0315591f1a0db7ad6002000288ab8dc72',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.3',
          'version' => '8.8.3.0',
          'reference' => '1dc9e88d105699d0fee8bb18890f41b274f6b4c4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.3',
          'version' => '2.3.3.0',
          'reference' => '6fb2a640ff502caace8e05fd7be3b503a7e1c017',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-amqplib/php-amqplib' => 
        array (
          'pretty_version' => 'v2.8.0',
          'version' => '2.8.0.0',
          'reference' => '7df8553bd8b347cf6e919dd4a21e75f371547aa0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../php-amqplib/php-amqplib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.33',
          'version' => '2.1.33.0',
          'reference' => '9e800e6bee7d5bd02784d4c6069b48032d16224f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-deprecation-rules' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '468e02c9176891cc901143da118f09dc9505fc2f',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpstan/phpstan-deprecation-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-strict-rules' => 
        array (
          'pretty_version' => '2.0.7',
          'version' => '2.0.7.0',
          'reference' => 'd6211c46213d4181054b3d77b10a5c5cb0d59538',
          'type' => 'phpstan-extension',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpstan/phpstan-strict-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.12',
          'version' => '11.0.12.0',
          'reference' => '2c1ed04922802c15e1de5d7447b4856de949cf56',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.46',
          'version' => '11.5.46.0',
          'reference' => '75dfe79a2aa30085b7132bb84377c24062193f33',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.18',
          'version' => '0.12.18.0',
          'reference' => 'ddff0ac01beddc251786fe70367cd8bbdb258196',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '85c77556683e6eee4323e4c5468641ca0237e2e8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '9169f24776edde469914c1e7a1442a50f7a4e110',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '732a9ca6cd9dfd940c639062d5edbde2f6727fb6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'ab862f478513e7ca2fe9ec117a6f01a8da6e1135',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '48be2b0653594eea32dcef130cca1c811dcf25c2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '9dddcddff1ef974ad87b3708e4b442dc38b2261d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => 'fffe05569336549b20a1be64250b40516d6e8d06',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => 'a70c745d4cea48dbd609f4075e5f5cbce453bd52',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '885211d4bed3f857b8c964011923528a55702aa5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => 'e472d35e230108231ccb7f51eb6b2100cac02ee4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'bdb02729471be5d047a3ac4a69068748f1a6be7a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '2f8e1a6cdf590ca63715da4d3a7a3327404a523f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '5d3fd7adf8896c2fdb54e2f0f35b1bcbd9e45090',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'd50e862cb0a0e0886f73ca1f31b865efbb795003',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '7ef27c65d78886f7599fdd5c93d12c9243ecf44d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '2498e9f81b7baa206f44de583f2f48350b90142c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.3',
          'version' => '7.4.3.0',
          'reference' => '7e99bebcb3f90d8721890f2963463280848cba92',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => '24dd4de28d2e3988b311751ac49e684d783e2345',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'videlalvaro/php-amqplib' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v2.8.0',
          ),
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\larastan\\larastan\\bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar://C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar://C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar://C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar://C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'bcmath',
    7 => 'bz2',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'exif',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'ftp',
    17 => 'gettext',
    18 => 'hash',
    19 => 'iconv',
    20 => 'json',
    21 => 'libxml',
    22 => 'mbstring',
    23 => 'mysqli',
    24 => 'mysqlnd',
    25 => 'openssl',
    26 => 'pcre',
    27 => 'pdo_mysql',
    28 => 'pdo_sqlite',
    29 => 'random',
    30 => 'readline',
    31 => 'session',
    32 => 'standard',
    33 => 'tokenizer',
    34 => 'xml',
    35 => 'xmlreader',
    36 => 'xmlwriter',
    37 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Called \'env\' outside of the config directory which returns null when the config is cached, use \'config\'.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'larastan.noEnvCallsOutsideOfConfig',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Called \'env\' outside of the config directory which returns null when the config is cached, use \'config\'.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'larastan.noEnvCallsOutsideOfConfig',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Called \'env\' outside of the config directory which returns null when the config is cached, use \'config\'.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'larastan.noEnvCallsOutsideOfConfig',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Called \'env\' outside of the config directory which returns null when the config is cached, use \'config\'.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 48,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'larastan.noEnvCallsOutsideOfConfig',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Called \'env\' outside of the config directory which returns null when the config is cached, use \'config\'.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 49,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'larastan.noEnvCallsOutsideOfConfig',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Called \'env\' outside of the config directory which returns null when the config is cached, use \'config\'.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'larastan.noEnvCallsOutsideOfConfig',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Called \'env\' outside of the config directory which returns null when the config is cached, use \'config\'.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 51,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'larastan.noEnvCallsOutsideOfConfig',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $host of class PhpAmqpLib\\Connection\\AMQPStreamConnection constructor expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $port of class PhpAmqpLib\\Connection\\AMQPStreamConnection constructor expects string, int given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $user of class PhpAmqpLib\\Connection\\AMQPStreamConnection constructor expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #4 $password of class PhpAmqpLib\\Connection\\AMQPStreamConnection constructor expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #5 $vhost of class PhpAmqpLib\\Connection\\AMQPStreamConnection constructor expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $exchange of method PhpAmqpLib\\Channel\\AMQPChannel::exchange_declare() expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 58,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 58,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $queue of method PhpAmqpLib\\Channel\\AMQPChannel::queue_declare() expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 61,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $queue of method PhpAmqpLib\\Channel\\AMQPChannel::queue_bind() expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $exchange of method PhpAmqpLib\\Channel\\AMQPChannel::queue_bind() expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 64,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $queue of method App\\Console\\Commands\\ConsumeArticles::processMessage() expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 76,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 76,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $prefetch_size of method PhpAmqpLib\\Channel\\AMQPChannel::basic_qos() expects int, null given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 86,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $a_global of method PhpAmqpLib\\Channel\\AMQPChannel::basic_qos() expects bool, null given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 86,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $queue of method PhpAmqpLib\\Channel\\AMQPChannel::basic_consume() expects string, bool|string given.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Negated boolean expression is always true.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 105,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 105,
       'nodeType' => 'PhpParser\\Node\\Expr\\BooleanNot',
       'identifier' => 'booleanNot.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Unreachable statement - code above always terminates.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 108,
       'nodeType' => 'PHPStan\\Node\\UnreachableStatementNode',
       'identifier' => 'deadCode.unreachable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Console\\Commands\\ConsumeArticles::processMessage() has parameter $channel with no type specified.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 130,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 130,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    23 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\IndexedArticle|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\IndexedArticle>::$last_event_at.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 183,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 183,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    24 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Strict comparison using !== between string and null will always evaluate to true.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 183,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 183,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical',
       'identifier' => 'notIdentical.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    25 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property App\\Models\\IndexedArticle|Illuminate\\Database\\Eloquent\\Collection<int, App\\Models\\IndexedArticle>::$last_event_at.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'line' => 184,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 184,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\IndexedArticle.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type string of property App\\Models\\IndexedArticle::$table is not the same as PHPDoc type string|null of overridden property Illuminate\\Database\\Eloquent\\Model::$table.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\IndexedArticle.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\IndexedArticle.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>
   This error can be turned off by setting
   <fg=cyan>reportMaybesInPropertyPhpDocTypes: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\ProcessedEvent.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type string of property App\\Models\\ProcessedEvent::$table is not the same as PHPDoc type string|null of overridden property Illuminate\\Database\\Eloquent\\Model::$table.',
       'file' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\ProcessedEvent.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\ProcessedEvent.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>
   This error can be turned off by setting
   <fg=cyan>reportMaybesInPropertyPhpDocTypes: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 162,
      ),
      1 => 
      array (
        0 => 'Carbon\\Carbon',
        1 => 'parse',
        2 => 244,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'updateOrCreate',
        2 => 271,
      ),
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\IndexedArticle.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\IndexedArticle',
        1 => 'casts',
        2 => 'App\\Models\\IndexedArticle',
      ),
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\ProcessedEvent.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\ProcessedEvent',
        1 => 'casts',
        2 => 'App\\Models\\ProcessedEvent',
      ),
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\routes\\web.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'welcome',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 5,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php' => 
  array (
    'fileHash' => '3845bd2ae6fa55ab7d7145e516267a0e11b79182',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => 'a33a5105f92c73a309c9f8a549905dcdf6dccbae',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\IndexedArticle.php' => 
  array (
    'fileHash' => 'fc6703af6afcccd88a5ca75e6c80257b656b5ccf',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\ProcessedEvent.php' => 
  array (
    'fileHash' => 'caa4d2c081d163d6126a0bfcb9b1e9ea7fc4f488',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php',
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\User.php' => 
  array (
    'fileHash' => '0de556dcaed737c421ea5b9b029f7cc1445768cf',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => '01bf9e5cf5bb666446625056b618445ae4749675',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\routes\\console.php' => 
  array (
    'fileHash' => '302bdfc3b87dd1b70c1dc59645e1235395c9c0e3',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\routes\\web.php' => 
  array (
    'fileHash' => '2f63d05f77bbdde1a6ef48ce7c5d4dc1f126afa3',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Console\\Commands\\ConsumeArticles.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\ConsumeArticles',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name and signature of the console command.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'indexedarticle' => 'App\\Models\\IndexedArticle',
              'processedevent' => 'App\\Models\\ProcessedEvent',
              'command' => 'Illuminate\\Console\\Command',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'log' => 'Illuminate\\Support\\Facades\\Log',
              'amqpstreamconnection' => 'PhpAmqpLib\\Connection\\AMQPStreamConnection',
              'amqpexceptioninterface' => 'PhpAmqpLib\\Exception\\AMQPExceptionInterface',
              'amqpmessage' => 'PhpAmqpLib\\Message\\AMQPMessage',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The console command description.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'indexedarticle' => 'App\\Models\\IndexedArticle',
              'processedevent' => 'App\\Models\\ProcessedEvent',
              'command' => 'Illuminate\\Console\\Command',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'log' => 'Illuminate\\Support\\Facades\\Log',
              'amqpstreamconnection' => 'PhpAmqpLib\\Connection\\AMQPStreamConnection',
              'amqpexceptioninterface' => 'PhpAmqpLib\\Exception\\AMQPExceptionInterface',
              'amqpmessage' => 'PhpAmqpLib\\Message\\AMQPMessage',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'indexedarticle' => 'App\\Models\\IndexedArticle',
              'processedevent' => 'App\\Models\\ProcessedEvent',
              'command' => 'Illuminate\\Console\\Command',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'log' => 'Illuminate\\Support\\Facades\\Log',
              'amqpstreamconnection' => 'PhpAmqpLib\\Connection\\AMQPStreamConnection',
              'amqpexceptioninterface' => 'PhpAmqpLib\\Exception\\AMQPExceptionInterface',
              'amqpmessage' => 'PhpAmqpLib\\Message\\AMQPMessage',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\IndexedArticle.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\IndexedArticle',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table associated with the model.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKey',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The primary key for the model.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'incrementing',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'keyType',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The "type" of the primary key ID.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\ProcessedEvent.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ProcessedEvent',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table associated with the model.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKey',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The primary key for the model.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'incrementing',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'keyType',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The "type" of the primary key ID.
     *
     * @var string
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timestamps',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\jonat\\repos\\projects\\hfs_setup\\hfs\\articles-indexer-tech-test\\indexer-service\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
