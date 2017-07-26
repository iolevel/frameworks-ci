<?php
// TODO: Use the original loader from the PHAR when possible

/*if (version_compare('7.0.0', PHP_VERSION, '>')) {
    fwrite(
        STDERR,
        sprintf(
            'PHPUnit 6.2.2 by Sebastian Bergmann and contributors.' . PHP_EOL . PHP_EOL .
            'This version of PHPUnit is supported on PHP 7.0 and PHP 7.1.' . PHP_EOL .
            'You are using PHP %s (%s).' . PHP_EOL,
            PHP_VERSION,
            PHP_BINARY
        )
    );

    die(1);
}*/

//if (__FILE__ == realpath($GLOBALS['_SERVER']['SCRIPT_NAME'])) {
    $execute = true;
//} else {
//    $execute = false;
//}

define('__PHPUNIT_PHAR__', str_replace(DIRECTORY_SEPARATOR, '/', __FILE__));
define('__PHPUNIT_PHAR_ROOT__', __PHPUNIT_PHAR__ /*'phar://phpunit-6.2.2.phar'*/);

//Phar::mapPhar('phpunit-6.2.2.phar');

require '.' . '/myclabs-deep-copy/DeepCopy/DeepCopy.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Exception/CloneException.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Filter/Filter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Filter/Doctrine/DoctrineCollectionFilter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Filter/Doctrine/DoctrineEmptyCollectionFilter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Filter/Doctrine/DoctrineProxyFilter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Filter/KeepFilter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Filter/ReplaceFilter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Filter/SetNullFilter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Matcher/Matcher.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Matcher/Doctrine/DoctrineProxyMatcher.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Matcher/PropertyMatcher.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Matcher/PropertyNameMatcher.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Matcher/PropertyTypeMatcher.php';
require '.' . '/myclabs-deep-copy/DeepCopy/Reflection/ReflectionHelper.php';
require '.' . '/myclabs-deep-copy/DeepCopy/TypeFilter/TypeFilter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/TypeFilter/ReplaceFilter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/TypeFilter/ShallowCopyFilter.php';
require '.' . '/myclabs-deep-copy/DeepCopy/TypeFilter/Spl/SplDoublyLinkedList.php';
require '.' . '/myclabs-deep-copy/DeepCopy/TypeMatcher/TypeMatcher.php';
require '.' . '/doctrine-instantiator/Doctrine/Instantiator/Exception/ExceptionInterface.php';
require '.' . '/doctrine-instantiator/Doctrine/Instantiator/Exception/InvalidArgumentException.php';
require '.' . '/doctrine-instantiator/Doctrine/Instantiator/Exception/UnexpectedValueException.php';
require '.' . '/doctrine-instantiator/Doctrine/Instantiator/InstantiatorInterface.php';
require '.' . '/doctrine-instantiator/Doctrine/Instantiator/Instantiator.php';
require '.' . '/php-file-iterator/Iterator.php';
require '.' . '/php-file-iterator/Facade.php';
require '.' . '/php-file-iterator/Factory.php';
require '.' . '/phpunit/Exception.php';
require '.' . '/phpunit/Framework/Assert.php';
require '.' . '/phpunit/Framework/SelfDescribing.php';
require '.' . '/phpunit/Framework/Exception.php';
require '.' . '/phpunit/Framework/AssertionFailedError.php';
require '.' . '/phpunit/Framework/TestListener.php';
require '.' . '/phpunit/Framework/BaseTestListener.php';
require '.' . '/phpunit/Framework/CodeCoverageException.php';
require '.' . '/phpunit/Framework/Constraint/Constraint.php';
require '.' . '/phpunit/Framework/Constraint/ArrayHasKey.php';
require '.' . '/phpunit/Framework/Constraint/ArraySubset.php';
require '.' . '/phpunit/Framework/Constraint/Composite.php';
require '.' . '/phpunit/Framework/Constraint/Attribute.php';
require '.' . '/phpunit/Framework/Constraint/Callback.php';
require '.' . '/phpunit/Framework/Constraint/ClassHasAttribute.php';
require '.' . '/phpunit/Framework/Constraint/ClassHasStaticAttribute.php';
require '.' . '/phpunit/Framework/Constraint/Count.php';
require '.' . '/phpunit/Framework/Constraint/DirectoryExists.php';
require '.' . '/phpunit/Framework/Constraint/Exception.php';
require '.' . '/phpunit/Framework/Constraint/ExceptionCode.php';
require '.' . '/phpunit/Framework/Constraint/ExceptionMessage.php';
require '.' . '/phpunit/Framework/Constraint/ExceptionMessageRegularExpression.php';
require '.' . '/phpunit/Framework/Constraint/FileExists.php';
require '.' . '/phpunit/Framework/Constraint/GreaterThan.php';
require '.' . '/phpunit/Framework/Constraint/IsAnything.php';
require '.' . '/phpunit/Framework/Constraint/IsEmpty.php';
require '.' . '/phpunit/Framework/Constraint/IsEqual.php';
require '.' . '/phpunit/Framework/Constraint/IsFalse.php';
require '.' . '/phpunit/Framework/Constraint/IsFinite.php';
require '.' . '/phpunit/Framework/Constraint/IsIdentical.php';
require '.' . '/phpunit/Framework/Constraint/IsInfinite.php';
require '.' . '/phpunit/Framework/Constraint/IsInstanceOf.php';
require '.' . '/phpunit/Framework/Constraint/IsJson.php';
require '.' . '/phpunit/Framework/Constraint/IsNan.php';
require '.' . '/phpunit/Framework/Constraint/IsNull.php';
require '.' . '/phpunit/Framework/Constraint/IsReadable.php';
require '.' . '/phpunit/Framework/Constraint/IsTrue.php';
require '.' . '/phpunit/Framework/Constraint/IsType.php';
require '.' . '/phpunit/Framework/Constraint/IsWritable.php';
require '.' . '/phpunit/Framework/Constraint/JsonMatches.php';
require '.' . '/phpunit/Framework/Constraint/JsonMatchesErrorMessageProvider.php';
require '.' . '/phpunit/Framework/Constraint/LessThan.php';
require '.' . '/phpunit/Framework/Constraint/LogicalAnd.php';
require '.' . '/phpunit/Framework/Constraint/LogicalNot.php';
require '.' . '/phpunit/Framework/Constraint/LogicalOr.php';
require '.' . '/phpunit/Framework/Constraint/LogicalXor.php';
require '.' . '/phpunit/Framework/Constraint/ObjectHasAttribute.php';
require '.' . '/phpunit/Framework/Constraint/RegularExpression.php';
require '.' . '/phpunit/Framework/Constraint/SameSize.php';
require '.' . '/phpunit/Framework/Constraint/StringContains.php';
require '.' . '/phpunit/Framework/Constraint/StringEndsWith.php';
require '.' . '/phpunit/Framework/Constraint/StringMatchesFormatDescription.php';
require '.' . '/phpunit/Framework/Constraint/StringStartsWith.php';
require '.' . '/phpunit/Framework/Constraint/TraversableContains.php';
require '.' . '/phpunit/Framework/Constraint/TraversableContainsOnly.php';
require '.' . '/phpunit/Framework/RiskyTest.php';
require '.' . '/phpunit/Framework/RiskyTestError.php';
require '.' . '/phpunit/Framework/CoveredCodeNotExecutedException.php';
require '.' . '/phpunit/Framework/Test.php';
require '.' . '/phpunit/Framework/TestSuite.php';
require '.' . '/phpunit/Framework/DataProviderTestSuite.php';
require '.' . '/phpunit/Framework/Error/Error.php';
require '.' . '/phpunit/Framework/Error/Deprecated.php';
require '.' . '/phpunit/Framework/Error/Notice.php';
require '.' . '/phpunit/Framework/Error/Warning.php';
require '.' . '/phpunit/Framework/ExceptionWrapper.php';
require '.' . '/phpunit/Framework/ExpectationFailedException.php';
require '.' . '/phpunit/Framework/IncompleteTest.php';
require '.' . '/phpunit/Framework/TestCase.php';
require '.' . '/phpunit/Framework/IncompleteTestCase.php';
require '.' . '/phpunit/Framework/IncompleteTestError.php';
require '.' . '/phpunit/Framework/InvalidCoversTargetException.php';
require '.' . '/phpunit/Framework/MissingCoversAnnotationException.php';
require '.' . '/phpunit/Framework/OutputError.php';
require '.' . '/phpunit/Framework/SkippedTest.php';
require '.' . '/phpunit/Framework/SkippedTestCase.php';
require '.' . '/phpunit/Framework/SkippedTestError.php';
require '.' . '/phpunit/Framework/SkippedTestSuiteError.php';
require '.' . '/phpunit/Framework/SyntheticError.php';
require '.' . '/phpunit/Framework/TestFailure.php';
require '.' . '/phpunit/Framework/TestResult.php';
require '.' . '/phpunit/Framework/TestSuiteIterator.php';
require '.' . '/phpunit/Framework/UnintentionallyCoveredCodeError.php';
require '.' . '/phpunit/Framework/Warning.php';
require '.' . '/phpunit/Framework/WarningTestCase.php';
require '.' . '/phpunit/Runner/BaseTestRunner.php';
require '.' . '/phpunit/Runner/Exception.php';
require '.' . '/phpunit/Runner/Filter/GroupFilterIterator.php';
require '.' . '/phpunit/Runner/Filter/ExcludeGroupFilterIterator.php';
require '.' . '/phpunit/Runner/Filter/Factory.php';
require '.' . '/phpunit/Runner/Filter/IncludeGroupFilterIterator.php';
require '.' . '/phpunit/Runner/Filter/NameFilterIterator.php';
require '.' . '/phpunit/Runner/PhptTestCase.php';
require '.' . '/phpunit/Runner/TestSuiteLoader.php';
require '.' . '/phpunit/Runner/StandardTestSuiteLoader.php';
require '.' . '/phpunit/Runner/Version.php';
require '.' . '/phpunit/TextUI/Command.php';
require '.' . '/phpunit/Util/Printer.php';
require '.' . '/phpunit/TextUI/ResultPrinter.php';
require '.' . '/phpunit/TextUI/TestRunner.php';
require '.' . '/phpunit/Util/Blacklist.php';
require '.' . '/phpunit/Util/Configuration.php';
require '.' . '/phpunit/Util/ConfigurationGenerator.php';
require '.' . '/phpunit/Util/ErrorHandler.php';
require '.' . '/phpunit/Util/Fileloader.php';
require '.' . '/phpunit/Util/Filesystem.php';
require '.' . '/phpunit/Util/Filter.php';
require '.' . '/phpunit/Util/Getopt.php';
require '.' . '/phpunit/Util/GlobalState.php';
require '.' . '/phpunit/Util/InvalidArgumentHelper.php';
require '.' . '/phpunit/Util/Log/JUnit.php';
require '.' . '/phpunit/Util/Log/TeamCity.php';
require '.' . '/phpunit/Util/PHP/AbstractPhpProcess.php';
require '.' . '/phpunit/Util/PHP/DefaultPhpProcess.php';
require '.' . '/phpunit/Util/PHP/WindowsPhpProcess.php';
require '.' . '/phpunit/Util/RegularExpression.php';
require '.' . '/phpunit/Util/Test.php';
require '.' . '/phpunit/Util/TestDox/ResultPrinter.php';
require '.' . '/phpunit/Util/TestDox/HtmlResultPrinter.php';
require '.' . '/phpunit/Util/TestDox/NamePrettifier.php';
require '.' . '/phpunit/Util/TestDox/TextResultPrinter.php';
require '.' . '/phpunit/Util/TestDox/XmlResultPrinter.php';
require '.' . '/phpunit/Util/Type.php';
require '.' . '/phpunit/Util/Xml.php';
require '.' . '/phpunit-mock-objects/Exception/Exception.php';
require '.' . '/phpunit-mock-objects/Exception/BadMethodCallException.php';
require '.' . '/phpunit-mock-objects/Builder/Identity.php';
require '.' . '/phpunit-mock-objects/Builder/Stub.php';
require '.' . '/phpunit-mock-objects/Builder/Match.php';
require '.' . '/phpunit-mock-objects/Builder/ParametersMatch.php';
require '.' . '/phpunit-mock-objects/Builder/MethodNameMatch.php';
require '.' . '/phpunit-mock-objects/Builder/InvocationMocker.php';
require '.' . '/phpunit-mock-objects/Builder/Namespace.php';
require '.' . '/phpunit-mock-objects/Generator.php';
require '.' . '/phpunit-mock-objects/Invocation.php';
require '.' . '/phpunit-mock-objects/Stub/MatcherCollection.php';
require '.' . '/phpunit-mock-objects/Verifiable.php';
require '.' . '/phpunit-mock-objects/Invokable.php';
require '.' . '/phpunit-mock-objects/InvocationMocker.php';
require '.' . '/phpunit-mock-objects/Invocation/Static.php';
require '.' . '/phpunit-mock-objects/Invocation/Object.php';
require '.' . '/phpunit-mock-objects/Matcher/Invocation.php';
require '.' . '/phpunit-mock-objects/Matcher.php';
require '.' . '/phpunit-mock-objects/Matcher/InvokedRecorder.php';
require '.' . '/phpunit-mock-objects/Matcher/AnyInvokedCount.php';
require '.' . '/phpunit-mock-objects/Matcher/StatelessInvocation.php';
require '.' . '/phpunit-mock-objects/Matcher/AnyParameters.php';
require '.' . '/phpunit-mock-objects/Matcher/ConsecutiveParameters.php';
require '.' . '/phpunit-mock-objects/Matcher/InvokedAtIndex.php';
require '.' . '/phpunit-mock-objects/Matcher/InvokedAtLeastCount.php';
require '.' . '/phpunit-mock-objects/Matcher/InvokedAtLeastOnce.php';
require '.' . '/phpunit-mock-objects/Matcher/InvokedAtMostCount.php';
require '.' . '/phpunit-mock-objects/Matcher/InvokedCount.php';
require '.' . '/phpunit-mock-objects/Matcher/MethodName.php';
require '.' . '/phpunit-mock-objects/Matcher/Parameters.php';
require '.' . '/phpunit-mock-objects/MockBuilder.php';
require '.' . '/phpunit-mock-objects/MockObject.php';
require '.' . '/phpunit-mock-objects/Exception/RuntimeException.php';
require '.' . '/phpunit-mock-objects/Stub.php';
require '.' . '/phpunit-mock-objects/Stub/ConsecutiveCalls.php';
require '.' . '/phpunit-mock-objects/Stub/Exception.php';
require '.' . '/phpunit-mock-objects/Stub/Return.php';
require '.' . '/phpunit-mock-objects/Stub/ReturnArgument.php';
require '.' . '/phpunit-mock-objects/Stub/ReturnCallback.php';
require '.' . '/phpunit-mock-objects/Stub/ReturnReference.php';
require '.' . '/phpunit-mock-objects/Stub/ReturnSelf.php';
require '.' . '/phpunit-mock-objects/Stub/ReturnValueMap.php';
require '.' . '/php-invoker/Invoker.php';
require '.' . '/php-invoker/TimeoutException.php';
require '.' . '/php-timer/Timer.php';
require '.' . '/php-token-stream/Token.php';
require '.' . '/php-token-stream/Token/Stream.php';
require '.' . '/php-token-stream/Token/Stream/CachingFactory.php';
require '.' . '/phar-io-manifest/values/Type.php';
require '.' . '/phar-io-manifest/values/Application.php';
require '.' . '/phar-io-manifest/values/ApplicationName.php';
require '.' . '/phar-io-manifest/values/Author.php';
require '.' . '/phar-io-manifest/values/AuthorCollection.php';
require '.' . '/phar-io-manifest/values/AuthorCollectionIterator.php';
require '.' . '/phar-io-manifest/xml/ManifestElement.php';
require '.' . '/phar-io-manifest/xml/AuthorElement.php';
require '.' . '/phar-io-manifest/xml/ElementCollection.php';
require '.' . '/phar-io-manifest/xml/AuthorElementCollection.php';
require '.' . '/phar-io-manifest/values/BundledComponent.php';
require '.' . '/phar-io-manifest/values/BundledComponentCollection.php';
require '.' . '/phar-io-manifest/values/BundledComponentCollectionIterator.php';
require '.' . '/phar-io-manifest/xml/BundlesElement.php';
require '.' . '/phar-io-manifest/xml/ComponentElement.php';
require '.' . '/phar-io-manifest/xml/ComponentElementCollection.php';
require '.' . '/phar-io-manifest/xml/ContainsElement.php';
require '.' . '/phar-io-manifest/xml/CopyrightElement.php';
require '.' . '/phar-io-manifest/values/CopyrightInformation.php';
require '.' . '/phar-io-manifest/values/Email.php';
require '.' . '/phar-io-manifest/exceptions/Exception.php';
require '.' . '/phar-io-manifest/xml/ExtElement.php';
require '.' . '/phar-io-manifest/xml/ExtElementCollection.php';
require '.' . '/phar-io-manifest/values/Extension.php';
require '.' . '/phar-io-manifest/xml/ExtensionElement.php';
require '.' . '/phar-io-manifest/exceptions/InvalidApplicationNameException.php';
require '.' . '/phar-io-manifest/exceptions/InvalidEmailException.php';
require '.' . '/phar-io-manifest/exceptions/InvalidUrlException.php';
require '.' . '/phar-io-manifest/values/Library.php';
require '.' . '/phar-io-manifest/values/License.php';
require '.' . '/phar-io-manifest/xml/LicenseElement.php';
require '.' . '/phar-io-manifest/values/Manifest.php';
require '.' . '/phar-io-manifest/xml/ManifestDocument.php';
require '.' . '/phar-io-manifest/exceptions/ManifestDocumentException.php';
require '.' . '/phar-io-manifest/xml/ManifestDocumentLoadingException.php';
require '.' . '/phar-io-manifest/ManifestDocumentMapper.php';
require '.' . '/phar-io-manifest/exceptions/ManifestDocumentMapperException.php';
require '.' . '/phar-io-manifest/exceptions/ManifestElementException.php';
require '.' . '/phar-io-manifest/ManifestLoader.php';
require '.' . '/phar-io-manifest/exceptions/ManifestLoaderException.php';
require '.' . '/phar-io-manifest/ManifestSerializer.php';
require '.' . '/phar-io-manifest/xml/PhpElement.php';
require '.' . '/phar-io-manifest/values/Requirement.php';
require '.' . '/phar-io-manifest/values/PhpExtensionRequirement.php';
require '.' . '/phar-io-manifest/values/PhpVersionRequirement.php';
require '.' . '/phar-io-manifest/values/RequirementCollection.php';
require '.' . '/phar-io-manifest/values/RequirementCollectionIterator.php';
require '.' . '/phar-io-manifest/xml/RequiresElement.php';
require '.' . '/phar-io-manifest/values/Url.php';
require '.' . '/phar-io-version/VersionConstraint.php';
require '.' . '/phar-io-version/AbstractVersionConstraint.php';
require '.' . '/phar-io-version/AndVersionConstraintGroup.php';
require '.' . '/phar-io-version/AnyVersionConstraint.php';
require '.' . '/phar-io-version/ExactVersionConstraint.php';
require '.' . '/phar-io-version/Exception.php';
require '.' . '/phar-io-version/GreaterThanOrEqualToVersionConstraint.php';
require '.' . '/phar-io-version/InvalidVersionException.php';
require '.' . '/phar-io-version/OrVersionConstraintGroup.php';
require '.' . '/phar-io-version/PreReleaseSuffix.php';
require '.' . '/phar-io-version/SpecificMajorAndMinorVersionConstraint.php';
require '.' . '/phar-io-version/SpecificMajorVersionConstraint.php';
require '.' . '/phar-io-version/UnsupportedVersionConstraintException.php';
require '.' . '/phar-io-version/Version.php';
require '.' . '/phar-io-version/VersionConstraintParser.php';
require '.' . '/phar-io-version/VersionConstraintValue.php';
require '.' . '/phar-io-version/VersionNumber.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/ArgumentsWildcard.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/TokenInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/AnyValueToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/AnyValuesToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/ApproximateValueToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/ArrayCountToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/ArrayEntryToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/ArrayEveryEntryToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/CallbackToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/ExactValueToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/IdenticalValueToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/LogicalAndToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/LogicalNotToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/ObjectStateToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/StringContainsToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Argument/Token/TypeToken.php';
require '.' . '/phpspec-prophecy/Prophecy/Call/Call.php';
require '.' . '/phpspec-prophecy/Prophecy/Call/CallCenter.php';
require '.' . '/sebastian-comparator/Comparator.php';
require '.' . '/phpspec-prophecy/Prophecy/Comparator/ClosureComparator.php';
require '.' . '/sebastian-comparator/Factory.php';
require '.' . '/phpspec-prophecy/Prophecy/Comparator/Factory.php';
require '.' . '/sebastian-comparator/ArrayComparator.php';
require '.' . '/sebastian-comparator/ObjectComparator.php';
require '.' . '/phpspec-prophecy/Prophecy/Comparator/ProphecyComparator.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/Doubler.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/CachedDoubler.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/ClassPatchInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/DisableConstructorPatch.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/HhvmExceptionPatch.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/KeywordPatch.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/MagicCallPatch.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/ProphecySubjectPatch.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/ReflectionClassNewInstancePatch.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/SplFileInfoPatch.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/TraversablePatch.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/DoubleInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/Generator/ClassCodeGenerator.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/Generator/ClassCreator.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/Generator/ClassMirror.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/Generator/Node/ArgumentNode.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/Generator/Node/ClassNode.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/Generator/Node/MethodNode.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/Generator/ReflectionInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/LazyDouble.php';
require '.' . '/phpspec-prophecy/Prophecy/Doubler/NameGenerator.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Exception.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Prophecy/ProphecyException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Prophecy/ObjectProphecyException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Call/UnexpectedCallException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Doubler/DoublerException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Doubler/ClassCreatorException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Doubler/ClassMirrorException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Doubler/DoubleException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Doubler/ClassNotFoundException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Doubler/InterfaceNotFoundException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Doubler/MethodNotExtendableException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Doubler/MethodNotFoundException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Doubler/ReturnByReferenceException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/InvalidArgumentException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Prediction/PredictionException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Prediction/AggregateException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Prediction/FailedPredictionException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Prophecy/MethodProphecyException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Prediction/NoCallsException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Prediction/UnexpectedCallsException.php';
require '.' . '/phpspec-prophecy/Prophecy/Exception/Prediction/UnexpectedCallsCountException.php';
require '.' . '/phpspec-prophecy/Prophecy/PhpDocumentor/MethodTagRetrieverInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/PhpDocumentor/ClassAndInterfaceTagRetriever.php';
require '.' . '/phpspec-prophecy/Prophecy/PhpDocumentor/ClassTagRetriever.php';
require '.' . '/phpspec-prophecy/Prophecy/PhpDocumentor/LegacyClassTagRetriever.php';
require '.' . '/phpspec-prophecy/Prophecy/Prediction/PredictionInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/Prediction/CallPrediction.php';
require '.' . '/phpspec-prophecy/Prophecy/Prediction/CallTimesPrediction.php';
require '.' . '/phpspec-prophecy/Prophecy/Prediction/CallbackPrediction.php';
require '.' . '/phpspec-prophecy/Prophecy/Prediction/NoCallsPrediction.php';
require '.' . '/phpspec-prophecy/Prophecy/Promise/PromiseInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/Promise/CallbackPromise.php';
require '.' . '/phpspec-prophecy/Prophecy/Promise/ReturnArgumentPromise.php';
require '.' . '/phpspec-prophecy/Prophecy/Promise/ReturnPromise.php';
require '.' . '/phpspec-prophecy/Prophecy/Promise/ThrowPromise.php';
require '.' . '/phpspec-prophecy/Prophecy/Prophecy/MethodProphecy.php';
require '.' . '/phpspec-prophecy/Prophecy/Prophecy/ProphecyInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/Prophecy/ObjectProphecy.php';
require '.' . '/phpspec-prophecy/Prophecy/Prophecy/ProphecySubjectInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/Prophecy/RevealerInterface.php';
require '.' . '/phpspec-prophecy/Prophecy/Prophecy/Revealer.php';
require '.' . '/phpspec-prophecy/Prophecy/Prophet.php';
require '.' . '/phpspec-prophecy/Prophecy/Util/ExportUtil.php';
require '.' . '/phpspec-prophecy/Prophecy/Util/StringUtil.php';
require '.' . '/php-code-coverage/CodeCoverage.php';
require '.' . '/php-code-coverage/Exception/Exception.php';
require '.' . '/php-code-coverage/Exception/RuntimeException.php';
require '.' . '/php-code-coverage/Exception/CoveredCodeNotExecutedException.php';
require '.' . '/php-code-coverage/Driver/Driver.php';
require '.' . '/php-code-coverage/Driver/Xdebug.php';
require '.' . '/php-code-coverage/Driver/HHVM.php';
require '.' . '/php-code-coverage/Driver/PHPDBG.php';
require '.' . '/php-code-coverage/Filter.php';
require '.' . '/php-code-coverage/Exception/InvalidArgumentException.php';
require '.' . '/php-code-coverage/Exception/MissingCoversAnnotationException.php';
require '.' . '/php-code-coverage/Node/AbstractNode.php';
require '.' . '/php-code-coverage/Node/Builder.php';
require '.' . '/php-code-coverage/Node/Directory.php';
require '.' . '/php-code-coverage/Node/File.php';
require '.' . '/php-code-coverage/Node/Iterator.php';
require '.' . '/php-code-coverage/Report/Clover.php';
require '.' . '/php-code-coverage/Report/Crap4j.php';
require '.' . '/php-code-coverage/Report/Html/Renderer.php';
require '.' . '/php-code-coverage/Report/Html/Renderer/Dashboard.php';
require '.' . '/php-code-coverage/Report/Html/Renderer/Directory.php';
require '.' . '/php-code-coverage/Report/Html/Facade.php';
require '.' . '/php-code-coverage/Report/Html/Renderer/File.php';
require '.' . '/php-code-coverage/Report/PHP.php';
require '.' . '/php-code-coverage/Report/Text.php';
require '.' . '/php-code-coverage/Report/Xml/BuildInformation.php';
require '.' . '/php-code-coverage/Report/Xml/Coverage.php';
require '.' . '/php-code-coverage/Report/Xml/Node.php';
require '.' . '/php-code-coverage/Report/Xml/Directory.php';
require '.' . '/php-code-coverage/Report/Xml/Facade.php';
require '.' . '/php-code-coverage/Report/Xml/File.php';
require '.' . '/php-code-coverage/Report/Xml/Method.php';
require '.' . '/php-code-coverage/Report/Xml/Project.php';
require '.' . '/php-code-coverage/Report/Xml/Report.php';
require '.' . '/php-code-coverage/Report/Xml/Source.php';
require '.' . '/php-code-coverage/Report/Xml/Tests.php';
require '.' . '/php-code-coverage/Report/Xml/Totals.php';
require '.' . '/php-code-coverage/Report/Xml/Unit.php';
require '.' . '/php-code-coverage/Exception/UnintentionallyCoveredCodeException.php';
require '.' . '/php-code-coverage/Util.php';
require '.' . '/php-code-coverage/Version.php';
require '.' . '/sebastian-code-unit-reverse-lookup/Wizard.php';
require '.' . '/sebastian-comparator/ComparisonFailure.php';
require '.' . '/sebastian-comparator/DOMNodeComparator.php';
require '.' . '/sebastian-comparator/DateTimeComparator.php';
require '.' . '/sebastian-comparator/ScalarComparator.php';
require '.' . '/sebastian-comparator/NumericComparator.php';
require '.' . '/sebastian-comparator/DoubleComparator.php';
require '.' . '/sebastian-comparator/ExceptionComparator.php';
require '.' . '/sebastian-comparator/MockObjectComparator.php';
require '.' . '/sebastian-comparator/ResourceComparator.php';
require '.' . '/sebastian-comparator/SplObjectStorageComparator.php';
require '.' . '/sebastian-comparator/TypeComparator.php';
require '.' . '/sebastian-diff/Chunk.php';
require '.' . '/sebastian-diff/Diff.php';
require '.' . '/sebastian-diff/Differ.php';
require '.' . '/sebastian-diff/LCS/LongestCommonSubsequence.php';
require '.' . '/sebastian-diff/LCS/MemoryEfficientLongestCommonSubsequenceImplementation.php';
require '.' . '/sebastian-diff/LCS/TimeEfficientLongestCommonSubsequenceImplementation.php';
require '.' . '/sebastian-diff/Line.php';
require '.' . '/sebastian-diff/Parser.php';
require '.' . '/sebastian-environment/Console.php';
require '.' . '/sebastian-environment/Runtime.php';
require '.' . '/sebastian-exporter/Exporter.php';
require '.' . '/sebastian-global-state/Blacklist.php';
require '.' . '/sebastian-global-state/CodeExporter.php';
require '.' . '/sebastian-global-state/exceptions/Exception.php';
require '.' . '/sebastian-global-state/Restorer.php';
require '.' . '/sebastian-global-state/exceptions/RuntimeException.php';
require '.' . '/sebastian-global-state/Snapshot.php';
require '.' . '/sebastian-object-enumerator/Enumerator.php';
require '.' . '/sebastian-object-enumerator/Exception.php';
require '.' . '/sebastian-object-enumerator/InvalidArgumentException.php';
require '.' . '/sebastian-object-reflector/Exception.php';
require '.' . '/sebastian-object-reflector/InvalidArgumentException.php';
require '.' . '/sebastian-object-reflector/ObjectReflector.php';
require '.' . '/sebastian-recursion-context/Context.php';
require '.' . '/sebastian-recursion-context/Exception.php';
require '.' . '/sebastian-recursion-context/InvalidArgumentException.php';
require '.' . '/sebastian-resource-operations/ResourceOperations.php';
require '.' . '/sebastian-version/Version.php';
require '.' . '/php-text-template/Template.php';
require '.' . '/theseer-tokenizer/Exception.php';
require '.' . '/theseer-tokenizer/NamespaceUri.php';
require '.' . '/theseer-tokenizer/NamespaceUriException.php';
require '.' . '/theseer-tokenizer/Token.php';
require '.' . '/theseer-tokenizer/TokenCollection.php';
require '.' . '/theseer-tokenizer/TokenCollectionException.php';
require '.' . '/theseer-tokenizer/Tokenizer.php';
require '.' . '/theseer-tokenizer/XMLSerializer.php';
require '.' . '/webmozart-assert/Assert.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlockFactoryInterface.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlockFactory.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Description.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/DescriptionFactory.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Serializer.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/TagFactory.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/StandardTagFactory.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tag.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Factory/StaticMethod.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/BaseTag.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Author.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Covers.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Deprecated.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Example.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Factory/Strategy.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Formatter.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Formatter/PassthroughFormatter.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Generic.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Link.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Method.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Param.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Property.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/PropertyRead.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/PropertyWrite.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Return_.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/See.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Since.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Source.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Throws.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Uses.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Var_.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Version.php';
require '.' . '/phpdocumentor-reflection-common/Element.php';
require '.' . '/phpdocumentor-reflection-docblock/DocBlock/ExampleFinder.php';
require '.' . '/phpdocumentor-reflection-common/File.php';
require '.' . '/phpdocumentor-reflection-common/Fqsen.php';
require '.' . '/phpdocumentor-type-resolver/FqsenResolver.php';
require '.' . '/phpdocumentor-reflection-common/Location.php';
require '.' . '/phpdocumentor-reflection-common/Project.php';
require '.' . '/phpdocumentor-reflection-common/ProjectFactory.php';
require '.' . '/phpdocumentor-type-resolver/Type.php';
require '.' . '/phpdocumentor-type-resolver/TypeResolver.php';
require '.' . '/phpdocumentor-type-resolver/Types/Array_.php';
require '.' . '/phpdocumentor-type-resolver/Types/Boolean.php';
require '.' . '/phpdocumentor-type-resolver/Types/Callable_.php';
require '.' . '/phpdocumentor-type-resolver/Types/Compound.php';
require '.' . '/phpdocumentor-type-resolver/Types/Context.php';
require '.' . '/phpdocumentor-type-resolver/Types/ContextFactory.php';
require '.' . '/phpdocumentor-type-resolver/Types/Float_.php';
require '.' . '/phpdocumentor-type-resolver/Types/Integer.php';
require '.' . '/phpdocumentor-type-resolver/Types/Mixed.php';
require '.' . '/phpdocumentor-type-resolver/Types/Null_.php';
require '.' . '/phpdocumentor-type-resolver/Types/Object_.php';
require '.' . '/phpdocumentor-type-resolver/Types/Resource.php';
require '.' . '/phpdocumentor-type-resolver/Types/Scalar.php';
require '.' . '/phpdocumentor-type-resolver/Types/Self_.php';
require '.' . '/phpdocumentor-type-resolver/Types/Static_.php';
require '.' . '/phpdocumentor-type-resolver/Types/String_.php';
require '.' . '/phpdocumentor-type-resolver/Types/This.php';
require '.' . '/phpdocumentor-type-resolver/Types/Void_.php';

if ($execute) {
    if (isset($_SERVER['argv'][1]) && $_SERVER['argv'][1] == '--manifest') {
        print file_get_contents(__PHPUNIT_PHAR_ROOT__ . '/manifest.txt');
        exit;
    }

    PHPUnit\TextUI\Command::main();
}
