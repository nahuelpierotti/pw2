#!/usr/bin/env php
<?php
if (version_compare('7.1.0', PHP_VERSION, '>')) {
    fwrite(
        STDERR,
        sprintf(
            'PHPUnit 7.5.20 by Sebastian Bergmann and contributors.' . PHP_EOL . PHP_EOL .
            'This version of PHPUnit is supported on PHP 7.1, PHP 7.2, and PHP 7.3.' . PHP_EOL .
            'You are using PHP %s (%s).' . PHP_EOL,
            PHP_VERSION,
            PHP_BINARY
        )
    );

    die(1);
}

if (__FILE__ === realpath($_SERVER['SCRIPT_NAME'])) {
    $execute = true;
} else {
    $execute = false;
}

$options = getopt('', array('prepend:', 'manifest'));

if (isset($options['prepend'])) {
    require $options['prepend'];
}

if (isset($options['manifest'])) {
    $printManifest = true;
}

unset($options);

define('__PHPUNIT_PHAR__', str_replace(DIRECTORY_SEPARATOR, '/', __FILE__));
define('__PHPUNIT_PHAR_ROOT__', 'phar://phpunit-7.5.20.phar');

Phar::mapPhar('phpunit-7.5.20.phar');

require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/DeepCopy.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Exception/CloneException.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Exception/PropertyException.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Filter/Filter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Filter/Doctrine/DoctrineCollectionFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Filter/Doctrine/DoctrineEmptyCollectionFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Filter/Doctrine/DoctrineProxyFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Filter/KeepFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Filter/ReplaceFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Filter/SetNullFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Matcher/Matcher.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Matcher/Doctrine/DoctrineProxyMatcher.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Matcher/PropertyMatcher.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Matcher/PropertyNameMatcher.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Matcher/PropertyTypeMatcher.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/Reflection/ReflectionHelper.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/TypeFilter/TypeFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/TypeFilter/Date/DateIntervalFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/TypeFilter/ReplaceFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/TypeFilter/ShallowCopyFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/TypeFilter/Spl/SplDoublyLinkedListFilter.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/TypeFilter/Spl/SplDoublyLinkedList.php';
require 'phar://phpunit-7.5.20.phar' . '/myclabs-deep-copy/DeepCopy/TypeMatcher/TypeMatcher.php';
require 'phar://phpunit-7.5.20.phar' . '/doctrine-instantiator/Doctrine/Instantiator/Exception/ExceptionInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/doctrine-instantiator/Doctrine/Instantiator/Exception/InvalidArgumentException.php';
require 'phar://phpunit-7.5.20.phar' . '/doctrine-instantiator/Doctrine/Instantiator/Exception/UnexpectedValueException.php';
require 'phar://phpunit-7.5.20.phar' . '/doctrine-instantiator/Doctrine/Instantiator/InstantiatorInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/doctrine-instantiator/Doctrine/Instantiator/Instantiator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Assert.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/SelfDescribing.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/AssertionFailedError.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/CodeCoverageException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/Constraint.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/ArrayHasKey.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/ArraySubset.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/Composite.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/Attribute.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/Callback.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/ClassHasAttribute.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/ClassHasStaticAttribute.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/Count.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/DirectoryExists.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/ExceptionCode.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/ExceptionMessage.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/ExceptionMessageRegularExpression.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/FileExists.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/GreaterThan.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsAnything.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsEmpty.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsEqual.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsFalse.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsFinite.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsIdentical.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsInfinite.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsInstanceOf.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsJson.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsNan.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsNull.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsReadable.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsTrue.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsType.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/IsWritable.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/JsonMatches.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/JsonMatchesErrorMessageProvider.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/LessThan.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/LogicalAnd.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/LogicalNot.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/LogicalOr.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/LogicalXor.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/ObjectHasAttribute.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/RegularExpression.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/SameSize.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/StringContains.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/StringEndsWith.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/StringMatchesFormatDescription.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/StringStartsWith.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/TraversableContains.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Constraint/TraversableContainsOnly.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/RiskyTest.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/RiskyTestError.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/CoveredCodeNotExecutedException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Test.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/TestSuite.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/DataProviderTestSuite.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Error/Error.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Error/Deprecated.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Error/Notice.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Error/Warning.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/ExceptionWrapper.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/ExpectationFailedException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/IncompleteTest.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/TestCase.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/IncompleteTestCase.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/IncompleteTestError.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/InvalidCoversTargetException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/InvalidParameterGroupException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MissingCoversAnnotationException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Exception/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Exception/BadMethodCallException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Builder/Identity.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Builder/Stub.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Builder/Match.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Builder/ParametersMatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Builder/MethodNameMatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Builder/InvocationMocker.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Builder/NamespaceMatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Generator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Invocation/Invocation.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Verifiable.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Invokable.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub/MatcherCollection.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/InvocationMocker.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Invocation/StaticInvocation.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Invocation/ObjectInvocation.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/Invocation.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/InvokedRecorder.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/AnyInvokedCount.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/StatelessInvocation.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/AnyParameters.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/ConsecutiveParameters.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/DeferredError.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/InvokedAtIndex.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/InvokedAtLeastCount.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/InvokedAtLeastOnce.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/InvokedAtMostCount.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/InvokedCount.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/MethodName.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Matcher/Parameters.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/MockBuilder.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/MockMethod.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/MockMethodSet.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/MockObject.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/ForwardCompatibility/MockObject.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Exception/RuntimeException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub/ConsecutiveCalls.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub/ReturnArgument.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub/ReturnCallback.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub/ReturnReference.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub/ReturnSelf.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub/ReturnStub.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/MockObject/Stub/ReturnValueMap.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/OutputError.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/SkippedTest.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/SkippedTestCase.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/SkippedTestError.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/SkippedTestSuiteError.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/SyntheticError.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/TestFailure.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/TestListener.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/TestListenerDefaultImplementation.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/TestResult.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/TestSuiteIterator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/UnexpectedValueException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/UnintentionallyCoveredCodeError.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/Warning.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Framework/WarningTestCase.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/Hook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/TestHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/AfterIncompleteTestHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/AfterLastTestHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/AfterRiskyTestHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/AfterSkippedTestHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/AfterSuccessfulTestHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/AfterTestErrorHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/AfterTestFailureHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/AfterTestHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/AfterTestWarningHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/BaseTestRunner.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/BeforeFirstTestHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/BeforeTestHook.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Filter/GroupFilterIterator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Filter/ExcludeGroupFilterIterator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Filter/Factory.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Filter/IncludeGroupFilterIterator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Filter/NameFilterIterator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TestResultCacheInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/NullTestResultCache.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/PhptTestCase.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/ResultCacheExtension.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/TestSuiteLoader.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/StandardTestSuiteLoader.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Hook/TestListenerAdapter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TestResultCache.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/TestSuiteSorter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Runner/Version.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/TextUI/Command.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Printer.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/TextUI/ResultPrinter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/TextUI/TestRunner.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Blacklist.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Configuration.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/ConfigurationGenerator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/ErrorHandler.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/FileLoader.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Filesystem.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Filter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Getopt.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/GlobalState.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/InvalidArgumentHelper.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Json.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Log/JUnit.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Log/TeamCity.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/PHP/AbstractPhpProcess.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/PHP/DefaultPhpProcess.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/PHP/WindowsPhpProcess.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/RegularExpression.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Test.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TestDox/CliTestDoxPrinter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TestDox/ResultPrinter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TestDox/HtmlResultPrinter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TestDox/NamePrettifier.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TestDox/TestResult.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TestDox/TextResultPrinter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TestDox/XmlResultPrinter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/TextTestListRenderer.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Type.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/XdebugFilterScriptGenerator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/Xml.php';
require 'phar://phpunit-7.5.20.phar' . '/phpunit/Util/XmlTestListRenderer.php';
require 'phar://phpunit-7.5.20.phar' . '/php-token-stream/Token.php';
require 'phar://phpunit-7.5.20.phar' . '/php-token-stream/Token/Stream.php';
require 'phar://phpunit-7.5.20.phar' . '/php-token-stream/Token/Stream/CachingFactory.php';
require 'phar://phpunit-7.5.20.phar' . '/php-token-stream/Token/Util.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/Type.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/Application.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/ApplicationName.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/Author.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/AuthorCollection.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/AuthorCollectionIterator.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ManifestElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/AuthorElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ElementCollection.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/AuthorElementCollection.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/BundledComponent.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/BundledComponentCollection.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/BundledComponentCollectionIterator.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/BundlesElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ComponentElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ComponentElementCollection.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ContainsElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/CopyrightElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/CopyrightInformation.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/Email.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/exceptions/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ExtElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ExtElementCollection.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/Extension.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ExtensionElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/exceptions/InvalidApplicationNameException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/exceptions/InvalidEmailException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/exceptions/InvalidUrlException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/Library.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/License.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/LicenseElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/Manifest.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ManifestDocument.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/exceptions/ManifestDocumentException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/ManifestDocumentLoadingException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/ManifestDocumentMapper.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/exceptions/ManifestDocumentMapperException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/exceptions/ManifestElementException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/ManifestLoader.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/exceptions/ManifestLoaderException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/ManifestSerializer.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/PhpElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/Requirement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/PhpExtensionRequirement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/PhpVersionRequirement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/RequirementCollection.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/RequirementCollectionIterator.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/xml/RequiresElement.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-manifest/values/Url.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/constraints/VersionConstraint.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/constraints/AbstractVersionConstraint.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/constraints/AndVersionConstraintGroup.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/constraints/AnyVersionConstraint.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/constraints/ExactVersionConstraint.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/exceptions/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/constraints/GreaterThanOrEqualToVersionConstraint.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/exceptions/InvalidPreReleaseSuffixException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/exceptions/InvalidVersionException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/constraints/OrVersionConstraintGroup.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/PreReleaseSuffix.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/constraints/SpecificMajorAndMinorVersionConstraint.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/constraints/SpecificMajorVersionConstraint.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/exceptions/UnsupportedVersionConstraintException.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/Version.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/VersionConstraintParser.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/VersionConstraintValue.php';
require 'phar://phpunit-7.5.20.phar' . '/phar-io-version/VersionNumber.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/ArgumentsWildcard.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/TokenInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/AnyValueToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/AnyValuesToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/ApproximateValueToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/ArrayCountToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/ArrayEntryToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/ArrayEveryEntryToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/CallbackToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/ExactValueToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/IdenticalValueToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/LogicalAndToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/LogicalNotToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/ObjectStateToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/StringContainsToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Argument/Token/TypeToken.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Call/Call.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Call/CallCenter.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/Comparator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Comparator/ClosureComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/Factory.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Comparator/Factory.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/ArrayComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/ObjectComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Comparator/ProphecyComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/Doubler.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/CachedDoubler.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/ClassPatchInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/DisableConstructorPatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/HhvmExceptionPatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/KeywordPatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/MagicCallPatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/ProphecySubjectPatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/ReflectionClassNewInstancePatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/SplFileInfoPatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/ThrowablePatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/ClassPatch/TraversablePatch.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/DoubleInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/Generator/ClassCodeGenerator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/Generator/ClassCreator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/Generator/ClassMirror.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/Generator/Node/ArgumentNode.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/Generator/Node/ClassNode.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/Generator/Node/MethodNode.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/Generator/ReflectionInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/Generator/TypeHintReference.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/LazyDouble.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Doubler/NameGenerator.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Prophecy/ProphecyException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Prophecy/ObjectProphecyException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Call/UnexpectedCallException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Doubler/DoublerException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Doubler/ClassCreatorException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Doubler/ClassMirrorException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Doubler/DoubleException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Doubler/ClassNotFoundException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Doubler/InterfaceNotFoundException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Doubler/MethodNotExtendableException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Doubler/MethodNotFoundException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Doubler/ReturnByReferenceException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/InvalidArgumentException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Prediction/PredictionException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Prediction/AggregateException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Prediction/FailedPredictionException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Prophecy/MethodProphecyException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Prediction/NoCallsException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Prediction/UnexpectedCallsException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Exception/Prediction/UnexpectedCallsCountException.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/PhpDocumentor/MethodTagRetrieverInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/PhpDocumentor/ClassAndInterfaceTagRetriever.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/PhpDocumentor/ClassTagRetriever.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/PhpDocumentor/LegacyClassTagRetriever.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prediction/PredictionInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prediction/CallPrediction.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prediction/CallTimesPrediction.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prediction/CallbackPrediction.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prediction/NoCallsPrediction.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Promise/PromiseInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Promise/CallbackPromise.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Promise/ReturnArgumentPromise.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Promise/ReturnPromise.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Promise/ThrowPromise.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prophecy/MethodProphecy.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prophecy/ProphecyInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prophecy/ObjectProphecy.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prophecy/ProphecySubjectInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prophecy/RevealerInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prophecy/Revealer.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Prophet.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Util/ExportUtil.php';
require 'phar://phpunit-7.5.20.phar' . '/phpspec-prophecy/Prophecy/Util/StringUtil.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/CodeCoverage.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Exception/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Exception/RuntimeException.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Exception/CoveredCodeNotExecutedException.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Driver/Driver.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Driver/PHPDBG.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Driver/Xdebug.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Filter.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Exception/InvalidArgumentException.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Exception/MissingCoversAnnotationException.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Node/AbstractNode.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Node/Builder.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Node/Directory.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Node/File.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Node/Iterator.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Clover.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Crap4j.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Html/Renderer.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Html/Renderer/Dashboard.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Html/Renderer/Directory.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Html/Facade.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Html/Renderer/File.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/PHP.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Text.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/BuildInformation.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Coverage.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Node.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Directory.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Facade.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/File.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Method.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Project.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Report.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Source.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Tests.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Totals.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Report/Xml/Unit.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Exception/UnintentionallyCoveredCodeException.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Util.php';
require 'phar://phpunit-7.5.20.phar' . '/php-code-coverage/Version.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-code-unit-reverse-lookup/Wizard.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/ComparisonFailure.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/DOMNodeComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/DateTimeComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/ScalarComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/NumericComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/DoubleComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/ExceptionComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/MockObjectComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/ResourceComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/SplObjectStorageComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-comparator/TypeComparator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Chunk.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Exception/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Exception/InvalidArgumentException.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Exception/ConfigurationException.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Diff.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Differ.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Line.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/LongestCommonSubsequenceCalculator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/MemoryEfficientLongestCommonSubsequenceCalculator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Output/DiffOutputBuilderInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Output/AbstractChunkOutputBuilder.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Output/DiffOnlyOutputBuilder.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Output/StrictUnifiedDiffOutputBuilder.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Output/UnifiedDiffOutputBuilder.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/Parser.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-diff/TimeEfficientLongestCommonSubsequenceCalculator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-environment/Console.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-environment/OperatingSystem.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-environment/Runtime.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-exporter/Exporter.php';
require 'phar://phpunit-7.5.20.phar' . '/php-file-iterator/Facade.php';
require 'phar://phpunit-7.5.20.phar' . '/php-file-iterator/Factory.php';
require 'phar://phpunit-7.5.20.phar' . '/php-file-iterator/Iterator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-global-state/Blacklist.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-global-state/CodeExporter.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-global-state/exceptions/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-global-state/Restorer.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-global-state/exceptions/RuntimeException.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-global-state/Snapshot.php';
require 'phar://phpunit-7.5.20.phar' . '/php-invoker/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/php-invoker/Invoker.php';
require 'phar://phpunit-7.5.20.phar' . '/php-invoker/TimeoutException.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-object-enumerator/Enumerator.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-object-enumerator/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-object-enumerator/InvalidArgumentException.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-object-reflector/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-object-reflector/InvalidArgumentException.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-object-reflector/ObjectReflector.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-recursion-context/Context.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-recursion-context/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-recursion-context/InvalidArgumentException.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-resource-operations/ResourceOperations.php';
require 'phar://phpunit-7.5.20.phar' . '/php-timer/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/php-timer/RuntimeException.php';
require 'phar://phpunit-7.5.20.phar' . '/php-timer/Timer.php';
require 'phar://phpunit-7.5.20.phar' . '/sebastian-version/Version.php';
require 'phar://phpunit-7.5.20.phar' . '/php-text-template/Template.php';
require 'phar://phpunit-7.5.20.phar' . '/theseer-tokenizer/Exception.php';
require 'phar://phpunit-7.5.20.phar' . '/theseer-tokenizer/NamespaceUri.php';
require 'phar://phpunit-7.5.20.phar' . '/theseer-tokenizer/NamespaceUriException.php';
require 'phar://phpunit-7.5.20.phar' . '/theseer-tokenizer/Token.php';
require 'phar://phpunit-7.5.20.phar' . '/theseer-tokenizer/TokenCollection.php';
require 'phar://phpunit-7.5.20.phar' . '/theseer-tokenizer/TokenCollectionException.php';
require 'phar://phpunit-7.5.20.phar' . '/theseer-tokenizer/Tokenizer.php';
require 'phar://phpunit-7.5.20.phar' . '/theseer-tokenizer/XMLSerializer.php';
require 'phar://phpunit-7.5.20.phar' . '/webmozart-assert/Assert.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlockFactoryInterface.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlockFactory.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Description.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/DescriptionFactory.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/ExampleFinder.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Serializer.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/TagFactory.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/StandardTagFactory.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tag.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Factory/StaticMethod.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/BaseTag.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Author.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Covers.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Deprecated.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Example.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Factory/Strategy.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Formatter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Formatter/AlignFormatter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Formatter/PassthroughFormatter.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Generic.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Link.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Method.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/TagWithType.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Param.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Property.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/PropertyRead.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/PropertyWrite.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Reference/Reference.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Reference/Fqsen.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Reference/Url.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Return_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/See.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Since.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Source.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Throws.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Uses.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Var_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-docblock/DocBlock/Tags/Version.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-common/Element.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-common/File.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-common/Fqsen.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/FqsenResolver.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-common/Location.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-common/Project.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-reflection-common/ProjectFactory.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Type.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/TypeResolver.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/AbstractList.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Array_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Boolean.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Callable_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Collection.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Compound.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Context.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/ContextFactory.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Float_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Integer.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Iterable_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Mixed_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Null_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Nullable.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Object_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Parent_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Resource_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Scalar.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Self_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Static_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/String_.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/This.php';
require 'phar://phpunit-7.5.20.phar' . '/phpdocumentor-type-resolver/Types/Void_.php';

if ($execute) {
    if (isset($printManifest)) {
        print file_get_contents(__PHPUNIT_PHAR_ROOT__ . '/manifest.txt');

        exit;
    }

    unset($execute);

    PHPUnit\TextUI\Command::main();
}

__HALT_COMPILER(); ?>
�  {         phpunit-7.5.20.phar       sebastian-exporter/Exporter.phpM#  Ɩ^M#  ғ���         sebastian-exporter/LICENSE  Ɩ^  �R{߶      0   phpspec-prophecy/Prophecy/Comparator/Factory.php�  Ɩ^�  ֈi��      ;   phpspec-prophecy/Prophecy/Comparator/ProphecyComparator.phps  Ɩ^s  ��hǶ      :   phpspec-prophecy/Prophecy/Comparator/ClosureComparator.php�  Ɩ^�  ��      -   phpspec-prophecy/Prophecy/Call/CallCenter.php�  Ɩ^�  ���ٶ      '   phpspec-prophecy/Prophecy/Call/Call.php�
  Ɩ^9
  E��.�      <   phpspec-prophecy/Prophecy/Argument/Token/ExactValueToken.php�  Ɩ^�  @�=��      <   phpspec-prophecy/Prophecy/Argument/Token/ArrayCountToken.php�  Ɩ^�  �4�̶      <   phpspec-prophecy/Prophecy/Argument/Token/ArrayEntryToken.php�  Ɩ^�  �J�:�      8   phpspec-prophecy/Prophecy/Argument/ArgumentsWildcard.php4	  Ɩ^4	  A;K2�      5   phpspec-prophecy/Prophecy/Promise/CallbackPromise.php�  Ɩ^�  [���      ;   phpspec-prophecy/Prophecy/Promise/ReturnArgumentPromise.php'  Ɩ^'  �(���      2   phpspec-prophecy/Prophecy/Promise/ThrowPromise.php�  Ɩ^�  c���      6   phpspec-prophecy/Prophecy/Promise/PromiseInterface.phpK  Ɩ^K  ����      3   phpspec-prophecy/Prophecy/Promise/ReturnPromise.php  Ɩ^  �؏�      5   phpspec-prophecy/Prophecy/Prophecy/MethodProphecy.php[5  Ɩ^[5  ��C�      5   phpspec-prophecy/Prophecy/Prophecy/ObjectProphecy.php7  Ɩ^7  �Q���      8   phpspec-prophecy/Prophecy/Prophecy/RevealerInterface.phpH  Ɩ^H  �gZ��      8   phpspec-prophecy/Prophecy/Prophecy/ProphecyInterface.php,  Ɩ^,  �W�      ?   phpspec-prophecy/Prophecy/Prophecy/ProphecySubjectInterface.php�  Ɩ^�  i��      /   phpspec-prophecy/Prophecy/Prophecy/Revealer.php�  Ɩ^�  j�ɸ�      -   phpspec-prophecy/Prophecy/Doubler/Doubler.php�  Ɩ^�  8]�^�      5   phpspec-prophecy/Prophecy/Doubler/DoubleInterface.php�  Ɩ^�  8d�j�      3   phpspec-prophecy/Prophecy/Doubler/NameGenerator.php�  Ɩ^�  ��7�      0   phpspec-prophecy/Prophecy/Doubler/LazyDouble.phpF
  Ɩ^
  _aGk�      E   phpspec-prophecy/Prophecy/Doubler/ClassPatch/ProphecySubjectPatch.phpQ  Ɩ^Q  �<h)�      G   phpspec-prophecy/Prophecy/PhpDocumentor/MethodTagRetrieverInterface.php�  Ɩ^�  �;��      I   phpspec-prophecy/Prophecy/PhpDocumentor/ClassAndInterfaceTagRetriever.phpx  Ɩ^x  rЬ�      C   phpspec-prophecy/Prophecy/PhpDocumentor/LegacyClassTagRetriever.phpo  Ɩ^o  u9��      =   phpspec-prophecy/Prophecy/PhpDocumentor/ClassTagRetriever.phpD  Ɩ^D  d9�϶      D   phpspec-prophecy/Prophecy/Exception/Call/UnexpectedCallException.php�  Ɩ^�  ���      H   phpspec-prophecy/Prophecy/Exception/Prophecy/MethodProphecyException.php)  Ɩ^)  F��4�      B   phpspec-prophecy/Prophecy/Exception/Prophecy/ProphecyException.php�  Ɩ^�  ��$϶      H   phpspec-prophecy/Prophecy/Exception/Prophecy/ObjectProphecyException.php  Ɩ^  �:�F�      @   phpspec-prophecy/Prophecy/Exception/Doubler/DoublerException.php�  Ɩ^�  �Z^�      ?   phpspec-prophecy/Prophecy/Exception/Doubler/DoubleException.php�  Ɩ^�  z�F��      E   phpspec-prophecy/Prophecy/Exception/Doubler/ClassCreatorException.php�  Ɩ^�  77/%�      F   phpspec-prophecy/Prophecy/Exception/Doubler/ClassNotFoundException.php�  Ɩ^�  h+      L   phpspec-prophecy/Prophecy/Exception/Doubler/MethodNotExtendableException.phpD  Ɩ^D  �p��      G   phpspec-prophecy/Prophecy/Exception/Doubler/MethodNotFoundException.php�  Ɩ^�  �X�      D   phpspec-prophecy/Prophecy/Exception/Doubler/ClassMirrorException.php�  Ɩ^�  ۉ?�      J   phpspec-prophecy/Prophecy/Exception/Doubler/ReturnByReferenceException.php�  Ɩ^�  ���      J   phpspec-prophecy/Prophecy/Exception/Doubler/InterfaceNotFoundException.php�  Ɩ^�  �����      1   phpspec-prophecy/Prophecy/Exception/Exception.php+  Ɩ^+  ����      @   phpspec-prophecy/Prophecy/Exception/InvalidArgumentException.php�  Ɩ^�  �g��      F   phpspec-prophecy/Prophecy/Exception/Prediction/PredictionException.php�  Ɩ^�  2T�Ѷ      C   phpspec-prophecy/Prophecy/Exception/Prediction/NoCallsException.php�  Ɩ^�  �l<��      P   phpspec-prophecy/Prophecy/Exception/Prediction/UnexpectedCallsCountException.php  Ɩ^  �	ƶ      L   phpspec-prophecy/Prophecy/Exception/Prediction/FailedPredictionException.phpJ  Ɩ^J  ~��D�      E   phpspec-prophecy/Prophecy/Exception/Prediction/AggregateException.php   Ɩ^   ;��      K   phpspec-prophecy/Prophecy/Exception/Prediction/UnexpectedCallsException.php,  Ɩ^,  ���a�      %   phpspec-prophecy/Prophecy/Prophet.php�  Ɩ^�  Uq��      -   phpspec-prophecy/Prophecy/Util/ExportUtil.php�  Ɩ^�  ��=��      -   phpspec-prophecy/Prophecy/Util/StringUtil.php�
  Ɩ^�
  �Z~��      &   phpspec-prophecy/Prophecy/Argument.php�  Ɩ^�  AT�      :   phpspec-prophecy/Prophecy/Prediction/NoCallsPrediction.php�  Ɩ^�  L9%�      <   phpspec-prophecy/Prophecy/Prediction/CallTimesPrediction.php�  Ɩ^�  X���      <   phpspec-prophecy/Prophecy/Prediction/PredictionInterface.php�  Ɩ^�  `IE�      7   phpspec-prophecy/Prophecy/Prediction/CallPrediction.phpQ	  Ɩ^Q	  I��      ;   phpspec-prophecy/Prophecy/Prediction/CallbackPrediction.php�  Ɩ^�  Vb{ζ         phpspec-prophecy/LICENSE}  Ɩ^}  ��6�      *   sebastian-comparator/ComparisonFailure.php�  Ɩ^�  �I�      (   sebastian-comparator/ArrayComparator.php�  Ɩ^�  ǈ:Q�          sebastian-comparator/Factory.php
  Ɩ^�
  8���         sebastian-comparator/LICENSE	  Ɩ^	  �q��      7   myclabs-deep-copy/DeepCopy/Exception/CloneException.php   Ɩ^   L��t�      :   myclabs-deep-copy/DeepCopy/Exception/PropertyException.phpx   Ɩ^x   �4��      :   myclabs-deep-copy/DeepCopy/Reflection/ReflectionHelper.php~  Ɩ^~  :�̶      B   myclabs-deep-copy/DeepCopy/Filter/Doctrine/DoctrineProxyFilter.php�  Ɩ^�  ���      L   myclabs-deep-copy/DeepCopy/Filter/Doctrine/DoctrineEmptyCollectionFilter.php�  Ɩ^�  ��7߶      G   myclabs-deep-copy/DeepCopy/Filter/Doctrine/DoctrineCollectionFilter.php  Ɩ^  �:D�      3   myclabs-deep-copy/DeepCopy/Filter/ReplaceFilter.php�  Ɩ^�  a�˲�      0   myclabs-deep-copy/DeepCopy/Filter/KeepFilter.php  Ɩ^  ����      3   myclabs-deep-copy/DeepCopy/Filter/SetNullFilter.php�  Ɩ^�  ]��]�      ,   myclabs-deep-copy/DeepCopy/Filter/Filter.php\  Ɩ^\  6S���      6   myclabs-deep-copy/DeepCopy/TypeMatcher/TypeMatcher.php�  Ɩ^�  s�wֶ      '   myclabs-deep-copy/DeepCopy/DeepCopy.php>  Ɩ^>  � 3�      ;   myclabs-deep-copy/DeepCopy/TypeFilter/ShallowCopyFilter.php�   Ɩ^�   ��Zٶ      A   myclabs-deep-copy/DeepCopy/TypeFilter/Date/DateIntervalFilter.php  Ɩ^  GF�ж      A   myclabs-deep-copy/DeepCopy/TypeFilter/Spl/SplDoublyLinkedList.php�   Ɩ^�   ��̶      G   myclabs-deep-copy/DeepCopy/TypeFilter/Spl/SplDoublyLinkedListFilter.php  Ɩ^  J�霶      4   myclabs-deep-copy/DeepCopy/TypeFilter/TypeFilter.php�   Ɩ^�   �-h�      7   myclabs-deep-copy/DeepCopy/TypeFilter/ReplaceFilter.php  Ɩ^  7���      D   myclabs-deep-copy/DeepCopy/Matcher/Doctrine/DoctrineProxyMatcher.phpo  Ɩ^o  ?3�      :   myclabs-deep-copy/DeepCopy/Matcher/PropertyNameMatcher.php�  Ɩ^�  Y��x�      .   myclabs-deep-copy/DeepCopy/Matcher/Matcher.php�   Ɩ^�   q�e�      :   myclabs-deep-copy/DeepCopy/Matcher/PropertyTypeMatcher.php&  Ɩ^&  ��      6   myclabs-deep-copy/DeepCopy/Matcher/PropertyMatcher.php�  Ɩ^�  ?S�b�      (   myclabs-deep-copy/DeepCopy/deep_copy.php�  Ɩ^�  "e��         myclabs-deep-copy/LICENSE5  Ɩ^5  ʭ˄�         php-text-template/Template.php�  Ɩ^�  �w4��         php-text-template/LICENSE  Ɩ^  S�:��      #   sebastian-global-state/Restorer.php"  Ɩ^"  M���      /   sebastian-global-state/exceptions/Exception.phpP  Ɩ^P  W�Z�      6   sebastian-global-state/exceptions/RuntimeException.php�  Ɩ^�  �y˶      '   sebastian-global-state/CodeExporter.phpf	  Ɩ^f	  |�!�      #   sebastian-global-state/Snapshot.php�!  Ɩ^�!  Ò���      $   sebastian-global-state/Blacklist.php�
  Ɩ^�
  ܫ9��         sebastian-global-state/LICENSE  Ɩ^  q~Pd�      <   doctrine-instantiator/Doctrine/Instantiator/Instantiator.php�  Ɩ^�  ��lI�      R   doctrine-instantiator/Doctrine/Instantiator/Exception/InvalidArgumentException.php�  Ɩ^�  Ewٶ      R   doctrine-instantiator/Doctrine/Instantiator/Exception/UnexpectedValueException.php|  Ɩ^|  3��      L   doctrine-instantiator/Doctrine/Instantiator/Exception/ExceptionInterface.php�   Ɩ^�   �f��      E   doctrine-instantiator/Doctrine/Instantiator/InstantiatorInterface.php�  Ɩ^�  ��]D�         doctrine-instantiator/LICENSE$  Ɩ^$  
͂�      .   phpdocumentor-reflection-docblock/DocBlock.php  Ɩ^  ��Z�      :   phpdocumentor-reflection-docblock/DocBlock/Description.php/  Ɩ^/  >�	�      G   phpdocumentor-reflection-docblock/DocBlock/Tags/Reference/Reference.php,  Ɩ^,  �8(��      A   phpdocumentor-reflection-docblock/DocBlock/Tags/Reference/Url.phpM  Ɩ^M  ���|�      C   phpdocumentor-reflection-docblock/DocBlock/Tags/Reference/Fqsen.php�  Ɩ^�  ��c�      @   phpdocumentor-reflection-docblock/DocBlock/Tags/PropertyRead.php�  Ɩ^�  \c
  Ɩ^�
  ���      9   phpdocumentor-reflection-docblock/DocBlock/Tags/Param.php|  Ɩ^|  �hf޶      :   phpdocumentor-reflection-docblock/DocBlock/Tags/Method.php3  Ɩ^3  Z�iǶ      :   phpdocumentor-reflection-docblock/DocBlock/Tags/Throws.php�  Ɩ^�  }%a�      9   phpdocumentor-reflection-docblock/DocBlock/Tags/Since.php�	  Ɩ^�	  �yaö      ;   phpdocumentor-reflection-docblock/DocBlock/Tags/Generic.php_
  Ɩ^_
  �(oٶ      8   phpdocumentor-reflection-docblock/DocBlock/Tags/Link.phpN  Ɩ^N  V���      ?   phpdocumentor-reflection-docblock/DocBlock/Tags/TagWithType.phpp  Ɩ^p   �f�      8   phpdocumentor-reflection-docblock/DocBlock/Tags/Uses.phpP  Ɩ^P  T,��      H   phpdocumentor-reflection-docblock/DocBlock/Tags/Factory/StaticMethod.php�  Ɩ^�  �2i��      D   phpdocumentor-reflection-docblock/DocBlock/Tags/Factory/Strategy.php�  Ɩ^�  ��R�      =   phpdocumentor-reflection-docblock/DocBlock/Tags/Formatter.php�  Ɩ^�  Dy7�      ;   phpdocumentor-reflection-docblock/DocBlock/Tags/BaseTag.php�  Ɩ^�  :�=��      7   phpdocumentor-reflection-docblock/DocBlock/Tags/See.php�	  Ɩ^�	  
  Ɩ^
  ���      1   phar-io-version/constraints/VersionConstraint.php6  Ɩ^6  w�U��      9   phar-io-version/constraints/AbstractVersionConstraint.php�  Ɩ^�  Whg��      >   phar-io-version/constraints/SpecificMajorVersionConstraint.phpu  Ɩ^u  r��      6   phar-io-version/constraints/ExactVersionConstraint.phpZ  Ɩ^Z  
  Ɩ^
  �F���      ,   phpdocumentor-type-resolver/TypeResolver.php
  Ɩ^r
  �g9�      +   theseer-tokenizer/NamespaceUriException.phpr   Ɩ^r   +��A�         theseer-tokenizer/Exception.phpg   Ɩ^g   լ�X�      "   theseer-tokenizer/NamespaceUri.phpw  Ɩ^w  'U��      #   theseer-tokenizer/XMLSerializer.php�	  Ɩ^�	  (l�ٶ      .   theseer-tokenizer/TokenCollectionException.phpu   Ɩ^u   ��BK�         theseer-tokenizer/Tokenizer.php3  Ɩ^3  �a���         theseer-tokenizer/Token.phpq  Ɩ^q  ��?��         theseer-tokenizer/LICENSE�  Ɩ^�  �R(�         php-token-stream/Token/Util.php�  Ɩ^�  T~Z˶      0   php-token-stream/Token/Stream/CachingFactory.php�  Ɩ^�  	\h��      !   php-token-stream/Token/Stream.php�?  Ɩ^�?  �Qi�         php-token-stream/Token.php�a  Ɩ^�a  P<��         php-token-stream/LICENSE  Ɩ^  떗i�      +   phpdocumentor-reflection-common/Project.php�  Ɩ^�  t���      ,   phpdocumentor-reflection-common/Location.php�  Ɩ^�  ����      +   phpdocumentor-reflection-common/Element.php�  Ɩ^�  lg/�      )   phpdocumentor-reflection-common/Fqsen.php\  Ɩ^\  �OǶ      '   phpdocumentor-reflection-common/LICENSE9  Ɩ^9  *2Ȑ�      2   phpdocumentor-reflection-common/ProjectFactory.php  Ɩ^  ;��z�      (   phpdocumentor-reflection-common/File.php  Ɩ^  eݧ�         sebastian-diff/Differ.php9%  Ɩ^9%  ��D�      &   sebastian-diff/Exception/Exception.php@  Ɩ^@  g�ն      5   sebastian-diff/Exception/InvalidArgumentException.php�  Ɩ^�  g����      3   sebastian-diff/Exception/ConfigurationException.phpC  Ɩ^C  <� 1�         sebastian-diff/Diff.php�  Ɩ^�  3߬�         sebastian-diff/Parser.php�  Ɩ^�  G�2�      4   sebastian-diff/Output/AbstractChunkOutputBuilder.phpO  Ɩ^O  E�l�      4   sebastian-diff/Output/DiffOutputBuilderInterface.php
  Ɩ^
  �zk�      2   sebastian-diff/Output/UnifiedDiffOutputBuilder.php*   Ɩ^*   ����      /   sebastian-diff/Output/DiffOnlyOutputBuilder.php�  Ɩ^�  �28>�      8   sebastian-diff/Output/StrictUnifiedDiffOutputBuilder.php�(  Ɩ^�(  ���N�         sebastian-diff/Line.phpO  Ɩ^O  '��	�      B   sebastian-diff/TimeEfficientLongestCommonSubsequenceCalculator.php  Ɩ^  v�< �         sebastian-diff/Chunk.phpm  Ɩ^m  �A��      D   sebastian-diff/MemoryEfficientLongestCommonSubsequenceCalculator.phpV  Ɩ^V  fն      5   sebastian-diff/LongestCommonSubsequenceCalculator.php<  Ɩ^<  ����         sebastian-diff/LICENSE
$�         php-code-coverage/Util.phpM  Ɩ^M  Xq逶      '   php-code-coverage/Node/AbstractNode.php5  Ɩ^5  =K�ʶ      #   php-code-coverage/Node/Iterator.php!  Ɩ^!  0n�ܶ      "   php-code-coverage/Node/Builder.phpt  Ɩ^t  �o�/�      $   php-code-coverage/Node/Directory.phpX$  Ɩ^X$  {��$�         php-code-coverage/Node/File.php@  Ɩ^@   `�o�      (   php-code-coverage/Report/Xml/Project.php$	  Ɩ^$	  @/�_�      '   php-code-coverage/Report/Xml/Source.php�  Ɩ^�  ��G�      '   php-code-coverage/Report/Xml/Report.php�	  Ɩ^�	  ��	��      %   php-code-coverage/Report/Xml/Unit.php}
  Ɩ^}
  ��s��      %   php-code-coverage/Report/Xml/Node.phpM  Ɩ^M  �W��      *   php-code-coverage/Report/Xml/Directory.phpW  Ɩ^W  S��˶      )   php-code-coverage/Report/Xml/Coverage.php�  Ɩ^�  tw�}�      '   php-code-coverage/Report/Xml/Method.php�  Ɩ^�  ��"n�      &   php-code-coverage/Report/Xml/Tests.phpl  Ɩ^l  �^�W�      '   php-code-coverage/Report/Xml/Facade.phpd   Ɩ^d   c��k�      '   php-code-coverage/Report/Xml/Totals.php�  Ɩ^�  m�*��      1   php-code-coverage/Report/Xml/BuildInformation.php�  Ɩ^�  Mn%�      %   php-code-coverage/Report/Xml/File.php�  Ɩ^�  �P��      *   php-code-coverage/Report/Html/Renderer.php�   Ɩ^�   {,(�      4   php-code-coverage/Report/Html/Renderer/Directory.php�
  Ɩ^
  �ɳ�      H   php-code-coverage/Report/Html/Renderer/Template/directory_item.html.distA  Ɩ^A  ds�      E   php-code-coverage/Report/Html/Renderer/Template/method_item.html.dist�  Ɩ^�  ��s:�      C   php-code-coverage/Report/Html/Renderer/Template/icons/file-code.svg0  Ɩ^0  �QUU�      H   php-code-coverage/Report/Html/Renderer/Template/icons/file-directory.svg�   Ɩ^�   ��Z��      C   php-code-coverage/Report/Html/Renderer/Template/dashboard.html.distG  Ɩ^G  �K〶      F   php-code-coverage/Report/Html/Renderer/Template/coverage_bar.html.dist'  Ɩ^'  �O}�      C   php-code-coverage/Report/Html/Renderer/Template/file_item.html.distt  Ɩ^t  ���      @   php-code-coverage/Report/Html/Renderer/Template/css/octicons.cssX   Ɩ^X   '#��      >   php-code-coverage/Report/Html/Renderer/Template/css/custom.css    Ɩ^        �      A   php-code-coverage/Report/Html/Renderer/Template/css/nv.d3.min.cssX%  Ɩ^X%  �0,�      =   php-code-coverage/Report/Html/Renderer/Template/css/style.css�  Ɩ^�  ��v�      E   php-code-coverage/Report/Html/Renderer/Template/css/bootstrap.min.css�& Ɩ^�& 1�L�      C   php-code-coverage/Report/Html/Renderer/Template/directory.html.dist�  Ɩ^�  hG���      C   php-code-coverage/Report/Html/Renderer/Template/js/bootstrap.min.js`�  Ɩ^`�  ��"9�      @   php-code-coverage/Report/Html/Renderer/Template/js/jquery.min.js�S Ɩ^�S �[�`�      ?   php-code-coverage/Report/Html/Renderer/Template/js/nv.d3.min.js�R Ɩ^�R <Ms�      <   php-code-coverage/Report/Html/Renderer/Template/js/d3.min.js�P Ɩ^�P �h�b�      :   php-code-coverage/Report/Html/Renderer/Template/js/file.js�  Ɩ^�  �'��      @   php-code-coverage/Report/Html/Renderer/Template/js/popper.min.jsqO  Ɩ^qO  �v/Ͷ      /   php-code-coverage/Report/Html/Renderer/File.php�I  Ɩ^�I  F�fж      (   php-code-coverage/Report/Html/Facade.php6  Ɩ^6  t��?�          php-code-coverage/Report/PHP.phpJ  Ɩ^J  M� ��      #   php-code-coverage/Report/Clover.php�(  Ɩ^�(  �+.�      #   php-code-coverage/Report/Crap4j.php  Ɩ^  �q$�      !   php-code-coverage/Report/Text.phpR"  Ɩ^R"  ���      C   php-code-coverage/Exception/UnintentionallyCoveredCodeException.php4  Ɩ^4  3�ٶ      )   php-code-coverage/Exception/Exception.php}  Ɩ^}  =�0:�      8   php-code-coverage/Exception/InvalidArgumentException.php  Ɩ^  �ؕ�      @   php-code-coverage/Exception/MissingCoversAnnotationException.php�  Ɩ^�  �u���      ?   php-code-coverage/Exception/CoveredCodeNotExecutedException.php�  Ɩ^�  �߁�      0   php-code-coverage/Exception/RuntimeException.phpo  Ɩ^o  H���      #   php-code-coverage/Driver/Xdebug.php�
  Ɩ^�
  p:���      #   php-code-coverage/Driver/Driver.php�  Ɩ^�  .�߸�      #   php-code-coverage/Driver/PHPDBG.phpu
  Ɩ^u
  �	��         php-code-coverage/LICENSE  Ɩ^  yM�F�         php-code-coverage/Filter.phpl  Ɩ^l  �
`��         phpunit.xsdZ@  Ɩ^Z@  ����      )   phar-io-manifest/xml/ExtensionElement.phpB  Ɩ^B  ����      -   phar-io-manifest/xml/ExtElementCollection.php  Ɩ^  ����      #   phar-io-manifest/xml/PhpElement.php�  Ɩ^�  p{:�      9   phar-io-manifest/xml/ManifestDocumentLoadingException.php�  Ɩ^�  ���>�      )   phar-io-manifest/xml/ManifestDocument.php�  Ɩ^�  ���1�      (   phar-io-manifest/xml/RequiresElement.php  Ɩ^  (�ͷ�      *   phar-io-manifest/xml/ElementCollection.php�  Ɩ^�  �'�*�      (   phar-io-manifest/xml/ManifestElement.php�	  Ɩ^�	  :6�X�      0   phar-io-manifest/xml/AuthorElementCollection.php  Ɩ^  B�yζ      &   phar-io-manifest/xml/AuthorElement.php7  Ɩ^7  ���      3   phar-io-manifest/xml/ComponentElementCollection.php  Ɩ^  #�Iζ      '   phar-io-manifest/xml/BundlesElement.php&  Ɩ^&  Oϯ�      )   phar-io-manifest/xml/ComponentElement.php>  Ɩ^>  
�ڶ      >   phar-io-manifest/values/BundledComponentCollectionIterator.php�  Ɩ^�  }��      9   phar-io-manifest/values/RequirementCollectionIterator.php�  Ɩ^�  n���      $   phar-io-manifest/values/Manifest.php�  Ɩ^�  ��D��      "   phar-io-manifest/values/Author.php%  Ɩ^%  ��W8�      '   phar-io-manifest/values/Requirement.phpp  Ɩ^p  6V�A�      1   phar-io-manifest/values/RequirementCollection.php�  Ɩ^�  )���      %   phar-io-manifest/values/Extension.php�  Ɩ^�  �0�         phar-io-manifest/values/Url.php�  Ɩ^�  f�]��      1   phar-io-manifest/values/PhpVersionRequirement.php  Ɩ^  �,��      3   phar-io-manifest/values/PhpExtensionRequirement.php�  Ɩ^�  <��Ͷ          phar-io-manifest/values/Type.php�  Ɩ^�  �pn��      #   phar-io-manifest/values/License.php  Ɩ^  *�׶      '   phar-io-manifest/values/Application.php�  Ɩ^�  7$~׶      4   phar-io-manifest/values/AuthorCollectionIterator.phpa  Ɩ^a  �����      +   phar-io-manifest/values/ApplicationName.phpc  Ɩ^c  ���      #   phar-io-manifest/values/Library.php�  Ɩ^�  F�z�      !   phar-io-manifest/values/Email.php�  Ɩ^�  c� M�      ,   phar-io-manifest/values/AuthorCollection.php�  Ɩ^�  Gr��      7   phar-io-manifest/exceptions/ManifestLoaderException.phpm   Ɩ^m   8L:��      ?   phar-io-manifest/exceptions/InvalidApplicationNameException.php�  Ɩ^�  6KQ�      5   phar-io-manifest/exceptions/InvalidEmailException.php�  Ɩ^�  �3D�      ?   phar-io-manifest/exceptions/ManifestDocumentMapperException.php|   Ɩ^|   �A	��      )   phar-io-manifest/exceptions/Exception.phpn  Ɩ^n  ��Y��      8   phar-io-manifest/exceptions/ManifestElementException.phpu   Ɩ^u   ��w/�      3   phar-io-manifest/exceptions/InvalidUrlException.php�  Ɩ^�  )� ��      9   phar-io-manifest/exceptions/ManifestDocumentException.phpv   Ɩ^v   ��      #   phar-io-manifest/ManifestLoader.php�  Ɩ^�  B8�	�      +   phar-io-manifest/ManifestDocumentMapper.php�  Ɩ^�  �@��         phar-io-manifest/LICENSEQ  Ɩ^Q  $W0�      '   phar-io-manifest/ManifestSerializer.php  Ɩ^  �t<D�      .   sebastian-object-reflector/ObjectReflector.php�  Ɩ^�  �"�      (   sebastian-object-reflector/Exception.phpN  Ɩ^N  � ^�      7   sebastian-object-reflector/InvalidArgumentException.php�  Ɩ^�  Y�J�         phpunit/TextUI/TestRunner.phpx�  Ɩ^x�  z:�         phpunit/TextUI/Command.php~�  Ɩ^~�  ����          phpunit/TextUI/ResultPrinter.phpF=  Ɩ^F=  ���!�         phpunit/Exception.phpW  Ɩ^W  ���      "   phpunit/Util/RegularExpression.php�  Ɩ^�  qċ�         phpunit/Util/Test.phpϑ  Ɩ^ϑ  STM0�         phpunit/Util/GlobalState.php�  Ɩ^�  ��$�      #   phpunit/Util/TestDox/TestResult.php�  Ɩ^�  �\3��      *   phpunit/Util/TestDox/TextResultPrinter.php4  Ɩ^4  �E���      *   phpunit/Util/TestDox/HtmlResultPrinter.phpz
  Ɩ^z
  �8�	�      *   phpunit/Util/TestDox/CliTestDoxPrinter.php|/  Ɩ^|/  ��)<�      '   phpunit/Util/TestDox/NamePrettifier.php�  Ɩ^�  �ʲ��      )   phpunit/Util/TestDox/XmlResultPrinter.php�  Ɩ^�  h���      &   phpunit/Util/TestDox/ResultPrinter.phpc  Ɩ^c  �l�c�      )   phpunit/Util/TestResultCacheInterface.php�  Ɩ^�  Vί#�         phpunit/Util/Filesystem.phpm  Ɩ^m  �k���         phpunit/Util/Printer.phps  Ɩ^s  �T,^�         phpunit/Util/FileLoader.phpK  Ɩ^K  �AΑ�         phpunit/Util/Xml.php�  Ɩ^�  ��j̶      ,   phpunit/Util/XdebugFilterScriptGenerator.php�  Ɩ^�  �p��         phpunit/Util/Log/JUnit.phpV-  Ɩ^V-  ߯�C�         phpunit/Util/Log/TeamCity.php�)  Ɩ^�)  ?o`f�         phpunit/Util/Json.php�	  Ɩ^�	  ��)��      '   phpunit/Util/PHP/AbstractPhpProcess.php{'  Ɩ^{'  7�?�      &   phpunit/Util/PHP/WindowsPhpProcess.phpY  Ɩ^Y  ���      /   phpunit/Util/PHP/Template/PhptTestCase.tpl.distb  Ɩ^b  ���̶      1   phpunit/Util/PHP/Template/TestCaseMethod.tpl.distZ  Ɩ^Z  ���F�      0   phpunit/Util/PHP/Template/TestCaseClass.tpl.dist  Ɩ^  /�Y�      &   phpunit/Util/PHP/DefaultPhpProcess.php�  Ɩ^�  !��R�         phpunit/Util/Configuration.phpz�  Ɩ^z�  ؃ֶ      '   phpunit/Util/ConfigurationGenerator.php�  Ɩ^�  lv.��      &   phpunit/Util/InvalidArgumentHelper.php�  Ɩ^�  �����          phpunit/Util/TestResultCache.phpm  Ɩ^m  ۑ��         phpunit/Util/Type.php%  Ɩ^%  :�
�      4   phpunit/Framework/MockObject/Stub/ReturnValueMap.php�  Ɩ^�  Z�6�      7   phpunit/Framework/MockObject/Stub/MatcherCollection.php�  Ɩ^�  岛�      6   phpunit/Framework/MockObject/Stub/ConsecutiveCalls.php�  Ɩ^�  �a��      /   phpunit/Framework/MockObject/Stub/Exception.php�  Ɩ^�  �ϙĶ      5   phpunit/Framework/MockObject/Stub/ReturnReference.php�  Ɩ^�  �g�M�      4   phpunit/Framework/MockObject/Stub/ReturnCallback.phpf  Ɩ^f  ��Ӷ      4   phpunit/Framework/MockObject/Stub/ReturnArgument.php�  Ɩ^�  �WS�      0   phpunit/Framework/MockObject/Stub/ReturnSelf.php�  Ɩ^�  �r@��      0   phpunit/Framework/MockObject/Stub/ReturnStub.php�  Ɩ^�  ���      %   phpunit/Framework/MockObject/Stub.phpY  Ɩ^Y  PTЃ�      8   phpunit/Framework/MockObject/Matcher/AnyInvokedCount.phpV  Ɩ^V  ��7�      ;   phpunit/Framework/MockObject/Matcher/InvokedAtLeastOnce.phpf  Ɩ^f  h(l�      6   phpunit/Framework/MockObject/Matcher/DeferredError.php*  Ɩ^*  =F���      3   phpunit/Framework/MockObject/Matcher/Parameters.php�  Ɩ^�  ڋ޴�      <   phpunit/Framework/MockObject/Matcher/InvokedAtLeastCount.php�  Ɩ^�  ��J��      7   phpunit/Framework/MockObject/Matcher/InvokedAtIndex.php   Ɩ^   `/n�      8   phpunit/Framework/MockObject/Matcher/InvokedRecorder.php:  Ɩ^:  I.W�      6   phpunit/Framework/MockObject/Matcher/AnyParameters.php�  Ɩ^�  :I|�      5   phpunit/Framework/MockObject/Matcher/InvokedCount.php�
  Ɩ^�
  a��      3   phpunit/Framework/MockObject/Matcher/MethodName.php�  Ɩ^�  >Ȯ�      3   phpunit/Framework/MockObject/Matcher/Invocation.php�  Ɩ^�  w>�      ;   phpunit/Framework/MockObject/Matcher/InvokedAtMostCount.php�  Ɩ^�  � ��      <   phpunit/Framework/MockObject/Matcher/StatelessInvocation.phpU  Ɩ^U  �@��      >   phpunit/Framework/MockObject/Matcher/ConsecutiveParameters.php�  Ɩ^�  ���Ƕ      1   phpunit/Framework/MockObject/InvocationMocker.php�  Ɩ^�  ^mm@�      <   phpunit/Framework/MockObject/Invocation/StaticInvocation.php�  Ɩ^�  ��?{�      <   phpunit/Framework/MockObject/Invocation/ObjectInvocation.php�  Ɩ^�  ϿS�      6   phpunit/Framework/MockObject/Invocation/Invocation.php�  Ɩ^�  �ȼ��      @   phpunit/Framework/MockObject/ForwardCompatibility/MockObject.php�  Ɩ^�  ��pd�      ;   phpunit/Framework/MockObject/Generator/deprecation.tpl.dist;   Ɩ^;   O5�s�      C   phpunit/Framework/MockObject/Generator/mocked_class_method.tpl.dist�   Ɩ^�   �d��      >   phpunit/Framework/MockObject/Generator/proxied_method.tpl.dist  Ɩ^  F�_�      C   phpunit/Framework/MockObject/Generator/proxied_method_void.tpl.dist�  Ɩ^�  ��S�      ;   phpunit/Framework/MockObject/Generator/trait_class.tpl.dist7   Ɩ^7   �[$~�      <   phpunit/Framework/MockObject/Generator/mocked_class.tpl.dist�  Ɩ^�  �ʷ��      =   phpunit/Framework/MockObject/Generator/mocked_method.tpl.dist]  Ɩ^]  ~ӭ^�      ;   phpunit/Framework/MockObject/Generator/wsdl_method.tpl.dist<   Ɩ^<   ��i��      D   phpunit/Framework/MockObject/Generator/mocked_static_method.tpl.dist�   Ɩ^�   w�Q��      <   phpunit/Framework/MockObject/Generator/mocked_clone.tpl.dist�   Ɩ^�   �aT�      :   phpunit/Framework/MockObject/Generator/wsdl_class.tpl.dist�   Ɩ^�   w&S�      >   phpunit/Framework/MockObject/Generator/unmocked_clone.tpl.dist�   Ɩ^�   8W}ض      B   phpunit/Framework/MockObject/Generator/mocked_method_void.tpl.dist&  Ɩ^&  �����      1   phpunit/Framework/MockObject/Builder/Identity.phpZ  Ɩ^Z  �8z9�      -   phpunit/Framework/MockObject/Builder/Stub.php�  Ɩ^�  ��)��      7   phpunit/Framework/MockObject/Builder/NamespaceMatch.php   Ɩ^   N�q;�      .   phpunit/Framework/MockObject/Builder/Match.php�  Ɩ^�  ��ɶ      8   phpunit/Framework/MockObject/Builder/ParametersMatch.php�  Ɩ^�  ���Ķ      9   phpunit/Framework/MockObject/Builder/InvocationMocker.phpF  Ɩ^F  {8ɚ�      8   phpunit/Framework/MockObject/Builder/MethodNameMatch.php  Ɩ^  �xf��      .   phpunit/Framework/MockObject/MockMethodSet.php<  Ɩ^<  Y��Ͷ      +   phpunit/Framework/MockObject/MockMethod.php?*  Ɩ^?*  ��v��      +   phpunit/Framework/CodeCoverageException.php4  Ɩ^4  ψͶ      !   phpunit/Framework/OutputError.php5  Ɩ^5  D���         phpunit/Framework/Exception.php	  Ɩ^	  �K���      &   phpunit/Framework/SkippedTestError.phpQ  Ɩ^Q  �E�      $   phpunit/Framework/SelfDescribing.php�  Ɩ^�  �S�      $   phpunit/Framework/IncompleteTest.php�  Ɩ^�  �%�t�         phpunit/Framework/TestCase.php��  Ɩ^��  ���ض      !   phpunit/Framework/SkippedTest.php  Ɩ^  p��y�      .   phpunit/Framework/UnexpectedValueException.phpV  Ɩ^V  ��{��      5   phpunit/Framework/UnintentionallyCoveredCodeError.php�  Ɩ^�  �|��      )   phpunit/Framework/IncompleteTestError.phpW  Ɩ^W  zY}+�      6   phpunit/Framework/MissingCoversAnnotationException.phpD  Ɩ^D  �2l+�      &   phpunit/Framework/ExceptionWrapper.php�  Ɩ^�  �78�      7   phpunit/Framework/TestListenerDefaultImplementation.phpn  Ɩ^n  "���      +   phpunit/Framework/Constraint/LogicalXor.php�  Ɩ^�  ��0�      2   phpunit/Framework/Constraint/RegularExpression.php<  Ɩ^<  6���      (   phpunit/Framework/Constraint/IsEqual.php�  Ɩ^�  ��s��      @   phpunit/Framework/Constraint/JsonMatchesErrorMessageProvider.php!  Ɩ^!  X�۶      +   phpunit/Framework/Constraint/Constraint.php8  Ɩ^8  r�8�      +   phpunit/Framework/Constraint/IsInfinite.php  Ɩ^  �,��      /   phpunit/Framework/Constraint/StringContains.php�  Ɩ^�  ��I�      *   phpunit/Framework/Constraint/LogicalOr.php�  Ɩ^�  ���t�      )   phpunit/Framework/Constraint/Callback.php  Ɩ^  
  Ɩ^`
  �z���      *   phpunit/Framework/Constraint/Composite.php�  Ɩ^�  �>+�      (   phpunit/Framework/Constraint/IsFalse.php  Ɩ^  �M��      +   phpunit/Framework/Constraint/LogicalAnd.php  Ɩ^  <���      B   phpunit/Framework/Constraint/ExceptionMessageRegularExpression.php^  Ɩ^^  �b�      &   phpunit/Framework/Constraint/Count.php�  Ɩ^�  `�j�      '   phpunit/Framework/Constraint/IsType.php�
/*
 * This file is part of exporter package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Exporter;

use SebastianBergmann\RecursionContext\Context;

/**
 * A nifty utility for visualizing PHP variables.
 *
 * <code>
 * <?php
 * use SebastianBergmann\Exporter\Exporter;
 *
 * $exporter = new Exporter;
 * print $exporter->export(new Exception);
 * </code>
 */
class Exporter
{
    /**
     * Exports a value as a string
     *
     * The output of this method is similar to the output of print_r(), but
     * improved in various aspects:
     *
     *  - NULL is rendered as "null" (instead of "")
     *  - TRUE is rendered as "true" (instead of "1")
     *  - FALSE is rendered as "false" (instead of "")
     *  - Strings are always quoted with single quotes
     *  - Carriage returns and newlines are normalized to \n
     *  - Recursion and repeated rendering is treated properly
     *
     * @param int $indentation The indentation level of the 2nd+ line
     *
     * @return string
     */
    public function export($value, $indentation = 0)
    {
        return $this->recursiveExport($value, $indentation);
    }

    /**
     * @param array<mixed> $data
     * @param Context      $context
     *
     * @return string
     */
    public function shortenedRecursiveExport(&$data, Context $context = null)
    {
        $result   = [];
        $exporter = new self();

        if (!$context) {
            $context = new Context;
        }

        $array = $data;
        $context->add($data);

        foreach ($array as $key => $value) {
            if (\is_array($value)) {
                if ($context->contains($data[$key]) !== false) {
                    $result[] = '*RECURSION*';
                } else {
                    $result[] = \sprintf(
                        'array(%s)',
                        $this->shortenedRecursiveExport($data[$key], $context)
                    );
                }
            } else {
                $result[] = $exporter->shortenedExport($value);
            }
        }

        return \implode(', ', $result);
    }

    /**
     * Exports a value into a single-line string
     *
     * The output of this method is similar to the output of
     * SebastianBergmann\Exporter\Exporter::export().
     *
     * Newlines are replaced by the visible string '\n'.
     * Contents of arrays and objects (if any) are replaced by '...'.
     *
     * @return string
     *
     * @see    SebastianBergmann\Exporter\Exporter::export
     */
    public function shortenedExport($value)
    {
        if (\is_string($value)) {
            $string = \str_replace("\n", '', $this->export($value));

            if (\function_exists('mb_strlen')) {
                if (\mb_strlen($string) > 40) {
                    $string = \mb_substr($string, 0, 30) . '...' . \mb_substr($string, -7);
                }
            } else {
                if (\strlen($string) > 40) {
                    $string = \substr($string, 0, 30) . '...' . \substr($string, -7);
                }
            }

            return $string;
        }

        if (\is_object($value)) {
            return \sprintf(
                '%s Object (%s)',
                \get_class($value),
                \count($this->toArray($value)) > 0 ? '...' : ''
            );
        }

        if (\is_array($value)) {
            return \sprintf(
                'Array (%s)',
                \count($value) > 0 ? '...' : ''
            );
        }

        return $this->export($value);
    }

    /**
     * Converts an object to an array containing all of its private, protected
     * and public properties.
     *
     * @return array
     */
    public function toArray($value)
    {
        if (!\is_object($value)) {
            return (array) $value;
        }

        $array = [];

        foreach ((array) $value as $key => $val) {
            // Exception traces commonly reference hundreds to thousands of
            // objects currently loaded in memory. Including them in the result
            // has a severe negative performance impact.
            if ("\0Error\0trace" === $key || "\0Exception\0trace" === $key) {
                continue;
            }

            // properties are transformed to keys in the following way:
            // private   $property => "\0Classname\0property"
            // protected $property => "\0*\0property"
            // public    $property => "property"
            if (\preg_match('/^\0.+\0(.+)$/', (string) $key, $matches)) {
                $key = $matches[1];
            }

            // See https://github.com/php/php-src/commit/5721132
            if ($key === "\0gcdata") {
                continue;
            }

            $array[$key] = $val;
        }

        // Some internal classes like SplObjectStorage don't work with the
        // above (fast) mechanism nor with reflection in Zend.
        // Format the output similarly to print_r() in this case
        if ($value instanceof \SplObjectStorage) {
            foreach ($value as $key => $val) {
                $array[\spl_object_hash($val)] = [
                    'obj' => $val,
                    'inf' => $value->getInfo(),
                ];
            }
        }

        return $array;
    }

    /**
     * Recursive implementation of export
     *
     * @param mixed                                       $value       The value to export
     * @param int                                         $indentation The indentation level of the 2nd+ line
     * @param \SebastianBergmann\RecursionContext\Context $processed   Previously processed objects
     *
     * @return string
     *
     * @see    SebastianBergmann\Exporter\Exporter::export
     */
    protected function recursiveExport(&$value, $indentation, $processed = null)
    {
        if ($value === null) {
            return 'null';
        }

        if ($value === true) {
            return 'true';
        }

        if ($value === false) {
            return 'false';
        }

        if (\is_float($value) && (float) ((int) $value) === $value) {
            return "$value.0";
        }

        if (\is_resource($value)) {
            return \sprintf(
                'resource(%d) of type (%s)',
                $value,
                \get_resource_type($value)
            );
        }

        if (\is_string($value)) {
            // Match for most non printable chars somewhat taking multibyte chars into account
            if (\preg_match('/[^\x09-\x0d\x1b\x20-\xff]/', $value)) {
                return 'Binary String: 0x' . \bin2hex($value);
            }

            return "'" .
            \str_replace(
                '<lf>',
                "\n",
                \str_replace(
                    ["\r\n", "\n\r", "\r", "\n"],
                    ['\r\n<lf>', '\n\r<lf>', '\r<lf>', '\n<lf>'],
                    $value
                )
            ) .
            "'";
        }

        $whitespace = \str_repeat(' ', (int)(4 * $indentation));

        if (!$processed) {
            $processed = new Context;
        }

        if (\is_array($value)) {
            if (($key = $processed->contains($value)) !== false) {
                return 'Array &' . $key;
            }

            $array  = $value;
            $key    = $processed->add($value);
            $values = '';

            if (\count($array) > 0) {
                foreach ($array as $k => $v) {
                    $values .= \sprintf(
                        '%s    %s => %s' . "\n",
                        $whitespace,
                        $this->recursiveExport($k, $indentation),
                        $this->recursiveExport($value[$k], $indentation + 1, $processed)
                    );
                }

                $values = "\n" . $values . $whitespace;
            }

            return \sprintf('Array &%s (%s)', $key, $values);
        }

        if (\is_object($value)) {
            $class = \get_class($value);

            if ($hash = $processed->contains($value)) {
                return \sprintf('%s Object &%s', $class, $hash);
            }

            $hash   = $processed->add($value);
            $values = '';
            $array  = $this->toArray($value);

            if (\count($array) > 0) {
                foreach ($array as $k => $v) {
                    $values .= \sprintf(
                        '%s    %s => %s' . "\n",
                        $whitespace,
                        $this->recursiveExport($k, $indentation),
                        $this->recursiveExport($v, $indentation + 1, $processed)
                    );
                }

                $values = "\n" . $values . $whitespace;
            }

            return \sprintf('%s Object &%s (%s)', $class, $hash, $values);
        }

        return \var_export($value, true);
    }
}
Exporter

Copyright (c) 2002-2019, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Comparator;

use SebastianBergmann\Comparator\Factory as BaseFactory;

/**
 * Prophecy comparator factory.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class Factory extends BaseFactory
{
    /**
     * @var Factory
     */
    private static $instance;

    public function __construct()
    {
        parent::__construct();

        $this->register(new ClosureComparator());
        $this->register(new ProphecyComparator());
    }

    /**
     * @return Factory
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Factory;
        }

        return self::$instance;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Comparator;

use Prophecy\Prophecy\ProphecyInterface;
use SebastianBergmann\Comparator\ObjectComparator;

class ProphecyComparator extends ObjectComparator
{
    public function accepts($expected, $actual)
    {
        return is_object($expected) && is_object($actual) && $actual instanceof ProphecyInterface;
    }

    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false, array &$processed = array())
    {
        parent::assertEquals($expected, $actual->reveal(), $delta, $canonicalize, $ignoreCase, $processed);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Comparator;

use SebastianBergmann\Comparator\Comparator;
use SebastianBergmann\Comparator\ComparisonFailure;

/**
 * Closure comparator.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
final class ClosureComparator extends Comparator
{
    public function accepts($expected, $actual)
    {
        return is_object($expected) && $expected instanceof \Closure
            && is_object($actual) && $actual instanceof \Closure;
    }

    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false, array &$processed = array())
    {
        if ($expected !== $actual) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                // we don't need a diff
                '',
                '',
                false,
                'all closures are different if not identical'
            );
        }
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Call;

use Prophecy\Exception\Prophecy\MethodProphecyException;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Argument\ArgumentsWildcard;
use Prophecy\Util\StringUtil;
use Prophecy\Exception\Call\UnexpectedCallException;
use SplObjectStorage;

/**
 * Calls receiver & manager.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class CallCenter
{
    private $util;

    /**
     * @var Call[]
     */
    private $recordedCalls = array();

    /**
     * @var SplObjectStorage
     */
    private $unexpectedCalls;

    /**
     * Initializes call center.
     *
     * @param StringUtil $util
     */
    public function __construct(StringUtil $util = null)
    {
        $this->util = $util ?: new StringUtil;
        $this->unexpectedCalls = new SplObjectStorage();
    }

    /**
     * Makes and records specific method call for object prophecy.
     *
     * @param ObjectProphecy $prophecy
     * @param string         $methodName
     * @param array          $arguments
     *
     * @return mixed Returns null if no promise for prophecy found or promise return value.
     *
     * @throws \Prophecy\Exception\Call\UnexpectedCallException If no appropriate method prophecy found
     */
    public function makeCall(ObjectProphecy $prophecy, $methodName, array $arguments)
    {
        // For efficiency exclude 'args' from the generated backtrace
        if (PHP_VERSION_ID >= 50400) {
            // Limit backtrace to last 3 calls as we don't use the rest
            // Limit argument was introduced in PHP 5.4.0
            $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3);
        } elseif (defined('DEBUG_BACKTRACE_IGNORE_ARGS')) {
            // DEBUG_BACKTRACE_IGNORE_ARGS was introduced in PHP 5.3.6
            $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        } else {
            $backtrace = debug_backtrace();
        }

        $file = $line = null;
        if (isset($backtrace[2]) && isset($backtrace[2]['file'])) {
            $file = $backtrace[2]['file'];
            $line = $backtrace[2]['line'];
        }

        // If no method prophecies defined, then it's a dummy, so we'll just return null
        if ('__destruct' === strtolower($methodName) || 0 == count($prophecy->getMethodProphecies())) {
            $this->recordedCalls[] = new Call($methodName, $arguments, null, null, $file, $line);

            return null;
        }

        // There are method prophecies, so it's a fake/stub. Searching prophecy for this call
        $matches = $this->findMethodProphecies($prophecy, $methodName, $arguments);

        // If fake/stub doesn't have method prophecy for this call - throw exception
        if (!count($matches)) {
            $this->unexpectedCalls->attach(new Call($methodName, $arguments, null, null, $file, $line), $prophecy);
            $this->recordedCalls[] = new Call($methodName, $arguments, null, null, $file, $line);

            return null;
        }

        // Sort matches by their score value
        @usort($matches, function ($match1, $match2) { return $match2[0] - $match1[0]; });

        $score = $matches[0][0];
        // If Highest rated method prophecy has a promise - execute it or return null instead
        $methodProphecy = $matches[0][1];
        $returnValue = null;
        $exception   = null;
        if ($promise = $methodProphecy->getPromise()) {
            try {
                $returnValue = $promise->execute($arguments, $prophecy, $methodProphecy);
            } catch (\Exception $e) {
                $exception = $e;
            }
        }

        if ($methodProphecy->hasReturnVoid() && $returnValue !== null) {
            throw new MethodProphecyException(
                "The method \"$methodName\" has a void return type, but the promise returned a value",
                $methodProphecy
            );
        }

        $this->recordedCalls[] = $call = new Call(
            $methodName, $arguments, $returnValue, $exception, $file, $line
        );
        $call->addScore($methodProphecy->getArgumentsWildcard(), $score);

        if (null !== $exception) {
            throw $exception;
        }

        return $returnValue;
    }

    /**
     * Searches for calls by method name & arguments wildcard.
     *
     * @param string            $methodName
     * @param ArgumentsWildcard $wildcard
     *
     * @return Call[]
     */
    public function findCalls($methodName, ArgumentsWildcard $wildcard)
    {
        $methodName = strtolower($methodName);

        return array_values(
            array_filter($this->recordedCalls, function (Call $call) use ($methodName, $wildcard) {
                return $methodName === strtolower($call->getMethodName())
                    && 0 < $call->getScore($wildcard)
                ;
            })
        );
    }

    /**
     * @throws UnexpectedCallException
     */
    public function checkUnexpectedCalls()
    {
        /** @var Call $call */
        foreach ($this->unexpectedCalls as $call) {
            $prophecy = $this->unexpectedCalls[$call];

            // If fake/stub doesn't have method prophecy for this call - throw exception
            if (!count($this->findMethodProphecies($prophecy, $call->getMethodName(), $call->getArguments()))) {
                throw $this->createUnexpectedCallException($prophecy, $call->getMethodName(), $call->getArguments());
            }
        }
    }

    private function createUnexpectedCallException(ObjectProphecy $prophecy, $methodName,
                                                   array $arguments)
    {
        $classname = get_class($prophecy->reveal());
        $indentationLength = 8; // looks good
        $argstring = implode(
            ",\n",
            $this->indentArguments(
                array_map(array($this->util, 'stringify'), $arguments),
                $indentationLength
            )
        );

        $expected = array();

        foreach (call_user_func_array('array_merge', $prophecy->getMethodProphecies()) as $methodProphecy) {
            $expected[] = sprintf(
                "  - %s(\n" .
                "%s\n" .
                "    )",
                $methodProphecy->getMethodName(),
                implode(
                    ",\n",
                    $this->indentArguments(
                        array_map('strval', $methodProphecy->getArgumentsWildcard()->getTokens()),
                        $indentationLength
                    )
                )
            );
        }

        return new UnexpectedCallException(
            sprintf(
                "Unexpected method call on %s:\n".
                "  - %s(\n".
                "%s\n".
                "    )\n".
                "expected calls were:\n".
                "%s",

                $classname, $methodName, $argstring, implode("\n", $expected)
            ),
            $prophecy, $methodName, $arguments

        );
    }

    private function indentArguments(array $arguments, $indentationLength)
    {
        return preg_replace_callback(
            '/^/m',
            function () use ($indentationLength) {
                return str_repeat(' ', $indentationLength);
            },
            $arguments
        );
    }

    /**
     * @param ObjectProphecy $prophecy
     * @param string $methodName
     * @param array $arguments
     *
     * @return array
     */
    private function findMethodProphecies(ObjectProphecy $prophecy, $methodName, array $arguments)
    {
        $matches = array();
        foreach ($prophecy->getMethodProphecies($methodName) as $methodProphecy) {
            if (0 < $score = $methodProphecy->getArgumentsWildcard()->scoreArguments($arguments)) {
                $matches[] = array($score, $methodProphecy);
            }
        }

        return $matches;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Call;

use Exception;
use Prophecy\Argument\ArgumentsWildcard;

/**
 * Call object.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class Call
{
    private $methodName;
    private $arguments;
    private $returnValue;
    private $exception;
    private $file;
    private $line;
    private $scores;

    /**
     * Initializes call.
     *
     * @param string      $methodName
     * @param array       $arguments
     * @param mixed       $returnValue
     * @param Exception   $exception
     * @param null|string $file
     * @param null|int    $line
     */
    public function __construct($methodName, array $arguments, $returnValue,
                                Exception $exception = null, $file, $line)
    {
        $this->methodName  = $methodName;
        $this->arguments   = $arguments;
        $this->returnValue = $returnValue;
        $this->exception   = $exception;
        $this->scores      = new \SplObjectStorage();

        if ($file) {
            $this->file = $file;
            $this->line = intval($line);
        }
    }

    /**
     * Returns called method name.
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * Returns called method arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * Returns called method return value.
     *
     * @return null|mixed
     */
    public function getReturnValue()
    {
        return $this->returnValue;
    }

    /**
     * Returns exception that call thrown.
     *
     * @return null|Exception
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * Returns callee filename.
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Returns callee line number.
     *
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Returns short notation for callee place.
     *
     * @return string
     */
    public function getCallPlace()
    {
        if (null === $this->file) {
            return 'unknown';
        }

        return sprintf('%s:%d', $this->file, $this->line);
    }

    /**
     * Adds the wildcard match score for the provided wildcard.
     *
     * @param ArgumentsWildcard $wildcard
     * @param false|int $score
     *
     * @return $this
     */
    public function addScore(ArgumentsWildcard $wildcard, $score)
    {
        $this->scores[$wildcard] = $score;

        return $this;
    }

    /**
     * Returns wildcard match score for the provided wildcard. The score is
     * calculated if not already done.
     *
     * @param ArgumentsWildcard $wildcard
     *
     * @return false|int False OR integer score (higher - better)
     */
    public function getScore(ArgumentsWildcard $wildcard)
    {
        if (isset($this->scores[$wildcard])) {
            return $this->scores[$wildcard];
        }

        return $this->scores[$wildcard] = $wildcard->scoreArguments($this->getArguments());
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * Any single value token.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class AnyValueToken implements TokenInterface
{
    /**
     * Always scores 3 for any argument.
     *
     * @param $argument
     *
     * @return int
     */
    public function scoreArgument($argument)
    {
        return 3;
    }

    /**
     * Returns false.
     *
     * @return bool
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return '*';
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * Logical NOT token.
 *
 * @author Boris Mikhaylov <kaguxmail@gmail.com>
 */
class LogicalNotToken implements TokenInterface
{
    /** @var \Prophecy\Argument\Token\TokenInterface  */
    private $token;

    /**
     * @param mixed $value exact value or token
     */
    public function __construct($value)
    {
        $this->token = $value instanceof TokenInterface? $value : new ExactValueToken($value);
    }

    /**
     * Scores 4 when preset token does not match the argument.
     *
     * @param $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
        return false === $this->token->scoreArgument($argument) ? 4 : false;
    }

    /**
     * Returns true if preset token is last.
     *
     * @return bool|int
     */
    public function isLast()
    {
        return $this->token->isLast();
    }

    /**
     * Returns originating token.
     *
     * @return TokenInterface
     */
    public function getOriginatingToken()
    {
        return $this->token;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('not(%s)', $this->token);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * Array every entry token.
 *
 * @author Adrien Brault <adrien.brault@gmail.com>
 */
class ArrayEveryEntryToken implements TokenInterface
{
    /**
     * @var TokenInterface
     */
    private $value;

    /**
     * @param mixed $value exact value or token
     */
    public function __construct($value)
    {
        if (!$value instanceof TokenInterface) {
            $value = new ExactValueToken($value);
        }

        $this->value = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function scoreArgument($argument)
    {
        if (!$argument instanceof \Traversable && !is_array($argument)) {
            return false;
        }

        $scores = array();
        foreach ($argument as $key => $argumentEntry) {
            $scores[] = $this->value->scoreArgument($argumentEntry);
        }

        if (empty($scores) || in_array(false, $scores, true)) {
            return false;
        }

        return array_sum($scores) / count($scores);
    }

    /**
     * {@inheritdoc}
     */
    public function isLast()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return sprintf('[%s, ..., %s]', $this->value, $this->value);
    }

    /**
     * @return TokenInterface
     */
    public function getValue()
    {
        return $this->value;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * Logical AND token.
 *
 * @author Boris Mikhaylov <kaguxmail@gmail.com>
 */
class LogicalAndToken implements TokenInterface
{
    private $tokens = array();

    /**
     * @param array $arguments exact values or tokens
     */
    public function __construct(array $arguments)
    {
        foreach ($arguments as $argument) {
            if (!$argument instanceof TokenInterface) {
                $argument = new ExactValueToken($argument);
            }
            $this->tokens[] = $argument;
        }
    }

    /**
     * Scores maximum score from scores returned by tokens for this argument if all of them score.
     *
     * @param $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
        if (0 === count($this->tokens)) {
            return false;
        }

        $maxScore = 0;
        foreach ($this->tokens as $token) {
            $score = $token->scoreArgument($argument);
            if (false === $score) {
                return false;
            }
            $maxScore = max($score, $maxScore);
        }

        return $maxScore;
    }

    /**
     * Returns false.
     *
     * @return boolean
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('bool(%s)', implode(' AND ', $this->tokens));
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * Approximate value token
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
class ApproximateValueToken implements TokenInterface
{
    private $value;
    private $precision;

    public function __construct($value, $precision = 0)
    {
        $this->value = $value;
        $this->precision = $precision;
    }

    /**
     * {@inheritdoc}
     */
    public function scoreArgument($argument)
    {
        return round($argument, $this->precision) === round($this->value, $this->precision) ? 10 : false;
    }

    /**
     * {@inheritdoc}
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('≅%s', round($this->value, $this->precision));
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * Any values token.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class AnyValuesToken implements TokenInterface
{
    /**
     * Always scores 2 for any argument.
     *
     * @param $argument
     *
     * @return int
     */
    public function scoreArgument($argument)
    {
        return 2;
    }

    /**
     * Returns true to stop wildcard from processing other tokens.
     *
     * @return bool
     */
    public function isLast()
    {
        return true;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return '* [, ...]';
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * Argument token interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface TokenInterface
{
    /**
     * Calculates token match score for provided argument.
     *
     * @param $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument);

    /**
     * Returns true if this token prevents check of other tokens (is last one).
     *
     * @return bool|int
     */
    public function isLast();

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString();
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * String contains token.
 *
 * @author Peter Mitchell <pete@peterjmit.com>
 */
class StringContainsToken implements TokenInterface
{
    private $value;

    /**
     * Initializes token.
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function scoreArgument($argument)
    {
        return is_string($argument) && strpos($argument, $this->value) !== false ? 6 : false;
    }

    /**
     * Returns preset value against which token checks arguments.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns false.
     *
     * @return bool
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('contains("%s")', $this->value);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

use Prophecy\Util\StringUtil;

/**
 * Identical value token.
 *
 * @author Florian Voutzinos <florian@voutzinos.com>
 */
class IdenticalValueToken implements TokenInterface
{
    private $value;
    private $string;
    private $util;

    /**
     * Initializes token.
     *
     * @param mixed      $value
     * @param StringUtil $util
     */
    public function __construct($value, StringUtil $util = null)
    {
        $this->value = $value;
        $this->util  = $util ?: new StringUtil();
    }

    /**
     * Scores 11 if argument matches preset value.
     *
     * @param $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
        return $argument === $this->value ? 11 : false;
    }

    /**
     * Returns false.
     *
     * @return bool
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        if (null === $this->string) {
            $this->string = sprintf('identical(%s)', $this->util->stringify($this->value));
        }

        return $this->string;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

use Prophecy\Exception\InvalidArgumentException;

/**
 * Value type token.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class TypeToken implements TokenInterface
{
    private $type;

    /**
     * @param string $type
     */
    public function __construct($type)
    {
        $checker = "is_{$type}";
        if (!function_exists($checker) && !interface_exists($type) && !class_exists($type)) {
            throw new InvalidArgumentException(sprintf(
                'Type or class name expected as an argument to TypeToken, but got %s.', $type
            ));
        }

        $this->type = $type;
    }

    /**
     * Scores 5 if argument has the same type this token was constructed with.
     *
     * @param $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
        $checker = "is_{$this->type}";
        if (function_exists($checker)) {
            return call_user_func($checker, $argument) ? 5 : false;
        }

        return $argument instanceof $this->type ? 5 : false;
    }

    /**
     * Returns false.
     *
     * @return bool
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('type(%s)', $this->type);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

use Prophecy\Exception\InvalidArgumentException;

/**
 * Callback-verified token.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class CallbackToken implements TokenInterface
{
    private $callback;

    /**
     * Initializes token.
     *
     * @param callable $callback
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function __construct($callback)
    {
        if (!is_callable($callback)) {
            throw new InvalidArgumentException(sprintf(
                'Callable expected as an argument to CallbackToken, but got %s.',
                gettype($callback)
            ));
        }

        $this->callback = $callback;
    }

    /**
     * Scores 7 if callback returns true, false otherwise.
     *
     * @param $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
        return call_user_func($this->callback, $argument) ? 7 : false;
    }

    /**
     * Returns false.
     *
     * @return bool
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return 'callback()';
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

use SebastianBergmann\Comparator\ComparisonFailure;
use Prophecy\Comparator\Factory as ComparatorFactory;
use Prophecy\Util\StringUtil;

/**
 * Object state-checker token.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ObjectStateToken implements TokenInterface
{
    private $name;
    private $value;
    private $util;
    private $comparatorFactory;

    /**
     * Initializes token.
     *
     * @param string            $methodName
     * @param mixed             $value             Expected return value
     * @param null|StringUtil   $util
     * @param ComparatorFactory $comparatorFactory
     */
    public function __construct(
        $methodName,
        $value,
        StringUtil $util = null,
        ComparatorFactory $comparatorFactory = null
    ) {
        $this->name  = $methodName;
        $this->value = $value;
        $this->util  = $util ?: new StringUtil;

        $this->comparatorFactory = $comparatorFactory ?: ComparatorFactory::getInstance();
    }

    /**
     * Scores 8 if argument is an object, which method returns expected value.
     *
     * @param mixed $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
        if (is_object($argument) && method_exists($argument, $this->name)) {
            $actual = call_user_func(array($argument, $this->name));

            $comparator = $this->comparatorFactory->getComparatorFor(
                $this->value, $actual
            );

            try {
                $comparator->assertEquals($this->value, $actual);
                return 8;
            } catch (ComparisonFailure $failure) {
                return false;
            }
        }

        if (is_object($argument) && property_exists($argument, $this->name)) {
            return $argument->{$this->name} === $this->value ? 8 : false;
        }

        return false;
    }

    /**
     * Returns false.
     *
     * @return bool
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('state(%s(), %s)',
            $this->name,
            $this->util->stringify($this->value)
        );
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

use SebastianBergmann\Comparator\ComparisonFailure;
use Prophecy\Comparator\Factory as ComparatorFactory;
use Prophecy\Util\StringUtil;

/**
 * Exact value token.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ExactValueToken implements TokenInterface
{
    private $value;
    private $string;
    private $util;
    private $comparatorFactory;

    /**
     * Initializes token.
     *
     * @param mixed             $value
     * @param StringUtil        $util
     * @param ComparatorFactory $comparatorFactory
     */
    public function __construct($value, StringUtil $util = null, ComparatorFactory $comparatorFactory = null)
    {
        $this->value = $value;
        $this->util  = $util ?: new StringUtil();

        $this->comparatorFactory = $comparatorFactory ?: ComparatorFactory::getInstance();
    }

    /**
     * Scores 10 if argument matches preset value.
     *
     * @param $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
        if (is_object($argument) && is_object($this->value)) {
            $comparator = $this->comparatorFactory->getComparatorFor(
                $argument, $this->value
            );

            try {
                $comparator->assertEquals($argument, $this->value);
                return 10;
            } catch (ComparisonFailure $failure) {
            	return false;
			}
        }

        // If either one is an object it should be castable to a string
        if (is_object($argument) xor is_object($this->value)) {
            if (is_object($argument) && !method_exists($argument, '__toString')) {
                return false;
            }

            if (is_object($this->value) && !method_exists($this->value, '__toString')) {
                return false;
            }
        } elseif (is_numeric($argument) && is_numeric($this->value)) {
            // noop
        } elseif (gettype($argument) !== gettype($this->value)) {
            return false;
        }

        return $argument == $this->value ? 10 : false;
    }

    /**
     * Returns preset value against which token checks arguments.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns false.
     *
     * @return bool
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        if (null === $this->string) {
            $this->string = sprintf('exact(%s)', $this->util->stringify($this->value));
        }

        return $this->string;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

/**
 * Array elements count token.
 *
 * @author Boris Mikhaylov <kaguxmail@gmail.com>
 */

class ArrayCountToken implements TokenInterface
{
    private $count;

    /**
     * @param integer $value
     */
    public function __construct($value)
    {
        $this->count = $value;
    }

    /**
     * Scores 6 when argument has preset number of elements.
     *
     * @param $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
        return $this->isCountable($argument) && $this->hasProperCount($argument) ? 6 : false;
    }

    /**
     * Returns false.
     *
     * @return boolean
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('count(%s)', $this->count);
    }

    /**
     * Returns true if object is either array or instance of \Countable
     *
     * @param $argument
     * @return bool
     */
    private function isCountable($argument)
    {
        return (is_array($argument) || $argument instanceof \Countable);
    }

    /**
     * Returns true if $argument has expected number of elements
     *
     * @param array|\Countable $argument
     *
     * @return bool
     */
    private function hasProperCount($argument)
    {
        return $this->count === count($argument);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

use Prophecy\Exception\InvalidArgumentException;

/**
 * Array entry token.
 *
 * @author Boris Mikhaylov <kaguxmail@gmail.com>
 */
class ArrayEntryToken implements TokenInterface
{
    /** @var \Prophecy\Argument\Token\TokenInterface */
    private $key;
    /** @var \Prophecy\Argument\Token\TokenInterface */
    private $value;

    /**
     * @param mixed $key   exact value or token
     * @param mixed $value exact value or token
     */
    public function __construct($key, $value)
    {
        $this->key = $this->wrapIntoExactValueToken($key);
        $this->value = $this->wrapIntoExactValueToken($value);
    }

    /**
     * Scores half of combined scores from key and value tokens for same entry. Capped at 8.
     * If argument implements \ArrayAccess without \Traversable, then key token is restricted to ExactValueToken.
     *
     * @param array|\ArrayAccess|\Traversable $argument
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
        if ($argument instanceof \Traversable) {
            $argument = iterator_to_array($argument);
        }

        if ($argument instanceof \ArrayAccess) {
            $argument = $this->convertArrayAccessToEntry($argument);
        }

        if (!is_array($argument) || empty($argument)) {
            return false;
        }

        $keyScores = array_map(array($this->key,'scoreArgument'), array_keys($argument));
        $valueScores = array_map(array($this->value,'scoreArgument'), $argument);
        $scoreEntry = function ($value, $key) {
            return $value && $key ? min(8, ($key + $value) / 2) : false;
        };

        return max(array_map($scoreEntry, $valueScores, $keyScores));
    }

    /**
     * Returns false.
     *
     * @return boolean
     */
    public function isLast()
    {
        return false;
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('[..., %s => %s, ...]', $this->key, $this->value);
    }

    /**
     * Returns key
     *
     * @return TokenInterface
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Returns value
     *
     * @return TokenInterface
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Wraps non token $value into ExactValueToken
     *
     * @param $value
     * @return TokenInterface
     */
    private function wrapIntoExactValueToken($value)
    {
        return $value instanceof TokenInterface ? $value : new ExactValueToken($value);
    }

    /**
     * Converts instance of \ArrayAccess to key => value array entry
     *
     * @param \ArrayAccess $object
     *
     * @return array|null
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    private function convertArrayAccessToEntry(\ArrayAccess $object)
    {
        if (!$this->key instanceof ExactValueToken) {
            throw new InvalidArgumentException(sprintf(
                'You can only use exact value tokens to match key of ArrayAccess object'.PHP_EOL.
                'But you used `%s`.',
                $this->key
            ));
        }

        $key = $this->key->getValue();

        return $object->offsetExists($key) ? array($key => $object[$key]) : array();
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument;

/**
 * Arguments wildcarding.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ArgumentsWildcard
{
    /**
     * @var Token\TokenInterface[]
     */
    private $tokens = array();
    private $string;

    /**
     * Initializes wildcard.
     *
     * @param array $arguments Array of argument tokens or values
     */
    public function __construct(array $arguments)
    {
        foreach ($arguments as $argument) {
            if (!$argument instanceof Token\TokenInterface) {
                $argument = new Token\ExactValueToken($argument);
            }

            $this->tokens[] = $argument;
        }
    }

    /**
     * Calculates wildcard match score for provided arguments.
     *
     * @param array $arguments
     *
     * @return false|int False OR integer score (higher - better)
     */
    public function scoreArguments(array $arguments)
    {
        if (0 == count($arguments) && 0 == count($this->tokens)) {
            return 1;
        }

        $arguments  = array_values($arguments);
        $totalScore = 0;
        foreach ($this->tokens as $i => $token) {
            $argument = isset($arguments[$i]) ? $arguments[$i] : null;
            if (1 >= $score = $token->scoreArgument($argument)) {
                return false;
            }

            $totalScore += $score;

            if (true === $token->isLast()) {
                return $totalScore;
            }
        }

        if (count($arguments) > count($this->tokens)) {
            return false;
        }

        return $totalScore;
    }

    /**
     * Returns string representation for wildcard.
     *
     * @return string
     */
    public function __toString()
    {
        if (null === $this->string) {
            $this->string = implode(', ', array_map(function ($token) {
                return (string) $token;
            }, $this->tokens));
        }

        return $this->string;
    }

    /**
     * @return array
     */
    public function getTokens()
    {
        return $this->tokens;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Promise;

use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Exception\InvalidArgumentException;
use Closure;

/**
 * Callback promise.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class CallbackPromise implements PromiseInterface
{
    private $callback;

    /**
     * Initializes callback promise.
     *
     * @param callable $callback Custom callback
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function __construct($callback)
    {
        if (!is_callable($callback)) {
            throw new InvalidArgumentException(sprintf(
                'Callable expected as an argument to CallbackPromise, but got %s.',
                gettype($callback)
            ));
        }

        $this->callback = $callback;
    }

    /**
     * Evaluates promise callback.
     *
     * @param array          $args
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @return mixed
     */
    public function execute(array $args, ObjectProphecy $object, MethodProphecy $method)
    {
        $callback = $this->callback;

        if ($callback instanceof Closure && method_exists('Closure', 'bind')) {
            $callback = Closure::bind($callback, $object);
        }

        return call_user_func($callback, $args, $object, $method);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Promise;

use Prophecy\Exception\InvalidArgumentException;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;

/**
 * Return argument promise.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ReturnArgumentPromise implements PromiseInterface
{
    /**
     * @var int
     */
    private $index;

    /**
     * Initializes callback promise.
     *
     * @param int $index The zero-indexed number of the argument to return
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function __construct($index = 0)
    {
        if (!is_int($index) || $index < 0) {
            throw new InvalidArgumentException(sprintf(
                'Zero-based index expected as argument to ReturnArgumentPromise, but got %s.',
                $index
            ));
        }
        $this->index = $index;
    }

    /**
     * Returns nth argument if has one, null otherwise.
     *
     * @param array          $args
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @return null|mixed
     */
    public function execute(array $args, ObjectProphecy $object, MethodProphecy $method)
    {
        return count($args) > $this->index ? $args[$this->index] : null;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Promise;

use Doctrine\Instantiator\Instantiator;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Exception\InvalidArgumentException;
use ReflectionClass;

/**
 * Throw promise.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ThrowPromise implements PromiseInterface
{
    private $exception;

    /**
     * @var \Doctrine\Instantiator\Instantiator
     */
    private $instantiator;

    /**
     * Initializes promise.
     *
     * @param string|\Exception|\Throwable $exception Exception class name or instance
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function __construct($exception)
    {
        if (is_string($exception)) {
            if ((!class_exists($exception) && !interface_exists($exception)) || !$this->isAValidThrowable($exception)) {
                throw new InvalidArgumentException(sprintf(
                    'Exception / Throwable class or instance expected as argument to ThrowPromise, but got %s.',
                    $exception
                ));
            }
        } elseif (!$exception instanceof \Exception && !$exception instanceof \Throwable) {
            throw new InvalidArgumentException(sprintf(
                'Exception / Throwable class or instance expected as argument to ThrowPromise, but got %s.',
                is_object($exception) ? get_class($exception) : gettype($exception)
            ));
        }

        $this->exception = $exception;
    }

    /**
     * Throws predefined exception.
     *
     * @param array          $args
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @throws object
     */
    public function execute(array $args, ObjectProphecy $object, MethodProphecy $method)
    {
        if (is_string($this->exception)) {
            $classname   = $this->exception;
            $reflection  = new ReflectionClass($classname);
            $constructor = $reflection->getConstructor();

            if ($constructor->isPublic() && 0 == $constructor->getNumberOfRequiredParameters()) {
                throw $reflection->newInstance();
            }

            if (!$this->instantiator) {
                $this->instantiator = new Instantiator();
            }

            throw $this->instantiator->instantiate($classname);
        }

        throw $this->exception;
    }

    /**
     * @param string $exception
     *
     * @return bool
     */
    private function isAValidThrowable($exception)
    {
        return is_a($exception, 'Exception', true)
            || is_a($exception, 'Throwable', true);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Promise;

use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;

/**
 * Promise interface.
 * Promises are logical blocks, tied to `will...` keyword.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface PromiseInterface
{
    /**
     * Evaluates promise.
     *
     * @param array          $args
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @return mixed
     */
    public function execute(array $args, ObjectProphecy $object, MethodProphecy $method);
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Promise;

use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;

/**
 * Return promise.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ReturnPromise implements PromiseInterface
{
    private $returnValues = array();

    /**
     * Initializes promise.
     *
     * @param array $returnValues Array of values
     */
    public function __construct(array $returnValues)
    {
        $this->returnValues = $returnValues;
    }

    /**
     * Returns saved values one by one until last one, then continuously returns last value.
     *
     * @param array          $args
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @return mixed
     */
    public function execute(array $args, ObjectProphecy $object, MethodProphecy $method)
    {
        $value = array_shift($this->returnValues);

        if (!count($this->returnValues)) {
            $this->returnValues[] = $value;
        }

        return $value;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prophecy;

use Prophecy\Argument;
use Prophecy\Prophet;
use Prophecy\Promise;
use Prophecy\Prediction;
use Prophecy\Exception\Doubler\MethodNotFoundException;
use Prophecy\Exception\InvalidArgumentException;
use Prophecy\Exception\Prophecy\MethodProphecyException;

/**
 * Method prophecy.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class MethodProphecy
{
    private $objectProphecy;
    private $methodName;
    private $argumentsWildcard;
    private $promise;
    private $prediction;
    private $checkedPredictions = array();
    private $bound = false;
    private $voidReturnType = false;

    /**
     * Initializes method prophecy.
     *
     * @param ObjectProphecy                        $objectProphecy
     * @param string                                $methodName
     * @param null|Argument\ArgumentsWildcard|array $arguments
     *
     * @throws \Prophecy\Exception\Doubler\MethodNotFoundException If method not found
     */
    public function __construct(ObjectProphecy $objectProphecy, $methodName, $arguments = null)
    {
        $double = $objectProphecy->reveal();
        if (!method_exists($double, $methodName)) {
            throw new MethodNotFoundException(sprintf(
                'Method `%s::%s()` is not defined.', get_class($double), $methodName
            ), get_class($double), $methodName, $arguments);
        }

        $this->objectProphecy = $objectProphecy;
        $this->methodName     = $methodName;

        $reflectedMethod = new \ReflectionMethod($double, $methodName);
        if ($reflectedMethod->isFinal()) {
            throw new MethodProphecyException(sprintf(
                "Can not add prophecy for a method `%s::%s()`\n".
                "as it is a final method.",
                get_class($double),
                $methodName
            ), $this);
        }

        if (null !== $arguments) {
            $this->withArguments($arguments);
        }

        if (version_compare(PHP_VERSION, '7.0', '>=') && true === $reflectedMethod->hasReturnType()) {
            $type = PHP_VERSION_ID >= 70100 ? $reflectedMethod->getReturnType()->getName() : (string) $reflectedMethod->getReturnType();

            if ('void' === $type) {
                $this->voidReturnType = true;
            }

            $this->will(function () use ($type) {
                switch ($type) {
                    case 'void': return;
                    case 'string': return '';
                    case 'float':  return 0.0;
                    case 'int':    return 0;
                    case 'bool':   return false;
                    case 'array':  return array();

                    case 'callable':
                    case 'Closure':
                        return function () {};

                    case 'Traversable':
                    case 'Generator':
                        // Remove eval() when minimum version >=5.5
                        /** @var callable $generator */
                        $generator = eval('return function () { yield; };');
                        return $generator();

                    default:
                        $prophet = new Prophet;
                        return $prophet->prophesize($type)->reveal();
                }
            });
        }
    }

    /**
     * Sets argument wildcard.
     *
     * @param array|Argument\ArgumentsWildcard $arguments
     *
     * @return $this
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function withArguments($arguments)
    {
        if (is_array($arguments)) {
            $arguments = new Argument\ArgumentsWildcard($arguments);
        }

        if (!$arguments instanceof Argument\ArgumentsWildcard) {
            throw new InvalidArgumentException(sprintf(
                "Either an array or an instance of ArgumentsWildcard expected as\n".
                'a `MethodProphecy::withArguments()` argument, but got %s.',
                gettype($arguments)
            ));
        }

        $this->argumentsWildcard = $arguments;

        return $this;
    }

    /**
     * Sets custom promise to the prophecy.
     *
     * @param callable|Promise\PromiseInterface $promise
     *
     * @return $this
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function will($promise)
    {
        if (is_callable($promise)) {
            $promise = new Promise\CallbackPromise($promise);
        }

        if (!$promise instanceof Promise\PromiseInterface) {
            throw new InvalidArgumentException(sprintf(
                'Expected callable or instance of PromiseInterface, but got %s.',
                gettype($promise)
            ));
        }

        $this->bindToObjectProphecy();
        $this->promise = $promise;

        return $this;
    }

    /**
     * Sets return promise to the prophecy.
     *
     * @see \Prophecy\Promise\ReturnPromise
     *
     * @return $this
     */
    public function willReturn()
    {
        if ($this->voidReturnType) {
            throw new MethodProphecyException(
                "The method \"$this->methodName\" has a void return type, and so cannot return anything",
                $this
            );
        }

        return $this->will(new Promise\ReturnPromise(func_get_args()));
    }

    /**
     * @param array $items
     *
     * @return $this
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function willYield($items)
    {
        if ($this->voidReturnType) {
            throw new MethodProphecyException(
                "The method \"$this->methodName\" has a void return type, and so cannot yield anything",
                $this
            );
        }

        if (!is_array($items)) {
            throw new InvalidArgumentException(sprintf(
                'Expected array, but got %s.',
                gettype($items)
            ));
        }

        // Remove eval() when minimum version >=5.5
        /** @var callable $generator */
        $generator = eval('return function() use ($items) {
            foreach ($items as $key => $value) {
                yield $key => $value;
            }
        };');

        return $this->will($generator);
    }

    /**
     * Sets return argument promise to the prophecy.
     *
     * @param int $index The zero-indexed number of the argument to return
     *
     * @see \Prophecy\Promise\ReturnArgumentPromise
     *
     * @return $this
     */
    public function willReturnArgument($index = 0)
    {
        if ($this->voidReturnType) {
            throw new MethodProphecyException("The method \"$this->methodName\" has a void return type", $this);
        }

        return $this->will(new Promise\ReturnArgumentPromise($index));
    }

    /**
     * Sets throw promise to the prophecy.
     *
     * @see \Prophecy\Promise\ThrowPromise
     *
     * @param string|\Exception $exception Exception class or instance
     *
     * @return $this
     */
    public function willThrow($exception)
    {
        return $this->will(new Promise\ThrowPromise($exception));
    }

    /**
     * Sets custom prediction to the prophecy.
     *
     * @param callable|Prediction\PredictionInterface $prediction
     *
     * @return $this
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function should($prediction)
    {
        if (is_callable($prediction)) {
            $prediction = new Prediction\CallbackPrediction($prediction);
        }

        if (!$prediction instanceof Prediction\PredictionInterface) {
            throw new InvalidArgumentException(sprintf(
                'Expected callable or instance of PredictionInterface, but got %s.',
                gettype($prediction)
            ));
        }

        $this->bindToObjectProphecy();
        $this->prediction = $prediction;

        return $this;
    }

    /**
     * Sets call prediction to the prophecy.
     *
     * @see \Prophecy\Prediction\CallPrediction
     *
     * @return $this
     */
    public function shouldBeCalled()
    {
        return $this->should(new Prediction\CallPrediction);
    }

    /**
     * Sets no calls prediction to the prophecy.
     *
     * @see \Prophecy\Prediction\NoCallsPrediction
     *
     * @return $this
     */
    public function shouldNotBeCalled()
    {
        return $this->should(new Prediction\NoCallsPrediction);
    }

    /**
     * Sets call times prediction to the prophecy.
     *
     * @see \Prophecy\Prediction\CallTimesPrediction
     *
     * @param $count
     *
     * @return $this
     */
    public function shouldBeCalledTimes($count)
    {
        return $this->should(new Prediction\CallTimesPrediction($count));
    }

    /**
     * Sets call times prediction to the prophecy.
     *
     * @see \Prophecy\Prediction\CallTimesPrediction
     *
     * @return $this
     */
    public function shouldBeCalledOnce()
    {
        return $this->shouldBeCalledTimes(1);
    }

    /**
     * Checks provided prediction immediately.
     *
     * @param callable|Prediction\PredictionInterface $prediction
     *
     * @return $this
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function shouldHave($prediction)
    {
        if (is_callable($prediction)) {
            $prediction = new Prediction\CallbackPrediction($prediction);
        }

        if (!$prediction instanceof Prediction\PredictionInterface) {
            throw new InvalidArgumentException(sprintf(
                'Expected callable or instance of PredictionInterface, but got %s.',
                gettype($prediction)
            ));
        }

        if (null === $this->promise && !$this->voidReturnType) {
            $this->willReturn();
        }

        $calls = $this->getObjectProphecy()->findProphecyMethodCalls(
            $this->getMethodName(),
            $this->getArgumentsWildcard()
        );

        try {
            $prediction->check($calls, $this->getObjectProphecy(), $this);
            $this->checkedPredictions[] = $prediction;
        } catch (\Exception $e) {
            $this->checkedPredictions[] = $prediction;

            throw $e;
        }

        return $this;
    }

    /**
     * Checks call prediction.
     *
     * @see \Prophecy\Prediction\CallPrediction
     *
     * @return $this
     */
    public function shouldHaveBeenCalled()
    {
        return $this->shouldHave(new Prediction\CallPrediction);
    }

    /**
     * Checks no calls prediction.
     *
     * @see \Prophecy\Prediction\NoCallsPrediction
     *
     * @return $this
     */
    public function shouldNotHaveBeenCalled()
    {
        return $this->shouldHave(new Prediction\NoCallsPrediction);
    }

    /**
     * Checks no calls prediction.
     *
     * @see \Prophecy\Prediction\NoCallsPrediction
     * @deprecated
     *
     * @return $this
     */
    public function shouldNotBeenCalled()
    {
        return $this->shouldNotHaveBeenCalled();
    }

    /**
     * Checks call times prediction.
     *
     * @see \Prophecy\Prediction\CallTimesPrediction
     *
     * @param int $count
     *
     * @return $this
     */
    public function shouldHaveBeenCalledTimes($count)
    {
        return $this->shouldHave(new Prediction\CallTimesPrediction($count));
    }

    /**
     * Checks call times prediction.
     *
     * @see \Prophecy\Prediction\CallTimesPrediction
     *
     * @return $this
     */
    public function shouldHaveBeenCalledOnce()
    {
        return $this->shouldHaveBeenCalledTimes(1);
    }

    /**
     * Checks currently registered [with should(...)] prediction.
     */
    public function checkPrediction()
    {
        if (null === $this->prediction) {
            return;
        }

        $this->shouldHave($this->prediction);
    }

    /**
     * Returns currently registered promise.
     *
     * @return null|Promise\PromiseInterface
     */
    public function getPromise()
    {
        return $this->promise;
    }

    /**
     * Returns currently registered prediction.
     *
     * @return null|Prediction\PredictionInterface
     */
    public function getPrediction()
    {
        return $this->prediction;
    }

    /**
     * Returns predictions that were checked on this object.
     *
     * @return Prediction\PredictionInterface[]
     */
    public function getCheckedPredictions()
    {
        return $this->checkedPredictions;
    }

    /**
     * Returns object prophecy this method prophecy is tied to.
     *
     * @return ObjectProphecy
     */
    public function getObjectProphecy()
    {
        return $this->objectProphecy;
    }

    /**
     * Returns method name.
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * Returns arguments wildcard.
     *
     * @return Argument\ArgumentsWildcard
     */
    public function getArgumentsWildcard()
    {
        return $this->argumentsWildcard;
    }

    /**
     * @return bool
     */
    public function hasReturnVoid()
    {
        return $this->voidReturnType;
    }

    private function bindToObjectProphecy()
    {
        if ($this->bound) {
            return;
        }

        $this->getObjectProphecy()->addMethodProphecy($this);
        $this->bound = true;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prophecy;

use SebastianBergmann\Comparator\ComparisonFailure;
use Prophecy\Comparator\Factory as ComparatorFactory;
use Prophecy\Call\Call;
use Prophecy\Doubler\LazyDouble;
use Prophecy\Argument\ArgumentsWildcard;
use Prophecy\Call\CallCenter;
use Prophecy\Exception\Prophecy\ObjectProphecyException;
use Prophecy\Exception\Prophecy\MethodProphecyException;
use Prophecy\Exception\Prediction\AggregateException;
use Prophecy\Exception\Prediction\PredictionException;

/**
 * Object prophecy.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ObjectProphecy implements ProphecyInterface
{
    private $lazyDouble;
    private $callCenter;
    private $revealer;
    private $comparatorFactory;

    /**
     * @var MethodProphecy[][]
     */
    private $methodProphecies = array();

    /**
     * Initializes object prophecy.
     *
     * @param LazyDouble        $lazyDouble
     * @param CallCenter        $callCenter
     * @param RevealerInterface $revealer
     * @param ComparatorFactory $comparatorFactory
     */
    public function __construct(
        LazyDouble $lazyDouble,
        CallCenter $callCenter = null,
        RevealerInterface $revealer = null,
        ComparatorFactory $comparatorFactory = null
    ) {
        $this->lazyDouble = $lazyDouble;
        $this->callCenter = $callCenter ?: new CallCenter;
        $this->revealer   = $revealer ?: new Revealer;

        $this->comparatorFactory = $comparatorFactory ?: ComparatorFactory::getInstance();
    }

    /**
     * Forces double to extend specific class.
     *
     * @param string $class
     *
     * @return $this
     */
    public function willExtend($class)
    {
        $this->lazyDouble->setParentClass($class);

        return $this;
    }

    /**
     * Forces double to implement specific interface.
     *
     * @param string $interface
     *
     * @return $this
     */
    public function willImplement($interface)
    {
        $this->lazyDouble->addInterface($interface);

        return $this;
    }

    /**
     * Sets constructor arguments.
     *
     * @param array $arguments
     *
     * @return $this
     */
    public function willBeConstructedWith(array $arguments = null)
    {
        $this->lazyDouble->setArguments($arguments);

        return $this;
    }

    /**
     * Reveals double.
     *
     * @return object
     *
     * @throws \Prophecy\Exception\Prophecy\ObjectProphecyException If double doesn't implement needed interface
     */
    public function reveal()
    {
        $double = $this->lazyDouble->getInstance();

        if (null === $double || !$double instanceof ProphecySubjectInterface) {
            throw new ObjectProphecyException(
                "Generated double must implement ProphecySubjectInterface, but it does not.\n".
                'It seems you have wrongly configured doubler without required ClassPatch.',
                $this
            );
        }

        $double->setProphecy($this);

        return $double;
    }

    /**
     * Adds method prophecy to object prophecy.
     *
     * @param MethodProphecy $methodProphecy
     *
     * @throws \Prophecy\Exception\Prophecy\MethodProphecyException If method prophecy doesn't
     *                                                              have arguments wildcard
     */
    public function addMethodProphecy(MethodProphecy $methodProphecy)
    {
        $argumentsWildcard = $methodProphecy->getArgumentsWildcard();
        if (null === $argumentsWildcard) {
            throw new MethodProphecyException(sprintf(
                "Can not add prophecy for a method `%s::%s()`\n".
                "as you did not specify arguments wildcard for it.",
                get_class($this->reveal()),
                $methodProphecy->getMethodName()
            ), $methodProphecy);
        }

        $methodName = strtolower($methodProphecy->getMethodName());

        if (!isset($this->methodProphecies[$methodName])) {
            $this->methodProphecies[$methodName] = array();
        }

        $this->methodProphecies[$methodName][] = $methodProphecy;
    }

    /**
     * Returns either all or related to single method prophecies.
     *
     * @param null|string $methodName
     *
     * @return MethodProphecy[]
     */
    public function getMethodProphecies($methodName = null)
    {
        if (null === $methodName) {
            return $this->methodProphecies;
        }

        $methodName = strtolower($methodName);

        if (!isset($this->methodProphecies[$methodName])) {
            return array();
        }

        return $this->methodProphecies[$methodName];
    }

    /**
     * Makes specific method call.
     *
     * @param string $methodName
     * @param array  $arguments
     *
     * @return mixed
     */
    public function makeProphecyMethodCall($methodName, array $arguments)
    {
        $arguments = $this->revealer->reveal($arguments);
        $return    = $this->callCenter->makeCall($this, $methodName, $arguments);

        return $this->revealer->reveal($return);
    }

    /**
     * Finds calls by method name & arguments wildcard.
     *
     * @param string            $methodName
     * @param ArgumentsWildcard $wildcard
     *
     * @return Call[]
     */
    public function findProphecyMethodCalls($methodName, ArgumentsWildcard $wildcard)
    {
        return $this->callCenter->findCalls($methodName, $wildcard);
    }

    /**
     * Checks that registered method predictions do not fail.
     *
     * @throws \Prophecy\Exception\Prediction\AggregateException If any of registered predictions fail
     * @throws \Prophecy\Exception\Call\UnexpectedCallException
     */
    public function checkProphecyMethodsPredictions()
    {
        $exception = new AggregateException(sprintf("%s:\n", get_class($this->reveal())));
        $exception->setObjectProphecy($this);

        $this->callCenter->checkUnexpectedCalls();

        foreach ($this->methodProphecies as $prophecies) {
            foreach ($prophecies as $prophecy) {
                try {
                    $prophecy->checkPrediction();
                } catch (PredictionException $e) {
                    $exception->append($e);
                }
            }
        }

        if (count($exception->getExceptions())) {
            throw $exception;
        }
    }

    /**
     * Creates new method prophecy using specified method name and arguments.
     *
     * @param string $methodName
     * @param array  $arguments
     *
     * @return MethodProphecy
     */
    public function __call($methodName, array $arguments)
    {
        $arguments = new ArgumentsWildcard($this->revealer->reveal($arguments));

        foreach ($this->getMethodProphecies($methodName) as $prophecy) {
            $argumentsWildcard = $prophecy->getArgumentsWildcard();
            $comparator = $this->comparatorFactory->getComparatorFor(
                $argumentsWildcard, $arguments
            );

            try {
                $comparator->assertEquals($argumentsWildcard, $arguments);
                return $prophecy;
            } catch (ComparisonFailure $failure) {}
        }

        return new MethodProphecy($this, $methodName, $arguments);
    }

    /**
     * Tries to get property value from double.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->reveal()->$name;
    }

    /**
     * Tries to set property value to double.
     *
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->reveal()->$name = $this->revealer->reveal($value);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prophecy;

/**
 * Prophecies revealer interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface RevealerInterface
{
    /**
     * Unwraps value(s).
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function reveal($value);
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prophecy;

/**
 * Core Prophecy interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface ProphecyInterface
{
    /**
     * Reveals prophecy object (double) .
     *
     * @return object
     */
    public function reveal();
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prophecy;

/**
 * Controllable doubles interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface ProphecySubjectInterface
{
    /**
     * Sets subject prophecy.
     *
     * @param ProphecyInterface $prophecy
     */
    public function setProphecy(ProphecyInterface $prophecy);

    /**
     * Returns subject prophecy.
     *
     * @return ProphecyInterface
     */
    public function getProphecy();
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prophecy;

/**
 * Basic prophecies revealer.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class Revealer implements RevealerInterface
{
    /**
     * Unwraps value(s).
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function reveal($value)
    {
        if (is_array($value)) {
            return array_map(array($this, __FUNCTION__), $value);
        }

        if (!is_object($value)) {
            return $value;
        }

        if ($value instanceof ProphecyInterface) {
            $value = $value->reveal();
        }

        return $value;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler;

use Doctrine\Instantiator\Instantiator;
use Prophecy\Doubler\ClassPatch\ClassPatchInterface;
use Prophecy\Doubler\Generator\ClassMirror;
use Prophecy\Doubler\Generator\ClassCreator;
use Prophecy\Exception\InvalidArgumentException;
use ReflectionClass;

/**
 * Cached class doubler.
 * Prevents mirroring/creation of the same structure twice.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class Doubler
{
    private $mirror;
    private $creator;
    private $namer;

    /**
     * @var ClassPatchInterface[]
     */
    private $patches = array();

    /**
     * @var \Doctrine\Instantiator\Instantiator
     */
    private $instantiator;

    /**
     * Initializes doubler.
     *
     * @param ClassMirror   $mirror
     * @param ClassCreator  $creator
     * @param NameGenerator $namer
     */
    public function __construct(ClassMirror $mirror = null, ClassCreator $creator = null,
                                NameGenerator $namer = null)
    {
        $this->mirror  = $mirror  ?: new ClassMirror;
        $this->creator = $creator ?: new ClassCreator;
        $this->namer   = $namer   ?: new NameGenerator;
    }

    /**
     * Returns list of registered class patches.
     *
     * @return ClassPatchInterface[]
     */
    public function getClassPatches()
    {
        return $this->patches;
    }

    /**
     * Registers new class patch.
     *
     * @param ClassPatchInterface $patch
     */
    public function registerClassPatch(ClassPatchInterface $patch)
    {
        $this->patches[] = $patch;

        @usort($this->patches, function (ClassPatchInterface $patch1, ClassPatchInterface $patch2) {
            return $patch2->getPriority() - $patch1->getPriority();
        });
    }

    /**
     * Creates double from specific class or/and list of interfaces.
     *
     * @param ReflectionClass   $class
     * @param ReflectionClass[] $interfaces Array of ReflectionClass instances
     * @param array             $args       Constructor arguments
     *
     * @return DoubleInterface
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function double(ReflectionClass $class = null, array $interfaces, array $args = null)
    {
        foreach ($interfaces as $interface) {
            if (!$interface instanceof ReflectionClass) {
                throw new InvalidArgumentException(sprintf(
                    "[ReflectionClass \$interface1 [, ReflectionClass \$interface2]] array expected as\n".
                    "a second argument to `Doubler::double(...)`, but got %s.",
                    is_object($interface) ? get_class($interface).' class' : gettype($interface)
                ));
            }
        }

        $classname  = $this->createDoubleClass($class, $interfaces);
        $reflection = new ReflectionClass($classname);

        if (null !== $args) {
            return $reflection->newInstanceArgs($args);
        }
        if ((null === $constructor = $reflection->getConstructor())
            || ($constructor->isPublic() && !$constructor->isFinal())) {
            return $reflection->newInstance();
        }

        if (!$this->instantiator) {
            $this->instantiator = new Instantiator();
        }

        return $this->instantiator->instantiate($classname);
    }

    /**
     * Creates double class and returns its FQN.
     *
     * @param ReflectionClass   $class
     * @param ReflectionClass[] $interfaces
     *
     * @return string
     */
    protected function createDoubleClass(ReflectionClass $class = null, array $interfaces)
    {
        $name = $this->namer->name($class, $interfaces);
        $node = $this->mirror->reflect($class, $interfaces);

        foreach ($this->patches as $patch) {
            if ($patch->supports($node)) {
                $patch->apply($node);
            }
        }

        $this->creator->create($name, $node);

        return $name;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler;

/**
 * Core double interface.
 * All doubled classes will implement this one.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface DoubleInterface
{
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler;

use ReflectionClass;

/**
 * Name generator.
 * Generates classname for double.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class NameGenerator
{
    private static $counter = 1;

    /**
     * Generates name.
     *
     * @param ReflectionClass   $class
     * @param ReflectionClass[] $interfaces
     *
     * @return string
     */
    public function name(ReflectionClass $class = null, array $interfaces)
    {
        $parts = array();

        if (null !== $class) {
            $parts[] = $class->getName();
        } else {
            foreach ($interfaces as $interface) {
                $parts[] = $interface->getShortName();
            }
        }

        if (!count($parts)) {
            $parts[] = 'stdClass';
        }

        return sprintf('Double\%s\P%d', implode('\\', $parts), self::$counter++);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler;

use Prophecy\Exception\Doubler\DoubleException;
use Prophecy\Exception\Doubler\ClassNotFoundException;
use Prophecy\Exception\Doubler\InterfaceNotFoundException;
use ReflectionClass;

/**
 * Lazy double.
 * Gives simple interface to describe double before creating it.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class LazyDouble
{
    private $doubler;
    private $class;
    private $interfaces = array();
    private $arguments  = null;
    private $double;

    /**
     * Initializes lazy double.
     *
     * @param Doubler $doubler
     */
    public function __construct(Doubler $doubler)
    {
        $this->doubler = $doubler;
    }

    /**
     * Tells doubler to use specific class as parent one for double.
     *
     * @param string|ReflectionClass $class
     *
     * @throws \Prophecy\Exception\Doubler\ClassNotFoundException
     * @throws \Prophecy\Exception\Doubler\DoubleException
     */
    public function setParentClass($class)
    {
        if (null !== $this->double) {
            throw new DoubleException('Can not extend class with already instantiated double.');
        }

        if (!$class instanceof ReflectionClass) {
            if (!class_exists($class)) {
                throw new ClassNotFoundException(sprintf('Class %s not found.', $class), $class);
            }

            $class = new ReflectionClass($class);
        }

        $this->class = $class;
    }

    /**
     * Tells doubler to implement specific interface with double.
     *
     * @param string|ReflectionClass $interface
     *
     * @throws \Prophecy\Exception\Doubler\InterfaceNotFoundException
     * @throws \Prophecy\Exception\Doubler\DoubleException
     */
    public function addInterface($interface)
    {
        if (null !== $this->double) {
            throw new DoubleException(
                'Can not implement interface with already instantiated double.'
            );
        }

        if (!$interface instanceof ReflectionClass) {
            if (!interface_exists($interface)) {
                throw new InterfaceNotFoundException(
                    sprintf('Interface %s not found.', $interface),
                    $interface
                );
            }

            $interface = new ReflectionClass($interface);
        }

        $this->interfaces[] = $interface;
    }

    /**
     * Sets constructor arguments.
     *
     * @param array $arguments
     */
    public function setArguments(array $arguments = null)
    {
        $this->arguments = $arguments;
    }

    /**
     * Creates double instance or returns already created one.
     *
     * @return DoubleInterface
     */
    public function getInstance()
    {
        if (null === $this->double) {
            if (null !== $this->arguments) {
                return $this->double = $this->doubler->double(
                    $this->class, $this->interfaces, $this->arguments
                );
            }

            $this->double = $this->doubler->double($this->class, $this->interfaces);
        }

        return $this->double;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler;

use ReflectionClass;

/**
 * Cached class doubler.
 * Prevents mirroring/creation of the same structure twice.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class CachedDoubler extends Doubler
{
    private static $classes = array();

    /**
     * {@inheritdoc}
     */
    protected function createDoubleClass(ReflectionClass $class = null, array $interfaces)
    {
        $classId = $this->generateClassId($class, $interfaces);
        if (isset(self::$classes[$classId])) {
            return self::$classes[$classId];
        }

        return self::$classes[$classId] = parent::createDoubleClass($class, $interfaces);
    }

    /**
     * @param ReflectionClass   $class
     * @param ReflectionClass[] $interfaces
     *
     * @return string
     */
    private function generateClassId(ReflectionClass $class = null, array $interfaces)
    {
        $parts = array();
        if (null !== $class) {
            $parts[] = $class->getName();
        }
        foreach ($interfaces as $interface) {
            $parts[] = $interface->getName();
        }
        foreach ($this->getClassPatches() as $patch) {
            $parts[] = get_class($patch);
        }
        sort($parts);

        return md5(implode('', $parts));
    }

    public function resetCache()
    {
        self::$classes = array();
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\Generator;

/**
 * Class code creator.
 * Generates PHP code for specific class node tree.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ClassCodeGenerator
{
    /**
     * @var TypeHintReference
     */
    private $typeHintReference;

    public function __construct(TypeHintReference $typeHintReference = null)
    {
        $this->typeHintReference = $typeHintReference ?: new TypeHintReference();
    }

    /**
     * Generates PHP code for class node.
     *
     * @param string         $classname
     * @param Node\ClassNode $class
     *
     * @return string
     */
    public function generate($classname, Node\ClassNode $class)
    {
        $parts     = explode('\\', $classname);
        $classname = array_pop($parts);
        $namespace = implode('\\', $parts);

        $code = sprintf("class %s extends \%s implements %s {\n",
            $classname, $class->getParentClass(), implode(', ',
                array_map(function ($interface) {return '\\'.$interface;}, $class->getInterfaces())
            )
        );

        foreach ($class->getProperties() as $name => $visibility) {
            $code .= sprintf("%s \$%s;\n", $visibility, $name);
        }
        $code .= "\n";

        foreach ($class->getMethods() as $method) {
            $code .= $this->generateMethod($method)."\n";
        }
        $code .= "\n}";

        return sprintf("namespace %s {\n%s\n}", $namespace, $code);
    }

    private function generateMethod(Node\MethodNode $method)
    {
        $php = sprintf("%s %s function %s%s(%s)%s {\n",
            $method->getVisibility(),
            $method->isStatic() ? 'static' : '',
            $method->returnsReference() ? '&':'',
            $method->getName(),
            implode(', ', $this->generateArguments($method->getArguments())),
            $this->getReturnType($method)
        );
        $php .= $method->getCode()."\n";

        return $php.'}';
    }

    /**
     * @return string
     */
    private function getReturnType(Node\MethodNode $method)
    {
        if (version_compare(PHP_VERSION, '7.1', '>=')) {
            if ($method->hasReturnType()) {
                return $method->hasNullableReturnType()
                    ? sprintf(': ?%s', $method->getReturnType())
                    : sprintf(': %s', $method->getReturnType());
            }
        }

        if (version_compare(PHP_VERSION, '7.0', '>=')) {
            return $method->hasReturnType() && $method->getReturnType() !== 'void'
                ? sprintf(': %s', $method->getReturnType())
                : '';
        }

        return '';
    }

    private function generateArguments(array $arguments)
    {
        $typeHintReference = $this->typeHintReference;
        return array_map(function (Node\ArgumentNode $argument) use ($typeHintReference) {
            $php = '';

            if (version_compare(PHP_VERSION, '7.1', '>=')) {
                $php .= $argument->isNullable() ? '?' : '';
            }

            if ($hint = $argument->getTypeHint()) {
                $php .= $typeHintReference->isBuiltInParamTypeHint($hint) ? $hint : '\\'.$hint;
            }

            $php .= ' '.($argument->isPassedByReference() ? '&' : '');

            $php .= $argument->isVariadic() ? '...' : '';

            $php .= '$'.$argument->getName();

            if ($argument->isOptional() && !$argument->isVariadic()) {
                $php .= ' = '.var_export($argument->getDefault(), true);
            }

            return $php;
        }, $arguments);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\Generator;

use Prophecy\Exception\InvalidArgumentException;
use Prophecy\Exception\Doubler\ClassMirrorException;
use ReflectionClass;
use ReflectionMethod;
use ReflectionParameter;

/**
 * Class mirror.
 * Core doubler class. Mirrors specific class and/or interfaces into class node tree.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ClassMirror
{
    private static $reflectableMethods = array(
        '__construct',
        '__destruct',
        '__sleep',
        '__wakeup',
        '__toString',
        '__call',
        '__invoke'
    );

    /**
     * Reflects provided arguments into class node.
     *
     * @param ReflectionClass   $class
     * @param ReflectionClass[] $interfaces
     *
     * @return Node\ClassNode
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function reflect(ReflectionClass $class = null, array $interfaces)
    {
        $node = new Node\ClassNode;

        if (null !== $class) {
            if (true === $class->isInterface()) {
                throw new InvalidArgumentException(sprintf(
                    "Could not reflect %s as a class, because it\n".
                    "is interface - use the second argument instead.",
                    $class->getName()
                ));
            }

            $this->reflectClassToNode($class, $node);
        }

        foreach ($interfaces as $interface) {
            if (!$interface instanceof ReflectionClass) {
                throw new InvalidArgumentException(sprintf(
                    "[ReflectionClass \$interface1 [, ReflectionClass \$interface2]] array expected as\n".
                    "a second argument to `ClassMirror::reflect(...)`, but got %s.",
                    is_object($interface) ? get_class($interface).' class' : gettype($interface)
                ));
            }
            if (false === $interface->isInterface()) {
                throw new InvalidArgumentException(sprintf(
                    "Could not reflect %s as an interface, because it\n".
                    "is class - use the first argument instead.",
                    $interface->getName()
                ));
            }

            $this->reflectInterfaceToNode($interface, $node);
        }

        $node->addInterface('Prophecy\Doubler\Generator\ReflectionInterface');

        return $node;
    }

    private function reflectClassToNode(ReflectionClass $class, Node\ClassNode $node)
    {
        if (true === $class->isFinal()) {
            throw new ClassMirrorException(sprintf(
                'Could not reflect class %s as it is marked final.', $class->getName()
            ), $class);
        }

        $node->setParentClass($class->getName());

        foreach ($class->getMethods(ReflectionMethod::IS_ABSTRACT) as $method) {
            if (false === $method->isProtected()) {
                continue;
            }

            $this->reflectMethodToNode($method, $node);
        }

        foreach ($class->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
            if (0 === strpos($method->getName(), '_')
                && !in_array($method->getName(), self::$reflectableMethods)) {
                continue;
            }

            if (true === $method->isFinal()) {
                $node->addUnextendableMethod($method->getName());
                continue;
            }

            $this->reflectMethodToNode($method, $node);
        }
    }

    private function reflectInterfaceToNode(ReflectionClass $interface, Node\ClassNode $node)
    {
        $node->addInterface($interface->getName());

        foreach ($interface->getMethods() as $method) {
            $this->reflectMethodToNode($method, $node);
        }
    }

    private function reflectMethodToNode(ReflectionMethod $method, Node\ClassNode $classNode)
    {
        $node = new Node\MethodNode($method->getName());

        if (true === $method->isProtected()) {
            $node->setVisibility('protected');
        }

        if (true === $method->isStatic()) {
            $node->setStatic();
        }

        if (true === $method->returnsReference()) {
            $node->setReturnsReference();
        }

        if (version_compare(PHP_VERSION, '7.0', '>=') && $method->hasReturnType()) {
            $returnType = PHP_VERSION_ID >= 70100 ? $method->getReturnType()->getName() : (string) $method->getReturnType();
            $returnTypeLower = strtolower($returnType);

            if ('self' === $returnTypeLower) {
                $returnType = $method->getDeclaringClass()->getName();
            }
            if ('parent' === $returnTypeLower) {
                $returnType = $method->getDeclaringClass()->getParentClass()->getName();
            }

            $node->setReturnType($returnType);

            if (version_compare(PHP_VERSION, '7.1', '>=') && $method->getReturnType()->allowsNull()) {
                $node->setNullableReturnType(true);
            }
        }

        if (is_array($params = $method->getParameters()) && count($params)) {
            foreach ($params as $param) {
                $this->reflectArgumentToNode($param, $node);
            }
        }

        $classNode->addMethod($node);
    }

    private function reflectArgumentToNode(ReflectionParameter $parameter, Node\MethodNode $methodNode)
    {
        $name = $parameter->getName() == '...' ? '__dot_dot_dot__' : $parameter->getName();
        $node = new Node\ArgumentNode($name);

        $node->setTypeHint($this->getTypeHint($parameter));

        if ($this->isVariadic($parameter)) {
            $node->setAsVariadic();
        }

        if ($this->hasDefaultValue($parameter)) {
            $node->setDefault($this->getDefaultValue($parameter));
        }

        if ($parameter->isPassedByReference()) {
            $node->setAsPassedByReference();
        }

        $node->setAsNullable($this->isNullable($parameter));

        $methodNode->addArgument($node);
    }

    private function hasDefaultValue(ReflectionParameter $parameter)
    {
        if ($this->isVariadic($parameter)) {
            return false;
        }

        if ($parameter->isDefaultValueAvailable()) {
            return true;
        }

        return $parameter->isOptional() || $this->isNullable($parameter);
    }

    private function getDefaultValue(ReflectionParameter $parameter)
    {
        if (!$parameter->isDefaultValueAvailable()) {
            return null;
        }

        return $parameter->getDefaultValue();
    }

    private function getTypeHint(ReflectionParameter $parameter)
    {
        if (null !== $className = $this->getParameterClassName($parameter)) {
            return $className;
        }

        if (true === $parameter->isArray()) {
            return 'array';
        }

        if (version_compare(PHP_VERSION, '5.4', '>=') && true === $parameter->isCallable()) {
            return 'callable';
        }

        if (version_compare(PHP_VERSION, '7.0', '>=') && true === $parameter->hasType()) {
            return PHP_VERSION_ID >= 70100 ? $parameter->getType()->getName() : (string) $parameter->getType();
        }

        return null;
    }

    private function isVariadic(ReflectionParameter $parameter)
    {
        return PHP_VERSION_ID >= 50600 && $parameter->isVariadic();
    }

    private function isNullable(ReflectionParameter $parameter)
    {
        return $parameter->allowsNull() && null !== $this->getTypeHint($parameter);
    }

    private function getParameterClassName(ReflectionParameter $parameter)
    {
        try {
            return $parameter->getClass() ? $parameter->getClass()->getName() : null;
        } catch (\ReflectionException $e) {
            preg_match('/\[\s\<\w+?>\s([\w,\\\]+)/s', $parameter, $matches);

            return isset($matches[1]) ? $matches[1] : null;
        }
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\Generator\Node;

use Prophecy\Doubler\Generator\TypeHintReference;
use Prophecy\Exception\InvalidArgumentException;

/**
 * Method node.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class MethodNode
{
    private $name;
    private $code;
    private $visibility = 'public';
    private $static = false;
    private $returnsReference = false;
    private $returnType;
    private $nullableReturnType = false;

    /**
     * @var ArgumentNode[]
     */
    private $arguments = array();

    /**
     * @var TypeHintReference
     */
    private $typeHintReference;

    /**
     * @param string $name
     * @param string $code
     */
    public function __construct($name, $code = null, TypeHintReference $typeHintReference = null)
    {
        $this->name = $name;
        $this->code = $code;
        $this->typeHintReference = $typeHintReference ?: new TypeHintReference();
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param string $visibility
     */
    public function setVisibility($visibility)
    {
        $visibility = strtolower($visibility);

        if (!in_array($visibility, array('public', 'private', 'protected'))) {
            throw new InvalidArgumentException(sprintf(
                '`%s` method visibility is not supported.', $visibility
            ));
        }

        $this->visibility = $visibility;
    }

    public function isStatic()
    {
        return $this->static;
    }

    public function setStatic($static = true)
    {
        $this->static = (bool) $static;
    }

    public function returnsReference()
    {
        return $this->returnsReference;
    }

    public function setReturnsReference()
    {
        $this->returnsReference = true;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addArgument(ArgumentNode $argument)
    {
        $this->arguments[] = $argument;
    }

    /**
     * @return ArgumentNode[]
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    public function hasReturnType()
    {
        return null !== $this->returnType;
    }

    /**
     * @param string $type
     */
    public function setReturnType($type = null)
    {
        if ($type === '' || $type === null) {
            $this->returnType = null;
            return;
        }
        $typeMap = array(
            'double' => 'float',
            'real' => 'float',
            'boolean' => 'bool',
            'integer' => 'int',
        );
        if (isset($typeMap[$type])) {
            $type = $typeMap[$type];
        }
        $this->returnType = $this->typeHintReference->isBuiltInReturnTypeHint($type) ?
            $type :
            '\\' . ltrim($type, '\\');
    }

    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * @param bool $bool
     */
    public function setNullableReturnType($bool = true)
    {
        $this->nullableReturnType = (bool) $bool;
    }

    /**
     * @return bool
     */
    public function hasNullableReturnType()
    {
        return $this->nullableReturnType;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        if ($this->returnsReference)
        {
            return "throw new \Prophecy\Exception\Doubler\ReturnByReferenceException('Returning by reference not supported', get_class(\$this), '{$this->name}');";
        }

        return (string) $this->code;
    }

    public function useParentCode()
    {
        $this->code = sprintf(
            'return parent::%s(%s);', $this->getName(), implode(', ',
                array_map(array($this, 'generateArgument'), $this->arguments)
            )
        );
    }

    private function generateArgument(ArgumentNode $arg)
    {
        $argument = '$'.$arg->getName();

        if ($arg->isVariadic()) {
            $argument = '...'.$argument;
        }

        return $argument;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\Generator\Node;

/**
 * Argument node.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ArgumentNode
{
    private $name;
    private $typeHint;
    private $default;
    private $optional    = false;
    private $byReference = false;
    private $isVariadic  = false;
    private $isNullable  = false;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTypeHint()
    {
        return $this->typeHint;
    }

    public function setTypeHint($typeHint = null)
    {
        $this->typeHint = $typeHint;
    }

    public function hasDefault()
    {
        return $this->isOptional() && !$this->isVariadic();
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setDefault($default = null)
    {
        $this->optional = true;
        $this->default  = $default;
    }

    public function isOptional()
    {
        return $this->optional;
    }

    public function setAsPassedByReference($byReference = true)
    {
        $this->byReference = $byReference;
    }

    public function isPassedByReference()
    {
        return $this->byReference;
    }

    public function setAsVariadic($isVariadic = true)
    {
        $this->isVariadic = $isVariadic;
    }

    public function isVariadic()
    {
        return $this->isVariadic;
    }

    public function isNullable()
    {
        return $this->isNullable;
    }

    public function setAsNullable($isNullable = true)
    {
        $this->isNullable = $isNullable;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\Generator\Node;

use Prophecy\Exception\Doubler\MethodNotExtendableException;
use Prophecy\Exception\InvalidArgumentException;

/**
 * Class node.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ClassNode
{
    private $parentClass = 'stdClass';
    private $interfaces  = array();
    private $properties  = array();
    private $unextendableMethods = array();

    /**
     * @var MethodNode[]
     */
    private $methods     = array();

    public function getParentClass()
    {
        return $this->parentClass;
    }

    /**
     * @param string $class
     */
    public function setParentClass($class)
    {
        $this->parentClass = $class ?: 'stdClass';
    }

    /**
     * @return string[]
     */
    public function getInterfaces()
    {
        return $this->interfaces;
    }

    /**
     * @param string $interface
     */
    public function addInterface($interface)
    {
        if ($this->hasInterface($interface)) {
            return;
        }

        array_unshift($this->interfaces, $interface);
    }

    /**
     * @param string $interface
     *
     * @return bool
     */
    public function hasInterface($interface)
    {
        return in_array($interface, $this->interfaces);
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function addProperty($name, $visibility = 'public')
    {
        $visibility = strtolower($visibility);

        if (!in_array($visibility, array('public', 'private', 'protected'))) {
            throw new InvalidArgumentException(sprintf(
                '`%s` property visibility is not supported.', $visibility
            ));
        }

        $this->properties[$name] = $visibility;
    }

    /**
     * @return MethodNode[]
     */
    public function getMethods()
    {
        return $this->methods;
    }

    public function addMethod(MethodNode $method, $force = false)
    {
        if (!$this->isExtendable($method->getName())){
            $message = sprintf(
                'Method `%s` is not extendable, so can not be added.', $method->getName()
            );
            throw new MethodNotExtendableException($message, $this->getParentClass(), $method->getName());
        }

        if ($force || !isset($this->methods[$method->getName()])) {
            $this->methods[$method->getName()] = $method;
        }
    }

    public function removeMethod($name)
    {
        unset($this->methods[$name]);
    }

    /**
     * @param string $name
     *
     * @return MethodNode|null
     */
    public function getMethod($name)
    {
        return $this->hasMethod($name) ? $this->methods[$name] : null;
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasMethod($name)
    {
        return isset($this->methods[$name]);
    }

    /**
     * @return string[]
     */
    public function getUnextendableMethods()
    {
        return $this->unextendableMethods;
    }

    /**
     * @param string $unextendableMethod
     */
    public function addUnextendableMethod($unextendableMethod)
    {
        if (!$this->isExtendable($unextendableMethod)){
            return;
        }
        $this->unextendableMethods[] = $unextendableMethod;
    }

    /**
     * @param string $method
     * @return bool
     */
    public function isExtendable($method)
    {
        return !in_array($method, $this->unextendableMethods);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\Generator;

use Prophecy\Exception\Doubler\ClassCreatorException;

/**
 * Class creator.
 * Creates specific class in current environment.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ClassCreator
{
    private $generator;

    /**
     * Initializes creator.
     *
     * @param ClassCodeGenerator $generator
     */
    public function __construct(ClassCodeGenerator $generator = null)
    {
        $this->generator = $generator ?: new ClassCodeGenerator;
    }

    /**
     * Creates class.
     *
     * @param string         $classname
     * @param Node\ClassNode $class
     *
     * @return mixed
     *
     * @throws \Prophecy\Exception\Doubler\ClassCreatorException
     */
    public function create($classname, Node\ClassNode $class)
    {
        $code = $this->generator->generate($classname, $class);
        $return = eval($code);

        if (!class_exists($classname, false)) {
            if (count($class->getInterfaces())) {
                throw new ClassCreatorException(sprintf(
                    'Could not double `%s` and implement interfaces: [%s].',
                    $class->getParentClass(), implode(', ', $class->getInterfaces())
                ), $class);
            }

            throw new ClassCreatorException(
                sprintf('Could not double `%s`.', $class->getParentClass()),
                $class
            );
        }

        return $return;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\Generator;

/**
 * Reflection interface.
 * All reflected classes implement this interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface ReflectionInterface
{
}
<?php

namespace Prophecy\Doubler\Generator;

/**
 * Tells whether a keyword refers to a class or to a built-in type for the
 * current version of php
 */
final class TypeHintReference
{
    public function isBuiltInParamTypeHint($type)
    {
        switch ($type) {
            case 'self':
            case 'array':
                return true;

            case 'callable':
                return PHP_VERSION_ID >= 50400;

            case 'bool':
            case 'float':
            case 'int':
            case 'string':
                return PHP_VERSION_ID >= 70000;

            case 'iterable':
                return PHP_VERSION_ID >= 70100;

            case 'object':
                return PHP_VERSION_ID >= 70200;

            default:
                return false;
        }
    }

    public function isBuiltInReturnTypeHint($type)
    {
        if ($type === 'void') {
            return PHP_VERSION_ID >= 70100;
        }

        return $this->isBuiltInParamTypeHint($type);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;
use Prophecy\Doubler\Generator\Node\MethodNode;

/**
 * SplFileInfo patch.
 * Makes SplFileInfo and derivative classes usable with Prophecy.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class SplFileInfoPatch implements ClassPatchInterface
{
    /**
     * Supports everything that extends SplFileInfo.
     *
     * @param ClassNode $node
     *
     * @return bool
     */
    public function supports(ClassNode $node)
    {
        if (null === $node->getParentClass()) {
            return false;
        }
        return 'SplFileInfo' === $node->getParentClass()
            || is_subclass_of($node->getParentClass(), 'SplFileInfo')
        ;
    }

    /**
     * Updated constructor code to call parent one with dummy file argument.
     *
     * @param ClassNode $node
     */
    public function apply(ClassNode $node)
    {
        if ($node->hasMethod('__construct')) {
            $constructor = $node->getMethod('__construct');
        } else {
            $constructor = new MethodNode('__construct');
            $node->addMethod($constructor);
        }

        if ($this->nodeIsDirectoryIterator($node)) {
            $constructor->setCode('return parent::__construct("' . __DIR__ . '");');

            return;
        }

        if ($this->nodeIsSplFileObject($node)) {
            $filePath = str_replace('\\','\\\\',__FILE__);
            $constructor->setCode('return parent::__construct("' . $filePath .'");');

            return;
        }

        if ($this->nodeIsSymfonySplFileInfo($node)) {
            $filePath = str_replace('\\','\\\\',__FILE__);
            $constructor->setCode('return parent::__construct("' . $filePath .'", "", "");');

            return;
        }

        $constructor->useParentCode();
    }

    /**
     * Returns patch priority, which determines when patch will be applied.
     *
     * @return int Priority number (higher - earlier)
     */
    public function getPriority()
    {
        return 50;
    }

    /**
     * @param ClassNode $node
     * @return boolean
     */
    private function nodeIsDirectoryIterator(ClassNode $node)
    {
        $parent = $node->getParentClass();

        return 'DirectoryIterator' === $parent
            || is_subclass_of($parent, 'DirectoryIterator');
    }

    /**
     * @param ClassNode $node
     * @return boolean
     */
    private function nodeIsSplFileObject(ClassNode $node)
    {
        $parent = $node->getParentClass();

        return 'SplFileObject' === $parent
            || is_subclass_of($parent, 'SplFileObject');
    }

    /**
     * @param ClassNode $node
     * @return boolean
     */
    private function nodeIsSymfonySplFileInfo(ClassNode $node)
    {
        $parent = $node->getParentClass();

        return 'Symfony\\Component\\Finder\\SplFileInfo' === $parent;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;

/**
 * Class patch interface.
 * Class patches extend doubles functionality or help
 * Prophecy to avoid some internal PHP bugs.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface ClassPatchInterface
{
    /**
     * Checks if patch supports specific class node.
     *
     * @param ClassNode $node
     *
     * @return bool
     */
    public function supports(ClassNode $node);

    /**
     * Applies patch to the specific class node.
     *
     * @param ClassNode $node
     * @return void
     */
    public function apply(ClassNode $node);

    /**
     * Returns patch priority, which determines when patch will be applied.
     *
     * @return int Priority number (higher - earlier)
     */
    public function getPriority();
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;
use Prophecy\Doubler\Generator\Node\MethodNode;

/**
 * Traversable interface patch.
 * Forces classes that implement interfaces, that extend Traversable to also implement Iterator.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class TraversablePatch implements ClassPatchInterface
{
    /**
     * Supports nodetree, that implement Traversable, but not Iterator or IteratorAggregate.
     *
     * @param ClassNode $node
     *
     * @return bool
     */
    public function supports(ClassNode $node)
    {
        if (in_array('Iterator', $node->getInterfaces())) {
            return false;
        }
        if (in_array('IteratorAggregate', $node->getInterfaces())) {
            return false;
        }

        foreach ($node->getInterfaces() as $interface) {
            if ('Traversable' !== $interface && !is_subclass_of($interface, 'Traversable')) {
                continue;
            }
            if ('Iterator' === $interface || is_subclass_of($interface, 'Iterator')) {
                continue;
            }
            if ('IteratorAggregate' === $interface || is_subclass_of($interface, 'IteratorAggregate')) {
                continue;
            }

            return true;
        }

        return false;
    }

    /**
     * Forces class to implement Iterator interface.
     *
     * @param ClassNode $node
     */
    public function apply(ClassNode $node)
    {
        $node->addInterface('Iterator');

        $node->addMethod(new MethodNode('current'));
        $node->addMethod(new MethodNode('key'));
        $node->addMethod(new MethodNode('next'));
        $node->addMethod(new MethodNode('rewind'));
        $node->addMethod(new MethodNode('valid'));
    }

    /**
     * Returns patch priority, which determines when patch will be applied.
     *
     * @return int Priority number (higher - earlier)
     */
    public function getPriority()
    {
        return 100;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;
use Prophecy\Doubler\Generator\Node\MethodNode;

/**
 * Disable constructor.
 * Makes all constructor arguments optional.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class DisableConstructorPatch implements ClassPatchInterface
{
    /**
     * Checks if class has `__construct` method.
     *
     * @param ClassNode $node
     *
     * @return bool
     */
    public function supports(ClassNode $node)
    {
        return true;
    }

    /**
     * Makes all class constructor arguments optional.
     *
     * @param ClassNode $node
     */
    public function apply(ClassNode $node)
    {
        if (!$node->isExtendable('__construct')) {
            return;
        }

        if (!$node->hasMethod('__construct')) {
            $node->addMethod(new MethodNode('__construct', ''));

            return;
        }

        $constructor = $node->getMethod('__construct');
        foreach ($constructor->getArguments() as $argument) {
            $argument->setDefault(null);
        }

        $constructor->setCode(<<<PHP
if (0 < func_num_args()) {
    call_user_func_array(array('parent', '__construct'), func_get_args());
}
PHP
        );
    }

    /**
     * Returns patch priority, which determines when patch will be applied.
     *
     * @return int Priority number (higher - earlier)
     */
    public function getPriority()
    {
        return 100;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;

/**
 * ReflectionClass::newInstance patch.
 * Makes first argument of newInstance optional, since it works but signature is misleading
 *
 * @author Florian Klein <florian.klein@free.fr>
 */
class ReflectionClassNewInstancePatch implements ClassPatchInterface
{
    /**
     * Supports ReflectionClass
     *
     * @param ClassNode $node
     *
     * @return bool
     */
    public function supports(ClassNode $node)
    {
        return 'ReflectionClass' === $node->getParentClass();
    }

    /**
     * Updates newInstance's first argument to make it optional
     *
     * @param ClassNode $node
     */
    public function apply(ClassNode $node)
    {
        foreach ($node->getMethod('newInstance')->getArguments() as $argument) {
            $argument->setDefault(null);
        }
    }

    /**
     * Returns patch priority, which determines when patch will be applied.
     *
     * @return int Priority number (higher = earlier)
     */
    public function getPriority()
    {
        return 50;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;

/**
 * Exception patch for HHVM to remove the stubs from special methods
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class HhvmExceptionPatch implements ClassPatchInterface
{
    /**
     * Supports exceptions on HHVM.
     *
     * @param ClassNode $node
     *
     * @return bool
     */
    public function supports(ClassNode $node)
    {
        if (!defined('HHVM_VERSION')) {
            return false;
        }

        return 'Exception' === $node->getParentClass() || is_subclass_of($node->getParentClass(), 'Exception');
    }

    /**
     * Removes special exception static methods from the doubled methods.
     *
     * @param ClassNode $node
     *
     * @return void
     */
    public function apply(ClassNode $node)
    {
        if ($node->hasMethod('setTraceOptions')) {
            $node->getMethod('setTraceOptions')->useParentCode();
        }
        if ($node->hasMethod('getTraceOptions')) {
            $node->getMethod('getTraceOptions')->useParentCode();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return -50;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;

/**
 * Remove method functionality from the double which will clash with php keywords.
 *
 * @author Milan Magudia <milan@magudia.com>
 */
class KeywordPatch implements ClassPatchInterface
{
    /**
     * Support any class
     *
     * @param ClassNode $node
     *
     * @return boolean
     */
    public function supports(ClassNode $node)
    {
        return true;
    }

    /**
     * Remove methods that clash with php keywords
     *
     * @param ClassNode $node
     */
    public function apply(ClassNode $node)
    {
        $methodNames = array_keys($node->getMethods());
        $methodsToRemove = array_intersect($methodNames, $this->getKeywords());
        foreach ($methodsToRemove as $methodName) {
            $node->removeMethod($methodName);
        }
    }

    /**
     * Returns patch priority, which determines when patch will be applied.
     *
     * @return int Priority number (higher - earlier)
     */
    public function getPriority()
    {
        return 49;
    }

    /**
     * Returns array of php keywords.
     *
     * @return array
     */
    private function getKeywords()
    {
        if (\PHP_VERSION_ID >= 70000) {
            return array('__halt_compiler');
        }

        return array(
            '__halt_compiler',
            'abstract',
            'and',
            'array',
            'as',
            'break',
            'callable',
            'case',
            'catch',
            'class',
            'clone',
            'const',
            'continue',
            'declare',
            'default',
            'die',
            'do',
            'echo',
            'else',
            'elseif',
            'empty',
            'enddeclare',
            'endfor',
            'endforeach',
            'endif',
            'endswitch',
            'endwhile',
            'eval',
            'exit',
            'extends',
            'final',
            'finally',
            'for',
            'foreach',
            'function',
            'global',
            'goto',
            'if',
            'implements',
            'include',
            'include_once',
            'instanceof',
            'insteadof',
            'interface',
            'isset',
            'list',
            'namespace',
            'new',
            'or',
            'print',
            'private',
            'protected',
            'public',
            'require',
            'require_once',
            'return',
            'static',
            'switch',
            'throw',
            'trait',
            'try',
            'unset',
            'use',
            'var',
            'while',
            'xor',
            'yield',
        );
    }
}
<?php

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;
use Prophecy\Exception\Doubler\ClassCreatorException;

class ThrowablePatch implements ClassPatchInterface
{
    /**
     * Checks if patch supports specific class node.
     *
     * @param ClassNode $node
     * @return bool
     */
    public function supports(ClassNode $node)
    {
        return $this->implementsAThrowableInterface($node) && $this->doesNotExtendAThrowableClass($node);
    }

    /**
     * @param ClassNode $node
     * @return bool
     */
    private function implementsAThrowableInterface(ClassNode $node)
    {
        foreach ($node->getInterfaces() as $type) {
            if (is_a($type, 'Throwable', true)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param ClassNode $node
     * @return bool
     */
    private function doesNotExtendAThrowableClass(ClassNode $node)
    {
        return !is_a($node->getParentClass(), 'Throwable', true);
    }

    /**
     * Applies patch to the specific class node.
     *
     * @param ClassNode $node
     *
     * @return void
     */
    public function apply(ClassNode $node)
    {
        $this->checkItCanBeDoubled($node);
        $this->setParentClassToException($node);
    }

    private function checkItCanBeDoubled(ClassNode $node)
    {
        $className = $node->getParentClass();
        if ($className !== 'stdClass') {
            throw new ClassCreatorException(
                sprintf(
                    'Cannot double concrete class %s as well as implement Traversable',
                    $className
                ),
                $node
            );
        }
    }

    private function setParentClassToException(ClassNode $node)
    {
        $node->setParentClass('Exception');

        $node->removeMethod('getMessage');
        $node->removeMethod('getCode');
        $node->removeMethod('getFile');
        $node->removeMethod('getLine');
        $node->removeMethod('getTrace');
        $node->removeMethod('getPrevious');
        $node->removeMethod('getNext');
        $node->removeMethod('getTraceAsString');
    }

    /**
     * Returns patch priority, which determines when patch will be applied.
     *
     * @return int Priority number (higher - earlier)
     */
    public function getPriority()
    {
        return 100;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;
use Prophecy\Doubler\Generator\Node\MethodNode;
use Prophecy\PhpDocumentor\ClassAndInterfaceTagRetriever;
use Prophecy\PhpDocumentor\MethodTagRetrieverInterface;

/**
 * Discover Magical API using "@method" PHPDoc format.
 *
 * @author Thomas Tourlourat <thomas@tourlourat.com>
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class MagicCallPatch implements ClassPatchInterface
{
    private $tagRetriever;

    public function __construct(MethodTagRetrieverInterface $tagRetriever = null)
    {
        $this->tagRetriever = null === $tagRetriever ? new ClassAndInterfaceTagRetriever() : $tagRetriever;
    }

    /**
     * Support any class
     *
     * @param ClassNode $node
     *
     * @return boolean
     */
    public function supports(ClassNode $node)
    {
        return true;
    }

    /**
     * Discover Magical API
     *
     * @param ClassNode $node
     */
    public function apply(ClassNode $node)
    {
        $types = array_filter($node->getInterfaces(), function ($interface) {
            return 0 !== strpos($interface, 'Prophecy\\');
        });
        $types[] = $node->getParentClass();

        foreach ($types as $type) {
            $reflectionClass = new \ReflectionClass($type);

            while ($reflectionClass) {
                $tagList = $this->tagRetriever->getTagList($reflectionClass);

                foreach ($tagList as $tag) {
                    $methodName = $tag->getMethodName();

                    if (empty($methodName)) {
                        continue;
                    }

                    if (!$reflectionClass->hasMethod($methodName)) {
                        $methodNode = new MethodNode($methodName);
                        $methodNode->setStatic($tag->isStatic());
                        $node->addMethod($methodNode);
                    }
                }

                $reflectionClass = $reflectionClass->getParentClass();
            }
        }
    }

    /**
     * Returns patch priority, which determines when patch will be applied.
     *
     * @return integer Priority number (higher - earlier)
     */
    public function getPriority()
    {
        return 50;
    }
}

<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Doubler\ClassPatch;

use Prophecy\Doubler\Generator\Node\ClassNode;
use Prophecy\Doubler\Generator\Node\MethodNode;
use Prophecy\Doubler\Generator\Node\ArgumentNode;

/**
 * Add Prophecy functionality to the double.
 * This is a core class patch for Prophecy.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ProphecySubjectPatch implements ClassPatchInterface
{
    /**
     * Always returns true.
     *
     * @param ClassNode $node
     *
     * @return bool
     */
    public function supports(ClassNode $node)
    {
        return true;
    }

    /**
     * Apply Prophecy functionality to class node.
     *
     * @param ClassNode $node
     */
    public function apply(ClassNode $node)
    {
        $node->addInterface('Prophecy\Prophecy\ProphecySubjectInterface');
        $node->addProperty('objectProphecyClosure', 'private');

        foreach ($node->getMethods() as $name => $method) {
            if ('__construct' === strtolower($name)) {
                continue;
            }

            if ($method->getReturnType() === 'void') {
                $method->setCode(
                    '$this->getProphecy()->makeProphecyMethodCall(__FUNCTION__, func_get_args());'
                );
            } else {
                $method->setCode(
                    'return $this->getProphecy()->makeProphecyMethodCall(__FUNCTION__, func_get_args());'
                );
            }
        }

        $prophecySetter = new MethodNode('setProphecy');
        $prophecyArgument = new ArgumentNode('prophecy');
        $prophecyArgument->setTypeHint('Prophecy\Prophecy\ProphecyInterface');
        $prophecySetter->addArgument($prophecyArgument);
        $prophecySetter->setCode('$this->objectProphecyClosure = function () use ($prophecy) { return $prophecy; };');

        $prophecyGetter = new MethodNode('getProphecy');
        $prophecyGetter->setCode('return call_user_func($this->objectProphecyClosure);');

        if ($node->hasMethod('__call')) {
            $__call = $node->getMethod('__call');
        } else {
            $__call = new MethodNode('__call');
            $__call->addArgument(new ArgumentNode('name'));
            $__call->addArgument(new ArgumentNode('arguments'));

            $node->addMethod($__call, true);
        }

        $__call->setCode(<<<PHP
throw new \Prophecy\Exception\Doubler\MethodNotFoundException(
    sprintf('Method `%s::%s()` not found.', get_class(\$this), func_get_arg(0)),
    \$this->getProphecy(), func_get_arg(0)
);
PHP
        );

        $node->addMethod($prophecySetter, true);
        $node->addMethod($prophecyGetter, true);
    }

    /**
     * Returns patch priority, which determines when patch will be applied.
     *
     * @return int Priority number (higher - earlier)
     */
    public function getPriority()
    {
        return 0;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\PhpDocumentor;

use phpDocumentor\Reflection\DocBlock\Tag\MethodTag as LegacyMethodTag;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 *
 * @internal
 */
interface MethodTagRetrieverInterface
{
    /**
     * @param \ReflectionClass $reflectionClass
     *
     * @return LegacyMethodTag[]|Method[]
     */
    public function getTagList(\ReflectionClass $reflectionClass);
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\PhpDocumentor;

use phpDocumentor\Reflection\DocBlock\Tag\MethodTag as LegacyMethodTag;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 *
 * @internal
 */
final class ClassAndInterfaceTagRetriever implements MethodTagRetrieverInterface
{
    private $classRetriever;

    public function __construct(MethodTagRetrieverInterface $classRetriever = null)
    {
        if (null !== $classRetriever) {
            $this->classRetriever = $classRetriever;

            return;
        }

        $this->classRetriever = class_exists('phpDocumentor\Reflection\DocBlockFactory') && class_exists('phpDocumentor\Reflection\Types\ContextFactory')
            ? new ClassTagRetriever()
            : new LegacyClassTagRetriever()
        ;
    }

    /**
     * @param \ReflectionClass $reflectionClass
     *
     * @return LegacyMethodTag[]|Method[]
     */
    public function getTagList(\ReflectionClass $reflectionClass)
    {
        return array_merge(
            $this->classRetriever->getTagList($reflectionClass),
            $this->getInterfacesTagList($reflectionClass)
        );
    }

    /**
     * @param \ReflectionClass $reflectionClass
     *
     * @return LegacyMethodTag[]|Method[]
     */
    private function getInterfacesTagList(\ReflectionClass $reflectionClass)
    {
        $interfaces = $reflectionClass->getInterfaces();
        $tagList = array();

        foreach($interfaces as $interface) {
            $tagList = array_merge($tagList, $this->classRetriever->getTagList($interface));
        }

        return $tagList;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\PhpDocumentor;

use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlock\Tag\MethodTag as LegacyMethodTag;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 *
 * @internal
 */
final class LegacyClassTagRetriever implements MethodTagRetrieverInterface
{
    /**
     * @param \ReflectionClass $reflectionClass
     *
     * @return LegacyMethodTag[]
     */
    public function getTagList(\ReflectionClass $reflectionClass)
    {
        $phpdoc = new DocBlock($reflectionClass->getDocComment());

        return $phpdoc->getTagsByName('method');
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\PhpDocumentor;

use phpDocumentor\Reflection\DocBlock\Tags\Method;
use phpDocumentor\Reflection\DocBlockFactory;
use phpDocumentor\Reflection\Types\ContextFactory;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 *
 * @internal
 */
final class ClassTagRetriever implements MethodTagRetrieverInterface
{
    private $docBlockFactory;
    private $contextFactory;

    public function __construct()
    {
        $this->docBlockFactory = DocBlockFactory::createInstance();
        $this->contextFactory = new ContextFactory();
    }

    /**
     * @param \ReflectionClass $reflectionClass
     *
     * @return Method[]
     */
    public function getTagList(\ReflectionClass $reflectionClass)
    {
        try {
            $phpdoc = $this->docBlockFactory->create(
                $reflectionClass,
                $this->contextFactory->createFromReflector($reflectionClass)
            );

            return $phpdoc->getTagsByName('method');
        } catch (\InvalidArgumentException $e) {
            return array();
        }
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Call;

use Prophecy\Exception\Prophecy\ObjectProphecyException;
use Prophecy\Prophecy\ObjectProphecy;

class UnexpectedCallException extends ObjectProphecyException
{
    private $methodName;
    private $arguments;

    public function __construct($message, ObjectProphecy $objectProphecy,
                                $methodName, array $arguments)
    {
        parent::__construct($message, $objectProphecy);

        $this->methodName = $methodName;
        $this->arguments = $arguments;
    }

    public function getMethodName()
    {
        return $this->methodName;
    }

    public function getArguments()
    {
        return $this->arguments;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prophecy;

use Prophecy\Prophecy\MethodProphecy;

class MethodProphecyException extends ObjectProphecyException
{
    private $methodProphecy;

    public function __construct($message, MethodProphecy $methodProphecy)
    {
        parent::__construct($message, $methodProphecy->getObjectProphecy());

        $this->methodProphecy = $methodProphecy;
    }

    /**
     * @return MethodProphecy
     */
    public function getMethodProphecy()
    {
        return $this->methodProphecy;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prophecy;

use Prophecy\Exception\Exception;

interface ProphecyException extends Exception
{
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prophecy;

use Prophecy\Prophecy\ObjectProphecy;

class ObjectProphecyException extends \RuntimeException implements ProphecyException
{
    private $objectProphecy;

    public function __construct($message, ObjectProphecy $objectProphecy)
    {
        parent::__construct($message);

        $this->objectProphecy = $objectProphecy;
    }

    /**
     * @return ObjectProphecy
     */
    public function getObjectProphecy()
    {
        return $this->objectProphecy;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

use Prophecy\Exception\Exception;

interface DoublerException extends Exception
{
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

use RuntimeException;

class DoubleException extends RuntimeException implements DoublerException
{
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

use Prophecy\Doubler\Generator\Node\ClassNode;

class ClassCreatorException extends \RuntimeException implements DoublerException
{
    private $node;

    public function __construct($message, ClassNode $node)
    {
        parent::__construct($message);

        $this->node = $node;
    }

    public function getClassNode()
    {
        return $this->node;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

class ClassNotFoundException extends DoubleException
{
    private $classname;

    /**
     * @param string $message
     * @param string $classname
     */
    public function __construct($message, $classname)
    {
        parent::__construct($message);

        $this->classname = $classname;
    }

    public function getClassname()
    {
        return $this->classname;
    }
}
<?php

    namespace Prophecy\Exception\Doubler;

    class MethodNotExtendableException extends DoubleException
    {
        private $methodName;

        private $className;

        /**
         * @param string $message
         * @param string $className
         * @param string $methodName
         */
        public function __construct($message, $className, $methodName)
        {
            parent::__construct($message);

            $this->methodName = $methodName;
            $this->className = $className;
        }


        /**
         * @return string
         */
        public function getMethodName()
        {
            return $this->methodName;
        }

        /**
         * @return string
         */
        public function getClassName()
        {
            return $this->className;
        }

    }
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

class MethodNotFoundException extends DoubleException
{
    /**
     * @var string|object
     */
    private $classname;

    /**
     * @var string
     */
    private $methodName;

    /**
     * @var array
     */
    private $arguments;

    /**
     * @param string $message
     * @param string|object $classname
     * @param string $methodName
     * @param null|Argument\ArgumentsWildcard|array $arguments
     */
    public function __construct($message, $classname, $methodName, $arguments = null)
    {
        parent::__construct($message);

        $this->classname  = $classname;
        $this->methodName = $methodName;
        $this->arguments = $arguments;
    }

    public function getClassname()
    {
        return $this->classname;
    }

    public function getMethodName()
    {
        return $this->methodName;
    }

    public function getArguments()
    {
        return $this->arguments;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

use ReflectionClass;

class ClassMirrorException extends \RuntimeException implements DoublerException
{
    private $class;

    public function __construct($message, ReflectionClass $class)
    {
        parent::__construct($message);

        $this->class = $class;
    }

    public function getReflectedClass()
    {
        return $this->class;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

class ReturnByReferenceException extends DoubleException
{
    private $classname;
    private $methodName;

    /**
     * @param string $message
     * @param string $classname
     * @param string $methodName
     */
    public function __construct($message, $classname, $methodName)
    {
        parent::__construct($message);

        $this->classname  = $classname;
        $this->methodName = $methodName;
    }

    public function getClassname()
    {
        return $this->classname;
    }

    public function getMethodName()
    {
        return $this->methodName;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

class InterfaceNotFoundException extends ClassNotFoundException
{
    public function getInterfaceName()
    {
        return $this->getClassname();
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception;

/**
 * Core Prophecy exception interface.
 * All Prophecy exceptions implement it.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface Exception
{
    /**
     * @return string
     */
    public function getMessage();
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception;

class InvalidArgumentException extends \InvalidArgumentException implements Exception
{
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prediction;

use Prophecy\Exception\Exception;

interface PredictionException extends Exception
{
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prediction;

use Prophecy\Exception\Prophecy\MethodProphecyException;

class NoCallsException extends MethodProphecyException implements PredictionException
{
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prediction;

use Prophecy\Prophecy\MethodProphecy;

class UnexpectedCallsCountException extends UnexpectedCallsException
{
    private $expectedCount;

    public function __construct($message, MethodProphecy $methodProphecy, $count, array $calls)
    {
        parent::__construct($message, $methodProphecy, $calls);

        $this->expectedCount = intval($count);
    }

    public function getExpectedCount()
    {
        return $this->expectedCount;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prediction;

use RuntimeException;

/**
 * Basic failed prediction exception.
 * Use it for custom prediction failures.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class FailedPredictionException extends RuntimeException implements PredictionException
{
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prediction;

use Prophecy\Prophecy\ObjectProphecy;

class AggregateException extends \RuntimeException implements PredictionException
{
    private $exceptions = array();
    private $objectProphecy;

    public function append(PredictionException $exception)
    {
        $message = $exception->getMessage();
        $message = strtr($message, array("\n" => "\n  "))."\n";
        $message = empty($this->exceptions) ? $message : "\n" . $message;

        $this->message      = rtrim($this->message.$message);
        $this->exceptions[] = $exception;
    }

    /**
     * @return PredictionException[]
     */
    public function getExceptions()
    {
        return $this->exceptions;
    }

    public function setObjectProphecy(ObjectProphecy $objectProphecy)
    {
        $this->objectProphecy = $objectProphecy;
    }

    /**
     * @return ObjectProphecy
     */
    public function getObjectProphecy()
    {
        return $this->objectProphecy;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prediction;

use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Exception\Prophecy\MethodProphecyException;

class UnexpectedCallsException extends MethodProphecyException implements PredictionException
{
    private $calls = array();

    public function __construct($message, MethodProphecy $methodProphecy, array $calls)
    {
        parent::__construct($message, $methodProphecy);

        $this->calls = $calls;
    }

    public function getCalls()
    {
        return $this->calls;
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy;

use Prophecy\Doubler\CachedDoubler;
use Prophecy\Doubler\Doubler;
use Prophecy\Doubler\LazyDouble;
use Prophecy\Doubler\ClassPatch;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\RevealerInterface;
use Prophecy\Prophecy\Revealer;
use Prophecy\Call\CallCenter;
use Prophecy\Util\StringUtil;
use Prophecy\Exception\Prediction\PredictionException;
use Prophecy\Exception\Prediction\AggregateException;

/**
 * Prophet creates prophecies.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class Prophet
{
    private $doubler;
    private $revealer;
    private $util;

    /**
     * @var ObjectProphecy[]
     */
    private $prophecies = array();

    /**
     * Initializes Prophet.
     *
     * @param null|Doubler           $doubler
     * @param null|RevealerInterface $revealer
     * @param null|StringUtil        $util
     */
    public function __construct(
        Doubler $doubler = null,
        RevealerInterface $revealer = null,
        StringUtil $util = null
    ) {
        if (null === $doubler) {
            $doubler = new CachedDoubler();
            $doubler->registerClassPatch(new ClassPatch\SplFileInfoPatch);
            $doubler->registerClassPatch(new ClassPatch\TraversablePatch);
            $doubler->registerClassPatch(new ClassPatch\ThrowablePatch);
            $doubler->registerClassPatch(new ClassPatch\DisableConstructorPatch);
            $doubler->registerClassPatch(new ClassPatch\ProphecySubjectPatch);
            $doubler->registerClassPatch(new ClassPatch\ReflectionClassNewInstancePatch);
            $doubler->registerClassPatch(new ClassPatch\HhvmExceptionPatch());
            $doubler->registerClassPatch(new ClassPatch\MagicCallPatch);
            $doubler->registerClassPatch(new ClassPatch\KeywordPatch);
        }

        $this->doubler  = $doubler;
        $this->revealer = $revealer ?: new Revealer;
        $this->util     = $util ?: new StringUtil;
    }

    /**
     * Creates new object prophecy.
     *
     * @param null|string $classOrInterface Class or interface name
     *
     * @return ObjectProphecy
     */
    public function prophesize($classOrInterface = null)
    {
        $this->prophecies[] = $prophecy = new ObjectProphecy(
            new LazyDouble($this->doubler),
            new CallCenter($this->util),
            $this->revealer
        );

        if ($classOrInterface && class_exists($classOrInterface)) {
            return $prophecy->willExtend($classOrInterface);
        }

        if ($classOrInterface && interface_exists($classOrInterface)) {
            return $prophecy->willImplement($classOrInterface);
        }

        return $prophecy;
    }

    /**
     * Returns all created object prophecies.
     *
     * @return ObjectProphecy[]
     */
    public function getProphecies()
    {
        return $this->prophecies;
    }

    /**
     * Returns Doubler instance assigned to this Prophet.
     *
     * @return Doubler
     */
    public function getDoubler()
    {
        return $this->doubler;
    }

    /**
     * Checks all predictions defined by prophecies of this Prophet.
     *
     * @throws Exception\Prediction\AggregateException If any prediction fails
     */
    public function checkPredictions()
    {
        $exception = new AggregateException("Some predictions failed:\n");
        foreach ($this->prophecies as $prophecy) {
            try {
                $prophecy->checkProphecyMethodsPredictions();
            } catch (PredictionException $e) {
                $exception->append($e);
            }
        }

        if (count($exception->getExceptions())) {
            throw $exception;
        }
    }
}
<?php

namespace Prophecy\Util;

use Prophecy\Prophecy\ProphecyInterface;
use SebastianBergmann\RecursionContext\Context;

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This class is a modification from sebastianbergmann/exporter
 * @see https://github.com/sebastianbergmann/exporter
 */
class ExportUtil
{
    /**
     * Exports a value as a string
     *
     * The output of this method is similar to the output of print_r(), but
     * improved in various aspects:
     *
     *  - NULL is rendered as "null" (instead of "")
     *  - TRUE is rendered as "true" (instead of "1")
     *  - FALSE is rendered as "false" (instead of "")
     *  - Strings are always quoted with single quotes
     *  - Carriage returns and newlines are normalized to \n
     *  - Recursion and repeated rendering is treated properly
     *
     * @param  mixed  $value
     * @param  int    $indentation The indentation level of the 2nd+ line
     * @return string
     */
    public static function export($value, $indentation = 0)
    {
        return self::recursiveExport($value, $indentation);
    }

    /**
     * Converts an object to an array containing all of its private, protected
     * and public properties.
     *
     * @param  mixed $value
     * @return array
     */
    public static function toArray($value)
    {
        if (!is_object($value)) {
            return (array) $value;
        }

        $array = array();

        foreach ((array) $value as $key => $val) {
            // properties are transformed to keys in the following way:
            // private   $property => "\0Classname\0property"
            // protected $property => "\0*\0property"
            // public    $property => "property"
            if (preg_match('/^\0.+\0(.+)$/', $key, $matches)) {
                $key = $matches[1];
            }

            // See https://github.com/php/php-src/commit/5721132
            if ($key === "\0gcdata") {
                continue;
            }

            $array[$key] = $val;
        }

        // Some internal classes like SplObjectStorage don't work with the
        // above (fast) mechanism nor with reflection in Zend.
        // Format the output similarly to print_r() in this case
        if ($value instanceof \SplObjectStorage) {
            // However, the fast method does work in HHVM, and exposes the
            // internal implementation. Hide it again.
            if (property_exists('\SplObjectStorage', '__storage')) {
                unset($array['__storage']);
            } elseif (property_exists('\SplObjectStorage', 'storage')) {
                unset($array['storage']);
            }

            if (property_exists('\SplObjectStorage', '__key')) {
                unset($array['__key']);
            }

            foreach ($value as $key => $val) {
                $array[spl_object_hash($val)] = array(
                    'obj' => $val,
                    'inf' => $value->getInfo(),
                );
            }
        }

        return $array;
    }

    /**
     * Recursive implementation of export
     *
     * @param  mixed                                       $value       The value to export
     * @param  int                                         $indentation The indentation level of the 2nd+ line
     * @param  \SebastianBergmann\RecursionContext\Context $processed   Previously processed objects
     * @return string
     * @see    SebastianBergmann\Exporter\Exporter::export
     */
    protected static function recursiveExport(&$value, $indentation, $processed = null)
    {
        if ($value === null) {
            return 'null';
        }

        if ($value === true) {
            return 'true';
        }

        if ($value === false) {
            return 'false';
        }

        if (is_float($value) && floatval(intval($value)) === $value) {
            return "$value.0";
        }

        if (is_resource($value)) {
            return sprintf(
                'resource(%d) of type (%s)',
                $value,
                get_resource_type($value)
            );
        }

        if (is_string($value)) {
            // Match for most non printable chars somewhat taking multibyte chars into account
            if (preg_match('/[^\x09-\x0d\x20-\xff]/', $value)) {
                return 'Binary String: 0x' . bin2hex($value);
            }

            return "'" .
            str_replace(array("\r\n", "\n\r", "\r"), array("\n", "\n", "\n"), $value) .
            "'";
        }

        $whitespace = str_repeat(' ', 4 * $indentation);

        if (!$processed) {
            $processed = new Context;
        }

        if (is_array($value)) {
            if (($key = $processed->contains($value)) !== false) {
                return 'Array &' . $key;
            }

            $array  = $value;
            $key    = $processed->add($value);
            $values = '';

            if (count($array) > 0) {
                foreach ($array as $k => $v) {
                    $values .= sprintf(
                        '%s    %s => %s' . "\n",
                        $whitespace,
                        self::recursiveExport($k, $indentation),
                        self::recursiveExport($value[$k], $indentation + 1, $processed)
                    );
                }

                $values = "\n" . $values . $whitespace;
            }

            return sprintf('Array &%s (%s)', $key, $values);
        }

        if (is_object($value)) {
            $class = get_class($value);

            if ($hash = $processed->contains($value)) {
                return sprintf('%s:%s Object', $class, $hash);
            }

            $hash   = $processed->add($value);
            $values = '';
            $array  = self::toArray($value);

            if (count($array) > 0) {
                foreach ($array as $k => $v) {
                    $values .= sprintf(
                        '%s    %s => %s' . "\n",
                        $whitespace,
                        self::recursiveExport($k, $indentation),
                        self::recursiveExport($v, $indentation + 1, $processed)
                    );
                }

                $values = "\n" . $values . $whitespace;
            }

            return sprintf('%s:%s Object (%s)', $class, $hash, $values);
        }

        return var_export($value, true);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Util;

use Prophecy\Call\Call;

/**
 * String utility.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class StringUtil
{
    private $verbose;

    /**
     * @param bool $verbose
     */
    public function __construct($verbose = true)
    {
        $this->verbose = $verbose;
    }

    /**
     * Stringifies any provided value.
     *
     * @param mixed   $value
     * @param boolean $exportObject
     *
     * @return string
     */
    public function stringify($value, $exportObject = true)
    {
        if (is_array($value)) {
            if (range(0, count($value) - 1) === array_keys($value)) {
                return '['.implode(', ', array_map(array($this, __FUNCTION__), $value)).']';
            }

            $stringify = array($this, __FUNCTION__);

            return '['.implode(', ', array_map(function ($item, $key) use ($stringify) {
                return (is_integer($key) ? $key : '"'.$key.'"').
                    ' => '.call_user_func($stringify, $item);
            }, $value, array_keys($value))).']';
        }
        if (is_resource($value)) {
            return get_resource_type($value).':'.$value;
        }
        if (is_object($value)) {
            return $exportObject ? ExportUtil::export($value) : sprintf('%s:%s', get_class($value), spl_object_hash($value));
        }
        if (true === $value || false === $value) {
            return $value ? 'true' : 'false';
        }
        if (is_string($value)) {
            $str = sprintf('"%s"', str_replace("\n", '\\n', $value));

            if (!$this->verbose && 50 <= strlen($str)) {
                return substr($str, 0, 50).'"...';
            }

            return $str;
        }
        if (null === $value) {
            return 'null';
        }

        return (string) $value;
    }

    /**
     * Stringifies provided array of calls.
     *
     * @param Call[] $calls Array of Call instances
     *
     * @return string
     */
    public function stringifyCalls(array $calls)
    {
        $self = $this;

        return implode(PHP_EOL, array_map(function (Call $call) use ($self) {
            return sprintf('  - %s(%s) @ %s',
                $call->getMethodName(),
                implode(', ', array_map(array($self, 'stringify'), $call->getArguments())),
                str_replace(GETCWD().DIRECTORY_SEPARATOR, '', $call->getCallPlace())
            );
        }, $calls));
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy;

use Prophecy\Argument\Token;

/**
 * Argument tokens shortcuts.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class Argument
{
    /**
     * Checks that argument is exact value or object.
     *
     * @param mixed $value
     *
     * @return Token\ExactValueToken
     */
    public static function exact($value)
    {
        return new Token\ExactValueToken($value);
    }

    /**
     * Checks that argument is of specific type or instance of specific class.
     *
     * @param string $type Type name (`integer`, `string`) or full class name
     *
     * @return Token\TypeToken
     */
    public static function type($type)
    {
        return new Token\TypeToken($type);
    }

    /**
     * Checks that argument object has specific state.
     *
     * @param string $methodName
     * @param mixed  $value
     *
     * @return Token\ObjectStateToken
     */
    public static function which($methodName, $value)
    {
        return new Token\ObjectStateToken($methodName, $value);
    }

    /**
     * Checks that argument matches provided callback.
     *
     * @param callable $callback
     *
     * @return Token\CallbackToken
     */
    public static function that($callback)
    {
        return new Token\CallbackToken($callback);
    }

    /**
     * Matches any single value.
     *
     * @return Token\AnyValueToken
     */
    public static function any()
    {
        return new Token\AnyValueToken;
    }

    /**
     * Matches all values to the rest of the signature.
     *
     * @return Token\AnyValuesToken
     */
    public static function cetera()
    {
        return new Token\AnyValuesToken;
    }

    /**
     * Checks that argument matches all tokens
     *
     * @param mixed ... a list of tokens
     *
     * @return Token\LogicalAndToken
     */
    public static function allOf()
    {
        return new Token\LogicalAndToken(func_get_args());
    }

    /**
     * Checks that argument array or countable object has exact number of elements.
     *
     * @param integer $value array elements count
     *
     * @return Token\ArrayCountToken
     */
    public static function size($value)
    {
        return new Token\ArrayCountToken($value);
    }

    /**
     * Checks that argument array contains (key, value) pair
     *
     * @param mixed $key   exact value or token
     * @param mixed $value exact value or token
     *
     * @return Token\ArrayEntryToken
     */
    public static function withEntry($key, $value)
    {
        return new Token\ArrayEntryToken($key, $value);
    }

    /**
     * Checks that arguments array entries all match value
     *
     * @param mixed $value
     *
     * @return Token\ArrayEveryEntryToken
     */
    public static function withEveryEntry($value)
    {
        return new Token\ArrayEveryEntryToken($value);
    }

    /**
     * Checks that argument array contains value
     *
     * @param mixed $value
     *
     * @return Token\ArrayEntryToken
     */
    public static function containing($value)
    {
        return new Token\ArrayEntryToken(self::any(), $value);
    }

    /**
     * Checks that argument array has key
     *
     * @param mixed $key exact value or token
     *
     * @return Token\ArrayEntryToken
     */
    public static function withKey($key)
    {
        return new Token\ArrayEntryToken($key, self::any());
    }

    /**
     * Checks that argument does not match the value|token.
     *
     * @param mixed $value either exact value or argument token
     *
     * @return Token\LogicalNotToken
     */
    public static function not($value)
    {
        return new Token\LogicalNotToken($value);
    }

    /**
     * @param string $value
     *
     * @return Token\StringContainsToken
     */
    public static function containingString($value)
    {
        return new Token\StringContainsToken($value);
    }

    /**
     * Checks that argument is identical value.
     *
     * @param mixed $value
     *
     * @return Token\IdenticalValueToken
     */
    public static function is($value)
    {
        return new Token\IdenticalValueToken($value);
    }

    /**
     * Check that argument is same value when rounding to the
     * given precision.
     *
     * @param float $value
     * @param float $precision
     *
     * @return Token\ApproximateValueToken
     */
    public static function approximate($value, $precision = 0)
    {
        return new Token\ApproximateValueToken($value, $precision);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prediction;

use Prophecy\Call\Call;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Util\StringUtil;
use Prophecy\Exception\Prediction\UnexpectedCallsException;

/**
 * No calls prediction.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class NoCallsPrediction implements PredictionInterface
{
    private $util;

    /**
     * Initializes prediction.
     *
     * @param null|StringUtil $util
     */
    public function __construct(StringUtil $util = null)
    {
        $this->util = $util ?: new StringUtil;
    }

    /**
     * Tests that there were no calls made.
     *
     * @param Call[]         $calls
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @throws \Prophecy\Exception\Prediction\UnexpectedCallsException
     */
    public function check(array $calls, ObjectProphecy $object, MethodProphecy $method)
    {
        if (!count($calls)) {
            return;
        }

        $verb = count($calls) === 1 ? 'was' : 'were';

        throw new UnexpectedCallsException(sprintf(
            "No calls expected that match:\n".
            "  %s->%s(%s)\n".
            "but %d %s made:\n%s",
            get_class($object->reveal()),
            $method->getMethodName(),
            $method->getArgumentsWildcard(),
            count($calls),
            $verb,
            $this->util->stringifyCalls($calls)
        ), $method, $calls);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prediction;

use Prophecy\Call\Call;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Argument\ArgumentsWildcard;
use Prophecy\Argument\Token\AnyValuesToken;
use Prophecy\Util\StringUtil;
use Prophecy\Exception\Prediction\UnexpectedCallsCountException;

/**
 * Prediction interface.
 * Predictions are logical test blocks, tied to `should...` keyword.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class CallTimesPrediction implements PredictionInterface
{
    private $times;
    private $util;

    /**
     * Initializes prediction.
     *
     * @param int        $times
     * @param StringUtil $util
     */
    public function __construct($times, StringUtil $util = null)
    {
        $this->times = intval($times);
        $this->util  = $util ?: new StringUtil;
    }

    /**
     * Tests that there was exact amount of calls made.
     *
     * @param Call[]         $calls
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @throws \Prophecy\Exception\Prediction\UnexpectedCallsCountException
     */
    public function check(array $calls, ObjectProphecy $object, MethodProphecy $method)
    {
        if ($this->times == count($calls)) {
            return;
        }

        $methodCalls = $object->findProphecyMethodCalls(
            $method->getMethodName(),
            new ArgumentsWildcard(array(new AnyValuesToken))
        );

        if (count($calls)) {
            $message = sprintf(
                "Expected exactly %d calls that match:\n".
                "  %s->%s(%s)\n".
                "but %d were made:\n%s",

                $this->times,
                get_class($object->reveal()),
                $method->getMethodName(),
                $method->getArgumentsWildcard(),
                count($calls),
                $this->util->stringifyCalls($calls)
            );
        } elseif (count($methodCalls)) {
            $message = sprintf(
                "Expected exactly %d calls that match:\n".
                "  %s->%s(%s)\n".
                "but none were made.\n".
                "Recorded `%s(...)` calls:\n%s",

                $this->times,
                get_class($object->reveal()),
                $method->getMethodName(),
                $method->getArgumentsWildcard(),
                $method->getMethodName(),
                $this->util->stringifyCalls($methodCalls)
            );
        } else {
            $message = sprintf(
                "Expected exactly %d calls that match:\n".
                "  %s->%s(%s)\n".
                "but none were made.",

                $this->times,
                get_class($object->reveal()),
                $method->getMethodName(),
                $method->getArgumentsWildcard()
            );
        }

        throw new UnexpectedCallsCountException($message, $method, $this->times, $calls);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prediction;

use Prophecy\Call\Call;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;

/**
 * Prediction interface.
 * Predictions are logical test blocks, tied to `should...` keyword.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface PredictionInterface
{
    /**
     * Tests that double fulfilled prediction.
     *
     * @param Call[]        $calls
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @throws object
     * @return void
     */
    public function check(array $calls, ObjectProphecy $object, MethodProphecy $method);
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prediction;

use Prophecy\Call\Call;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Argument\ArgumentsWildcard;
use Prophecy\Argument\Token\AnyValuesToken;
use Prophecy\Util\StringUtil;
use Prophecy\Exception\Prediction\NoCallsException;

/**
 * Call prediction.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class CallPrediction implements PredictionInterface
{
    private $util;

    /**
     * Initializes prediction.
     *
     * @param StringUtil $util
     */
    public function __construct(StringUtil $util = null)
    {
        $this->util = $util ?: new StringUtil;
    }

    /**
     * Tests that there was at least one call.
     *
     * @param Call[]         $calls
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     *
     * @throws \Prophecy\Exception\Prediction\NoCallsException
     */
    public function check(array $calls, ObjectProphecy $object, MethodProphecy $method)
    {
        if (count($calls)) {
            return;
        }

        $methodCalls = $object->findProphecyMethodCalls(
            $method->getMethodName(),
            new ArgumentsWildcard(array(new AnyValuesToken))
        );

        if (count($methodCalls)) {
            throw new NoCallsException(sprintf(
                "No calls have been made that match:\n".
                "  %s->%s(%s)\n".
                "but expected at least one.\n".
                "Recorded `%s(...)` calls:\n%s",

                get_class($object->reveal()),
                $method->getMethodName(),
                $method->getArgumentsWildcard(),
                $method->getMethodName(),
                $this->util->stringifyCalls($methodCalls)
            ), $method);
        }

        throw new NoCallsException(sprintf(
            "No calls have been made that match:\n".
            "  %s->%s(%s)\n".
            "but expected at least one.",

            get_class($object->reveal()),
            $method->getMethodName(),
            $method->getArgumentsWildcard()
        ), $method);
    }
}
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Prediction;

use Prophecy\Call\Call;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Exception\InvalidArgumentException;
use Closure;

/**
 * Callback prediction.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class CallbackPrediction implements PredictionInterface
{
    private $callback;

    /**
     * Initializes callback prediction.
     *
     * @param callable $callback Custom callback
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    public function __construct($callback)
    {
        if (!is_callable($callback)) {
            throw new InvalidArgumentException(sprintf(
                'Callable expected as an argument to CallbackPrediction, but got %s.',
                gettype($callback)
            ));
        }

        $this->callback = $callback;
    }

    /**
     * Executes preset callback.
     *
     * @param Call[]         $calls
     * @param ObjectProphecy $object
     * @param MethodProphecy $method
     */
    public function check(array $calls, ObjectProphecy $object, MethodProphecy $method)
    {
        $callback = $this->callback;

        if ($callback instanceof Closure && method_exists('Closure', 'bind')) {
            $callback = Closure::bind($callback, $object);
        }

        call_user_func($callback, $calls, $object, $method);
    }
}
Copyright (c) 2013 Konstantin Kudryashov <ever.zet@gmail.com>
                   Marcello Duarte <marcello.duarte@gmail.com>

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

use SebastianBergmann\Diff\Differ;
use SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;

/**
 * Thrown when an assertion for string equality failed.
 */
class ComparisonFailure extends \RuntimeException
{
    /**
     * Expected value of the retrieval which does not match $actual.
     *
     * @var mixed
     */
    protected $expected;

    /**
     * Actually retrieved value which does not match $expected.
     *
     * @var mixed
     */
    protected $actual;

    /**
     * The string representation of the expected value
     *
     * @var string
     */
    protected $expectedAsString;

    /**
     * The string representation of the actual value
     *
     * @var string
     */
    protected $actualAsString;

    /**
     * @var bool
     */
    protected $identical;

    /**
     * Optional message which is placed in front of the first line
     * returned by toString().
     *
     * @var string
     */
    protected $message;

    /**
     * Initialises with the expected value and the actual value.
     *
     * @param mixed  $expected         expected value retrieved
     * @param mixed  $actual           actual value retrieved
     * @param string $expectedAsString
     * @param string $actualAsString
     * @param bool   $identical
     * @param string $message          a string which is prefixed on all returned lines
     *                                 in the difference output
     */
    public function __construct($expected, $actual, $expectedAsString, $actualAsString, $identical = false, $message = '')
    {
        $this->expected         = $expected;
        $this->actual           = $actual;
        $this->expectedAsString = $expectedAsString;
        $this->actualAsString   = $actualAsString;
        $this->message          = $message;
    }

    public function getActual()
    {
        return $this->actual;
    }

    public function getExpected()
    {
        return $this->expected;
    }

    /**
     * @return string
     */
    public function getActualAsString()
    {
        return $this->actualAsString;
    }

    /**
     * @return string
     */
    public function getExpectedAsString()
    {
        return $this->expectedAsString;
    }

    /**
     * @return string
     */
    public function getDiff()
    {
        if (!$this->actualAsString && !$this->expectedAsString) {
            return '';
        }

        $differ = new Differ(new UnifiedDiffOutputBuilder("\n--- Expected\n+++ Actual\n"));

        return $differ->diff($this->expectedAsString, $this->actualAsString);
    }

    /**
     * @return string
     */
    public function toString()
    {
        return $this->message . $this->getDiff();
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares arrays for equality.
 */
class ArrayComparator extends Comparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return \is_array($expected) && \is_array($actual);
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     * @param array $processed    List of already processed elements (used to prevent infinite recursion)
     *
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false, array &$processed = [])
    {
        if ($canonicalize) {
            \sort($expected);
            \sort($actual);
        }

        $remaining        = $actual;
        $actualAsString   = "Array (\n";
        $expectedAsString = "Array (\n";
        $equal            = true;

        foreach ($expected as $key => $value) {
            unset($remaining[$key]);

            if (!\array_key_exists($key, $actual)) {
                $expectedAsString .= \sprintf(
                    "    %s => %s\n",
                    $this->exporter->export($key),
                    $this->exporter->shortenedExport($value)
                );

                $equal = false;

                continue;
            }

            try {
                $comparator = $this->factory->getComparatorFor($value, $actual[$key]);
                $comparator->assertEquals($value, $actual[$key], $delta, $canonicalize, $ignoreCase, $processed);

                $expectedAsString .= \sprintf(
                    "    %s => %s\n",
                    $this->exporter->export($key),
                    $this->exporter->shortenedExport($value)
                );

                $actualAsString .= \sprintf(
                    "    %s => %s\n",
                    $this->exporter->export($key),
                    $this->exporter->shortenedExport($actual[$key])
                );
            } catch (ComparisonFailure $e) {
                $expectedAsString .= \sprintf(
                    "    %s => %s\n",
                    $this->exporter->export($key),
                    $e->getExpectedAsString() ? $this->indent($e->getExpectedAsString()) : $this->exporter->shortenedExport($e->getExpected())
                );

                $actualAsString .= \sprintf(
                    "    %s => %s\n",
                    $this->exporter->export($key),
                    $e->getActualAsString() ? $this->indent($e->getActualAsString()) : $this->exporter->shortenedExport($e->getActual())
                );

                $equal = false;
            }
        }

        foreach ($remaining as $key => $value) {
            $actualAsString .= \sprintf(
                "    %s => %s\n",
                $this->exporter->export($key),
                $this->exporter->shortenedExport($value)
            );

            $equal = false;
        }

        $expectedAsString .= ')';
        $actualAsString .= ')';

        if (!$equal) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                $expectedAsString,
                $actualAsString,
                false,
                'Failed asserting that two arrays are equal.'
            );
        }
    }

    protected function indent($lines)
    {
        return \trim(\str_replace("\n", "\n    ", $lines));
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Factory for comparators which compare values for equality.
 */
class Factory
{
    /**
     * @var Factory
     */
    private static $instance;

    /**
     * @var Comparator[]
     */
    private $customComparators = [];

    /**
     * @var Comparator[]
     */
    private $defaultComparators = [];

    /**
     * @return Factory
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * Constructs a new factory.
     */
    public function __construct()
    {
        $this->registerDefaultComparators();
    }

    /**
     * Returns the correct comparator for comparing two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return Comparator
     */
    public function getComparatorFor($expected, $actual)
    {
        foreach ($this->customComparators as $comparator) {
            if ($comparator->accepts($expected, $actual)) {
                return $comparator;
            }
        }

        foreach ($this->defaultComparators as $comparator) {
            if ($comparator->accepts($expected, $actual)) {
                return $comparator;
            }
        }
    }

    /**
     * Registers a new comparator.
     *
     * This comparator will be returned by getComparatorFor() if its accept() method
     * returns TRUE for the compared values. It has higher priority than the
     * existing comparators, meaning that its accept() method will be invoked
     * before those of the other comparators.
     *
     * @param Comparator $comparator The comparator to be registered
     */
    public function register(Comparator $comparator)
    {
        \array_unshift($this->customComparators, $comparator);

        $comparator->setFactory($this);
    }

    /**
     * Unregisters a comparator.
     *
     * This comparator will no longer be considered by getComparatorFor().
     *
     * @param Comparator $comparator The comparator to be unregistered
     */
    public function unregister(Comparator $comparator)
    {
        foreach ($this->customComparators as $key => $_comparator) {
            if ($comparator === $_comparator) {
                unset($this->customComparators[$key]);
            }
        }
    }

    /**
     * Unregisters all non-default comparators.
     */
    public function reset()
    {
        $this->customComparators = [];
    }

    private function registerDefaultComparators()
    {
        $this->registerDefaultComparator(new MockObjectComparator);
        $this->registerDefaultComparator(new DateTimeComparator);
        $this->registerDefaultComparator(new DOMNodeComparator);
        $this->registerDefaultComparator(new SplObjectStorageComparator);
        $this->registerDefaultComparator(new ExceptionComparator);
        $this->registerDefaultComparator(new ObjectComparator);
        $this->registerDefaultComparator(new ResourceComparator);
        $this->registerDefaultComparator(new ArrayComparator);
        $this->registerDefaultComparator(new DoubleComparator);
        $this->registerDefaultComparator(new NumericComparator);
        $this->registerDefaultComparator(new ScalarComparator);
        $this->registerDefaultComparator(new TypeComparator);
    }

    private function registerDefaultComparator(Comparator $comparator)
    {
        $this->defaultComparators[] = $comparator;

        $comparator->setFactory($this);
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares values for type equality.
 */
class TypeComparator extends Comparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return true;
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        if (\gettype($expected) != \gettype($actual)) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                // we don't need a diff
                '',
                '',
                false,
                \sprintf(
                    '%s does not match expected type "%s".',
                    $this->exporter->shortenedExport($actual),
                    \gettype($expected)
                )
            );
        }
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares resources for equality.
 */
class ResourceComparator extends Comparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return \is_resource($expected) && \is_resource($actual);
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        if ($actual != $expected) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                $this->exporter->export($expected),
                $this->exporter->export($actual)
            );
        }
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares numerical values for equality.
 */
class NumericComparator extends ScalarComparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        // all numerical values, but not if one of them is a double
        // or both of them are strings
        return \is_numeric($expected) && \is_numeric($actual) &&
               !(\is_float($expected) || \is_float($actual)) &&
               !(\is_string($expected) && \is_string($actual));
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        if (\is_infinite($actual) && \is_infinite($expected)) {
            return; // @codeCoverageIgnore
        }

        if ((\is_infinite($actual) xor \is_infinite($expected)) ||
            (\is_nan($actual) || \is_nan($expected)) ||
            \abs($actual - $expected) > $delta) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                '',
                '',
                false,
                \sprintf(
                    'Failed asserting that %s matches expected %s.',
                    $this->exporter->export($actual),
                    $this->exporter->export($expected)
                )
            );
        }
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares \SplObjectStorage instances for equality.
 */
class SplObjectStorageComparator extends Comparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return $expected instanceof \SplObjectStorage && $actual instanceof \SplObjectStorage;
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        foreach ($actual as $object) {
            if (!$expected->contains($object)) {
                throw new ComparisonFailure(
                    $expected,
                    $actual,
                    $this->exporter->export($expected),
                    $this->exporter->export($actual),
                    false,
                    'Failed asserting that two objects are equal.'
                );
            }
        }

        foreach ($expected as $object) {
            if (!$actual->contains($object)) {
                throw new ComparisonFailure(
                    $expected,
                    $actual,
                    $this->exporter->export($expected),
                    $this->exporter->export($actual),
                    false,
                    'Failed asserting that two objects are equal.'
                );
            }
        }
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

use SebastianBergmann\Exporter\Exporter;

/**
 * Abstract base class for comparators which compare values for equality.
 */
abstract class Comparator
{
    /**
     * @var Factory
     */
    protected $factory;

    /**
     * @var Exporter
     */
    protected $exporter;

    public function __construct()
    {
        $this->exporter = new Exporter;
    }

    public function setFactory(Factory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    abstract public function accepts($expected, $actual);

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @throws ComparisonFailure
     */
    abstract public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false);
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares DateTimeInterface instances for equality.
 */
class DateTimeComparator extends ObjectComparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return ($expected instanceof \DateTime || $expected instanceof \DateTimeInterface) &&
               ($actual instanceof \DateTime || $actual instanceof \DateTimeInterface);
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     * @param array $processed    List of already processed elements (used to prevent infinite recursion)
     *
     * @throws \Exception
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false, array &$processed = [])
    {
        /** @var \DateTimeInterface $expected */
        /** @var \DateTimeInterface $actual */
        $absDelta = \abs($delta);
        $delta    = new \DateInterval(\sprintf('PT%dS', $absDelta));
        $delta->f = $absDelta - \floor($absDelta);

        $actualClone = (clone $actual)
            ->setTimezone(new \DateTimeZone('UTC'));

        $expectedLower = (clone $expected)
            ->setTimezone(new \DateTimeZone('UTC'))
            ->sub($delta);

        $expectedUpper = (clone $expected)
            ->setTimezone(new \DateTimeZone('UTC'))
            ->add($delta);

        if ($actualClone < $expectedLower || $actualClone > $expectedUpper) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                $this->dateTimeToString($expected),
                $this->dateTimeToString($actual),
                false,
                'Failed asserting that two DateTime objects are equal.'
            );
        }
    }

    /**
     * Returns an ISO 8601 formatted string representation of a datetime or
     * 'Invalid DateTimeInterface object' if the provided DateTimeInterface was not properly
     * initialized.
     */
    private function dateTimeToString(\DateTimeInterface $datetime): string
    {
        $string = $datetime->format('Y-m-d\TH:i:s.uO');

        return $string ?: 'Invalid DateTimeInterface object';
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares doubles for equality.
 */
class DoubleComparator extends NumericComparator
{
    /**
     * Smallest value available in PHP.
     *
     * @var float
     */
    const EPSILON = 0.0000000001;

    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return (\is_float($expected) || \is_float($actual)) && \is_numeric($expected) && \is_numeric($actual);
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        if ($delta == 0) {
            $delta = self::EPSILON;
        }

        parent::assertEquals($expected, $actual, $delta, $canonicalize, $ignoreCase);
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares Exception instances for equality.
 */
class ExceptionComparator extends ObjectComparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return $expected instanceof \Exception && $actual instanceof \Exception;
    }

    /**
     * Converts an object to an array containing all of its private, protected
     * and public properties.
     *
     * @param object $object
     *
     * @return array
     */
    protected function toArray($object)
    {
        $array = parent::toArray($object);

        unset(
            $array['file'],
            $array['line'],
            $array['trace'],
            $array['string'],
            $array['xdebug_message']
        );

        return $array;
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares scalar or NULL values for equality.
 */
class ScalarComparator extends Comparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     *
     * @since  Method available since Release 3.6.0
     */
    public function accepts($expected, $actual)
    {
        return ((\is_scalar($expected) xor null === $expected) &&
               (\is_scalar($actual) xor null === $actual))
               // allow comparison between strings and objects featuring __toString()
               || (\is_string($expected) && \is_object($actual) && \method_exists($actual, '__toString'))
               || (\is_object($expected) && \method_exists($expected, '__toString') && \is_string($actual));
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     *
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        $expectedToCompare = $expected;
        $actualToCompare   = $actual;

        // always compare as strings to avoid strange behaviour
        // otherwise 0 == 'Foobar'
        if (\is_string($expected) || \is_string($actual)) {
            $expectedToCompare = (string) $expectedToCompare;
            $actualToCompare   = (string) $actualToCompare;

            if ($ignoreCase) {
                $expectedToCompare = \strtolower($expectedToCompare);
                $actualToCompare   = \strtolower($actualToCompare);
            }
        }

        if ($expectedToCompare !== $actualToCompare && \is_string($expected) && \is_string($actual)) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                $this->exporter->export($expected),
                $this->exporter->export($actual),
                false,
                'Failed asserting that two strings are equal.'
            );
        }

        if ($expectedToCompare != $actualToCompare) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                // no diff is required
                '',
                '',
                false,
                \sprintf(
                    'Failed asserting that %s matches expected %s.',
                    $this->exporter->export($actual),
                    $this->exporter->export($expected)
                )
            );
        }
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares objects for equality.
 */
class ObjectComparator extends ArrayComparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return \is_object($expected) && \is_object($actual);
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     * @param array $processed    List of already processed elements (used to prevent infinite recursion)
     *
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false, array &$processed = [])
    {
        if (\get_class($actual) !== \get_class($expected)) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                $this->exporter->export($expected),
                $this->exporter->export($actual),
                false,
                \sprintf(
                    '%s is not instance of expected class "%s".',
                    $this->exporter->export($actual),
                    \get_class($expected)
                )
            );
        }

        // don't compare twice to allow for cyclic dependencies
        if (\in_array([$actual, $expected], $processed, true) ||
            \in_array([$expected, $actual], $processed, true)) {
            return;
        }

        $processed[] = [$actual, $expected];

        // don't compare objects if they are identical
        // this helps to avoid the error "maximum function nesting level reached"
        // CAUTION: this conditional clause is not tested
        if ($actual !== $expected) {
            try {
                parent::assertEquals(
                    $this->toArray($expected),
                    $this->toArray($actual),
                    $delta,
                    $canonicalize,
                    $ignoreCase,
                    $processed
                );
            } catch (ComparisonFailure $e) {
                throw new ComparisonFailure(
                    $expected,
                    $actual,
                    // replace "Array" with "MyClass object"
                    \substr_replace($e->getExpectedAsString(), \get_class($expected) . ' Object', 0, 5),
                    \substr_replace($e->getActualAsString(), \get_class($actual) . ' Object', 0, 5),
                    false,
                    'Failed asserting that two objects are equal.'
                );
            }
        }
    }

    /**
     * Converts an object to an array containing all of its private, protected
     * and public properties.
     *
     * @param object $object
     *
     * @return array
     */
    protected function toArray($object)
    {
        return $this->exporter->toArray($object);
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

/**
 * Compares PHPUnit_Framework_MockObject_MockObject instances for equality.
 */
class MockObjectComparator extends ObjectComparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return ($expected instanceof \PHPUnit_Framework_MockObject_MockObject || $expected instanceof \PHPUnit\Framework\MockObject\MockObject) &&
               ($actual instanceof \PHPUnit_Framework_MockObject_MockObject || $actual instanceof \PHPUnit\Framework\MockObject\MockObject);
    }

    /**
     * Converts an object to an array containing all of its private, protected
     * and public properties.
     *
     * @param object $object
     *
     * @return array
     */
    protected function toArray($object)
    {
        $array = parent::toArray($object);

        unset($array['__phpunit_invocationMocker']);

        return $array;
    }
}
<?php
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

use DOMDocument;
use DOMNode;

/**
 * Compares DOMNode instances for equality.
 */
class DOMNodeComparator extends ObjectComparator
{
    /**
     * Returns whether the comparator can compare two values.
     *
     * @param mixed $expected The first value to compare
     * @param mixed $actual   The second value to compare
     *
     * @return bool
     */
    public function accepts($expected, $actual)
    {
        return $expected instanceof DOMNode && $actual instanceof DOMNode;
    }

    /**
     * Asserts that two values are equal.
     *
     * @param mixed $expected     First value to compare
     * @param mixed $actual       Second value to compare
     * @param float $delta        Allowed numerical distance between two values to consider them equal
     * @param bool  $canonicalize Arrays are sorted before comparison when set to true
     * @param bool  $ignoreCase   Case is ignored when set to true
     * @param array $processed    List of already processed elements (used to prevent infinite recursion)
     *
     * @throws ComparisonFailure
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false, array &$processed = [])
    {
        $expectedAsString = $this->nodeToText($expected, true, $ignoreCase);
        $actualAsString   = $this->nodeToText($actual, true, $ignoreCase);

        if ($expectedAsString !== $actualAsString) {
            $type = $expected instanceof DOMDocument ? 'documents' : 'nodes';

            throw new ComparisonFailure(
                $expected,
                $actual,
                $expectedAsString,
                $actualAsString,
                false,
                \sprintf("Failed asserting that two DOM %s are equal.\n", $type)
            );
        }
    }

    /**
     * Returns the normalized, whitespace-cleaned, and indented textual
     * representation of a DOMNode.
     */
    private function nodeToText(DOMNode $node, bool $canonicalize, bool $ignoreCase): string
    {
        if ($canonicalize) {
            $document = new DOMDocument;
            @$document->loadXML($node->C14N());

            $node = $document;
        }

        $document = $node instanceof DOMDocument ? $node : $node->ownerDocument;

        $document->formatOutput = true;
        $document->normalizeDocument();

        $text = $node instanceof DOMDocument ? $node->saveXML() : $document->saveXML($node);

        return $ignoreCase ? \strtolower($text) : $text;
    }
}
Comparator

Copyright (c) 2002-2018, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php

namespace DeepCopy\Exception;

use UnexpectedValueException;

class CloneException extends UnexpectedValueException
{
} <?php

namespace DeepCopy\Exception;

use ReflectionException;

class PropertyException extends ReflectionException
{
}
<?php

namespace DeepCopy\Reflection;

use DeepCopy\Exception\PropertyException;
use ReflectionClass;
use ReflectionException;
use ReflectionObject;
use ReflectionProperty;

class ReflectionHelper
{
    /**
     * Retrieves all properties (including private ones), from object and all its ancestors.
     *
     * Standard \ReflectionClass->getProperties() does not return private properties from ancestor classes.
     *
     * @author muratyaman@gmail.com
     * @see http://php.net/manual/en/reflectionclass.getproperties.php
     *
     * @param ReflectionClass $ref
     *
     * @return ReflectionProperty[]
     */
    public static function getProperties(ReflectionClass $ref)
    {
        $props = $ref->getProperties();
        $propsArr = array();

        foreach ($props as $prop) {
            $propertyName = $prop->getName();
            $propsArr[$propertyName] = $prop;
        }

        if ($parentClass = $ref->getParentClass()) {
            $parentPropsArr = self::getProperties($parentClass);
            foreach ($propsArr as $key => $property) {
                $parentPropsArr[$key] = $property;
            }

            return $parentPropsArr;
        }

        return $propsArr;
    }

    /**
     * Retrieves property by name from object and all its ancestors.
     *
     * @param object|string $object
     * @param string $name
     *
     * @throws PropertyException
     * @throws ReflectionException
     *
     * @return ReflectionProperty
     */
    public static function getProperty($object, $name)
    {
        $reflection = is_object($object) ? new ReflectionObject($object) : new ReflectionClass($object);

        if ($reflection->hasProperty($name)) {
            return $reflection->getProperty($name);
        }

        if ($parentClass = $reflection->getParentClass()) {
            return self::getProperty($parentClass->getName(), $name);
        }

        throw new PropertyException(
            sprintf(
                'The class "%s" doesn\'t have a property with the given name: "%s".',
                is_object($object) ? get_class($object) : $object,
                $name
            )
        );
    }
}
<?php

namespace DeepCopy\Filter\Doctrine;

use DeepCopy\Filter\Filter;

/**
 * @final
 */
class DoctrineProxyFilter implements Filter
{
    /**
     * Triggers the magic method __load() on a Doctrine Proxy class to load the
     * actual entity from the database.
     *
     * {@inheritdoc}
     */
    public function apply($object, $property, $objectCopier)
    {
        $object->__load();
    }
}
<?php

namespace DeepCopy\Filter\Doctrine;

use DeepCopy\Filter\Filter;
use DeepCopy\Reflection\ReflectionHelper;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @final
 */
class DoctrineEmptyCollectionFilter implements Filter
{
    /**
     * Sets the object property to an empty doctrine collection.
     *
     * @param object   $object
     * @param string   $property
     * @param callable $objectCopier
     */
    public function apply($object, $property, $objectCopier)
    {
        $reflectionProperty = ReflectionHelper::getProperty($object, $property);
        $reflectionProperty->setAccessible(true);

        $reflectionProperty->setValue($object, new ArrayCollection());
    }
} <?php

namespace DeepCopy\Filter\Doctrine;

use DeepCopy\Filter\Filter;
use DeepCopy\Reflection\ReflectionHelper;

/**
 * @final
 */
class DoctrineCollectionFilter implements Filter
{
    /**
     * Copies the object property doctrine collection.
     *
     * {@inheritdoc}
     */
    public function apply($object, $property, $objectCopier)
    {
        $reflectionProperty = ReflectionHelper::getProperty($object, $property);

        $reflectionProperty->setAccessible(true);
        $oldCollection = $reflectionProperty->getValue($object);

        $newCollection = $oldCollection->map(
            function ($item) use ($objectCopier) {
                return $objectCopier($item);
            }
        );

        $reflectionProperty->setValue($object, $newCollection);
    }
}
<?php

namespace DeepCopy\Filter;

use DeepCopy\Reflection\ReflectionHelper;

/**
 * @final
 */
class ReplaceFilter implements Filter
{
    /**
     * @var callable
     */
    protected $callback;

    /**
     * @param callable $callable Will be called to get the new value for each property to replace
     */
    public function __construct(callable $callable)
    {
        $this->callback = $callable;
    }

    /**
     * Replaces the object property by the result of the callback called with the object property.
     *
     * {@inheritdoc}
     */
    public function apply($object, $property, $objectCopier)
    {
        $reflectionProperty = ReflectionHelper::getProperty($object, $property);
        $reflectionProperty->setAccessible(true);

        $value = call_user_func($this->callback, $reflectionProperty->getValue($object));

        $reflectionProperty->setValue($object, $value);
    }
}
<?php

namespace DeepCopy\Filter;

class KeepFilter implements Filter
{
    /**
     * Keeps the value of the object property.
     *
     * {@inheritdoc}
     */
    public function apply($object, $property, $objectCopier)
    {
        // Nothing to do
    }
}
<?php

namespace DeepCopy\Filter;

use DeepCopy\Reflection\ReflectionHelper;

/**
 * @final
 */
class SetNullFilter implements Filter
{
    /**
     * Sets the object property to null.
     *
     * {@inheritdoc}
     */
    public function apply($object, $property, $objectCopier)
    {
        $reflectionProperty = ReflectionHelper::getProperty($object, $property);

        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($object, null);
    }
}
<?php

namespace DeepCopy\Filter;

/**
 * Filter to apply to a property while copying an object
 */
interface Filter
{
    /**
     * Applies the filter to the object.
     *
     * @param object   $object
     * @param string   $property
     * @param callable $objectCopier
     */
    public function apply($object, $property, $objectCopier);
}
<?php

namespace DeepCopy\TypeMatcher;

class TypeMatcher
{
    /**
     * @var string
     */
    private $type;

    /**
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $element
     *
     * @return boolean
     */
    public function matches($element)
    {
        return is_object($element) ? is_a($element, $this->type) : gettype($element) === $this->type;
    }
}
<?php

namespace DeepCopy;

use DateInterval;
use DateTimeInterface;
use DateTimeZone;
use DeepCopy\Exception\CloneException;
use DeepCopy\Filter\Filter;
use DeepCopy\Matcher\Matcher;
use DeepCopy\TypeFilter\Date\DateIntervalFilter;
use DeepCopy\TypeFilter\Spl\SplDoublyLinkedListFilter;
use DeepCopy\TypeFilter\TypeFilter;
use DeepCopy\TypeMatcher\TypeMatcher;
use ReflectionObject;
use ReflectionProperty;
use DeepCopy\Reflection\ReflectionHelper;
use SplDoublyLinkedList;

/**
 * @final
 */
class DeepCopy
{
    /**
     * @var object[] List of objects copied.
     */
    private $hashMap = [];

    /**
     * Filters to apply.
     *
     * @var array Array of ['filter' => Filter, 'matcher' => Matcher] pairs.
     */
    private $filters = [];

    /**
     * Type Filters to apply.
     *
     * @var array Array of ['filter' => Filter, 'matcher' => Matcher] pairs.
     */
    private $typeFilters = [];

    /**
     * @var bool
     */
    private $skipUncloneable = false;

    /**
     * @var bool
     */
    private $useCloneMethod;

    /**
     * @param bool $useCloneMethod   If set to true, when an object implements the __clone() function, it will be used
     *                               instead of the regular deep cloning.
     */
    public function __construct($useCloneMethod = false)
    {
        $this->useCloneMethod = $useCloneMethod;

        $this->addTypeFilter(new DateIntervalFilter(), new TypeMatcher(DateInterval::class));
        $this->addTypeFilter(new SplDoublyLinkedListFilter($this), new TypeMatcher(SplDoublyLinkedList::class));
    }

    /**
     * If enabled, will not throw an exception when coming across an uncloneable property.
     *
     * @param $skipUncloneable
     *
     * @return $this
     */
    public function skipUncloneable($skipUncloneable = true)
    {
        $this->skipUncloneable = $skipUncloneable;

        return $this;
    }

    /**
     * Deep copies the given object.
     *
     * @param mixed $object
     *
     * @return mixed
     */
    public function copy($object)
    {
        $this->hashMap = [];

        return $this->recursiveCopy($object);
    }

    public function addFilter(Filter $filter, Matcher $matcher)
    {
        $this->filters[] = [
            'matcher' => $matcher,
            'filter'  => $filter,
        ];
    }

    public function prependFilter(Filter $filter, Matcher $matcher)
    {
        array_unshift($this->filters, [
            'matcher' => $matcher,
            'filter'  => $filter,
        ]);
    }

    public function addTypeFilter(TypeFilter $filter, TypeMatcher $matcher)
    {
        $this->typeFilters[] = [
            'matcher' => $matcher,
            'filter'  => $filter,
        ];
    }

    private function recursiveCopy($var)
    {
        // Matches Type Filter
        if ($filter = $this->getFirstMatchedTypeFilter($this->typeFilters, $var)) {
            return $filter->apply($var);
        }

        // Resource
        if (is_resource($var)) {
            return $var;
        }

        // Array
        if (is_array($var)) {
            return $this->copyArray($var);
        }

        // Scalar
        if (! is_object($var)) {
            return $var;
        }

        // Object
        return $this->copyObject($var);
    }

    /**
     * Copy an array
     * @param array $array
     * @return array
     */
    private function copyArray(array $array)
    {
        foreach ($array as $key => $value) {
            $array[$key] = $this->recursiveCopy($value);
        }

        return $array;
    }

    /**
     * Copies an object.
     *
     * @param object $object
     *
     * @throws CloneException
     *
     * @return object
     */
    private function copyObject($object)
    {
        $objectHash = spl_object_hash($object);

        if (isset($this->hashMap[$objectHash])) {
            return $this->hashMap[$objectHash];
        }

        $reflectedObject = new ReflectionObject($object);
        $isCloneable = $reflectedObject->isCloneable();

        if (false === $isCloneable) {
            if ($this->skipUncloneable) {
                $this->hashMap[$objectHash] = $object;

                return $object;
            }

            throw new CloneException(
                sprintf(
                    'The class "%s" is not cloneable.',
                    $reflectedObject->getName()
                )
            );
        }

        $newObject = clone $object;
        $this->hashMap[$objectHash] = $newObject;

        if ($this->useCloneMethod && $reflectedObject->hasMethod('__clone')) {
            return $newObject;
        }

        if ($newObject instanceof DateTimeInterface || $newObject instanceof DateTimeZone) {
            return $newObject;
        }

        foreach (ReflectionHelper::getProperties($reflectedObject) as $property) {
            $this->copyObjectProperty($newObject, $property);
        }

        return $newObject;
    }

    private function copyObjectProperty($object, ReflectionProperty $property)
    {
        // Ignore static properties
        if ($property->isStatic()) {
            return;
        }

        // Apply the filters
        foreach ($this->filters as $item) {
            /** @var Matcher $matcher */
            $matcher = $item['matcher'];
            /** @var Filter $filter */
            $filter = $item['filter'];

            if ($matcher->matches($object, $property->getName())) {
                $filter->apply(
                    $object,
                    $property->getName(),
                    function ($object) {
                        return $this->recursiveCopy($object);
                    }
                );

                // If a filter matches, we stop processing this property
                return;
            }
        }

        $property->setAccessible(true);

        // Ignore uninitialized properties (for PHP >7.4)
        if (method_exists($property, 'isInitialized') && !$property->isInitialized($object)) {
            return;
        }

        $propertyValue = $property->getValue($object);

        // Copy the property
        $property->setValue($object, $this->recursiveCopy($propertyValue));
    }

    /**
     * Returns first filter that matches variable, `null` if no such filter found.
     *
     * @param array $filterRecords Associative array with 2 members: 'filter' with value of type {@see TypeFilter} and
     *                             'matcher' with value of type {@see TypeMatcher}
     * @param mixed $var
     *
     * @return TypeFilter|null
     */
    private function getFirstMatchedTypeFilter(array $filterRecords, $var)
    {
        $matched = $this->first(
            $filterRecords,
            function (array $record) use ($var) {
                /* @var TypeMatcher $matcher */
                $matcher = $record['matcher'];

                return $matcher->matches($var);
            }
        );

        return isset($matched) ? $matched['filter'] : null;
    }

    /**
     * Returns first element that matches predicate, `null` if no such element found.
     *
     * @param array    $elements Array of ['filter' => Filter, 'matcher' => Matcher] pairs.
     * @param callable $predicate Predicate arguments are: element.
     *
     * @return array|null Associative array with 2 members: 'filter' with value of type {@see TypeFilter} and 'matcher'
     *                    with value of type {@see TypeMatcher} or `null`.
     */
    private function first(array $elements, callable $predicate)
    {
        foreach ($elements as $element) {
            if (call_user_func($predicate, $element)) {
                return $element;
            }
        }

        return null;
    }
}
<?php

namespace DeepCopy\TypeFilter;

/**
 * @final
 */
class ShallowCopyFilter implements TypeFilter
{
    /**
     * {@inheritdoc}
     */
    public function apply($element)
    {
        return clone $element;
    }
}
<?php

namespace DeepCopy\TypeFilter\Date;

use DateInterval;
use DeepCopy\TypeFilter\TypeFilter;

/**
 * @final
 *
 * @deprecated Will be removed in 2.0. This filter will no longer be necessary in PHP 7.1+.
 */
class DateIntervalFilter implements TypeFilter
{

    /**
     * {@inheritdoc}
     *
     * @param DateInterval $element
     *
     * @see http://news.php.net/php.bugs/205076
     */
    public function apply($element)
    {
        $copy = new DateInterval('P0D');

        foreach ($element as $propertyName => $propertyValue) {
            $copy->{$propertyName} = $propertyValue;
        }

        return $copy;
    }
}
<?php

namespace DeepCopy\TypeFilter\Spl;

/**
 * @deprecated Use {@see SplDoublyLinkedListFilter} instead.
 */
class SplDoublyLinkedList extends SplDoublyLinkedListFilter
{
}
<?php

namespace DeepCopy\TypeFilter\Spl;

use Closure;
use DeepCopy\DeepCopy;
use DeepCopy\TypeFilter\TypeFilter;
use SplDoublyLinkedList;

/**
 * @final
 */
class SplDoublyLinkedListFilter implements TypeFilter
{
    private $copier;

    public function __construct(DeepCopy $copier)
    {
        $this->copier = $copier;
    }

    /**
     * {@inheritdoc}
     */
    public function apply($element)
    {
        $newElement = clone $element;

        $copy = $this->createCopyClosure();

        return $copy($newElement);
    }

    private function createCopyClosure()
    {
        $copier = $this->copier;

        $copy = function (SplDoublyLinkedList $list) use ($copier) {
            // Replace each element in the list with a deep copy of itself
            for ($i = 1; $i <= $list->count(); $i++) {
                $copy = $copier->recursiveCopy($list->shift());

                $list->push($copy);
            }

            return $list;
        };

        return Closure::bind($copy, null, DeepCopy::class);
    }
}
<?php

namespace DeepCopy\TypeFilter;

interface TypeFilter
{
    /**
     * Applies the filter to the object.
     *
     * @param mixed $element
     */
    public function apply($element);
}
<?php

namespace DeepCopy\TypeFilter;

/**
 * @final
 */
class ReplaceFilter implements TypeFilter
{
    /**
     * @var callable
     */
    protected $callback;

    /**
     * @param callable $callable Will be called to get the new value for each element to replace
     */
    public function __construct(callable $callable)
    {
        $this->callback = $callable;
    }

    /**
     * {@inheritdoc}
     */
    public function apply($element)
    {
        return call_user_func($this->callback, $element);
    }
}
<?php

namespace DeepCopy\Matcher\Doctrine;

use DeepCopy\Matcher\Matcher;
use Doctrine\Common\Persistence\Proxy;

/**
 * @final
 */
class DoctrineProxyMatcher implements Matcher
{
    /**
     * Matches a Doctrine Proxy class.
     *
     * {@inheritdoc}
     */
    public function matches($object, $property)
    {
        return $object instanceof Proxy;
    }
}
<?php

namespace DeepCopy\Matcher;

/**
 * @final
 */
class PropertyNameMatcher implements Matcher
{
    /**
     * @var string
     */
    private $property;

    /**
     * @param string $property Property name
     */
    public function __construct($property)
    {
        $this->property = $property;
    }

    /**
     * Matches a property by its name.
     *
     * {@inheritdoc}
     */
    public function matches($object, $property)
    {
        return $property == $this->property;
    }
}
<?php

namespace DeepCopy\Matcher;

interface Matcher
{
    /**
     * @param object $object
     * @param string $property
     *
     * @return boolean
     */
    public function matches($object, $property);
}
<?php

namespace DeepCopy\Matcher;

use DeepCopy\Reflection\ReflectionHelper;
use ReflectionException;

/**
 * Matches a property by its type.
 *
 * It is recommended to use {@see DeepCopy\TypeFilter\TypeFilter} instead, as it applies on all occurrences
 * of given type in copied context (eg. array elements), not just on object properties.
 *
 * @final
 */
class PropertyTypeMatcher implements Matcher
{
    /**
     * @var string
     */
    private $propertyType;

    /**
     * @param string $propertyType Property type
     */
    public function __construct($propertyType)
    {
        $this->propertyType = $propertyType;
    }

    /**
     * {@inheritdoc}
     */
    public function matches($object, $property)
    {
        try {
            $reflectionProperty = ReflectionHelper::getProperty($object, $property);
        } catch (ReflectionException $exception) {
            return false;
        }

        $reflectionProperty->setAccessible(true);

        return $reflectionProperty->getValue($object) instanceof $this->propertyType;
    }
}
<?php

namespace DeepCopy\Matcher;

/**
 * @final
 */
class PropertyMatcher implements Matcher
{
    /**
     * @var string
     */
    private $class;

    /**
     * @var string
     */
    private $property;

    /**
     * @param string $class    Class name
     * @param string $property Property name
     */
    public function __construct($class, $property)
    {
        $this->class = $class;
        $this->property = $property;
    }

    /**
     * Matches a specific property of a specific class.
     *
     * {@inheritdoc}
     */
    public function matches($object, $property)
    {
        return ($object instanceof $this->class) && $property == $this->property;
    }
}
<?php

namespace DeepCopy;

use function function_exists;

if (false === function_exists('DeepCopy\deep_copy')) {
    /**
     * Deep copies the given value.
     *
     * @param mixed $value
     * @param bool  $useCloneMethod
     *
     * @return mixed
     */
    function deep_copy($value, $useCloneMethod = false)
    {
        return (new DeepCopy($useCloneMethod))->copy($value);
    }
}
The MIT License (MIT)

Copyright (c) 2013 My C-Sense

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
<?php
/*
 * This file is part of the Text_Template package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A simple template engine.
 *
 * @since Class available since Release 1.0.0
 */
class Text_Template
{
    /**
     * @var string
     */
    protected $template = '';

    /**
     * @var string
     */
    protected $openDelimiter = '{';

    /**
     * @var string
     */
    protected $closeDelimiter = '}';

    /**
     * @var array
     */
    protected $values = array();

    /**
     * Constructor.
     *
     * @param  string                   $file
     * @throws InvalidArgumentException
     */
    public function __construct($file = '', $openDelimiter = '{', $closeDelimiter = '}')
    {
        $this->setFile($file);
        $this->openDelimiter  = $openDelimiter;
        $this->closeDelimiter = $closeDelimiter;
    }

    /**
     * Sets the template file.
     *
     * @param  string                   $file
     * @throws InvalidArgumentException
     */
    public function setFile($file)
    {
        $distFile = $file . '.dist';

        if (file_exists($file)) {
            $this->template = file_get_contents($file);
        }

        else if (file_exists($distFile)) {
            $this->template = file_get_contents($distFile);
        }

        else {
            throw new InvalidArgumentException(
              'Template file could not be loaded.'
            );
        }
    }

    /**
     * Sets one or more template variables.
     *
     * @param array $values
     * @param bool  $merge
     */
    public function setVar(array $values, $merge = TRUE)
    {
        if (!$merge || empty($this->values)) {
            $this->values = $values;
        } else {
            $this->values = array_merge($this->values, $values);
        }
    }

    /**
     * Renders the template and returns the result.
     *
     * @return string
     */
    public function render()
    {
        $keys = array();

        foreach ($this->values as $key => $value) {
            $keys[] = $this->openDelimiter . $key . $this->closeDelimiter;
        }

        return str_replace($keys, $this->values, $this->template);
    }

    /**
     * Renders the template and writes the result to a file.
     *
     * @param string $target
     */
    public function renderTo($target)
    {
        $fp = @fopen($target, 'wt');

        if ($fp) {
            fwrite($fp, $this->render());
            fclose($fp);
        } else {
            $error = error_get_last();

            throw new RuntimeException(
              sprintf(
                'Could not write to %s: %s',
                $target,
                substr(
                  $error['message'],
                  strpos($error['message'], ':') + 2
                )
              )
            );
        }
    }
}

Text_Template

Copyright (c) 2009-2015, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php
/*
 * This file is part of sebastian/global-state.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SebastianBergmann\GlobalState;

use ReflectionProperty;

/**
 * Restorer of snapshots of global state.
 */
class Restorer
{
    /**
     * Deletes function definitions that are not defined in a snapshot.
     *
     * @throws RuntimeException when the uopz_delete() function is not available
     *
     * @see    https://github.com/krakjoe/uopz
     */
    public function restoreFunctions(Snapshot $snapshot)
    {
        if (!\function_exists('uopz_delete')) {
            throw new RuntimeException('The uopz_delete() function is required for this operation');
        }

        $functions = \get_defined_functions();

        foreach (\array_diff($functions['user'], $snapshot->functions()) as $function) {
            uopz_delete($function);
        }
    }

    /**
     * Restores all global and super-global variables from a snapshot.
     */
    public function restoreGlobalVariables(Snapshot $snapshot)
    {
        $superGlobalArrays = $snapshot->superGlobalArrays();

        foreach ($superGlobalArrays as $superGlobalArray) {
            $this->restoreSuperGlobalArray($snapshot, $superGlobalArray);
        }

        $globalVariables = $snapshot->globalVariables();

        foreach (\array_keys($GLOBALS) as $key) {
            if ($key != 'GLOBALS' &&
                !\in_array($key, $superGlobalArrays) &&
                !$snapshot->blacklist()->isGlobalVariableBlacklisted($key)) {
                if (\array_key_exists($key, $globalVariables)) {
                    $GLOBALS[$key] = $globalVariables[$key];
                } else {
                    unset($GLOBALS[$key]);
                }
            }
        }
    }

    /**
     * Restores all static attributes in user-defined classes from this snapshot.
     */
    public function restoreStaticAttributes(Snapshot $snapshot)
    {
        $current    = new Snapshot($snapshot->blacklist(), false, false, false, false, true, false, false, false, false);
        $newClasses = \array_diff($current->classes(), $snapshot->classes());

        unset($current);

        foreach ($snapshot->staticAttributes() as $className => $staticAttributes) {
            foreach ($staticAttributes as $name => $value) {
                $reflector = new ReflectionProperty($className, $name);
                $reflector->setAccessible(true);
                $reflector->setValue($value);
            }
        }

        foreach ($newClasses as $className) {
            $class    = new \ReflectionClass($className);
            $defaults = $class->getDefaultProperties();

            foreach ($class->getProperties() as $attribute) {
                if (!$attribute->isStatic()) {
                    continue;
                }

                $name = $attribute->getName();

                if ($snapshot->blacklist()->isStaticAttributeBlacklisted($className, $name)) {
                    continue;
                }

                if (!isset($defaults[$name])) {
                    continue;
                }

                $attribute->setAccessible(true);
                $attribute->setValue($defaults[$name]);
            }
        }
    }

    /**
     * Restores a super-global variable array from this snapshot.
     */
    private function restoreSuperGlobalArray(Snapshot $snapshot, string $superGlobalArray)
    {
        $superGlobalVariables = $snapshot->superGlobalVariables();

        if (isset($GLOBALS[$superGlobalArray]) &&
            \is_array($GLOBALS[$superGlobalArray]) &&
            isset($superGlobalVariables[$superGlobalArray])) {
            $keys = \array_keys(
                \array_merge(
                    $GLOBALS[$superGlobalArray],
                    $superGlobalVariables[$superGlobalArray]
                )
            );

            foreach ($keys as $key) {
                if (isset($superGlobalVariables[$superGlobalArray][$key])) {
                    $GLOBALS[$superGlobalArray][$key] = $superGlobalVariables[$superGlobalArray][$key];
                } else {
                    unset($GLOBALS[$superGlobalArray][$key]);
                }
            }
        }
    }
}
<?php
/*
 * This file is part of sebastian/global-state.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SebastianBergmann\GlobalState;

interface Exception
{
}
<?php
/*
 * This file is part of sebastian/global-state.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SebastianBergmann\GlobalState;

class RuntimeException extends \RuntimeException implements Exception
{
}
<?php
/*
 * This file is part of sebastian/global-state.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SebastianBergmann\GlobalState;

/**
 * Exports parts of a Snapshot as PHP code.
 */
class CodeExporter
{
    public function constants(Snapshot $snapshot): string
    {
        $result = '';

        foreach ($snapshot->constants() as $name => $value) {
            $result .= \sprintf(
                'if (!defined(\'%s\')) define(\'%s\', %s);' . "\n",
                $name,
                $name,
                $this->exportVariable($value)
            );
        }

        return $result;
    }

    public function globalVariables(Snapshot $snapshot): string
    {
        $result = '$GLOBALS = [];' . PHP_EOL;

        foreach ($snapshot->globalVariables() as $name => $value) {
            $result .= \sprintf(
                '$GLOBALS[%s] = %s;' . PHP_EOL,
                $this->exportVariable($name),
                $this->exportVariable($value)
            );
        }

        return $result;
    }

    public function iniSettings(Snapshot $snapshot): string
    {
        $result = '';

        foreach ($snapshot->iniSettings() as $key => $value) {
            $result .= \sprintf(
                '@ini_set(%s, %s);' . "\n",
                $this->exportVariable($key),
                $this->exportVariable($value)
            );
        }

        return $result;
    }

    private function exportVariable($variable): string
    {
        if (\is_scalar($variable) || \is_null($variable) ||
            (\is_array($variable) && $this->arrayOnlyContainsScalars($variable))) {
            return \var_export($variable, true);
        }

        return 'unserialize(' . \var_export(\serialize($variable), true) . ')';
    }

    private function arrayOnlyContainsScalars(array $array): bool
    {
        $result = true;

        foreach ($array as $element) {
            if (\is_array($element)) {
                $result = self::arrayOnlyContainsScalars($element);
            } elseif (!\is_scalar($element) && !\is_null($element)) {
                $result = false;
            }

            if ($result === false) {
                break;
            }
        }

        return $result;
    }
}
<?php
/*
 * This file is part of sebastian/global-state.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SebastianBergmann\GlobalState;

use ReflectionClass;
use Serializable;

/**
 * A snapshot of global state.
 */
class Snapshot
{
    /**
     * @var Blacklist
     */
    private $blacklist;

    /**
     * @var array
     */
    private $globalVariables = [];

    /**
     * @var array
     */
    private $superGlobalArrays = [];

    /**
     * @var array
     */
    private $superGlobalVariables = [];

    /**
     * @var array
     */
    private $staticAttributes = [];

    /**
     * @var array
     */
    private $iniSettings = [];

    /**
     * @var array
     */
    private $includedFiles = [];

    /**
     * @var array
     */
    private $constants = [];

    /**
     * @var array
     */
    private $functions = [];

    /**
     * @var array
     */
    private $interfaces = [];

    /**
     * @var array
     */
    private $classes = [];

    /**
     * @var array
     */
    private $traits = [];

    /**
     * Creates a snapshot of the current global state.
     */
    public function __construct(Blacklist $blacklist = null, bool $includeGlobalVariables = true, bool $includeStaticAttributes = true, bool $includeConstants = true, bool $includeFunctions = true, bool $includeClasses = true, bool $includeInterfaces = true, bool $includeTraits = true, bool $includeIniSettings = true, bool $includeIncludedFiles = true)
    {
        if ($blacklist === null) {
            $blacklist = new Blacklist;
        }

        $this->blacklist = $blacklist;

        if ($includeConstants) {
            $this->snapshotConstants();
        }

        if ($includeFunctions) {
            $this->snapshotFunctions();
        }

        if ($includeClasses || $includeStaticAttributes) {
            $this->snapshotClasses();
        }

        if ($includeInterfaces) {
            $this->snapshotInterfaces();
        }

        if ($includeGlobalVariables) {
            $this->setupSuperGlobalArrays();
            $this->snapshotGlobals();
        }

        if ($includeStaticAttributes) {
            $this->snapshotStaticAttributes();
        }

        if ($includeIniSettings) {
            $this->iniSettings = \ini_get_all(null, false);
        }

        if ($includeIncludedFiles) {
            $this->includedFiles = \get_included_files();
        }

        $this->traits = \get_declared_traits();
    }

    public function blacklist(): Blacklist
    {
        return $this->blacklist;
    }

    public function globalVariables(): array
    {
        return $this->globalVariables;
    }

    public function superGlobalVariables(): array
    {
        return $this->superGlobalVariables;
    }

    public function superGlobalArrays(): array
    {
        return $this->superGlobalArrays;
    }

    public function staticAttributes(): array
    {
        return $this->staticAttributes;
    }

    public function iniSettings(): array
    {
        return $this->iniSettings;
    }

    public function includedFiles(): array
    {
        return $this->includedFiles;
    }

    public function constants(): array
    {
        return $this->constants;
    }

    public function functions(): array
    {
        return $this->functions;
    }

    public function interfaces(): array
    {
        return $this->interfaces;
    }

    public function classes(): array
    {
        return $this->classes;
    }

    public function traits(): array
    {
        return $this->traits;
    }

    /**
     * Creates a snapshot user-defined constants.
     */
    private function snapshotConstants()
    {
        $constants = \get_defined_constants(true);

        if (isset($constants['user'])) {
            $this->constants = $constants['user'];
        }
    }

    /**
     * Creates a snapshot user-defined functions.
     */
    private function snapshotFunctions()
    {
        $functions = \get_defined_functions();

        $this->functions = $functions['user'];
    }

    /**
     * Creates a snapshot user-defined classes.
     */
    private function snapshotClasses()
    {
        foreach (\array_reverse(\get_declared_classes()) as $className) {
            $class = new ReflectionClass($className);

            if (!$class->isUserDefined()) {
                break;
            }

            $this->classes[] = $className;
        }

        $this->classes = \array_reverse($this->classes);
    }

    /**
     * Creates a snapshot user-defined interfaces.
     */
    private function snapshotInterfaces()
    {
        foreach (\array_reverse(\get_declared_interfaces()) as $interfaceName) {
            $class = new ReflectionClass($interfaceName);

            if (!$class->isUserDefined()) {
                break;
            }

            $this->interfaces[] = $interfaceName;
        }

        $this->interfaces = \array_reverse($this->interfaces);
    }

    /**
     * Creates a snapshot of all global and super-global variables.
     */
    private function snapshotGlobals()
    {
        $superGlobalArrays = $this->superGlobalArrays();

        foreach ($superGlobalArrays as $superGlobalArray) {
            $this->snapshotSuperGlobalArray($superGlobalArray);
        }

        foreach (\array_keys($GLOBALS) as $key) {
            if ($key != 'GLOBALS' &&
                !\in_array($key, $superGlobalArrays) &&
                $this->canBeSerialized($GLOBALS[$key]) &&
                !$this->blacklist->isGlobalVariableBlacklisted($key)) {
                $this->globalVariables[$key] = \unserialize(\serialize($GLOBALS[$key]));
            }
        }
    }

    /**
     * Creates a snapshot a super-global variable array.
     */
    private function snapshotSuperGlobalArray(string $superGlobalArray)
    {
        $this->superGlobalVariables[$superGlobalArray] = [];

        if (isset($GLOBALS[$superGlobalArray]) && \is_array($GLOBALS[$superGlobalArray])) {
            foreach ($GLOBALS[$superGlobalArray] as $key => $value) {
                $this->superGlobalVariables[$superGlobalArray][$key] = \unserialize(\serialize($value));
            }
        }
    }

    /**
     * Creates a snapshot of all static attributes in user-defined classes.
     */
    private function snapshotStaticAttributes()
    {
        foreach ($this->classes as $className) {
            $class    = new ReflectionClass($className);
            $snapshot = [];

            foreach ($class->getProperties() as $attribute) {
                if ($attribute->isStatic()) {
                    $name = $attribute->getName();

                    if ($this->blacklist->isStaticAttributeBlacklisted($className, $name)) {
                        continue;
                    }

                    $attribute->setAccessible(true);
                    $value = $attribute->getValue();

                    if ($this->canBeSerialized($value)) {
                        $snapshot[$name] = \unserialize(\serialize($value));
                    }
                }
            }

            if (!empty($snapshot)) {
                $this->staticAttributes[$className] = $snapshot;
            }
        }
    }

    /**
     * Returns a list of all super-global variable arrays.
     */
    private function setupSuperGlobalArrays()
    {
        $this->superGlobalArrays = [
            '_ENV',
            '_POST',
            '_GET',
            '_COOKIE',
            '_SERVER',
            '_FILES',
            '_REQUEST'
        ];

        if (\ini_get('register_long_arrays') == '1') {
            $this->superGlobalArrays = \array_merge(
                $this->superGlobalArrays,
                [
                    'HTTP_ENV_VARS',
                    'HTTP_POST_VARS',
                    'HTTP_GET_VARS',
                    'HTTP_COOKIE_VARS',
                    'HTTP_SERVER_VARS',
                    'HTTP_POST_FILES'
                ]
            );
        }
    }

    /**
     * @todo Implement this properly
     */
    private function canBeSerialized($variable): bool
    {
        if (!\is_object($variable)) {
            return !\is_resource($variable);
        }

        if ($variable instanceof \stdClass) {
            return true;
        }

        $class = new ReflectionClass($variable);

        do {
            if ($class->isInternal()) {
                return $variable instanceof Serializable;
            }
        } while ($class = $class->getParentClass());

        return true;
    }
}
<?php
/*
 * This file is part of sebastian/global-state.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SebastianBergmann\GlobalState;

use ReflectionClass;

/**
 * A blacklist for global state elements that should not be snapshotted.
 */
class Blacklist
{
    /**
     * @var array
     */
    private $globalVariables = [];

    /**
     * @var string[]
     */
    private $classes = [];

    /**
     * @var string[]
     */
    private $classNamePrefixes = [];

    /**
     * @var string[]
     */
    private $parentClasses = [];

    /**
     * @var string[]
     */
    private $interfaces = [];

    /**
     * @var array
     */
    private $staticAttributes = [];

    public function addGlobalVariable(string $variableName)
    {
        $this->globalVariables[$variableName] = true;
    }

    public function addClass(string $className)
    {
        $this->classes[] = $className;
    }

    public function addSubclassesOf(string $className)
    {
        $this->parentClasses[] = $className;
    }

    public function addImplementorsOf(string $interfaceName)
    {
        $this->interfaces[] = $interfaceName;
    }

    public function addClassNamePrefix(string $classNamePrefix)
    {
        $this->classNamePrefixes[] = $classNamePrefix;
    }

    public function addStaticAttribute(string $className, string $attributeName)
    {
        if (!isset($this->staticAttributes[$className])) {
            $this->staticAttributes[$className] = [];
        }

        $this->staticAttributes[$className][$attributeName] = true;
    }

    public function isGlobalVariableBlacklisted(string $variableName): bool
    {
        return isset($this->globalVariables[$variableName]);
    }

    public function isStaticAttributeBlacklisted(string $className, string $attributeName): bool
    {
        if (\in_array($className, $this->classes)) {
            return true;
        }

        foreach ($this->classNamePrefixes as $prefix) {
            if (\strpos($className, $prefix) === 0) {
                return true;
            }
        }

        $class = new ReflectionClass($className);

        foreach ($this->parentClasses as $type) {
            if ($class->isSubclassOf($type)) {
                return true;
            }
        }

        foreach ($this->interfaces as $type) {
            if ($class->implementsInterface($type)) {
                return true;
            }
        }

        if (isset($this->staticAttributes[$className][$attributeName])) {
            return true;
        }

        return false;
    }
}
sebastian/global-state

Copyright (c) 2001-2017, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php

namespace Doctrine\Instantiator;

use ArrayIterator;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Doctrine\Instantiator\Exception\UnexpectedValueException;
use Exception;
use ReflectionClass;
use ReflectionException;
use Serializable;
use function class_exists;
use function is_subclass_of;
use function restore_error_handler;
use function set_error_handler;
use function sprintf;
use function strlen;
use function unserialize;

/**
 * {@inheritDoc}
 */
final class Instantiator implements InstantiatorInterface
{
    /**
     * Markers used internally by PHP to define whether {@see \unserialize} should invoke
     * the method {@see \Serializable::unserialize()} when dealing with classes implementing
     * the {@see \Serializable} interface.
     */
    public const SERIALIZATION_FORMAT_USE_UNSERIALIZER   = 'C';
    public const SERIALIZATION_FORMAT_AVOID_UNSERIALIZER = 'O';

    /**
     * Used to instantiate specific classes, indexed by class name.
     *
     * @var callable[]
     */
    private static $cachedInstantiators = [];

    /**
     * Array of objects that can directly be cloned, indexed by class name.
     *
     * @var object[]
     */
    private static $cachedCloneables = [];

    /**
     * {@inheritDoc}
     */
    public function instantiate($className)
    {
        if (isset(self::$cachedCloneables[$className])) {
            return clone self::$cachedCloneables[$className];
        }

        if (isset(self::$cachedInstantiators[$className])) {
            $factory = self::$cachedInstantiators[$className];

            return $factory();
        }

        return $this->buildAndCacheFromFactory($className);
    }

    /**
     * Builds the requested object and caches it in static properties for performance
     *
     * @return object
     */
    private function buildAndCacheFromFactory(string $className)
    {
        $factory  = self::$cachedInstantiators[$className] = $this->buildFactory($className);
        $instance = $factory();

        if ($this->isSafeToClone(new ReflectionClass($instance))) {
            self::$cachedCloneables[$className] = clone $instance;
        }

        return $instance;
    }

    /**
     * Builds a callable capable of instantiating the given $className without
     * invoking its constructor.
     *
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     * @throws ReflectionException
     */
    private function buildFactory(string $className) : callable
    {
        $reflectionClass = $this->getReflectionClass($className);

        if ($this->isInstantiableViaReflection($reflectionClass)) {
            return [$reflectionClass, 'newInstanceWithoutConstructor'];
        }

        $serializedString = sprintf(
            '%s:%d:"%s":0:{}',
            is_subclass_of($className, Serializable::class) ? self::SERIALIZATION_FORMAT_USE_UNSERIALIZER : self::SERIALIZATION_FORMAT_AVOID_UNSERIALIZER,
            strlen($className),
            $className
        );

        $this->checkIfUnSerializationIsSupported($reflectionClass, $serializedString);

        return static function () use ($serializedString) {
            return unserialize($serializedString);
        };
    }

    /**
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    private function getReflectionClass(string $className) : ReflectionClass
    {
        if (! class_exists($className)) {
            throw InvalidArgumentException::fromNonExistingClass($className);
        }

        $reflection = new ReflectionClass($className);

        if ($reflection->isAbstract()) {
            throw InvalidArgumentException::fromAbstractClass($reflection);
        }

        return $reflection;
    }

    /**
     * @throws UnexpectedValueException
     */
    private function checkIfUnSerializationIsSupported(ReflectionClass $reflectionClass, string $serializedString) : void
    {
        set_error_handler(static function (int $code, string $message, string $file, int $line) use ($reflectionClass, &$error) : bool {
            $error = UnexpectedValueException::fromUncleanUnSerialization(
                $reflectionClass,
                $message,
                $code,
                $file,
                $line
            );

            return true;
        });

        try {
            $this->attemptInstantiationViaUnSerialization($reflectionClass, $serializedString);
        } finally {
            restore_error_handler();
        }

        if ($error) {
            throw $error;
        }
    }

    /**
     * @throws UnexpectedValueException
     */
    private function attemptInstantiationViaUnSerialization(ReflectionClass $reflectionClass, string $serializedString) : void
    {
        try {
            unserialize($serializedString);
        } catch (Exception $exception) {
            throw UnexpectedValueException::fromSerializationTriggeredException($reflectionClass, $exception);
        }
    }

    private function isInstantiableViaReflection(ReflectionClass $reflectionClass) : bool
    {
        return ! ($this->hasInternalAncestors($reflectionClass) && $reflectionClass->isFinal());
    }

    /**
     * Verifies whether the given class is to be considered internal
     */
    private function hasInternalAncestors(ReflectionClass $reflectionClass) : bool
    {
        do {
            if ($reflectionClass->isInternal()) {
                return true;
            }

            $reflectionClass = $reflectionClass->getParentClass();
        } while ($reflectionClass);

        return false;
    }

    /**
     * Checks if a class is cloneable
     *
     * Classes implementing `__clone` cannot be safely cloned, as that may cause side-effects.
     */
    private function isSafeToClone(ReflectionClass $reflection) : bool
    {
        return $reflection->isCloneable()
            && ! $reflection->hasMethod('__clone')
            && ! $reflection->isSubclassOf(ArrayIterator::class);
    }
}
<?php

namespace Doctrine\Instantiator\Exception;

use InvalidArgumentException as BaseInvalidArgumentException;
use ReflectionClass;
use const PHP_VERSION_ID;
use function interface_exists;
use function sprintf;
use function trait_exists;

/**
 * Exception for invalid arguments provided to the instantiator
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements ExceptionInterface
{
    public static function fromNonExistingClass(string $className) : self
    {
        if (interface_exists($className)) {
            return new self(sprintf('The provided type "%s" is an interface, and can not be instantiated', $className));
        }

        if (PHP_VERSION_ID >= 50400 && trait_exists($className)) {
            return new self(sprintf('The provided type "%s" is a trait, and can not be instantiated', $className));
        }

        return new self(sprintf('The provided class "%s" does not exist', $className));
    }

    public static function fromAbstractClass(ReflectionClass $reflectionClass) : self
    {
        return new self(sprintf(
            'The provided class "%s" is abstract, and can not be instantiated',
            $reflectionClass->getName()
        ));
    }
}
<?php

namespace Doctrine\Instantiator\Exception;

use Exception;
use ReflectionClass;
use UnexpectedValueException as BaseUnexpectedValueException;
use function sprintf;

/**
 * Exception for given parameters causing invalid/unexpected state on instantiation
 */
class UnexpectedValueException extends BaseUnexpectedValueException implements ExceptionInterface
{
    public static function fromSerializationTriggeredException(
        ReflectionClass $reflectionClass,
        Exception $exception
    ) : self {
        return new self(
            sprintf(
                'An exception was raised while trying to instantiate an instance of "%s" via un-serialization',
                $reflectionClass->getName()
            ),
            0,
            $exception
        );
    }

    public static function fromUncleanUnSerialization(
        ReflectionClass $reflectionClass,
        string $errorString,
        int $errorCode,
        string $errorFile,
        int $errorLine
    ) : self {
        return new self(
            sprintf(
                'Could not produce an instance of "%s" via un-serialization, since an error was triggered '
                . 'in file "%s" at line "%d"',
                $reflectionClass->getName(),
                $errorFile,
                $errorLine
            ),
            0,
            new Exception($errorString, $errorCode)
        );
    }
}
<?php

namespace Doctrine\Instantiator\Exception;

use Throwable;

/**
 * Base exception marker interface for the instantiator component
 */
interface ExceptionInterface extends Throwable
{
}
<?php

namespace Doctrine\Instantiator;

use Doctrine\Instantiator\Exception\ExceptionInterface;

/**
 * Instantiator provides utility methods to build objects without invoking their constructors
 */
interface InstantiatorInterface
{
    /**
     * @param string $className
     *
     * @return object
     *
     * @throws ExceptionInterface
     */
    public function instantiate($className);
}
Copyright (c) 2014 Doctrine Project

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

use phpDocumentor\Reflection\DocBlock\Tag;
use Webmozart\Assert\Assert;

final class DocBlock
{
    /** @var string The opening line for this docblock. */
    private $summary = '';

    /** @var DocBlock\Description The actual description for this docblock. */
    private $description = null;

    /** @var Tag[] An array containing all the tags in this docblock; except inline. */
    private $tags = [];

    /** @var Types\Context Information about the context of this DocBlock. */
    private $context = null;

    /** @var Location Information about the location of this DocBlock. */
    private $location = null;

    /** @var bool Is this DocBlock (the start of) a template? */
    private $isTemplateStart = false;

    /** @var bool Does this DocBlock signify the end of a DocBlock template? */
    private $isTemplateEnd = false;

    /**
     * @param string $summary
     * @param DocBlock\Description $description
     * @param DocBlock\Tag[] $tags
     * @param Types\Context $context The context in which the DocBlock occurs.
     * @param Location $location The location within the file that this DocBlock occurs in.
     * @param bool $isTemplateStart
     * @param bool $isTemplateEnd
     */
    public function __construct(
        $summary = '',
        DocBlock\Description $description = null,
        array $tags = [],
        Types\Context $context = null,
        Location $location = null,
        $isTemplateStart = false,
        $isTemplateEnd = false
    ) {
        Assert::string($summary);
        Assert::boolean($isTemplateStart);
        Assert::boolean($isTemplateEnd);
        Assert::allIsInstanceOf($tags, Tag::class);

        $this->summary = $summary;
        $this->description = $description ?: new DocBlock\Description('');
        foreach ($tags as $tag) {
            $this->addTag($tag);
        }

        $this->context = $context;
        $this->location = $location;

        $this->isTemplateEnd = $isTemplateEnd;
        $this->isTemplateStart = $isTemplateStart;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @return DocBlock\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the current context.
     *
     * @return Types\Context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Returns the current location.
     *
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Returns whether this DocBlock is the start of a Template section.
     *
     * A Docblock may serve as template for a series of subsequent DocBlocks. This is indicated by a special marker
     * (`#@+`) that is appended directly after the opening `/**` of a DocBlock.
     *
     * An example of such an opening is:
     *
     * ```
     * /**#@+
     *  * My DocBlock
     *  * /
     * ```
     *
     * The description and tags (not the summary!) are copied onto all subsequent DocBlocks and also applied to all
     * elements that follow until another DocBlock is found that contains the closing marker (`#@-`).
     *
     * @see self::isTemplateEnd() for the check whether a closing marker was provided.
     *
     * @return boolean
     */
    public function isTemplateStart()
    {
        return $this->isTemplateStart;
    }

    /**
     * Returns whether this DocBlock is the end of a Template section.
     *
     * @see self::isTemplateStart() for a more complete description of the Docblock Template functionality.
     *
     * @return boolean
     */
    public function isTemplateEnd()
    {
        return $this->isTemplateEnd;
    }

    /**
     * Returns the tags for this DocBlock.
     *
     * @return Tag[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Returns an array of tags matching the given name. If no tags are found
     * an empty array is returned.
     *
     * @param string $name String to search by.
     *
     * @return Tag[]
     */
    public function getTagsByName($name)
    {
        Assert::string($name);

        $result = [];

        /** @var Tag $tag */
        foreach ($this->getTags() as $tag) {
            if ($tag->getName() !== $name) {
                continue;
            }

            $result[] = $tag;
        }

        return $result;
    }

    /**
     * Checks if a tag of a certain type is present in this DocBlock.
     *
     * @param string $name Tag name to check for.
     *
     * @return bool
     */
    public function hasTag($name)
    {
        Assert::string($name);

        /** @var Tag $tag */
        foreach ($this->getTags() as $tag) {
            if ($tag->getName() === $name) {
                return true;
            }
        }

        return false;
    }

    /**
     * Remove a tag from this DocBlock.
     *
     * @param Tag $tag The tag to remove.
     *
     * @return void
     */
    public function removeTag(Tag $tagToRemove)
    {
        foreach ($this->tags as $key => $tag) {
            if ($tag === $tagToRemove) {
                unset($this->tags[$key]);
                break;
            }
        }
    }

    /**
     * Adds a tag to this DocBlock.
     *
     * @param Tag $tag The tag to add.
     *
     * @return void
     */
    private function addTag(Tag $tag)
    {
        $this->tags[] = $tag;
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\DocBlock\Tags\Formatter;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter;
use Webmozart\Assert\Assert;

/**
 * Object representing to description for a DocBlock.
 *
 * A Description object can consist of plain text but can also include tags. A Description Formatter can then combine
 * a body template with sprintf-style placeholders together with formatted tags in order to reconstitute a complete
 * description text using the format that you would prefer.
 *
 * Because parsing a Description text can be a verbose process this is handled by the {@see DescriptionFactory}. It is
 * thus recommended to use that to create a Description object, like this:
 *
 *     $description = $descriptionFactory->create('This is a {@see Description}', $context);
 *
 * The description factory will interpret the given body and create a body template and list of tags from them, and pass
 * that onto the constructor if this class.
 *
 * > The $context variable is a class of type {@see \phpDocumentor\Reflection\Types\Context} and contains the namespace
 * > and the namespace aliases that apply to this DocBlock. These are used by the Factory to resolve and expand partial
 * > type names and FQSENs.
 *
 * If you do not want to use the DescriptionFactory you can pass a body template and tag listing like this:
 *
 *     $description = new Description(
 *         'This is a %1$s',
 *         [ new See(new Fqsen('\phpDocumentor\Reflection\DocBlock\Description')) ]
 *     );
 *
 * It is generally recommended to use the Factory as that will also apply escaping rules, while the Description object
 * is mainly responsible for rendering.
 *
 * @see DescriptionFactory to create a new Description.
 * @see Description\Formatter for the formatting of the body and tags.
 */
class Description
{
    /** @var string */
    private $bodyTemplate;

    /** @var Tag[] */
    private $tags;

    /**
     * Initializes a Description with its body (template) and a listing of the tags used in the body template.
     *
     * @param string $bodyTemplate
     * @param Tag[] $tags
     */
    public function __construct($bodyTemplate, array $tags = [])
    {
        Assert::string($bodyTemplate);

        $this->bodyTemplate = $bodyTemplate;
        $this->tags = $tags;
    }

    /**
     * Returns the tags for this DocBlock.
     *
     * @return Tag[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Renders this description as a string where the provided formatter will format the tags in the expected string
     * format.
     *
     * @param Formatter|null $formatter
     *
     * @return string
     */
    public function render(Formatter $formatter = null)
    {
        if ($formatter === null) {
            $formatter = new PassthroughFormatter();
        }

        $tags = [];
        foreach ($this->tags as $tag) {
            $tags[] = '{' . $formatter->format($tag) . '}';
        }

        return vsprintf($this->bodyTemplate, $tags);
    }

    /**
     * Returns a plain string representation of this description.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @copyright 2010-2017 Mike van Riel<mike@phpdoc.org>
 *  @license   http://www.opensource.org/licenses/mit-license.php MIT
 *  @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags\Reference;

/**
 * Interface for references in {@see phpDocumentor\Reflection\DocBlock\Tags\See}
 */
interface Reference
{
    public function __toString();
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @copyright 2010-2017 Mike van Riel<mike@phpdoc.org>
 *  @license   http://www.opensource.org/licenses/mit-license.php MIT
 *  @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags\Reference;

use Webmozart\Assert\Assert;

/**
 * Url reference used by {@see phpDocumentor\Reflection\DocBlock\Tags\See}
 */
final class Url implements Reference
{
    /**
     * @var string
     */
    private $uri;

    /**
     * Url constructor.
     */
    public function __construct($uri)
    {
        Assert::stringNotEmpty($uri);
        $this->uri = $uri;
    }

    public function __toString()
    {
        return $this->uri;
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @copyright 2010-2017 Mike van Riel<mike@phpdoc.org>
 *  @license   http://www.opensource.org/licenses/mit-license.php MIT
 *  @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags\Reference;

use phpDocumentor\Reflection\Fqsen as RealFqsen;

/**
 * Fqsen reference used by {@see phpDocumentor\Reflection\DocBlock\Tags\See}
 */
final class Fqsen implements Reference
{
    /**
     * @var RealFqsen
     */
    private $fqsen;

    /**
     * Fqsen constructor.
     */
    public function __construct(RealFqsen $fqsen)
    {
        $this->fqsen = $fqsen;
    }

    /**
     * @return string string representation of the referenced fqsen
     */
    public function __toString()
    {
        return (string)$this->fqsen;
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}property-read tag in a Docblock.
 */
class PropertyRead extends TagWithType implements Factory\StaticMethod
{
    /** @var string */
    protected $variableName = '';

    /**
     * @param string $variableName
     * @param Type $type
     * @param Description $description
     */
    public function __construct($variableName, Type $type = null, Description $description = null)
    {
        Assert::string($variableName);

        $this->name = 'property-read';
        $this->variableName = $variableName;
        $this->type = $type;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::stringNotEmpty($body);
        Assert::allNotNull([$typeResolver, $descriptionFactory]);

        list($firstPart, $body) = self::extractTypeFromBody($body);
        $type = null;
        $parts = preg_split('/(\s+)/Su', $body, 2, PREG_SPLIT_DELIM_CAPTURE);
        $variableName = '';

        // if the first item that is encountered is not a variable; it is a type
        if ($firstPart && (strlen($firstPart) > 0) && ($firstPart[0] !== '$')) {
            $type = $typeResolver->resolve($firstPart, $context);
        } else {
            // first part is not a type; we should prepend it to the parts array for further processing
            array_unshift($parts, $firstPart);
        }

        // if the next item starts with a $ or ...$ it must be the variable name
        if (isset($parts[0]) && (strlen($parts[0]) > 0) && ($parts[0][0] === '$')) {
            $variableName = array_shift($parts);
            array_shift($parts);

            if (substr($variableName, 0, 1) === '$') {
                $variableName = substr($variableName, 1);
            }
        }

        $description = $descriptionFactory->create(implode('', $parts), $context);

        return new static($variableName, $type, $description);
    }

    /**
     * Returns the variable's name.
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->variableName;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return ($this->type ? $this->type . ' ' : '')
            . '$' . $this->variableName
            . ($this->description ? ' ' . $this->description : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}return tag in a Docblock.
 */
final class Return_ extends TagWithType implements Factory\StaticMethod
{
    public function __construct(Type $type, Description $description = null)
    {
        $this->name = 'return';
        $this->type = $type;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::string($body);
        Assert::allNotNull([$typeResolver, $descriptionFactory]);

        list($type, $description) = self::extractTypeFromBody($body);

        $type = $typeResolver->resolve($type, $context);
        $description = $descriptionFactory->create($description, $context);

        return new static($type, $description);
    }

    public function __toString()
    {
        return $this->type . ' ' . $this->description;
    }
}
<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @author    Vasil Rangelov <boen.robot@gmail.com>
 * @copyright 2010-2011 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}version tag in a Docblock.
 */
final class Version extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'version';

    /**
     * PCRE regular expression matching a version vector.
     * Assumes the "x" modifier.
     */
    const REGEX_VECTOR = '(?:
        # Normal release vectors.
        \d\S*
        |
        # VCS version vectors. Per PHPCS, they are expected to
        # follow the form of the VCS name, followed by ":", followed
        # by the version vector itself.
        # By convention, popular VCSes like CVS, SVN and GIT use "$"
        # around the actual version vector.
        [^\s\:]+\:\s*\$[^\$]+\$
    )';

    /** @var string The version vector. */
    private $version = '';

    public function __construct($version = null, Description $description = null)
    {
        Assert::nullOrStringNotEmpty($version);

        $this->version = $version;
        $this->description = $description;
    }

    /**
     * @return static
     */
    public static function create($body, DescriptionFactory $descriptionFactory = null, TypeContext $context = null)
    {
        Assert::nullOrString($body);
        if (empty($body)) {
            return new static();
        }

        $matches = [];
        if (!preg_match('/^(' . self::REGEX_VECTOR . ')\s*(.+)?$/sux', $body, $matches)) {
            return null;
        }

        return new static(
            $matches[1],
            $descriptionFactory->create(isset($matches[2]) ? $matches[2] : '', $context)
        );
    }

    /**
     * Gets the version section of the tag.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->version . ($this->description ? ' ' . $this->description->render() : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags\Formatter;

use phpDocumentor\Reflection\DocBlock\Tag;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;

class PassthroughFormatter implements Formatter
{
    /**
     * Formats the given tag to return a simple plain text version.
     *
     * @param Tag $tag
     *
     * @return string
     */
    public function format(Tag $tag)
    {
        return trim('@' . $tag->getName() . ' ' . (string)$tag);
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Jan Schneider <jan@horde.org>
 * @copyright 2017 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags\Formatter;

use phpDocumentor\Reflection\DocBlock\Tag;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;

class AlignFormatter implements Formatter
{
    /** @var int The maximum tag name length. */
    protected $maxLen = 0;

    /**
     * Constructor.
     *
     * @param Tag[] $tags All tags that should later be aligned with the formatter.
     */
    public function __construct(array $tags)
    {
        foreach ($tags as $tag) {
            $this->maxLen = max($this->maxLen, strlen($tag->getName()));
        }
    }

    /**
     * Formats the given tag to return a simple plain text version.
     *
     * @param Tag $tag
     *
     * @return string
     */
    public function format(Tag $tag)
    {
        return '@' . $tag->getName() . str_repeat(' ', $this->maxLen - strlen($tag->getName()) + 1) . (string)$tag;
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}property tag in a Docblock.
 */
class Property extends TagWithType implements Factory\StaticMethod
{
    /** @var string */
    protected $variableName = '';

    /**
     * @param string $variableName
     * @param Type $type
     * @param Description $description
     */
    public function __construct($variableName, Type $type = null, Description $description = null)
    {
        Assert::string($variableName);

        $this->name = 'property';
        $this->variableName = $variableName;
        $this->type = $type;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::stringNotEmpty($body);
        Assert::allNotNull([$typeResolver, $descriptionFactory]);

        list($firstPart, $body) = self::extractTypeFromBody($body);
        $type = null;
        $parts = preg_split('/(\s+)/Su', $body, 2, PREG_SPLIT_DELIM_CAPTURE);
        $variableName = '';

        // if the first item that is encountered is not a variable; it is a type
        if ($firstPart && (strlen($firstPart) > 0) && ($firstPart[0] !== '$')) {
            $type = $typeResolver->resolve($firstPart, $context);
        } else {
            // first part is not a type; we should prepend it to the parts array for further processing
            array_unshift($parts, $firstPart);
        }

        // if the next item starts with a $ or ...$ it must be the variable name
        if (isset($parts[0]) && (strlen($parts[0]) > 0) && ($parts[0][0] === '$')) {
            $variableName = array_shift($parts);
            array_shift($parts);

            if (substr($variableName, 0, 1) === '$') {
                $variableName = substr($variableName, 1);
            }
        }

        $description = $descriptionFactory->create(implode('', $parts), $context);

        return new static($variableName, $type, $description);
    }

    /**
     * Returns the variable's name.
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->variableName;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return ($this->type ? $this->type . ' ' : '')
            . '$' . $this->variableName
            . ($this->description ? ' ' . $this->description : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}source tag in a Docblock.
 */
final class Source extends BaseTag implements Factory\StaticMethod
{
    /** @var string */
    protected $name = 'source';

    /** @var int The starting line, relative to the structural element's location. */
    private $startingLine = 1;

    /** @var int|null The number of lines, relative to the starting line. NULL means "to the end". */
    private $lineCount = null;

    public function __construct($startingLine, $lineCount = null, Description $description = null)
    {
        Assert::integerish($startingLine);
        Assert::nullOrIntegerish($lineCount);

        $this->startingLine = (int)$startingLine;
        $this->lineCount    = $lineCount !== null ? (int)$lineCount : null;
        $this->description  = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create($body, DescriptionFactory $descriptionFactory = null, TypeContext $context = null)
    {
        Assert::stringNotEmpty($body);
        Assert::notNull($descriptionFactory);

        $startingLine = 1;
        $lineCount    = null;
        $description  = null;

        // Starting line / Number of lines / Description
        if (preg_match('/^([1-9]\d*)\s*(?:((?1))\s+)?(.*)$/sux', $body, $matches)) {
            $startingLine = (int)$matches[1];
            if (isset($matches[2]) && $matches[2] !== '') {
                $lineCount = (int)$matches[2];
            }

            $description = $matches[3];
        }

        return new static($startingLine, $lineCount, $descriptionFactory->create($description, $context));
    }

    /**
     * Gets the starting line.
     *
     * @return int The starting line, relative to the structural element's
     *     location.
     */
    public function getStartingLine()
    {
        return $this->startingLine;
    }

    /**
     * Returns the number of lines.
     *
     * @return int|null The number of lines, relative to the starting line. NULL
     *     means "to the end".
     */
    public function getLineCount()
    {
        return $this->lineCount;
    }

    public function __toString()
    {
        return $this->startingLine
        . ($this->lineCount !== null ? ' ' . $this->lineCount : '')
        . ($this->description ? ' ' . $this->description->render() : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use Webmozart\Assert\Assert;

/**
 * Reflection class for an {@}author tag in a Docblock.
 */
final class Author extends BaseTag implements Factory\StaticMethod
{
    /** @var string register that this is the author tag. */
    protected $name = 'author';

    /** @var string The name of the author */
    private $authorName = '';

    /** @var string The email of the author */
    private $authorEmail = '';

    /**
     * Initializes this tag with the author name and e-mail.
     *
     * @param string $authorName
     * @param string $authorEmail
     */
    public function __construct($authorName, $authorEmail)
    {
        Assert::string($authorName);
        Assert::string($authorEmail);
        if ($authorEmail && !filter_var($authorEmail, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('The author tag does not have a valid e-mail address');
        }

        $this->authorName  = $authorName;
        $this->authorEmail = $authorEmail;
    }

    /**
     * Gets the author's name.
     *
     * @return string The author's name.
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * Returns the author's email.
     *
     * @return string The author's email.
     */
    public function getEmail()
    {
        return $this->authorEmail;
    }

    /**
     * Returns this tag in string form.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->authorName . (strlen($this->authorEmail) ? ' <' . $this->authorEmail . '>' : '');
    }

    /**
     * Attempts to create a new Author object based on †he tag body.
     *
     * @param string $body
     *
     * @return static
     */
    public static function create($body)
    {
        Assert::string($body);

        $splitTagContent = preg_match('/^([^\<]*)(?:\<([^\>]*)\>)?$/u', $body, $matches);
        if (!$splitTagContent) {
            return null;
        }

        $authorName = trim($matches[1]);
        $email = isset($matches[2]) ? trim($matches[2]) : '';

        return new static($authorName, $email);
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}var tag in a Docblock.
 */
class Var_ extends TagWithType implements Factory\StaticMethod
{
    /** @var string */
    protected $variableName = '';

    /**
     * @param string $variableName
     * @param Type $type
     * @param Description $description
     */
    public function __construct($variableName, Type $type = null, Description $description = null)
    {
        Assert::string($variableName);

        $this->name = 'var';
        $this->variableName = $variableName;
        $this->type = $type;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::stringNotEmpty($body);
        Assert::allNotNull([$typeResolver, $descriptionFactory]);

        list($firstPart, $body) = self::extractTypeFromBody($body);
        $parts = preg_split('/(\s+)/Su', $body, 2, PREG_SPLIT_DELIM_CAPTURE);
        $type = null;
        $variableName = '';

        // if the first item that is encountered is not a variable; it is a type
        if ($firstPart && (strlen($firstPart) > 0) && ($firstPart[0] !== '$')) {
            $type = $typeResolver->resolve($firstPart, $context);
        } else {
            // first part is not a type; we should prepend it to the parts array for further processing
            array_unshift($parts, $firstPart);
        }

        // if the next item starts with a $ or ...$ it must be the variable name
        if (isset($parts[0]) && (strlen($parts[0]) > 0) && ($parts[0][0] === '$')) {
            $variableName = array_shift($parts);
            array_shift($parts);

            if (substr($variableName, 0, 1) === '$') {
                $variableName = substr($variableName, 1);
            }
        }

        $description = $descriptionFactory->create(implode('', $parts), $context);

        return new static($variableName, $type, $description);
    }

    /**
     * Returns the variable's name.
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->variableName;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return ($this->type ? $this->type . ' ' : '')
            . (empty($this->variableName) ? null : ('$' . $this->variableName))
            . ($this->description ? ' ' . $this->description : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\Tag;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}example tag in a Docblock.
 */
final class Example extends BaseTag implements Factory\StaticMethod
{
    /**
     * @var string Path to a file to use as an example. May also be an absolute URI.
     */
    private $filePath;

    /**
     * @var bool Whether the file path component represents an URI. This determines how the file portion
     *     appears at {@link getContent()}.
     */
    private $isURI = false;

    /**
     * @var int
     */
    private $startingLine;

    /**
     * @var int
     */
    private $lineCount;

    public function __construct($filePath, $isURI, $startingLine, $lineCount, $description)
    {
        Assert::notEmpty($filePath);
        Assert::integer($startingLine);
        Assert::greaterThanEq($startingLine, 0);

        $this->filePath = $filePath;
        $this->startingLine = $startingLine;
        $this->lineCount = $lineCount;
        $this->name = 'example';
        if ($description !== null) {
            $this->description = trim($description);
        }

        $this->isURI = $isURI;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        if (null === $this->description) {
            $filePath = '"' . $this->filePath . '"';
            if ($this->isURI) {
                $filePath = $this->isUriRelative($this->filePath)
                    ? str_replace('%2F', '/', rawurlencode($this->filePath))
                    :$this->filePath;
            }

            return trim($filePath . ' ' . parent::getDescription());
        }

        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create($body)
    {
        // File component: File path in quotes or File URI / Source information
        if (! preg_match('/^(?:\"([^\"]+)\"|(\S+))(?:\s+(.*))?$/sux', $body, $matches)) {
            return null;
        }

        $filePath = null;
        $fileUri  = null;
        if ('' !== $matches[1]) {
            $filePath = $matches[1];
        } else {
            $fileUri = $matches[2];
        }

        $startingLine = 1;
        $lineCount    = null;
        $description  = null;

        if (array_key_exists(3, $matches)) {
            $description = $matches[3];

            // Starting line / Number of lines / Description
            if (preg_match('/^([1-9]\d*)(?:\s+((?1))\s*)?(.*)$/sux', $matches[3], $contentMatches)) {
                $startingLine = (int)$contentMatches[1];
                if (isset($contentMatches[2]) && $contentMatches[2] !== '') {
                    $lineCount = (int)$contentMatches[2];
                }

                if (array_key_exists(3, $contentMatches)) {
                    $description = $contentMatches[3];
                }
            }
        }

        return new static(
            $filePath !== null?$filePath:$fileUri,
            $fileUri !== null,
            $startingLine,
            $lineCount,
            $description
        );
    }

    /**
     * Returns the file path.
     *
     * @return string Path to a file to use as an example.
     *     May also be an absolute URI.
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->filePath . ($this->description ? ' ' . $this->description : '');
    }

    /**
     * Returns true if the provided URI is relative or contains a complete scheme (and thus is absolute).
     *
     * @param string $uri
     *
     * @return bool
     */
    private function isUriRelative($uri)
    {
        return false === strpos($uri, ':');
    }

    /**
     * @return int
     */
    public function getStartingLine()
    {
        return $this->startingLine;
    }

    /**
     * @return int
     */
    public function getLineCount()
    {
        return $this->lineCount;
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}property-write tag in a Docblock.
 */
class PropertyWrite extends TagWithType implements Factory\StaticMethod
{
    /** @var string */
    protected $variableName = '';

    /**
     * @param string $variableName
     * @param Type $type
     * @param Description $description
     */
    public function __construct($variableName, Type $type = null, Description $description = null)
    {
        Assert::string($variableName);

        $this->name = 'property-write';
        $this->variableName = $variableName;
        $this->type = $type;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::stringNotEmpty($body);
        Assert::allNotNull([$typeResolver, $descriptionFactory]);

        list($firstPart, $body) = self::extractTypeFromBody($body);
        $type = null;
        $parts = preg_split('/(\s+)/Su', $body, 2, PREG_SPLIT_DELIM_CAPTURE);
        $variableName = '';

        // if the first item that is encountered is not a variable; it is a type
        if ($firstPart && (strlen($firstPart) > 0) && ($firstPart[0] !== '$')) {
            $type = $typeResolver->resolve($firstPart, $context);
        } else {
            // first part is not a type; we should prepend it to the parts array for further processing
            array_unshift($parts, $firstPart);
        }

        // if the next item starts with a $ or ...$ it must be the variable name
        if (isset($parts[0]) && (strlen($parts[0]) > 0) && ($parts[0][0] === '$')) {
            $variableName = array_shift($parts);
            array_shift($parts);

            if (substr($variableName, 0, 1) === '$') {
                $variableName = substr($variableName, 1);
            }
        }

        $description = $descriptionFactory->create(implode('', $parts), $context);

        return new static($variableName, $type, $description);
    }

    /**
     * Returns the variable's name.
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->variableName;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return ($this->type ? $this->type . ' ' : '')
            . '$' . $this->variableName
            . ($this->description ? ' ' . $this->description : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}deprecated tag in a Docblock.
 */
final class Deprecated extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'deprecated';

    /**
     * PCRE regular expression matching a version vector.
     * Assumes the "x" modifier.
     */
    const REGEX_VECTOR = '(?:
        # Normal release vectors.
        \d\S*
        |
        # VCS version vectors. Per PHPCS, they are expected to
        # follow the form of the VCS name, followed by ":", followed
        # by the version vector itself.
        # By convention, popular VCSes like CVS, SVN and GIT use "$"
        # around the actual version vector.
        [^\s\:]+\:\s*\$[^\$]+\$
    )';

    /** @var string The version vector. */
    private $version = '';

    public function __construct($version = null, Description $description = null)
    {
        Assert::nullOrStringNotEmpty($version);

        $this->version = $version;
        $this->description = $description;
    }

    /**
     * @return static
     */
    public static function create($body, DescriptionFactory $descriptionFactory = null, TypeContext $context = null)
    {
        Assert::nullOrString($body);
        if (empty($body)) {
            return new static();
        }

        $matches = [];
        if (!preg_match('/^(' . self::REGEX_VECTOR . ')\s*(.+)?$/sux', $body, $matches)) {
            return new static(
                null,
                null !== $descriptionFactory ? $descriptionFactory->create($body, $context) : null
            );
        }

        return new static(
            $matches[1],
            $descriptionFactory->create(isset($matches[2]) ? $matches[2] : '', $context)
        );
    }

    /**
     * Gets the version section of the tag.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->version . ($this->description ? ' ' . $this->description->render() : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for the {@}param tag in a Docblock.
 */
final class Param extends TagWithType implements Factory\StaticMethod
{
    /** @var string */
    private $variableName = '';

    /** @var bool determines whether this is a variadic argument */
    private $isVariadic = false;

    /**
     * @param string $variableName
     * @param Type $type
     * @param bool $isVariadic
     * @param Description $description
     */
    public function __construct($variableName, Type $type = null, $isVariadic = false, Description $description = null)
    {
        Assert::string($variableName);
        Assert::boolean($isVariadic);

        $this->name = 'param';
        $this->variableName = $variableName;
        $this->type = $type;
        $this->isVariadic = $isVariadic;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::stringNotEmpty($body);
        Assert::allNotNull([$typeResolver, $descriptionFactory]);

        list($firstPart, $body) = self::extractTypeFromBody($body);
        $type = null;
        $parts = preg_split('/(\s+)/Su', $body, 2, PREG_SPLIT_DELIM_CAPTURE);
        $variableName = '';
        $isVariadic = false;

        // if the first item that is encountered is not a variable; it is a type
        if ($firstPart && (strlen($firstPart) > 0) && ($firstPart[0] !== '$')) {
            $type = $typeResolver->resolve($firstPart, $context);
        } else {
            // first part is not a type; we should prepend it to the parts array for further processing
            array_unshift($parts, $firstPart);
        }

        // if the next item starts with a $ or ...$ it must be the variable name
        if (isset($parts[0])
            && (strlen($parts[0]) > 0)
            && ($parts[0][0] === '$' || substr($parts[0], 0, 4) === '...$')
        ) {
            $variableName = array_shift($parts);
            array_shift($parts);

            if (substr($variableName, 0, 3) === '...') {
                $isVariadic = true;
                $variableName = substr($variableName, 3);
            }

            if (substr($variableName, 0, 1) === '$') {
                $variableName = substr($variableName, 1);
            }
        }

        $description = $descriptionFactory->create(implode('', $parts), $context);

        return new static($variableName, $type, $isVariadic, $description);
    }

    /**
     * Returns the variable's name.
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->variableName;
    }

    /**
     * Returns whether this tag is variadic.
     *
     * @return boolean
     */
    public function isVariadic()
    {
        return $this->isVariadic;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return ($this->type ? $this->type . ' ' : '')
            . ($this->isVariadic() ? '...' : '')
            . '$' . $this->variableName
            . ($this->description ? ' ' . $this->description : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use phpDocumentor\Reflection\Types\Void_;
use Webmozart\Assert\Assert;

/**
 * Reflection class for an {@}method in a Docblock.
 */
final class Method extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'method';

    /** @var string */
    private $methodName = '';

    /** @var string[] */
    private $arguments = [];

    /** @var bool */
    private $isStatic = false;

    /** @var Type */
    private $returnType;

    public function __construct(
        $methodName,
        array $arguments = [],
        Type $returnType = null,
        $static = false,
        Description $description = null
    ) {
        Assert::stringNotEmpty($methodName);
        Assert::boolean($static);

        if ($returnType === null) {
            $returnType = new Void_();
        }

        $this->methodName  = $methodName;
        $this->arguments   = $this->filterArguments($arguments);
        $this->returnType  = $returnType;
        $this->isStatic    = $static;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::stringNotEmpty($body);
        Assert::allNotNull([ $typeResolver, $descriptionFactory ]);

        // 1. none or more whitespace
        // 2. optionally the keyword "static" followed by whitespace
        // 3. optionally a word with underscores followed by whitespace : as
        //    type for the return value
        // 4. then optionally a word with underscores followed by () and
        //    whitespace : as method name as used by phpDocumentor
        // 5. then a word with underscores, followed by ( and any character
        //    until a ) and whitespace : as method name with signature
        // 6. any remaining text : as description
        if (!preg_match(
            '/^
                # Static keyword
                # Declares a static method ONLY if type is also present
                (?:
                    (static)
                    \s+
                )?
                # Return type
                (?:
                    (   
                        (?:[\w\|_\\\\]*\$this[\w\|_\\\\]*)
                        |
                        (?:
                            (?:[\w\|_\\\\]+)
                            # array notation           
                            (?:\[\])*
                        )*
                    )
                    \s+
                )?
                # Method name
                ([\w_]+)
                # Arguments
                (?:
                    \(([^\)]*)\)
                )?
                \s*
                # Description
                (.*)
            $/sux',
            $body,
            $matches
        )) {
            return null;
        }

        list(, $static, $returnType, $methodName, $arguments, $description) = $matches;

        $static      = $static === 'static';

        if ($returnType === '') {
            $returnType = 'void';
        }

        $returnType  = $typeResolver->resolve($returnType, $context);
        $description = $descriptionFactory->create($description, $context);

        if (is_string($arguments) && strlen($arguments) > 0) {
            $arguments = explode(',', $arguments);
            foreach ($arguments as &$argument) {
                $argument = explode(' ', self::stripRestArg(trim($argument)), 2);
                if ($argument[0][0] === '$') {
                    $argumentName = substr($argument[0], 1);
                    $argumentType = new Void_();
                } else {
                    $argumentType = $typeResolver->resolve($argument[0], $context);
                    $argumentName = '';
                    if (isset($argument[1])) {
                        $argument[1] = self::stripRestArg($argument[1]);
                        $argumentName = substr($argument[1], 1);
                    }
                }

                $argument = [ 'name' => $argumentName, 'type' => $argumentType];
            }
        } else {
            $arguments = [];
        }

        return new static($methodName, $arguments, $returnType, $static, $description);
    }

    /**
     * Retrieves the method name.
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * @return string[]
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * Checks whether the method tag describes a static method or not.
     *
     * @return bool TRUE if the method declaration is for a static method, FALSE otherwise.
     */
    public function isStatic()
    {
        return $this->isStatic;
    }

    /**
     * @return Type
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    public function __toString()
    {
        $arguments = [];
        foreach ($this->arguments as $argument) {
            $arguments[] = $argument['type'] . ' $' . $argument['name'];
        }

        return trim(($this->isStatic() ? 'static ' : '')
            . (string)$this->returnType . ' '
            . $this->methodName
            . '(' . implode(', ', $arguments) . ')'
            . ($this->description ? ' ' . $this->description->render() : ''));
    }

    private function filterArguments($arguments)
    {
        foreach ($arguments as &$argument) {
            if (is_string($argument)) {
                $argument = [ 'name' => $argument ];
            }

            if (! isset($argument['type'])) {
                $argument['type'] = new Void_();
            }

            $keys = array_keys($argument);
            sort($keys);
            if ($keys !== [ 'name', 'type' ]) {
                throw new \InvalidArgumentException(
                    'Arguments can only have the "name" and "type" fields, found: ' . var_export($keys, true)
                );
            }
        }

        return $arguments;
    }

    private static function stripRestArg($argument)
    {
        if (strpos($argument, '...') === 0) {
            $argument = trim(substr($argument, 3));
        }

        return $argument;
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}throws tag in a Docblock.
 */
final class Throws extends TagWithType implements Factory\StaticMethod
{
    public function __construct(Type $type, Description $description = null)
    {
        $this->name = 'throws';
        $this->type = $type;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::string($body);
        Assert::allNotNull([$typeResolver, $descriptionFactory]);

        list($type, $description) = self::extractTypeFromBody($body);

        $type = $typeResolver->resolve($type, $context);
        $description = $descriptionFactory->create($description, $context);

        return new static($type, $description);
    }

    public function __toString()
    {
        return $this->type . ' ' . $this->description;
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}since tag in a Docblock.
 */
final class Since extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'since';

    /**
     * PCRE regular expression matching a version vector.
     * Assumes the "x" modifier.
     */
    const REGEX_VECTOR = '(?:
        # Normal release vectors.
        \d\S*
        |
        # VCS version vectors. Per PHPCS, they are expected to
        # follow the form of the VCS name, followed by ":", followed
        # by the version vector itself.
        # By convention, popular VCSes like CVS, SVN and GIT use "$"
        # around the actual version vector.
        [^\s\:]+\:\s*\$[^\$]+\$
    )';

    /** @var string The version vector. */
    private $version = '';

    public function __construct($version = null, Description $description = null)
    {
        Assert::nullOrStringNotEmpty($version);

        $this->version     = $version;
        $this->description = $description;
    }

    /**
     * @return static
     */
    public static function create($body, DescriptionFactory $descriptionFactory = null, TypeContext $context = null)
    {
        Assert::nullOrString($body);
        if (empty($body)) {
            return new static();
        }

        $matches = [];
        if (! preg_match('/^(' . self::REGEX_VECTOR . ')\s*(.+)?$/sux', $body, $matches)) {
            return null;
        }

        return new static(
            $matches[1],
            $descriptionFactory->create(isset($matches[2]) ? $matches[2] : '', $context)
        );
    }

    /**
     * Gets the version section of the tag.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->version . ($this->description ? ' ' . $this->description->render() : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\DocBlock\StandardTagFactory;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Parses a tag definition for a DocBlock.
 */
class Generic extends BaseTag implements Factory\StaticMethod
{
    /**
     * Parses a tag and populates the member variables.
     *
     * @param string $name Name of the tag.
     * @param Description $description The contents of the given tag.
     */
    public function __construct($name, Description $description = null)
    {
        $this->validateTagName($name);

        $this->name = $name;
        $this->description = $description;
    }

    /**
     * Creates a new tag that represents any unknown tag type.
     *
     * @param string             $body
     * @param string             $name
     * @param DescriptionFactory $descriptionFactory
     * @param TypeContext        $context
     *
     * @return static
     */
    public static function create(
        $body,
        $name = '',
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::string($body);
        Assert::stringNotEmpty($name);
        Assert::notNull($descriptionFactory);

        $description = $descriptionFactory && $body !== "" ? $descriptionFactory->create($body, $context) : null;

        return new static($name, $description);
    }

    /**
     * Returns the tag as a serialized string
     *
     * @return string
     */
    public function __toString()
    {
        return ($this->description ? $this->description->render() : '');
    }

    /**
     * Validates if the tag name matches the expected format, otherwise throws an exception.
     *
     * @param string $name
     *
     * @return void
     */
    private function validateTagName($name)
    {
        if (! preg_match('/^' . StandardTagFactory::REGEX_TAGNAME . '$/u', $name)) {
            throw new \InvalidArgumentException(
                'The tag name "' . $name . '" is not wellformed. Tags may only consist of letters, underscores, '
                . 'hyphens and backslashes.'
            );
        }
    }
}
<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @author    Ben Selby <benmatselby@gmail.com>
 * @copyright 2010-2011 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a @link tag in a Docblock.
 */
final class Link extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'link';

    /** @var string */
    private $link = '';

    /**
     * Initializes a link to a URL.
     *
     * @param string      $link
     * @param Description $description
     */
    public function __construct($link, Description $description = null)
    {
        Assert::string($link);

        $this->link = $link;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create($body, DescriptionFactory $descriptionFactory = null, TypeContext $context = null)
    {
        Assert::string($body);
        Assert::notNull($descriptionFactory);

        $parts = preg_split('/\s+/Su', $body, 2);
        $description = isset($parts[1]) ? $descriptionFactory->create($parts[1], $context) : null;

        return new static($parts[0], $description);
    }

    /**
    * Gets the link
    *
    * @return string
    */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->link . ($this->description ? ' ' . $this->description->render() : '');
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\Type;

abstract class TagWithType extends BaseTag
{
    /** @var Type */
    protected $type;

    /**
     * Returns the type section of the variable.
     *
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }

    protected static function extractTypeFromBody(string $body) : array
    {
        $type = '';
        $nestingLevel = 0;
        for ($i = 0; $i < strlen($body); $i++) {
            $character = $body[$i];

            if (trim($character) === '' && $nestingLevel === 0) {
                break;
            }

            $type .= $character;
            if (in_array($character, ['<', '(', '[', '{'])) {
                $nestingLevel++;
            }

            if (in_array($character, ['>', ')', ']', '}'])) {
                $nestingLevel--;
            }
        }

        $description = trim(substr($body, strlen($type)));

        return [$type, $description];
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\FqsenResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}uses tag in a Docblock.
 */
final class Uses extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'uses';

    /** @var Fqsen */
    protected $refers = null;

    /**
     * Initializes this tag.
     *
     * @param Fqsen       $refers
     * @param Description $description
     */
    public function __construct(Fqsen $refers, Description $description = null)
    {
        $this->refers      = $refers;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        FqsenResolver $resolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::string($body);
        Assert::allNotNull([$resolver, $descriptionFactory]);

        $parts = preg_split('/\s+/Su', $body, 2);

        return new static(
            $resolver->resolve($parts[0], $context),
            $descriptionFactory->create(isset($parts[1]) ? $parts[1] : '', $context)
        );
    }

    /**
     * Returns the structural element this tag refers to.
     *
     * @return Fqsen
     */
    public function getReference()
    {
        return $this->refers;
    }

    /**
     * Returns a string representation of this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->refers . ' ' . $this->description->render();
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags\Factory;

interface StaticMethod
{
    public static function create($body);
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags\Factory;

interface Strategy
{
    public function create($body);
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Tag;

interface Formatter
{
    /**
     * Formats a tag into a string representation according to a specific format, such as Markdown.
     *
     * @param Tag $tag
     *
     * @return string
     */
    public function format(Tag $tag);
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlock\Description;

/**
 * Parses a tag definition for a DocBlock.
 */
abstract class BaseTag implements DocBlock\Tag
{
    /** @var string Name of the tag */
    protected $name = '';

    /** @var Description|null Description of the tag. */
    protected $description;

    /**
     * Gets the name of this tag.
     *
     * @return string The name of this tag.
     */
    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function render(Formatter $formatter = null)
    {
        if ($formatter === null) {
            $formatter = new Formatter\PassthroughFormatter();
        }

        return $formatter->format($this);
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Fqsen as FqsenRef;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use phpDocumentor\Reflection\FqsenResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for an {@}see tag in a Docblock.
 */
class See extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'see';

    /** @var Reference */
    protected $refers = null;

    /**
     * Initializes this tag.
     *
     * @param Reference $refers
     * @param Description $description
     */
    public function __construct(Reference $refers, Description $description = null)
    {
        $this->refers = $refers;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        FqsenResolver $resolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::string($body);
        Assert::allNotNull([$resolver, $descriptionFactory]);

        $parts       = preg_split('/\s+/Su', $body, 2);
        $description = isset($parts[1]) ? $descriptionFactory->create($parts[1], $context) : null;

        // https://tools.ietf.org/html/rfc2396#section-3
        if (preg_match('/\w:\/\/\w/i', $parts[0])) {
            return new static(new Url($parts[0]), $description);
        }

        return new static(new FqsenRef($resolver->resolve($parts[0], $context)), $description);
    }

    /**
     * Returns the ref of this tag.
     *
     * @return Reference
     */
    public function getReference()
    {
        return $this->refers;
    }

    /**
     * Returns a string representation of this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->refers . ($this->description ? ' ' . $this->description->render() : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\FqsenResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a @covers tag in a Docblock.
 */
final class Covers extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'covers';

    /** @var Fqsen */
    private $refers = null;

    /**
     * Initializes this tag.
     *
     * @param Fqsen $refers
     * @param Description $description
     */
    public function __construct(Fqsen $refers, Description $description = null)
    {
        $this->refers = $refers;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        DescriptionFactory $descriptionFactory = null,
        FqsenResolver $resolver = null,
        TypeContext $context = null
    ) {
        Assert::string($body);
        Assert::notEmpty($body);

        $parts = preg_split('/\s+/Su', $body, 2);

        return new static(
            $resolver->resolve($parts[0], $context),
            $descriptionFactory->create(isset($parts[1]) ? $parts[1] : '', $context)
        );
    }

    /**
     * Returns the structural element this tag refers to.
     *
     * @return Fqsen
     */
    public function getReference()
    {
        return $this->refers;
    }

    /**
     * Returns a string representation of this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->refers . ($this->description ? ' ' . $this->description->render() : '');
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\Types\Context as TypeContext;

/**
 * Creates a new Description object given a body of text.
 *
 * Descriptions in phpDocumentor are somewhat complex entities as they can contain one or more tags inside their
 * body that can be replaced with a readable output. The replacing is done by passing a Formatter object to the
 * Description object's `render` method.
 *
 * In addition to the above does a Description support two types of escape sequences:
 *
 * 1. `{@}` to escape the `@` character to prevent it from being interpreted as part of a tag, i.e. `{{@}link}`
 * 2. `{}` to escape the `}` character, this can be used if you want to use the `}` character in the description
 *    of an inline tag.
 *
 * If a body consists of multiple lines then this factory will also remove any superfluous whitespace at the beginning
 * of each line while maintaining any indentation that is used. This will prevent formatting parsers from tripping
 * over unexpected spaces as can be observed with tag descriptions.
 */
class DescriptionFactory
{
    /** @var TagFactory */
    private $tagFactory;

    /**
     * Initializes this factory with the means to construct (inline) tags.
     *
     * @param TagFactory $tagFactory
     */
    public function __construct(TagFactory $tagFactory)
    {
        $this->tagFactory = $tagFactory;
    }

    /**
     * Returns the parsed text of this description.
     *
     * @param string $contents
     * @param TypeContext $context
     *
     * @return Description
     */
    public function create($contents, TypeContext $context = null)
    {
        list($text, $tags) = $this->parse($this->lex($contents), $context);

        return new Description($text, $tags);
    }

    /**
     * Strips the contents from superfluous whitespace and splits the description into a series of tokens.
     *
     * @param string $contents
     *
     * @return string[] A series of tokens of which the description text is composed.
     */
    private function lex($contents)
    {
        $contents = $this->removeSuperfluousStartingWhitespace($contents);

        // performance optimalization; if there is no inline tag, don't bother splitting it up.
        if (strpos($contents, '{@') === false) {
            return [$contents];
        }

        return preg_split(
            '/\{
                # "{@}" is not a valid inline tag. This ensures that we do not treat it as one, but treat it literally.
                (?!@\})
                # We want to capture the whole tag line, but without the inline tag delimiters.
                (\@
                    # Match everything up to the next delimiter.
                    [^{}]*
                    # Nested inline tag content should not be captured, or it will appear in the result separately.
                    (?:
                        # Match nested inline tags.
                        (?:
                            # Because we did not catch the tag delimiters earlier, we must be explicit with them here.
                            # Notice that this also matches "{}", as a way to later introduce it as an escape sequence.
                            \{(?1)?\}
                            |
                            # Make sure we match hanging "{".
                            \{
                        )
                        # Match content after the nested inline tag.
                        [^{}]*
                    )* # If there are more inline tags, match them as well. We use "*" since there may not be any
                       # nested inline tags.
                )
            \}/Sux',
            $contents,
            null,
            PREG_SPLIT_DELIM_CAPTURE
        );
    }

    /**
     * Parses the stream of tokens in to a new set of tokens containing Tags.
     *
     * @param string[] $tokens
     * @param TypeContext $context
     *
     * @return string[]|Tag[]
     */
    private function parse($tokens, TypeContext $context)
    {
        $count = count($tokens);
        $tagCount = 0;
        $tags  = [];

        for ($i = 1; $i < $count; $i += 2) {
            $tags[] = $this->tagFactory->create($tokens[$i], $context);
            $tokens[$i] = '%' . ++$tagCount . '$s';
        }

        //In order to allow "literal" inline tags, the otherwise invalid
        //sequence "{@}" is changed to "@", and "{}" is changed to "}".
        //"%" is escaped to "%%" because of vsprintf.
        //See unit tests for examples.
        for ($i = 0; $i < $count; $i += 2) {
            $tokens[$i] = str_replace(['{@}', '{}', '%'], ['@', '}', '%%'], $tokens[$i]);
        }

        return [implode('', $tokens), $tags];
    }

    /**
     * Removes the superfluous from a multi-line description.
     *
     * When a description has more than one line then it can happen that the second and subsequent lines have an
     * additional indentation. This is commonly in use with tags like this:
     *
     *     {@}since 1.1.0 This is an example
     *         description where we have an
     *         indentation in the second and
     *         subsequent lines.
     *
     * If we do not normalize the indentation then we have superfluous whitespace on the second and subsequent
     * lines and this may cause rendering issues when, for example, using a Markdown converter.
     *
     * @param string $contents
     *
     * @return string
     */
    private function removeSuperfluousStartingWhitespace($contents)
    {
        $lines = explode("\n", $contents);

        // if there is only one line then we don't have lines with superfluous whitespace and
        // can use the contents as-is
        if (count($lines) <= 1) {
            return $contents;
        }

        // determine how many whitespace characters need to be stripped
        $startingSpaceCount = 9999999;
        for ($i = 1; $i < count($lines); $i++) {
            // lines with a no length do not count as they are not indented at all
            if (strlen(trim($lines[$i])) === 0) {
                continue;
            }

            // determine the number of prefixing spaces by checking the difference in line length before and after
            // an ltrim
            $startingSpaceCount = min($startingSpaceCount, strlen($lines[$i]) - strlen(ltrim($lines[$i])));
        }

        // strip the number of spaces from each line
        if ($startingSpaceCount > 0) {
            for ($i = 1; $i < count($lines); $i++) {
                $lines[$i] = substr($lines[$i], $startingSpaceCount);
            }
        }

        return implode("\n", $lines);
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\DocBlock\Tags\Example;

/**
 * Class used to find an example file's location based on a given ExampleDescriptor.
 */
class ExampleFinder
{
    /** @var string */
    private $sourceDirectory = '';

    /** @var string[] */
    private $exampleDirectories = [];

    /**
     * Attempts to find the example contents for the given descriptor.
     *
     * @param Example $example
     *
     * @return string
     */
    public function find(Example $example)
    {
        $filename = $example->getFilePath();

        $file = $this->getExampleFileContents($filename);
        if (!$file) {
            return "** File not found : {$filename} **";
        }

        return implode('', array_slice($file, $example->getStartingLine() - 1, $example->getLineCount()));
    }

    /**
     * Registers the project's root directory where an 'examples' folder can be expected.
     *
     * @param string $directory
     *
     * @return void
     */
    public function setSourceDirectory($directory = '')
    {
        $this->sourceDirectory = $directory;
    }

    /**
     * Returns the project's root directory where an 'examples' folder can be expected.
     *
     * @return string
     */
    public function getSourceDirectory()
    {
        return $this->sourceDirectory;
    }

    /**
     * Registers a series of directories that may contain examples.
     *
     * @param string[] $directories
     */
    public function setExampleDirectories(array $directories)
    {
        $this->exampleDirectories = $directories;
    }

    /**
     * Returns a series of directories that may contain examples.
     *
     * @return string[]
     */
    public function getExampleDirectories()
    {
        return $this->exampleDirectories;
    }

    /**
     * Attempts to find the requested example file and returns its contents or null if no file was found.
     *
     * This method will try several methods in search of the given example file, the first one it encounters is
     * returned:
     *
     * 1. Iterates through all examples folders for the given filename
     * 2. Checks the source folder for the given filename
     * 3. Checks the 'examples' folder in the current working directory for examples
     * 4. Checks the path relative to the current working directory for the given filename
     *
     * @param string $filename
     *
     * @return string|null
     */
    private function getExampleFileContents($filename)
    {
        $normalizedPath = null;

        foreach ($this->exampleDirectories as $directory) {
            $exampleFileFromConfig = $this->constructExamplePath($directory, $filename);
            if (is_readable($exampleFileFromConfig)) {
                $normalizedPath = $exampleFileFromConfig;
                break;
            }
        }

        if (!$normalizedPath) {
            if (is_readable($this->getExamplePathFromSource($filename))) {
                $normalizedPath = $this->getExamplePathFromSource($filename);
            } elseif (is_readable($this->getExamplePathFromExampleDirectory($filename))) {
                $normalizedPath = $this->getExamplePathFromExampleDirectory($filename);
            } elseif (is_readable($filename)) {
                $normalizedPath = $filename;
            }
        }

        return $normalizedPath && is_readable($normalizedPath) ? file($normalizedPath) : null;
    }

    /**
     * Get example filepath based on the example directory inside your project.
     *
     * @param string $file
     *
     * @return string
     */
    private function getExamplePathFromExampleDirectory($file)
    {
        return getcwd() . DIRECTORY_SEPARATOR . 'examples' . DIRECTORY_SEPARATOR . $file;
    }

    /**
     * Returns a path to the example file in the given directory..
     *
     * @param string $directory
     * @param string $file
     *
     * @return string
     */
    private function constructExamplePath($directory, $file)
    {
        return rtrim($directory, '\\/') . DIRECTORY_SEPARATOR . $file;
    }

    /**
     * Get example filepath based on sourcecode.
     *
     * @param string $file
     *
     * @return string
     */
    private function getExamplePathFromSource($file)
    {
        return sprintf(
            '%s%s%s',
            trim($this->getSourceDirectory(), '\\/'),
            DIRECTORY_SEPARATOR,
            trim($file, '"')
        );
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\DocBlock\Tags\Formatter;

interface Tag
{
    public function getName();

    public static function create($body);

    public function render(Formatter $formatter = null);

    public function __toString();
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\DocBlock\Tags\Factory\StaticMethod;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;
use phpDocumentor\Reflection\FqsenResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Creates a Tag object given the contents of a tag.
 *
 * This Factory is capable of determining the appropriate class for a tag and instantiate it using its `create`
 * factory method. The `create` factory method of a Tag can have a variable number of arguments; this way you can
 * pass the dependencies that you need to construct a tag object.
 *
 * > Important: each parameter in addition to the body variable for the `create` method must default to null, otherwise
 * > it violates the constraint with the interface; it is recommended to use the {@see Assert::notNull()} method to
 * > verify that a dependency is actually passed.
 *
 * This Factory also features a Service Locator component that is used to pass the right dependencies to the
 * `create` method of a tag; each dependency should be registered as a service or as a parameter.
 *
 * When you want to use a Tag of your own with custom handling you need to call the `registerTagHandler` method, pass
 * the name of the tag and a Fully Qualified Class Name pointing to a class that implements the Tag interface.
 */
final class StandardTagFactory implements TagFactory
{
    /** PCRE regular expression matching a tag name. */
    const REGEX_TAGNAME = '[\w\-\_\\\\]+';

    /**
     * @var string[] An array with a tag as a key, and an FQCN to a class that handles it as an array value.
     */
    private $tagHandlerMappings = [
        'author'         => '\phpDocumentor\Reflection\DocBlock\Tags\Author',
        'covers'         => '\phpDocumentor\Reflection\DocBlock\Tags\Covers',
        'deprecated'     => '\phpDocumentor\Reflection\DocBlock\Tags\Deprecated',
        // 'example'        => '\phpDocumentor\Reflection\DocBlock\Tags\Example',
        'link'           => '\phpDocumentor\Reflection\DocBlock\Tags\Link',
        'method'         => '\phpDocumentor\Reflection\DocBlock\Tags\Method',
        'param'          => '\phpDocumentor\Reflection\DocBlock\Tags\Param',
        'property-read'  => '\phpDocumentor\Reflection\DocBlock\Tags\PropertyRead',
        'property'       => '\phpDocumentor\Reflection\DocBlock\Tags\Property',
        'property-write' => '\phpDocumentor\Reflection\DocBlock\Tags\PropertyWrite',
        'return'         => '\phpDocumentor\Reflection\DocBlock\Tags\Return_',
        'see'            => '\phpDocumentor\Reflection\DocBlock\Tags\See',
        'since'          => '\phpDocumentor\Reflection\DocBlock\Tags\Since',
        'source'         => '\phpDocumentor\Reflection\DocBlock\Tags\Source',
        'throw'          => '\phpDocumentor\Reflection\DocBlock\Tags\Throws',
        'throws'         => '\phpDocumentor\Reflection\DocBlock\Tags\Throws',
        'uses'           => '\phpDocumentor\Reflection\DocBlock\Tags\Uses',
        'var'            => '\phpDocumentor\Reflection\DocBlock\Tags\Var_',
        'version'        => '\phpDocumentor\Reflection\DocBlock\Tags\Version'
    ];

    /**
     * @var \ReflectionParameter[][] a lazy-loading cache containing parameters for each tagHandler that has been used.
     */
    private $tagHandlerParameterCache = [];

    /**
     * @var FqsenResolver
     */
    private $fqsenResolver;

    /**
     * @var mixed[] an array representing a simple Service Locator where we can store parameters and
     *     services that can be inserted into the Factory Methods of Tag Handlers.
     */
    private $serviceLocator = [];

    /**
     * Initialize this tag factory with the means to resolve an FQSEN and optionally a list of tag handlers.
     *
     * If no tag handlers are provided than the default list in the {@see self::$tagHandlerMappings} property
     * is used.
     *
     * @param FqsenResolver $fqsenResolver
     * @param string[]      $tagHandlers
     *
     * @see self::registerTagHandler() to add a new tag handler to the existing default list.
     */
    public function __construct(FqsenResolver $fqsenResolver, array $tagHandlers = null)
    {
        $this->fqsenResolver = $fqsenResolver;
        if ($tagHandlers !== null) {
            $this->tagHandlerMappings = $tagHandlers;
        }

        $this->addService($fqsenResolver, FqsenResolver::class);
    }

    /**
     * {@inheritDoc}
     */
    public function create($tagLine, TypeContext $context = null)
    {
        if (! $context) {
            $context = new TypeContext('');
        }

        list($tagName, $tagBody) = $this->extractTagParts($tagLine);

        if ($tagBody !== '' && $tagBody[0] === '[') {
            throw new \InvalidArgumentException(
                'The tag "' . $tagLine . '" does not seem to be wellformed, please check it for errors'
            );
        }

        return $this->createTag($tagBody, $tagName, $context);
    }

    /**
     * {@inheritDoc}
     */
    public function addParameter($name, $value)
    {
        $this->serviceLocator[$name] = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function addService($service, $alias = null)
    {
        $this->serviceLocator[$alias ?: get_class($service)] = $service;
    }

    /**
     * {@inheritDoc}
     */
    public function registerTagHandler($tagName, $handler)
    {
        Assert::stringNotEmpty($tagName);
        Assert::stringNotEmpty($handler);
        Assert::classExists($handler);
        Assert::implementsInterface($handler, StaticMethod::class);

        if (strpos($tagName, '\\') && $tagName[0] !== '\\') {
            throw new \InvalidArgumentException(
                'A namespaced tag must have a leading backslash as it must be fully qualified'
            );
        }

        $this->tagHandlerMappings[$tagName] = $handler;
    }

    /**
     * Extracts all components for a tag.
     *
     * @param string $tagLine
     *
     * @return string[]
     */
    private function extractTagParts($tagLine)
    {
        $matches = [];
        if (! preg_match('/^@(' . self::REGEX_TAGNAME . ')(?:\s*([^\s].*)|$)/us', $tagLine, $matches)) {
            throw new \InvalidArgumentException(
                'The tag "' . $tagLine . '" does not seem to be wellformed, please check it for errors'
            );
        }

        if (count($matches) < 3) {
            $matches[] = '';
        }

        return array_slice($matches, 1);
    }

    /**
     * Creates a new tag object with the given name and body or returns null if the tag name was recognized but the
     * body was invalid.
     *
     * @param string  $body
     * @param string  $name
     * @param TypeContext $context
     *
     * @return Tag|null
     */
    private function createTag($body, $name, TypeContext $context)
    {
        $handlerClassName = $this->findHandlerClassName($name, $context);
        $arguments        = $this->getArgumentsForParametersFromWiring(
            $this->fetchParametersForHandlerFactoryMethod($handlerClassName),
            $this->getServiceLocatorWithDynamicParameters($context, $name, $body)
        );

        return call_user_func_array([$handlerClassName, 'create'], $arguments);
    }

    /**
     * Determines the Fully Qualified Class Name of the Factory or Tag (containing a Factory Method `create`).
     *
     * @param string  $tagName
     * @param TypeContext $context
     *
     * @return string
     */
    private function findHandlerClassName($tagName, TypeContext $context)
    {
        $handlerClassName = Generic::class;
        if (isset($this->tagHandlerMappings[$tagName])) {
            $handlerClassName = $this->tagHandlerMappings[$tagName];
        } elseif ($this->isAnnotation($tagName)) {
            // TODO: Annotation support is planned for a later stage and as such is disabled for now
            // $tagName = (string)$this->fqsenResolver->resolve($tagName, $context);
            // if (isset($this->annotationMappings[$tagName])) {
            //     $handlerClassName = $this->annotationMappings[$tagName];
            // }
        }

        return $handlerClassName;
    }

    /**
     * Retrieves the arguments that need to be passed to the Factory Method with the given Parameters.
     *
     * @param \ReflectionParameter[] $parameters
     * @param mixed[]                $locator
     *
     * @return mixed[] A series of values that can be passed to the Factory Method of the tag whose parameters
     *     is provided with this method.
     */
    private function getArgumentsForParametersFromWiring($parameters, $locator)
    {
        $arguments = [];
        foreach ($parameters as $index => $parameter) {
            $typeHint = $parameter->getClass() ? $parameter->getClass()->getName() : null;
            if (isset($locator[$typeHint])) {
                $arguments[] = $locator[$typeHint];
                continue;
            }

            $parameterName = $parameter->getName();
            if (isset($locator[$parameterName])) {
                $arguments[] = $locator[$parameterName];
                continue;
            }

            $arguments[] = null;
        }

        return $arguments;
    }

    /**
     * Retrieves a series of ReflectionParameter objects for the static 'create' method of the given
     * tag handler class name.
     *
     * @param string $handlerClassName
     *
     * @return \ReflectionParameter[]
     */
    private function fetchParametersForHandlerFactoryMethod($handlerClassName)
    {
        if (! isset($this->tagHandlerParameterCache[$handlerClassName])) {
            $methodReflection                                  = new \ReflectionMethod($handlerClassName, 'create');
            $this->tagHandlerParameterCache[$handlerClassName] = $methodReflection->getParameters();
        }

        return $this->tagHandlerParameterCache[$handlerClassName];
    }

    /**
     * Returns a copy of this class' Service Locator with added dynamic parameters, such as the tag's name, body and
     * Context.
     *
     * @param TypeContext $context The Context (namespace and aliasses) that may be passed and is used to resolve FQSENs.
     * @param string      $tagName The name of the tag that may be passed onto the factory method of the Tag class.
     * @param string      $tagBody The body of the tag that may be passed onto the factory method of the Tag class.
     *
     * @return mixed[]
     */
    private function getServiceLocatorWithDynamicParameters(TypeContext $context, $tagName, $tagBody)
    {
        $locator = array_merge(
            $this->serviceLocator,
            [
                'name'             => $tagName,
                'body'             => $tagBody,
                TypeContext::class => $context
            ]
        );

        return $locator;
    }

    /**
     * Returns whether the given tag belongs to an annotation.
     *
     * @param string $tagContent
     *
     * @todo this method should be populated once we implement Annotation notation support.
     *
     * @return bool
     */
    private function isAnnotation($tagContent)
    {
        // 1. Contains a namespace separator
        // 2. Contains parenthesis
        // 3. Is present in a list of known annotations (make the algorithm smart by first checking is the last part
        //    of the annotation class name matches the found tag name

        return false;
    }
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\Types\Context as TypeContext;

interface TagFactory
{
    /**
     * Adds a parameter to the service locator that can be injected in a tag's factory method.
     *
     * When calling a tag's "create" method we always check the signature for dependencies to inject. One way is to
     * typehint a parameter in the signature so that we can use that interface or class name to inject a dependency
     * (see {@see addService()} for more information on that).
     *
     * Another way is to check the name of the argument against the names in the Service Locator. With this method
     * you can add a variable that will be inserted when a tag's create method is not typehinted and has a matching
     * name.
     *
     * Be aware that there are two reserved names:
     *
     * - name, representing the name of the tag.
     * - body, representing the complete body of the tag.
     *
     * These parameters are injected at the last moment and will override any existing parameter with those names.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    public function addParameter($name, $value);

    /**
     * Registers a service with the Service Locator using the FQCN of the class or the alias, if provided.
     *
     * When calling a tag's "create" method we always check the signature for dependencies to inject. If a parameter
     * has a typehint then the ServiceLocator is queried to see if a Service is registered for that typehint.
     *
     * Because interfaces are regularly used as type-hints this method provides an alias parameter; if the FQCN of the
     * interface is passed as alias then every time that interface is requested the provided service will be returned.
     *
     * @param object $service
     * @param string $alias
     *
     * @return void
     */
    public function addService($service);

    /**
     * Factory method responsible for instantiating the correct sub type.
     *
     * @param string $tagLine The text for this tag, including description.
     * @param TypeContext $context
     *
     * @throws \InvalidArgumentException if an invalid tag line was presented.
     *
     * @return Tag A new tag object.
     */
    public function create($tagLine, TypeContext $context = null);

    /**
     * Registers a handler for tags.
     *
     * If you want to use your own tags then you can use this method to instruct the TagFactory to register the name
     * of a tag with the FQCN of a 'Tag Handler'. The Tag handler should implement the {@see Tag} interface (and thus
     * the create method).
     *
     * @param string $tagName Name of tag to register a handler for. When registering a namespaced tag, the full
     *                        name, along with a prefixing slash MUST be provided.
     * @param string $handler FQCN of handler.
     *
     * @throws \InvalidArgumentException if the tag name is not a string
     * @throws \InvalidArgumentException if the tag name is namespaced (contains backslashes) but does not start with
     *     a backslash
     * @throws \InvalidArgumentException if the handler is not a string
     * @throws \InvalidArgumentException if the handler is not an existing class
     * @throws \InvalidArgumentException if the handler does not implement the {@see Tag} interface
     *
     * @return void
     */
    public function registerTagHandler($tagName, $handler);
}
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\DocBlock;
use Webmozart\Assert\Assert;

/**
 * Converts a DocBlock back from an object to a complete DocComment including Asterisks.
 */
class Serializer
{
    /** @var string The string to indent the comment with. */
    protected $indentString = ' ';

    /** @var int The number of times the indent string is repeated. */
    protected $indent = 0;

    /** @var bool Whether to indent the first line with the given indent amount and string. */
    protected $isFirstLineIndented = true;

    /** @var int|null The max length of a line. */
    protected $lineLength = null;

    /** @var DocBlock\Tags\Formatter A custom tag formatter. */
    protected $tagFormatter = null;

    /**
     * Create a Serializer instance.
     *
     * @param int $indent The number of times the indent string is repeated.
     * @param string   $indentString    The string to indent the comment with.
     * @param bool     $indentFirstLine Whether to indent the first line.
     * @param int|null $lineLength The max length of a line or NULL to disable line wrapping.
     * @param DocBlock\Tags\Formatter $tagFormatter A custom tag formatter, defaults to PassthroughFormatter.
     */
    public function __construct($indent = 0, $indentString = ' ', $indentFirstLine = true, $lineLength = null, $tagFormatter = null)
    {
        Assert::integer($indent);
        Assert::string($indentString);
        Assert::boolean($indentFirstLine);
        Assert::nullOrInteger($lineLength);
        Assert::nullOrIsInstanceOf($tagFormatter, 'phpDocumentor\Reflection\DocBlock\Tags\Formatter');

        $this->indent = $indent;
        $this->indentString = $indentString;
        $this->isFirstLineIndented = $indentFirstLine;
        $this->lineLength = $lineLength;
        $this->tagFormatter = $tagFormatter ?: new DocBlock\Tags\Formatter\PassthroughFormatter();
    }

    /**
     * Generate a DocBlock comment.
     *
     * @param DocBlock $docblock The DocBlock to serialize.
     *
     * @return string The serialized doc block.
     */
    public function getDocComment(DocBlock $docblock)
    {
        $indent = str_repeat($this->indentString, $this->indent);
        $firstIndent = $this->isFirstLineIndented ? $indent : '';
        // 3 === strlen(' * ')
        $wrapLength = $this->lineLength ? $this->lineLength - strlen($indent) - 3 : null;

        $text = $this->removeTrailingSpaces(
            $indent,
            $this->addAsterisksForEachLine(
                $indent,
                $this->getSummaryAndDescriptionTextBlock($docblock, $wrapLength)
            )
        );

        $comment = "{$firstIndent}/**\n";
        if ($text) {
            $comment .= "{$indent} * {$text}\n";
            $comment .= "{$indent} *\n";
        }

        $comment = $this->addTagBlock($docblock, $wrapLength, $indent, $comment);
        $comment .= $indent . ' */';

        return $comment;
    }

    /**
     * @param $indent
     * @param $text
     * @return mixed
     */
    private function removeTrailingSpaces($indent, $text)
    {
        return str_replace("\n{$indent} * \n", "\n{$indent} *\n", $text);
    }

    /**
     * @param $indent
     * @param $text
     * @return mixed
     */
    private function addAsterisksForEachLine($indent, $text)
    {
        return str_replace("\n", "\n{$indent} * ", $text);
    }

    /**
     * @param DocBlock $docblock
     * @param $wrapLength
     * @return string
     */
    private function getSummaryAndDescriptionTextBlock(DocBlock $docblock, $wrapLength)
    {
        $text = $docblock->getSummary() . ((string)$docblock->getDescription() ? "\n\n" . $docblock->getDescription()
                : '');
        if ($wrapLength !== null) {
            $text = wordwrap($text, $wrapLength);
            return $text;
        }

        return $text;
    }

    /**
     * @param DocBlock $docblock
     * @param $wrapLength
     * @param $indent
     * @param $comment
     * @return string
     */
    private function addTagBlock(DocBlock $docblock, $wrapLength, $indent, $comment)
    {
        foreach ($docblock->getTags() as $tag) {
            $tagText = $this->tagFormatter->format($tag);
            if ($wrapLength !== null) {
                $tagText = wordwrap($tagText, $wrapLength);
            }

            $tagText = str_replace("\n", "\n{$indent} * ", $tagText);

            $comment .= "{$indent} * {$tagText}\n";
        }

        return $comment;
    }
}
<?php
namespace phpDocumentor\Reflection;

interface DocBlockFactoryInterface
{
    /**
     * Factory method for easy instantiation.
     *
     * @param string[] $additionalTags
     *
     * @return DocBlockFactory
     */
    public static function createInstance(array $additionalTags = []);

    /**
     * @param string $docblock
     * @param Types\Context $context
     * @param Location $location
     *
     * @return DocBlock
     */
    public function create($docblock, Types\Context $context = null, Location $location = null);
}
The MIT License (MIT)

Copyright (c) 2010 Mike van Riel

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\DocBlock\StandardTagFactory;
use phpDocumentor\Reflection\DocBlock\Tag;
use phpDocumentor\Reflection\DocBlock\TagFactory;
use Webmozart\Assert\Assert;

final class DocBlockFactory implements DocBlockFactoryInterface
{
    /** @var DocBlock\DescriptionFactory */
    private $descriptionFactory;

    /** @var DocBlock\TagFactory */
    private $tagFactory;

    /**
     * Initializes this factory with the required subcontractors.
     *
     * @param DescriptionFactory $descriptionFactory
     * @param TagFactory         $tagFactory
     */
    public function __construct(DescriptionFactory $descriptionFactory, TagFactory $tagFactory)
    {
        $this->descriptionFactory = $descriptionFactory;
        $this->tagFactory = $tagFactory;
    }

    /**
     * Factory method for easy instantiation.
     *
     * @param string[] $additionalTags
     *
     * @return DocBlockFactory
     */
    public static function createInstance(array $additionalTags = [])
    {
        $fqsenResolver = new FqsenResolver();
        $tagFactory = new StandardTagFactory($fqsenResolver);
        $descriptionFactory = new DescriptionFactory($tagFactory);

        $tagFactory->addService($descriptionFactory);
        $tagFactory->addService(new TypeResolver($fqsenResolver));

        $docBlockFactory = new self($descriptionFactory, $tagFactory);
        foreach ($additionalTags as $tagName => $tagHandler) {
            $docBlockFactory->registerTagHandler($tagName, $tagHandler);
        }

        return $docBlockFactory;
    }

    /**
     * @param object|string $docblock A string containing the DocBlock to parse or an object supporting the
     *                                getDocComment method (such as a ReflectionClass object).
     * @param Types\Context $context
     * @param Location      $location
     *
     * @return DocBlock
     */
    public function create($docblock, Types\Context $context = null, Location $location = null)
    {
        if (is_object($docblock)) {
            if (!method_exists($docblock, 'getDocComment')) {
                $exceptionMessage = 'Invalid object passed; the given object must support the getDocComment method';
                throw new \InvalidArgumentException($exceptionMessage);
            }

            $docblock = $docblock->getDocComment();
        }

        Assert::stringNotEmpty($docblock);

        if ($context === null) {
            $context = new Types\Context('');
        }

        $parts = $this->splitDocBlock($this->stripDocComment($docblock));
        list($templateMarker, $summary, $description, $tags) = $parts;

        return new DocBlock(
            $summary,
            $description ? $this->descriptionFactory->create($description, $context) : null,
            array_filter($this->parseTagBlock($tags, $context), function ($tag) {
                return $tag instanceof Tag;
            }),
            $context,
            $location,
            $templateMarker === '#@+',
            $templateMarker === '#@-'
        );
    }

    public function registerTagHandler($tagName, $handler)
    {
        $this->tagFactory->registerTagHandler($tagName, $handler);
    }

    /**
     * Strips the asterisks from the DocBlock comment.
     *
     * @param string $comment String containing the comment text.
     *
     * @return string
     */
    private function stripDocComment($comment)
    {
        $comment = trim(preg_replace('#[ \t]*(?:\/\*\*|\*\/|\*)?[ \t]{0,1}(.*)?#u', '$1', $comment));

        // reg ex above is not able to remove */ from a single line docblock
        if (substr($comment, -2) === '*/') {
            $comment = trim(substr($comment, 0, -2));
        }

        return str_replace(["\r\n", "\r"], "\n", $comment);
    }

    /**
     * Splits the DocBlock into a template marker, summary, description and block of tags.
     *
     * @param string $comment Comment to split into the sub-parts.
     *
     * @author Richard van Velzen (@_richardJ) Special thanks to Richard for the regex responsible for the split.
     * @author Mike van Riel <me@mikevanriel.com> for extending the regex with template marker support.
     *
     * @return string[] containing the template marker (if any), summary, description and a string containing the tags.
     */
    private function splitDocBlock($comment)
    {
        // Performance improvement cheat: if the first character is an @ then only tags are in this DocBlock. This
        // method does not split tags so we return this verbatim as the fourth result (tags). This saves us the
        // performance impact of running a regular expression
        if (strpos($comment, '@') === 0) {
            return ['', '', '', $comment];
        }

        // clears all extra horizontal whitespace from the line endings to prevent parsing issues
        $comment = preg_replace('/\h*$/Sum', '', $comment);

        /*
         * Splits the docblock into a template marker, summary, description and tags section.
         *
         * - The template marker is empty, #@+ or #@- if the DocBlock starts with either of those (a newline may
         *   occur after it and will be stripped).
         * - The short description is started from the first character until a dot is encountered followed by a
         *   newline OR two consecutive newlines (horizontal whitespace is taken into account to consider spacing
         *   errors). This is optional.
         * - The long description, any character until a new line is encountered followed by an @ and word
         *   characters (a tag). This is optional.
         * - Tags; the remaining characters
         *
         * Big thanks to RichardJ for contributing this Regular Expression
         */
        preg_match(
            '/
            \A
            # 1. Extract the template marker
            (?:(\#\@\+|\#\@\-)\n?)?

            # 2. Extract the summary
            (?:
              (?! @\pL ) # The summary may not start with an @
              (
                [^\n.]+
                (?:
                  (?! \. \n | \n{2} )     # End summary upon a dot followed by newline or two newlines
                  [\n.] (?! [ \t]* @\pL ) # End summary when an @ is found as first character on a new line
                  [^\n.]+                 # Include anything else
                )*
                \.?
              )?
            )

            # 3. Extract the description
            (?:
              \s*        # Some form of whitespace _must_ precede a description because a summary must be there
              (?! @\pL ) # The description may not start with an @
              (
                [^\n]+
                (?: \n+
                  (?! [ \t]* @\pL ) # End description when an @ is found as first character on a new line
                  [^\n]+            # Include anything else
                )*
              )
            )?

            # 4. Extract the tags (anything that follows)
            (\s+ [\s\S]*)? # everything that follows
            /ux',
            $comment,
            $matches
        );
        array_shift($matches);

        while (count($matches) < 4) {
            $matches[] = '';
        }

        return $matches;
    }

    /**
     * Creates the tag objects.
     *
     * @param string $tags Tag block to parse.
     * @param Types\Context $context Context of the parsed Tag
     *
     * @return DocBlock\Tag[]
     */
    private function parseTagBlock($tags, Types\Context $context)
    {
        $tags = $this->filterTagBlock($tags);
        if (!$tags) {
            return [];
        }

        $result = $this->splitTagBlockIntoTagLines($tags);
        foreach ($result as $key => $tagLine) {
            $result[$key] = $this->tagFactory->create(trim($tagLine), $context);
        }

        return $result;
    }

    /**
     * @param string $tags
     *
     * @return string[]
     */
    private function splitTagBlockIntoTagLines($tags)
    {
        $result = [];
        foreach (explode("\n", $tags) as $tag_line) {
            if (isset($tag_line[0]) && ($tag_line[0] === '@')) {
                $result[] = $tag_line;
            } else {
                $result[count($result) - 1] .= "\n" . $tag_line;
            }
        }

        return $result;
    }

    /**
     * @param $tags
     * @return string
     */
    private function filterTagBlock($tags)
    {
        $tags = trim($tags);
        if (!$tags) {
            return null;
        }

        if ('@' !== $tags[0]) {
            // @codeCoverageIgnoreStart
            // Can't simulate this; this only happens if there is an error with the parsing of the DocBlock that
            // we didn't foresee.
            throw new \LogicException('A tag block started with text instead of an at-sign(@): ' . $tags);
            // @codeCoverageIgnoreEnd
        }

        return $tags;
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-timer.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Timer;

final class Timer
{
    /**
     * @var int[]
     */
    private static $sizes = [
        'GB' => 1073741824,
        'MB' => 1048576,
        'KB' => 1024,
    ];

    /**
     * @var int[]
     */
    private static $times = [
        'hour'   => 3600000,
        'minute' => 60000,
        'second' => 1000,
    ];

    /**
     * @var float[]
     */
    private static $startTimes = [];

    public static function start(): void
    {
        self::$startTimes[] = \microtime(true);
    }

    public static function stop(): float
    {
        return \microtime(true) - \array_pop(self::$startTimes);
    }

    public static function bytesToString(float $bytes): string
    {
        foreach (self::$sizes as $unit => $value) {
            if ($bytes >= $value) {
                return \sprintf('%.2f %s', $bytes >= 1024 ? $bytes / $value : $bytes, $unit);
            }
        }

        return $bytes . ' byte' . ((int) $bytes !== 1 ? 's' : '');
    }

    public static function secondsToTimeString(float $time): string
    {
        $ms = \round($time * 1000);

        foreach (self::$times as $unit => $value) {
            if ($ms >= $value) {
                $time = \floor($ms / $value * 100.0) / 100.0;

                return $time . ' ' . ($time == 1 ? $unit : $unit . 's');
            }
        }

        return $ms . ' ms';
    }

    /**
     * @throws RuntimeException
     */
    public static function timeSinceStartOfRequest(): string
    {
        if (isset($_SERVER['REQUEST_TIME_FLOAT'])) {
            $startOfRequest = $_SERVER['REQUEST_TIME_FLOAT'];
        } elseif (isset($_SERVER['REQUEST_TIME'])) {
            $startOfRequest = $_SERVER['REQUEST_TIME'];
        } else {
            throw new RuntimeException('Cannot determine time at which the request started');
        }

        return self::secondsToTimeString(\microtime(true) - $startOfRequest);
    }

    /**
     * @throws RuntimeException
     */
    public static function resourceUsage(): string
    {
        return \sprintf(
            'Time: %s, Memory: %s',
            self::timeSinceStartOfRequest(),
            self::bytesToString(\memory_get_peak_usage(true))
        );
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-timer.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Timer;

interface Exception
{
}
<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-timer.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Timer;

final class RuntimeException extends \RuntimeException implements Exception
{
}
phpunit/php-timer

Copyright (c) 2010-2019, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php declare(strict_types=1);
/*
 * This file is part of resource-operations.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\ResourceOperations;

final class ResourceOperations
{
    /**
     * @return string[]
     */
    public static function getFunctions(): array
    {
        return [
            'Directory::close',
            'Directory::read',
            'Directory::rewind',
            'DirectoryIterator::openFile',
            'FilesystemIterator::openFile',
            'Gmagick::readimagefile',
            'HttpResponse::getRequestBodyStream',
            'HttpResponse::getStream',
            'HttpResponse::setStream',
            'Imagick::pingImageFile',
            'Imagick::readImageFile',
            'Imagick::writeImageFile',
            'Imagick::writeImagesFile',
            'MongoGridFSCursor::__construct',
            'MongoGridFSFile::getResource',
            'MysqlndUhConnection::stmtInit',
            'MysqlndUhConnection::storeResult',
            'MysqlndUhConnection::useResult',
            'PDF_activate_item',
            'PDF_add_launchlink',
            'PDF_add_locallink',
            'PDF_add_nameddest',
            'PDF_add_note',
            'PDF_add_pdflink',
            'PDF_add_table_cell',
            'PDF_add_textflow',
            'PDF_add_thumbnail',
            'PDF_add_weblink',
            'PDF_arc',
            'PDF_arcn',
            'PDF_attach_file',
            'PDF_begin_document',
            'PDF_begin_font',
            'PDF_begin_glyph',
            'PDF_begin_item',
            'PDF_begin_layer',
            'PDF_begin_page',
            'PDF_begin_page_ext',
            'PDF_begin_pattern',
            'PDF_begin_template',
            'PDF_begin_template_ext',
            'PDF_circle',
            'PDF_clip',
            'PDF_close',
            'PDF_close_image',
            'PDF_close_pdi',
            'PDF_close_pdi_page',
            'PDF_closepath',
            'PDF_closepath_fill_stroke',
            'PDF_closepath_stroke',
            'PDF_concat',
            'PDF_continue_text',
            'PDF_create_3dview',
            'PDF_create_action',
            'PDF_create_annotation',
            'PDF_create_bookmark',
            'PDF_create_field',
            'PDF_create_fieldgroup',
            'PDF_create_gstate',
            'PDF_create_pvf',
            'PDF_create_textflow',
            'PDF_curveto',
            'PDF_define_layer',
            'PDF_delete',
            'PDF_delete_pvf',
            'PDF_delete_table',
            'PDF_delete_textflow',
            'PDF_encoding_set_char',
            'PDF_end_document',
            'PDF_end_font',
            'PDF_end_glyph',
            'PDF_end_item',
            'PDF_end_layer',
            'PDF_end_page',
            'PDF_end_page_ext',
            'PDF_end_pattern',
            'PDF_end_template',
            'PDF_endpath',
            'PDF_fill',
            'PDF_fill_imageblock',
            'PDF_fill_pdfblock',
            'PDF_fill_stroke',
            'PDF_fill_textblock',
            'PDF_findfont',
            'PDF_fit_image',
            'PDF_fit_pdi_page',
            'PDF_fit_table',
            'PDF_fit_textflow',
            'PDF_fit_textline',
            'PDF_get_apiname',
            'PDF_get_buffer',
            'PDF_get_errmsg',
            'PDF_get_errnum',
            'PDF_get_parameter',
            'PDF_get_pdi_parameter',
            'PDF_get_pdi_value',
            'PDF_get_value',
            'PDF_info_font',
            'PDF_info_matchbox',
            'PDF_info_table',
            'PDF_info_textflow',
            'PDF_info_textline',
            'PDF_initgraphics',
            'PDF_lineto',
            'PDF_load_3ddata',
            'PDF_load_font',
            'PDF_load_iccprofile',
            'PDF_load_image',
            'PDF_makespotcolor',
            'PDF_moveto',
            'PDF_new',
            'PDF_open_ccitt',
            'PDF_open_file',
            'PDF_open_image',
            'PDF_open_image_file',
            'PDF_open_memory_image',
            'PDF_open_pdi',
            'PDF_open_pdi_document',
            'PDF_open_pdi_page',
            'PDF_pcos_get_number',
            'PDF_pcos_get_stream',
            'PDF_pcos_get_string',
            'PDF_place_image',
            'PDF_place_pdi_page',
            'PDF_process_pdi',
            'PDF_rect',
            'PDF_restore',
            'PDF_resume_page',
            'PDF_rotate',
            'PDF_save',
            'PDF_scale',
            'PDF_set_border_color',
            'PDF_set_border_dash',
            'PDF_set_border_style',
            'PDF_set_gstate',
            'PDF_set_info',
            'PDF_set_layer_dependency',
            'PDF_set_parameter',
            'PDF_set_text_pos',
            'PDF_set_value',
            'PDF_setcolor',
            'PDF_setdash',
            'PDF_setdashpattern',
            'PDF_setflat',
            'PDF_setfont',
            'PDF_setgray',
            'PDF_setgray_fill',
            'PDF_setgray_stroke',
            'PDF_setlinecap',
            'PDF_setlinejoin',
            'PDF_setlinewidth',
            'PDF_setmatrix',
            'PDF_setmiterlimit',
            'PDF_setrgbcolor',
            'PDF_setrgbcolor_fill',
            'PDF_setrgbcolor_stroke',
            'PDF_shading',
            'PDF_shading_pattern',
            'PDF_shfill',
            'PDF_show',
            'PDF_show_boxed',
            'PDF_show_xy',
            'PDF_skew',
            'PDF_stringwidth',
            'PDF_stroke',
            'PDF_suspend_page',
            'PDF_translate',
            'PDF_utf16_to_utf8',
            'PDF_utf32_to_utf16',
            'PDF_utf8_to_utf16',
            'PDO::pgsqlLOBOpen',
            'RarEntry::getStream',
            'SQLite3::openBlob',
            'SWFMovie::saveToFile',
            'SplFileInfo::openFile',
            'SplFileObject::openFile',
            'SplTempFileObject::openFile',
            'V8Js::compileString',
            'V8Js::executeScript',
            'Vtiful\Kernel\Excel::setColumn',
            'Vtiful\Kernel\Excel::setRow',
            'Vtiful\Kernel\Format::align',
            'Vtiful\Kernel\Format::bold',
            'Vtiful\Kernel\Format::italic',
            'Vtiful\Kernel\Format::underline',
            'XMLWriter::openMemory',
            'XMLWriter::openURI',
            'ZipArchive::getStream',
            'Zookeeper::setLogStream',
            'apc_bin_dumpfile',
            'apc_bin_loadfile',
            'bbcode_add_element',
            'bbcode_add_smiley',
            'bbcode_create',
            'bbcode_destroy',
            'bbcode_parse',
            'bbcode_set_arg_parser',
            'bbcode_set_flags',
            'bcompiler_read',
            'bcompiler_write_class',
            'bcompiler_write_constant',
            'bcompiler_write_exe_footer',
            'bcompiler_write_file',
            'bcompiler_write_footer',
            'bcompiler_write_function',
            'bcompiler_write_functions_from_file',
            'bcompiler_write_header',
            'bcompiler_write_included_filename',
            'bzclose',
            'bzerrno',
            'bzerror',
            'bzerrstr',
            'bzflush',
            'bzopen',
            'bzread',
            'bzwrite',
            'cairo_surface_write_to_png',
            'closedir',
            'copy',
            'crack_closedict',
            'crack_opendict',
            'cubrid_bind',
            'cubrid_close_prepare',
            'cubrid_close_request',
            'cubrid_col_get',
            'cubrid_col_size',
            'cubrid_column_names',
            'cubrid_column_types',
            'cubrid_commit',
            'cubrid_connect',
            'cubrid_connect_with_url',
            'cubrid_current_oid',
            'cubrid_db_parameter',
            'cubrid_disconnect',
            'cubrid_drop',
            'cubrid_fetch',
            'cubrid_free_result',
            'cubrid_get',
            'cubrid_get_autocommit',
            'cubrid_get_charset',
            'cubrid_get_class_name',
            'cubrid_get_db_parameter',
            'cubrid_get_query_timeout',
            'cubrid_get_server_info',
            'cubrid_insert_id',
            'cubrid_is_instance',
            'cubrid_lob2_bind',
            'cubrid_lob2_close',
            'cubrid_lob2_export',
            'cubrid_lob2_import',
            'cubrid_lob2_new',
            'cubrid_lob2_read',
            'cubrid_lob2_seek',
            'cubrid_lob2_seek64',
            'cubrid_lob2_size',
            'cubrid_lob2_size64',
            'cubrid_lob2_tell',
            'cubrid_lob2_tell64',
            'cubrid_lob2_write',
            'cubrid_lob_export',
            'cubrid_lob_get',
            'cubrid_lob_send',
            'cubrid_lob_size',
            'cubrid_lock_read',
            'cubrid_lock_write',
            'cubrid_move_cursor',
            'cubrid_next_result',
            'cubrid_num_cols',
            'cubrid_num_rows',
            'cubrid_pconnect',
            'cubrid_pconnect_with_url',
            'cubrid_prepare',
            'cubrid_put',
            'cubrid_query',
            'cubrid_rollback',
            'cubrid_schema',
            'cubrid_seq_add',
            'cubrid_seq_drop',
            'cubrid_seq_insert',
            'cubrid_seq_put',
            'cubrid_set_add',
            'cubrid_set_autocommit',
            'cubrid_set_db_parameter',
            'cubrid_set_drop',
            'cubrid_set_query_timeout',
            'cubrid_unbuffered_query',
            'curl_close',
            'curl_copy_handle',
            'curl_errno',
            'curl_error',
            'curl_escape',
            'curl_exec',
            'curl_getinfo',
            'curl_multi_add_handle',
            'curl_multi_close',
            'curl_multi_errno',
            'curl_multi_exec',
            'curl_multi_getcontent',
            'curl_multi_info_read',
            'curl_multi_remove_handle',
            'curl_multi_select',
            'curl_multi_setopt',
            'curl_pause',
            'curl_reset',
            'curl_setopt',
            'curl_setopt_array',
            'curl_share_close',
            'curl_share_errno',
            'curl_share_init',
            'curl_share_setopt',
            'curl_unescape',
            'cyrus_authenticate',
            'cyrus_bind',
            'cyrus_close',
            'cyrus_connect',
            'cyrus_query',
            'cyrus_unbind',
            'db2_autocommit',
            'db2_bind_param',
            'db2_client_info',
            'db2_close',
            'db2_column_privileges',
            'db2_columns',
            'db2_commit',
            'db2_conn_error',
            'db2_conn_errormsg',
            'db2_connect',
            'db2_cursor_type',
            'db2_exec',
            'db2_execute',
            'db2_fetch_array',
            'db2_fetch_assoc',
            'db2_fetch_both',
            'db2_fetch_object',
            'db2_fetch_row',
            'db2_field_display_size',
            'db2_field_name',
            'db2_field_num',
            'db2_field_precision',
            'db2_field_scale',
            'db2_field_type',
            'db2_field_width',
            'db2_foreign_keys',
            'db2_free_result',
            'db2_free_stmt',
            'db2_get_option',
            'db2_last_insert_id',
            'db2_lob_read',
            'db2_next_result',
            'db2_num_fields',
            'db2_num_rows',
            'db2_pclose',
            'db2_pconnect',
            'db2_prepare',
            'db2_primary_keys',
            'db2_procedure_columns',
            'db2_procedures',
            'db2_result',
            'db2_rollback',
            'db2_server_info',
            'db2_set_option',
            'db2_special_columns',
            'db2_statistics',
            'db2_stmt_error',
            'db2_stmt_errormsg',
            'db2_table_privileges',
            'db2_tables',
            'dba_close',
            'dba_delete',
            'dba_exists',
            'dba_fetch',
            'dba_firstkey',
            'dba_insert',
            'dba_nextkey',
            'dba_open',
            'dba_optimize',
            'dba_popen',
            'dba_replace',
            'dba_sync',
            'dbplus_add',
            'dbplus_aql',
            'dbplus_close',
            'dbplus_curr',
            'dbplus_find',
            'dbplus_first',
            'dbplus_flush',
            'dbplus_freelock',
            'dbplus_freerlocks',
            'dbplus_getlock',
            'dbplus_getunique',
            'dbplus_info',
            'dbplus_last',
            'dbplus_lockrel',
            'dbplus_next',
            'dbplus_open',
            'dbplus_prev',
            'dbplus_rchperm',
            'dbplus_rcreate',
            'dbplus_rcrtexact',
            'dbplus_rcrtlike',
            'dbplus_restorepos',
            'dbplus_rkeys',
            'dbplus_ropen',
            'dbplus_rquery',
            'dbplus_rrename',
            'dbplus_rsecindex',
            'dbplus_runlink',
            'dbplus_rzap',
            'dbplus_savepos',
            'dbplus_setindex',
            'dbplus_setindexbynumber',
            'dbplus_sql',
            'dbplus_tremove',
            'dbplus_undo',
            'dbplus_undoprepare',
            'dbplus_unlockrel',
            'dbplus_unselect',
            'dbplus_update',
            'dbplus_xlockrel',
            'dbplus_xunlockrel',
            'deflate_add',
            'dio_close',
            'dio_fcntl',
            'dio_open',
            'dio_read',
            'dio_seek',
            'dio_stat',
            'dio_tcsetattr',
            'dio_truncate',
            'dio_write',
            'dir',
            'eio_busy',
            'eio_cancel',
            'eio_chmod',
            'eio_chown',
            'eio_close',
            'eio_custom',
            'eio_dup2',
            'eio_fallocate',
            'eio_fchmod',
            'eio_fchown',
            'eio_fdatasync',
            'eio_fstat',
            'eio_fstatvfs',
            'eio_fsync',
            'eio_ftruncate',
            'eio_futime',
            'eio_get_last_error',
            'eio_grp',
            'eio_grp_add',
            'eio_grp_cancel',
            'eio_grp_limit',
            'eio_link',
            'eio_lstat',
            'eio_mkdir',
            'eio_mknod',
            'eio_nop',
            'eio_open',
            'eio_read',
            'eio_readahead',
            'eio_readdir',
            'eio_readlink',
            'eio_realpath',
            'eio_rename',
            'eio_rmdir',
            'eio_seek',
            'eio_sendfile',
            'eio_stat',
            'eio_statvfs',
            'eio_symlink',
            'eio_sync',
            'eio_sync_file_range',
            'eio_syncfs',
            'eio_truncate',
            'eio_unlink',
            'eio_utime',
            'eio_write',
            'enchant_broker_describe',
            'enchant_broker_dict_exists',
            'enchant_broker_free',
            'enchant_broker_free_dict',
            'enchant_broker_get_dict_path',
            'enchant_broker_get_error',
            'enchant_broker_init',
            'enchant_broker_list_dicts',
            'enchant_broker_request_dict',
            'enchant_broker_request_pwl_dict',
            'enchant_broker_set_dict_path',
            'enchant_broker_set_ordering',
            'enchant_dict_add_to_personal',
            'enchant_dict_add_to_session',
            'enchant_dict_check',
            'enchant_dict_describe',
            'enchant_dict_get_error',
            'enchant_dict_is_in_session',
            'enchant_dict_quick_check',
            'enchant_dict_store_replacement',
            'enchant_dict_suggest',
            'event_add',
            'event_base_free',
            'event_base_loop',
            'event_base_loopbreak',
            'event_base_loopexit',
            'event_base_new',
            'event_base_priority_init',
            'event_base_reinit',
            'event_base_set',
            'event_buffer_base_set',
            'event_buffer_disable',
            'event_buffer_enable',
            'event_buffer_fd_set',
            'event_buffer_free',
            'event_buffer_new',
            'event_buffer_priority_set',
            'event_buffer_read',
            'event_buffer_set_callback',
            'event_buffer_timeout_set',
            'event_buffer_watermark_set',
            'event_buffer_write',
            'event_del',
            'event_free',
            'event_new',
            'event_priority_set',
            'event_set',
            'event_timer_add',
            'event_timer_del',
            'event_timer_pending',
            'event_timer_set',
            'expect_expectl',
            'expect_popen',
            'fam_cancel_monitor',
            'fam_close',
            'fam_monitor_collection',
            'fam_monitor_directory',
            'fam_monitor_file',
            'fam_next_event',
            'fam_open',
            'fam_pending',
            'fam_resume_monitor',
            'fam_suspend_monitor',
            'fann_cascadetrain_on_data',
            'fann_cascadetrain_on_file',
            'fann_clear_scaling_params',
            'fann_copy',
            'fann_create_from_file',
            'fann_create_shortcut_array',
            'fann_create_standard',
            'fann_create_standard_array',
            'fann_create_train',
            'fann_create_train_from_callback',
            'fann_descale_input',
            'fann_descale_output',
            'fann_descale_train',
            'fann_destroy',
            'fann_destroy_train',
            'fann_duplicate_train_data',
            'fann_get_MSE',
            'fann_get_activation_function',
            'fann_get_activation_steepness',
            'fann_get_bias_array',
            'fann_get_bit_fail',
            'fann_get_bit_fail_limit',
            'fann_get_cascade_activation_functions',
            'fann_get_cascade_activation_functions_count',
            'fann_get_cascade_activation_steepnesses',
            'fann_get_cascade_activation_steepnesses_count',
            'fann_get_cascade_candidate_change_fraction',
            'fann_get_cascade_candidate_limit',
            'fann_get_cascade_candidate_stagnation_epochs',
            'fann_get_cascade_max_cand_epochs',
            'fann_get_cascade_max_out_epochs',
            'fann_get_cascade_min_cand_epochs',
            'fann_get_cascade_min_out_epochs',
            'fann_get_cascade_num_candidate_groups',
            'fann_get_cascade_num_candidates',
            'fann_get_cascade_output_change_fraction',
            'fann_get_cascade_output_stagnation_epochs',
            'fann_get_cascade_weight_multiplier',
            'fann_get_connection_array',
            'fann_get_connection_rate',
            'fann_get_errno',
            'fann_get_errstr',
            'fann_get_layer_array',
            'fann_get_learning_momentum',
            'fann_get_learning_rate',
            'fann_get_network_type',
            'fann_get_num_input',
            'fann_get_num_layers',
            'fann_get_num_output',
            'fann_get_quickprop_decay',
            'fann_get_quickprop_mu',
            'fann_get_rprop_decrease_factor',
            'fann_get_rprop_delta_max',
            'fann_get_rprop_delta_min',
            'fann_get_rprop_delta_zero',
            'fann_get_rprop_increase_factor',
            'fann_get_sarprop_step_error_shift',
            'fann_get_sarprop_step_error_threshold_factor',
            'fann_get_sarprop_temperature',
            'fann_get_sarprop_weight_decay_shift',
            'fann_get_total_connections',
            'fann_get_total_neurons',
            'fann_get_train_error_function',
            'fann_get_train_stop_function',
            'fann_get_training_algorithm',
            'fann_init_weights',
            'fann_length_train_data',
            'fann_merge_train_data',
            'fann_num_input_train_data',
            'fann_num_output_train_data',
            'fann_randomize_weights',
            'fann_read_train_from_file',
            'fann_reset_errno',
            'fann_reset_errstr',
            'fann_run',
            'fann_save',
            'fann_save_train',
            'fann_scale_input',
            'fann_scale_input_train_data',
            'fann_scale_output',
            'fann_scale_output_train_data',
            'fann_scale_train',
            'fann_scale_train_data',
            'fann_set_activation_function',
            'fann_set_activation_function_hidden',
            'fann_set_activation_function_layer',
            'fann_set_activation_function_output',
            'fann_set_activation_steepness',
            'fann_set_activation_steepness_hidden',
            'fann_set_activation_steepness_layer',
            'fann_set_activation_steepness_output',
            'fann_set_bit_fail_limit',
            'fann_set_callback',
            'fann_set_cascade_activation_functions',
            'fann_set_cascade_activation_steepnesses',
            'fann_set_cascade_candidate_change_fraction',
            'fann_set_cascade_candidate_limit',
            'fann_set_cascade_candidate_stagnation_epochs',
            'fann_set_cascade_max_cand_epochs',
            'fann_set_cascade_max_out_epochs',
            'fann_set_cascade_min_cand_epochs',
            'fann_set_cascade_min_out_epochs',
            'fann_set_cascade_num_candidate_groups',
            'fann_set_cascade_output_change_fraction',
            'fann_set_cascade_output_stagnation_epochs',
            'fann_set_cascade_weight_multiplier',
            'fann_set_error_log',
            'fann_set_input_scaling_params',
            'fann_set_learning_momentum',
            'fann_set_learning_rate',
            'fann_set_output_scaling_params',
            'fann_set_quickprop_decay',
            'fann_set_quickprop_mu',
            'fann_set_rprop_decrease_factor',
            'fann_set_rprop_delta_max',
            'fann_set_rprop_delta_min',
            'fann_set_rprop_delta_zero',
            'fann_set_rprop_increase_factor',
            'fann_set_sarprop_step_error_shift',
            'fann_set_sarprop_step_error_threshold_factor',
            'fann_set_sarprop_temperature',
            'fann_set_sarprop_weight_decay_shift',
            'fann_set_scaling_params',
            'fann_set_train_error_function',
            'fann_set_train_stop_function',
            'fann_set_training_algorithm',
            'fann_set_weight',
            'fann_set_weight_array',
            'fann_shuffle_train_data',
            'fann_subset_train_data',
            'fann_test',
            'fann_test_data',
            'fann_train',
            'fann_train_epoch',
            'fann_train_on_data',
            'fann_train_on_file',
            'fbsql_affected_rows',
            'fbsql_autocommit',
            'fbsql_blob_size',
            'fbsql_change_user',
            'fbsql_clob_size',
            'fbsql_close',
            'fbsql_commit',
            'fbsql_connect',
            'fbsql_create_blob',
            'fbsql_create_clob',
            'fbsql_create_db',
            'fbsql_data_seek',
            'fbsql_database',
            'fbsql_database_password',
            'fbsql_db_query',
            'fbsql_db_status',
            'fbsql_drop_db',
            'fbsql_errno',
            'fbsql_error',
            'fbsql_fetch_array',
            'fbsql_fetch_assoc',
            'fbsql_fetch_field',
            'fbsql_fetch_lengths',
            'fbsql_fetch_object',
            'fbsql_fetch_row',
            'fbsql_field_flags',
            'fbsql_field_len',
            'fbsql_field_name',
            'fbsql_field_seek',
            'fbsql_field_table',
            'fbsql_field_type',
            'fbsql_free_result',
            'fbsql_get_autostart_info',
            'fbsql_hostname',
            'fbsql_insert_id',
            'fbsql_list_dbs',
            'fbsql_list_fields',
            'fbsql_list_tables',
            'fbsql_next_result',
            'fbsql_num_fields',
            'fbsql_num_rows',
            'fbsql_password',
            'fbsql_pconnect',
            'fbsql_query',
            'fbsql_read_blob',
            'fbsql_read_clob',
            'fbsql_result',
            'fbsql_rollback',
            'fbsql_rows_fetched',
            'fbsql_select_db',
            'fbsql_set_characterset',
            'fbsql_set_lob_mode',
            'fbsql_set_password',
            'fbsql_set_transaction',
            'fbsql_start_db',
            'fbsql_stop_db',
            'fbsql_table_name',
            'fbsql_username',
            'fclose',
            'fdf_add_doc_javascript',
            'fdf_add_template',
            'fdf_close',
            'fdf_create',
            'fdf_enum_values',
            'fdf_get_ap',
            'fdf_get_attachment',
            'fdf_get_encoding',
            'fdf_get_file',
            'fdf_get_flags',
            'fdf_get_opt',
            'fdf_get_status',
            'fdf_get_value',
            'fdf_get_version',
            'fdf_next_field_name',
            'fdf_open',
            'fdf_open_string',
            'fdf_remove_item',
            'fdf_save',
            'fdf_save_string',
            'fdf_set_ap',
            'fdf_set_encoding',
            'fdf_set_file',
            'fdf_set_flags',
            'fdf_set_javascript_action',
            'fdf_set_on_import_javascript',
            'fdf_set_opt',
            'fdf_set_status',
            'fdf_set_submit_form_action',
            'fdf_set_target_frame',
            'fdf_set_value',
            'fdf_set_version',
            'feof',
            'fflush',
            'ffmpeg_frame::__construct',
            'ffmpeg_frame::toGDImage',
            'fgetc',
            'fgetcsv',
            'fgets',
            'fgetss',
            'file',
            'file_get_contents',
            'file_put_contents',
            'finfo::buffer',
            'finfo::file',
            'finfo_buffer',
            'finfo_close',
            'finfo_file',
            'finfo_open',
            'finfo_set_flags',
            'flock',
            'fopen',
            'fpassthru',
            'fprintf',
            'fputcsv',
            'fputs',
            'fread',
            'fscanf',
            'fseek',
            'fstat',
            'ftell',
            'ftp_alloc',
            'ftp_append',
            'ftp_cdup',
            'ftp_chdir',
            'ftp_chmod',
            'ftp_close',
            'ftp_delete',
            'ftp_exec',
            'ftp_fget',
            'ftp_fput',
            'ftp_get',
            'ftp_get_option',
            'ftp_login',
            'ftp_mdtm',
            'ftp_mkdir',
            'ftp_mlsd',
            'ftp_nb_continue',
            'ftp_nb_fget',
            'ftp_nb_fput',
            'ftp_nb_get',
            'ftp_nb_put',
            'ftp_nlist',
            'ftp_pasv',
            'ftp_put',
            'ftp_pwd',
            'ftp_quit',
            'ftp_raw',
            'ftp_rawlist',
            'ftp_rename',
            'ftp_rmdir',
            'ftp_set_option',
            'ftp_site',
            'ftp_size',
            'ftp_systype',
            'ftruncate',
            'fwrite',
            'get_resource_type',
            'gmp_div',
            'gnupg::init',
            'gnupg_adddecryptkey',
            'gnupg_addencryptkey',
            'gnupg_addsignkey',
            'gnupg_cleardecryptkeys',
            'gnupg_clearencryptkeys',
            'gnupg_clearsignkeys',
            'gnupg_decrypt',
            'gnupg_decryptverify',
            'gnupg_encrypt',
            'gnupg_encryptsign',
            'gnupg_export',
            'gnupg_geterror',
            'gnupg_getprotocol',
            'gnupg_import',
            'gnupg_init',
            'gnupg_keyinfo',
            'gnupg_setarmor',
            'gnupg_seterrormode',
            'gnupg_setsignmode',
            'gnupg_sign',
            'gnupg_verify',
            'gupnp_context_get_host_ip',
            'gupnp_context_get_port',
            'gupnp_context_get_subscription_timeout',
            'gupnp_context_host_path',
            'gupnp_context_new',
            'gupnp_context_set_subscription_timeout',
            'gupnp_context_timeout_add',
            'gupnp_context_unhost_path',
            'gupnp_control_point_browse_start',
            'gupnp_control_point_browse_stop',
            'gupnp_control_point_callback_set',
            'gupnp_control_point_new',
            'gupnp_device_action_callback_set',
            'gupnp_device_info_get',
            'gupnp_device_info_get_service',
            'gupnp_root_device_get_available',
            'gupnp_root_device_get_relative_location',
            'gupnp_root_device_new',
            'gupnp_root_device_set_available',
            'gupnp_root_device_start',
            'gupnp_root_device_stop',
            'gupnp_service_action_get',
            'gupnp_service_action_return',
            'gupnp_service_action_return_error',
            'gupnp_service_action_set',
            'gupnp_service_freeze_notify',
            'gupnp_service_info_get',
            'gupnp_service_info_get_introspection',
            'gupnp_service_introspection_get_state_variable',
            'gupnp_service_notify',
            'gupnp_service_proxy_action_get',
            'gupnp_service_proxy_action_set',
            'gupnp_service_proxy_add_notify',
            'gupnp_service_proxy_callback_set',
            'gupnp_service_proxy_get_subscribed',
            'gupnp_service_proxy_remove_notify',
            'gupnp_service_proxy_send_action',
            'gupnp_service_proxy_set_subscribed',
            'gupnp_service_thaw_notify',
            'gzclose',
            'gzeof',
            'gzgetc',
            'gzgets',
            'gzgetss',
            'gzpassthru',
            'gzputs',
            'gzread',
            'gzrewind',
            'gzseek',
            'gztell',
            'gzwrite',
            'hash_update_stream',
            'http\Env\Response::send',
            'http_get_request_body_stream',
            'ibase_add_user',
            'ibase_affected_rows',
            'ibase_backup',
            'ibase_blob_add',
            'ibase_blob_cancel',
            'ibase_blob_close',
            'ibase_blob_create',
            'ibase_blob_get',
            'ibase_blob_open',
            'ibase_close',
            'ibase_commit',
            'ibase_commit_ret',
            'ibase_connect',
            'ibase_db_info',
            'ibase_delete_user',
            'ibase_drop_db',
            'ibase_execute',
            'ibase_fetch_assoc',
            'ibase_fetch_object',
            'ibase_fetch_row',
            'ibase_field_info',
            'ibase_free_event_handler',
            'ibase_free_query',
            'ibase_free_result',
            'ibase_gen_id',
            'ibase_maintain_db',
            'ibase_modify_user',
            'ibase_name_result',
            'ibase_num_fields',
            'ibase_num_params',
            'ibase_param_info',
            'ibase_pconnect',
            'ibase_prepare',
            'ibase_query',
            'ibase_restore',
            'ibase_rollback',
            'ibase_rollback_ret',
            'ibase_server_info',
            'ibase_service_attach',
            'ibase_service_detach',
            'ibase_set_event_handler',
            'ibase_trans',
            'ifx_affected_rows',
            'ifx_close',
            'ifx_connect',
            'ifx_do',
            'ifx_error',
            'ifx_fetch_row',
            'ifx_fieldproperties',
            'ifx_fieldtypes',
            'ifx_free_result',
            'ifx_getsqlca',
            'ifx_htmltbl_result',
            'ifx_num_fields',
            'ifx_num_rows',
            'ifx_pconnect',
            'ifx_prepare',
            'ifx_query',
            'image2wbmp',
            'imageaffine',
            'imagealphablending',
            'imageantialias',
            'imagearc',
            'imagebmp',
            'imagechar',
            'imagecharup',
            'imagecolorallocate',
            'imagecolorallocatealpha',
            'imagecolorat',
            'imagecolorclosest',
            'imagecolorclosestalpha',
            'imagecolorclosesthwb',
            'imagecolordeallocate',
            'imagecolorexact',
            'imagecolorexactalpha',
            'imagecolormatch',
            'imagecolorresolve',
            'imagecolorresolvealpha',
            'imagecolorset',
            'imagecolorsforindex',
            'imagecolorstotal',
            'imagecolortransparent',
            'imageconvolution',
            'imagecopy',
            'imagecopymerge',
            'imagecopymergegray',
            'imagecopyresampled',
            'imagecopyresized',
            'imagecrop',
            'imagecropauto',
            'imagedashedline',
            'imagedestroy',
            'imageellipse',
            'imagefill',
            'imagefilledarc',
            'imagefilledellipse',
            'imagefilledpolygon',
            'imagefilledrectangle',
            'imagefilltoborder',
            'imagefilter',
            'imageflip',
            'imagefttext',
            'imagegammacorrect',
            'imagegd',
            'imagegd2',
            'imagegetclip',
            'imagegif',
            'imagegrabscreen',
            'imagegrabwindow',
            'imageinterlace',
            'imageistruecolor',
            'imagejpeg',
            'imagelayereffect',
            'imageline',
            'imageopenpolygon',
            'imagepalettecopy',
            'imagepalettetotruecolor',
            'imagepng',
            'imagepolygon',
            'imagepsencodefont',
            'imagepsextendfont',
            'imagepsfreefont',
            'imagepsloadfont',
            'imagepsslantfont',
            'imagepstext',
            'imagerectangle',
            'imageresolution',
            'imagerotate',
            'imagesavealpha',
            'imagescale',
            'imagesetbrush',
            'imagesetclip',
            'imagesetinterpolation',
            'imagesetpixel',
            'imagesetstyle',
            'imagesetthickness',
            'imagesettile',
            'imagestring',
            'imagestringup',
            'imagesx',
            'imagesy',
            'imagetruecolortopalette',
            'imagettftext',
            'imagewbmp',
            'imagewebp',
            'imagexbm',
            'imap_append',
            'imap_body',
            'imap_bodystruct',
            'imap_check',
            'imap_clearflag_full',
            'imap_close',
            'imap_create',
            'imap_createmailbox',
            'imap_delete',
            'imap_deletemailbox',
            'imap_expunge',
            'imap_fetch_overview',
            'imap_fetchbody',
            'imap_fetchheader',
            'imap_fetchmime',
            'imap_fetchstructure',
            'imap_fetchtext',
            'imap_gc',
            'imap_get_quota',
            'imap_get_quotaroot',
            'imap_getacl',
            'imap_getmailboxes',
            'imap_getsubscribed',
            'imap_header',
            'imap_headerinfo',
            'imap_headers',
            'imap_list',
            'imap_listmailbox',
            'imap_listscan',
            'imap_listsubscribed',
            'imap_lsub',
            'imap_mail_copy',
            'imap_mail_move',
            'imap_mailboxmsginfo',
            'imap_msgno',
            'imap_num_msg',
            'imap_num_recent',
            'imap_ping',
            'imap_rename',
            'imap_renamemailbox',
            'imap_reopen',
            'imap_savebody',
            'imap_scan',
            'imap_scanmailbox',
            'imap_search',
            'imap_set_quota',
            'imap_setacl',
            'imap_setflag_full',
            'imap_sort',
            'imap_status',
            'imap_subscribe',
            'imap_thread',
            'imap_uid',
            'imap_undelete',
            'imap_unsubscribe',
            'inflate_add',
            'inflate_get_read_len',
            'inflate_get_status',
            'ingres_autocommit',
            'ingres_autocommit_state',
            'ingres_charset',
            'ingres_close',
            'ingres_commit',
            'ingres_connect',
            'ingres_cursor',
            'ingres_errno',
            'ingres_error',
            'ingres_errsqlstate',
            'ingres_escape_string',
            'ingres_execute',
            'ingres_fetch_array',
            'ingres_fetch_assoc',
            'ingres_fetch_object',
            'ingres_fetch_proc_return',
            'ingres_fetch_row',
            'ingres_field_length',
            'ingres_field_name',
            'ingres_field_nullable',
            'ingres_field_precision',
            'ingres_field_scale',
            'ingres_field_type',
            'ingres_free_result',
            'ingres_next_error',
            'ingres_num_fields',
            'ingres_num_rows',
            'ingres_pconnect',
            'ingres_prepare',
            'ingres_query',
            'ingres_result_seek',
            'ingres_rollback',
            'ingres_set_environment',
            'ingres_unbuffered_query',
            'inotify_add_watch',
            'inotify_init',
            'inotify_queue_len',
            'inotify_read',
            'inotify_rm_watch',
            'kadm5_chpass_principal',
            'kadm5_create_principal',
            'kadm5_delete_principal',
            'kadm5_destroy',
            'kadm5_flush',
            'kadm5_get_policies',
            'kadm5_get_principal',
            'kadm5_get_principals',
            'kadm5_init_with_password',
            'kadm5_modify_principal',
            'ldap_add',
            'ldap_bind',
            'ldap_close',
            'ldap_compare',
            'ldap_control_paged_result',
            'ldap_control_paged_result_response',
            'ldap_count_entries',
            'ldap_delete',
            'ldap_errno',
            'ldap_error',
            'ldap_exop',
            'ldap_exop_passwd',
            'ldap_exop_refresh',
            'ldap_exop_whoami',
            'ldap_first_attribute',
            'ldap_first_entry',
            'ldap_first_reference',
            'ldap_free_result',
            'ldap_get_attributes',
            'ldap_get_dn',
            'ldap_get_entries',
            'ldap_get_option',
            'ldap_get_values',
            'ldap_get_values_len',
            'ldap_mod_add',
            'ldap_mod_del',
            'ldap_mod_replace',
            'ldap_modify',
            'ldap_modify_batch',
            'ldap_next_attribute',
            'ldap_next_entry',
            'ldap_next_reference',
            'ldap_parse_exop',
            'ldap_parse_reference',
            'ldap_parse_result',
            'ldap_rename',
            'ldap_sasl_bind',
            'ldap_set_option',
            'ldap_set_rebind_proc',
            'ldap_sort',
            'ldap_start_tls',
            'ldap_unbind',
            'libxml_set_streams_context',
            'm_checkstatus',
            'm_completeauthorizations',
            'm_connect',
            'm_connectionerror',
            'm_deletetrans',
            'm_destroyconn',
            'm_getcell',
            'm_getcellbynum',
            'm_getcommadelimited',
            'm_getheader',
            'm_initconn',
            'm_iscommadelimited',
            'm_maxconntimeout',
            'm_monitor',
            'm_numcolumns',
            'm_numrows',
            'm_parsecommadelimited',
            'm_responsekeys',
            'm_responseparam',
            'm_returnstatus',
            'm_setblocking',
            'm_setdropfile',
            'm_setip',
            'm_setssl',
            'm_setssl_cafile',
            'm_setssl_files',
            'm_settimeout',
            'm_transactionssent',
            'm_transinqueue',
            'm_transkeyval',
            'm_transnew',
            'm_transsend',
            'm_validateidentifier',
            'm_verifyconnection',
            'm_verifysslcert',
            'mailparse_determine_best_xfer_encoding',
            'mailparse_msg_create',
            'mailparse_msg_extract_part',
            'mailparse_msg_extract_part_file',
            'mailparse_msg_extract_whole_part_file',
            'mailparse_msg_free',
            'mailparse_msg_get_part',
            'mailparse_msg_get_part_data',
            'mailparse_msg_get_structure',
            'mailparse_msg_parse',
            'mailparse_msg_parse_file',
            'mailparse_stream_encode',
            'mailparse_uudecode_all',
            'maxdb::use_result',
            'maxdb_affected_rows',
            'maxdb_connect',
            'maxdb_disable_rpl_parse',
            'maxdb_dump_debug_info',
            'maxdb_embedded_connect',
            'maxdb_enable_reads_from_master',
            'maxdb_enable_rpl_parse',
            'maxdb_errno',
            'maxdb_error',
            'maxdb_fetch_lengths',
            'maxdb_field_tell',
            'maxdb_get_host_info',
            'maxdb_get_proto_info',
            'maxdb_get_server_info',
            'maxdb_get_server_version',
            'maxdb_info',
            'maxdb_init',
            'maxdb_insert_id',
            'maxdb_master_query',
            'maxdb_more_results',
            'maxdb_next_result',
            'maxdb_num_fields',
            'maxdb_num_rows',
            'maxdb_rpl_parse_enabled',
            'maxdb_rpl_probe',
            'maxdb_select_db',
            'maxdb_sqlstate',
            'maxdb_stmt::result_metadata',
            'maxdb_stmt_affected_rows',
            'maxdb_stmt_errno',
            'maxdb_stmt_error',
            'maxdb_stmt_num_rows',
            'maxdb_stmt_param_count',
            'maxdb_stmt_result_metadata',
            'maxdb_stmt_sqlstate',
            'maxdb_thread_id',
            'maxdb_use_result',
            'maxdb_warning_count',
            'mcrypt_enc_get_algorithms_name',
            'mcrypt_enc_get_block_size',
            'mcrypt_enc_get_iv_size',
            'mcrypt_enc_get_key_size',
            'mcrypt_enc_get_modes_name',
            'mcrypt_enc_get_supported_key_sizes',
            'mcrypt_enc_is_block_algorithm',
            'mcrypt_enc_is_block_algorithm_mode',
            'mcrypt_enc_is_block_mode',
            'mcrypt_enc_self_test',
            'mcrypt_generic',
            'mcrypt_generic_deinit',
            'mcrypt_generic_end',
            'mcrypt_generic_init',
            'mcrypt_module_close',
            'mcrypt_module_open',
            'mdecrypt_generic',
            'mkdir',
            'mqseries_back',
            'mqseries_begin',
            'mqseries_close',
            'mqseries_cmit',
            'mqseries_conn',
            'mqseries_connx',
            'mqseries_disc',
            'mqseries_get',
            'mqseries_inq',
            'mqseries_open',
            'mqseries_put',
            'mqseries_put1',
            'mqseries_set',
            'msg_get_queue',
            'msg_receive',
            'msg_remove_queue',
            'msg_send',
            'msg_set_queue',
            'msg_stat_queue',
            'msql_affected_rows',
            'msql_close',
            'msql_connect',
            'msql_create_db',
            'msql_data_seek',
            'msql_db_query',
            'msql_drop_db',
            'msql_fetch_array',
            'msql_fetch_field',
            'msql_fetch_object',
            'msql_fetch_row',
            'msql_field_flags',
            'msql_field_len',
            'msql_field_name',
            'msql_field_seek',
            'msql_field_table',
            'msql_field_type',
            'msql_free_result',
            'msql_list_dbs',
            'msql_list_fields',
            'msql_list_tables',
            'msql_num_fields',
            'msql_num_rows',
            'msql_pconnect',
            'msql_query',
            'msql_result',
            'msql_select_db',
            'mssql_bind',
            'mssql_close',
            'mssql_connect',
            'mssql_data_seek',
            'mssql_execute',
            'mssql_fetch_array',
            'mssql_fetch_assoc',
            'mssql_fetch_batch',
            'mssql_fetch_field',
            'mssql_fetch_object',
            'mssql_fetch_row',
            'mssql_field_length',
            'mssql_field_name',
            'mssql_field_seek',
            'mssql_field_type',
            'mssql_free_result',
            'mssql_free_statement',
            'mssql_init',
            'mssql_next_result',
            'mssql_num_fields',
            'mssql_num_rows',
            'mssql_pconnect',
            'mssql_query',
            'mssql_result',
            'mssql_rows_affected',
            'mssql_select_db',
            'mysql_affected_rows',
            'mysql_client_encoding',
            'mysql_close',
            'mysql_connect',
            'mysql_create_db',
            'mysql_data_seek',
            'mysql_db_name',
            'mysql_db_query',
            'mysql_drop_db',
            'mysql_errno',
            'mysql_error',
            'mysql_fetch_array',
            'mysql_fetch_assoc',
            'mysql_fetch_field',
            'mysql_fetch_lengths',
            'mysql_fetch_object',
            'mysql_fetch_row',
            'mysql_field_flags',
            'mysql_field_len',
            'mysql_field_name',
            'mysql_field_seek',
            'mysql_field_table',
            'mysql_field_type',
            'mysql_free_result',
            'mysql_get_host_info',
            'mysql_get_proto_info',
            'mysql_get_server_info',
            'mysql_info',
            'mysql_insert_id',
            'mysql_list_dbs',
            'mysql_list_fields',
            'mysql_list_processes',
            'mysql_list_tables',
            'mysql_num_fields',
            'mysql_num_rows',
            'mysql_pconnect',
            'mysql_ping',
            'mysql_query',
            'mysql_real_escape_string',
            'mysql_result',
            'mysql_select_db',
            'mysql_set_charset',
            'mysql_stat',
            'mysql_tablename',
            'mysql_thread_id',
            'mysql_unbuffered_query',
            'mysqlnd_uh_convert_to_mysqlnd',
            'ncurses_bottom_panel',
            'ncurses_del_panel',
            'ncurses_delwin',
            'ncurses_getmaxyx',
            'ncurses_getyx',
            'ncurses_hide_panel',
            'ncurses_keypad',
            'ncurses_meta',
            'ncurses_move_panel',
            'ncurses_mvwaddstr',
            'ncurses_new_panel',
            'ncurses_newpad',
            'ncurses_newwin',
            'ncurses_panel_above',
            'ncurses_panel_below',
            'ncurses_panel_window',
            'ncurses_pnoutrefresh',
            'ncurses_prefresh',
            'ncurses_replace_panel',
            'ncurses_show_panel',
            'ncurses_top_panel',
            'ncurses_waddch',
            'ncurses_waddstr',
            'ncurses_wattroff',
            'ncurses_wattron',
            'ncurses_wattrset',
            'ncurses_wborder',
            'ncurses_wclear',
            'ncurses_wcolor_set',
            'ncurses_werase',
            'ncurses_wgetch',
            'ncurses_whline',
            'ncurses_wmouse_trafo',
            'ncurses_wmove',
            'ncurses_wnoutrefresh',
            'ncurses_wrefresh',
            'ncurses_wstandend',
            'ncurses_wstandout',
            'ncurses_wvline',
            'newt_button',
            'newt_button_bar',
            'newt_checkbox',
            'newt_checkbox_get_value',
            'newt_checkbox_set_flags',
            'newt_checkbox_set_value',
            'newt_checkbox_tree',
            'newt_checkbox_tree_add_item',
            'newt_checkbox_tree_find_item',
            'newt_checkbox_tree_get_current',
            'newt_checkbox_tree_get_entry_value',
            'newt_checkbox_tree_get_multi_selection',
            'newt_checkbox_tree_get_selection',
            'newt_checkbox_tree_multi',
            'newt_checkbox_tree_set_current',
            'newt_checkbox_tree_set_entry',
            'newt_checkbox_tree_set_entry_value',
            'newt_checkbox_tree_set_width',
            'newt_compact_button',
            'newt_component_add_callback',
            'newt_component_takes_focus',
            'newt_create_grid',
            'newt_draw_form',
            'newt_entry',
            'newt_entry_get_value',
            'newt_entry_set',
            'newt_entry_set_filter',
            'newt_entry_set_flags',
            'newt_form',
            'newt_form_add_component',
            'newt_form_add_components',
            'newt_form_add_hot_key',
            'newt_form_destroy',
            'newt_form_get_current',
            'newt_form_run',
            'newt_form_set_background',
            'newt_form_set_height',
            'newt_form_set_size',
            'newt_form_set_timer',
            'newt_form_set_width',
            'newt_form_watch_fd',
            'newt_grid_add_components_to_form',
            'newt_grid_basic_window',
            'newt_grid_free',
            'newt_grid_get_size',
            'newt_grid_h_close_stacked',
            'newt_grid_h_stacked',
            'newt_grid_place',
            'newt_grid_set_field',
            'newt_grid_simple_window',
            'newt_grid_v_close_stacked',
            'newt_grid_v_stacked',
            'newt_grid_wrapped_window',
            'newt_grid_wrapped_window_at',
            'newt_label',
            'newt_label_set_text',
            'newt_listbox',
            'newt_listbox_append_entry',
            'newt_listbox_clear',
            'newt_listbox_clear_selection',
            'newt_listbox_delete_entry',
            'newt_listbox_get_current',
            'newt_listbox_get_selection',
            'newt_listbox_insert_entry',
            'newt_listbox_item_count',
            'newt_listbox_select_item',
            'newt_listbox_set_current',
            'newt_listbox_set_current_by_key',
            'newt_listbox_set_data',
            'newt_listbox_set_entry',
            'newt_listbox_set_width',
            'newt_listitem',
            'newt_listitem_get_data',
            'newt_listitem_set',
            'newt_radio_get_current',
            'newt_radiobutton',
            'newt_run_form',
            'newt_scale',
            'newt_scale_set',
            'newt_scrollbar_set',
            'newt_textbox',
            'newt_textbox_get_num_lines',
            'newt_textbox_reflowed',
            'newt_textbox_set_height',
            'newt_textbox_set_text',
            'newt_vertical_scrollbar',
            'oci_bind_array_by_name',
            'oci_bind_by_name',
            'oci_cancel',
            'oci_close',
            'oci_commit',
            'oci_connect',
            'oci_define_by_name',
            'oci_error',
            'oci_execute',
            'oci_fetch',
            'oci_fetch_all',
            'oci_fetch_array',
            'oci_fetch_assoc',
            'oci_fetch_object',
            'oci_fetch_row',
            'oci_field_is_null',
            'oci_field_name',
            'oci_field_precision',
            'oci_field_scale',
            'oci_field_size',
            'oci_field_type',
            'oci_field_type_raw',
            'oci_free_cursor',
            'oci_free_statement',
            'oci_get_implicit_resultset',
            'oci_new_collection',
            'oci_new_connect',
            'oci_new_cursor',
            'oci_new_descriptor',
            'oci_num_fields',
            'oci_num_rows',
            'oci_parse',
            'oci_pconnect',
            'oci_register_taf_callback',
            'oci_result',
            'oci_rollback',
            'oci_server_version',
            'oci_set_action',
            'oci_set_client_identifier',
            'oci_set_client_info',
            'oci_set_module_name',
            'oci_set_prefetch',
            'oci_statement_type',
            'oci_unregister_taf_callback',
            'odbc_autocommit',
            'odbc_close',
            'odbc_columnprivileges',
            'odbc_columns',
            'odbc_commit',
            'odbc_connect',
            'odbc_cursor',
            'odbc_data_source',
            'odbc_do',
            'odbc_error',
            'odbc_errormsg',
            'odbc_exec',
            'odbc_execute',
            'odbc_fetch_array',
            'odbc_fetch_into',
            'odbc_fetch_row',
            'odbc_field_len',
            'odbc_field_name',
            'odbc_field_num',
            'odbc_field_precision',
            'odbc_field_scale',
            'odbc_field_type',
            'odbc_foreignkeys',
            'odbc_free_result',
            'odbc_gettypeinfo',
            'odbc_next_result',
            'odbc_num_fields',
            'odbc_num_rows',
            'odbc_pconnect',
            'odbc_prepare',
            'odbc_primarykeys',
            'odbc_procedurecolumns',
            'odbc_procedures',
            'odbc_result',
            'odbc_result_all',
            'odbc_rollback',
            'odbc_setoption',
            'odbc_specialcolumns',
            'odbc_statistics',
            'odbc_tableprivileges',
            'odbc_tables',
            'openal_buffer_create',
            'openal_buffer_data',
            'openal_buffer_destroy',
            'openal_buffer_get',
            'openal_buffer_loadwav',
            'openal_context_create',
            'openal_context_current',
            'openal_context_destroy',
            'openal_context_process',
            'openal_context_suspend',
            'openal_device_close',
            'openal_device_open',
            'openal_source_create',
            'openal_source_destroy',
            'openal_source_get',
            'openal_source_pause',
            'openal_source_play',
            'openal_source_rewind',
            'openal_source_set',
            'openal_source_stop',
            'openal_stream',
            'opendir',
            'openssl_csr_new',
            'openssl_dh_compute_key',
            'openssl_free_key',
            'openssl_pkey_export',
            'openssl_pkey_free',
            'openssl_pkey_get_details',
            'openssl_spki_new',
            'openssl_x509_free',
            'pclose',
            'pfsockopen',
            'pg_affected_rows',
            'pg_cancel_query',
            'pg_client_encoding',
            'pg_close',
            'pg_connect_poll',
            'pg_connection_busy',
            'pg_connection_reset',
            'pg_connection_status',
            'pg_consume_input',
            'pg_convert',
            'pg_copy_from',
            'pg_copy_to',
            'pg_dbname',
            'pg_delete',
            'pg_end_copy',
            'pg_escape_bytea',
            'pg_escape_identifier',
            'pg_escape_literal',
            'pg_escape_string',
            'pg_execute',
            'pg_fetch_all',
            'pg_fetch_all_columns',
            'pg_fetch_array',
            'pg_fetch_assoc',
            'pg_fetch_row',
            'pg_field_name',
            'pg_field_num',
            'pg_field_size',
            'pg_field_table',
            'pg_field_type',
            'pg_field_type_oid',
            'pg_flush',
            'pg_free_result',
            'pg_get_notify',
            'pg_get_pid',
            'pg_get_result',
            'pg_host',
            'pg_insert',
            'pg_last_error',
            'pg_last_notice',
            'pg_last_oid',
            'pg_lo_close',
            'pg_lo_create',
            'pg_lo_export',
            'pg_lo_import',
            'pg_lo_open',
            'pg_lo_read',
            'pg_lo_read_all',
            'pg_lo_seek',
            'pg_lo_tell',
            'pg_lo_truncate',
            'pg_lo_unlink',
            'pg_lo_write',
            'pg_meta_data',
            'pg_num_fields',
            'pg_num_rows',
            'pg_options',
            'pg_parameter_status',
            'pg_ping',
            'pg_port',
            'pg_prepare',
            'pg_put_line',
            'pg_query',
            'pg_query_params',
            'pg_result_error',
            'pg_result_error_field',
            'pg_result_seek',
            'pg_result_status',
            'pg_select',
            'pg_send_execute',
            'pg_send_prepare',
            'pg_send_query',
            'pg_send_query_params',
            'pg_set_client_encoding',
            'pg_set_error_verbosity',
            'pg_socket',
            'pg_trace',
            'pg_transaction_status',
            'pg_tty',
            'pg_untrace',
            'pg_update',
            'pg_version',
            'php_user_filter::filter',
            'proc_close',
            'proc_get_status',
            'proc_terminate',
            'ps_add_bookmark',
            'ps_add_launchlink',
            'ps_add_locallink',
            'ps_add_note',
            'ps_add_pdflink',
            'ps_add_weblink',
            'ps_arc',
            'ps_arcn',
            'ps_begin_page',
            'ps_begin_pattern',
            'ps_begin_template',
            'ps_circle',
            'ps_clip',
            'ps_close',
            'ps_close_image',
            'ps_closepath',
            'ps_closepath_stroke',
            'ps_continue_text',
            'ps_curveto',
            'ps_delete',
            'ps_end_page',
            'ps_end_pattern',
            'ps_end_template',
            'ps_fill',
            'ps_fill_stroke',
            'ps_findfont',
            'ps_get_buffer',
            'ps_get_parameter',
            'ps_get_value',
            'ps_hyphenate',
            'ps_include_file',
            'ps_lineto',
            'ps_makespotcolor',
            'ps_moveto',
            'ps_new',
            'ps_open_file',
            'ps_open_image',
            'ps_open_image_file',
            'ps_open_memory_image',
            'ps_place_image',
            'ps_rect',
            'ps_restore',
            'ps_rotate',
            'ps_save',
            'ps_scale',
            'ps_set_border_color',
            'ps_set_border_dash',
            'ps_set_border_style',
            'ps_set_info',
            'ps_set_parameter',
            'ps_set_text_pos',
            'ps_set_value',
            'ps_setcolor',
            'ps_setdash',
            'ps_setflat',
            'ps_setfont',
            'ps_setgray',
            'ps_setlinecap',
            'ps_setlinejoin',
            'ps_setlinewidth',
            'ps_setmiterlimit',
            'ps_setoverprintmode',
            'ps_setpolydash',
            'ps_shading',
            'ps_shading_pattern',
            'ps_shfill',
            'ps_show',
            'ps_show2',
            'ps_show_boxed',
            'ps_show_xy',
            'ps_show_xy2',
            'ps_string_geometry',
            'ps_stringwidth',
            'ps_stroke',
            'ps_symbol',
            'ps_symbol_name',
            'ps_symbol_width',
            'ps_translate',
            'px_close',
            'px_create_fp',
            'px_date2string',
            'px_delete',
            'px_delete_record',
            'px_get_field',
            'px_get_info',
            'px_get_parameter',
            'px_get_record',
            'px_get_schema',
            'px_get_value',
            'px_insert_record',
            'px_new',
            'px_numfields',
            'px_numrecords',
            'px_open_fp',
            'px_put_record',
            'px_retrieve_record',
            'px_set_blob_file',
            'px_set_parameter',
            'px_set_tablename',
            'px_set_targetencoding',
            'px_set_value',
            'px_timestamp2string',
            'px_update_record',
            'radius_acct_open',
            'radius_add_server',
            'radius_auth_open',
            'radius_close',
            'radius_config',
            'radius_create_request',
            'radius_demangle',
            'radius_demangle_mppe_key',
            'radius_get_attr',
            'radius_put_addr',
            'radius_put_attr',
            'radius_put_int',
            'radius_put_string',
            'radius_put_vendor_addr',
            'radius_put_vendor_attr',
            'radius_put_vendor_int',
            'radius_put_vendor_string',
            'radius_request_authenticator',
            'radius_salt_encrypt_attr',
            'radius_send_request',
            'radius_server_secret',
            'radius_strerror',
            'readdir',
            'readfile',
            'recode_file',
            'rename',
            'rewind',
            'rewinddir',
            'rmdir',
            'rpm_close',
            'rpm_get_tag',
            'rpm_open',
            'sapi_windows_vt100_support',
            'scandir',
            'sem_acquire',
            'sem_get',
            'sem_release',
            'sem_remove',
            'set_file_buffer',
            'shm_attach',
            'shm_detach',
            'shm_get_var',
            'shm_has_var',
            'shm_put_var',
            'shm_remove',
            'shm_remove_var',
            'shmop_close',
            'shmop_delete',
            'shmop_open',
            'shmop_read',
            'shmop_size',
            'shmop_write',
            'socket_accept',
            'socket_addrinfo_bind',
            'socket_addrinfo_connect',
            'socket_addrinfo_explain',
            'socket_bind',
            'socket_clear_error',
            'socket_close',
            'socket_connect',
            'socket_export_stream',
            'socket_get_option',
            'socket_get_status',
            'socket_getopt',
            'socket_getpeername',
            'socket_getsockname',
            'socket_import_stream',
            'socket_last_error',
            'socket_listen',
            'socket_read',
            'socket_recv',
            'socket_recvfrom',
            'socket_recvmsg',
            'socket_send',
            'socket_sendmsg',
            'socket_sendto',
            'socket_set_block',
            'socket_set_blocking',
            'socket_set_nonblock',
            'socket_set_option',
            'socket_set_timeout',
            'socket_shutdown',
            'socket_write',
            'sqlite_close',
            'sqlite_fetch_string',
            'sqlite_has_more',
            'sqlite_open',
            'sqlite_popen',
            'sqlsrv_begin_transaction',
            'sqlsrv_cancel',
            'sqlsrv_client_info',
            'sqlsrv_close',
            'sqlsrv_commit',
            'sqlsrv_connect',
            'sqlsrv_execute',
            'sqlsrv_fetch',
            'sqlsrv_fetch_array',
            'sqlsrv_fetch_object',
            'sqlsrv_field_metadata',
            'sqlsrv_free_stmt',
            'sqlsrv_get_field',
            'sqlsrv_has_rows',
            'sqlsrv_next_result',
            'sqlsrv_num_fields',
            'sqlsrv_num_rows',
            'sqlsrv_prepare',
            'sqlsrv_query',
            'sqlsrv_rollback',
            'sqlsrv_rows_affected',
            'sqlsrv_send_stream_data',
            'sqlsrv_server_info',
            'ssh2_auth_agent',
            'ssh2_auth_hostbased_file',
            'ssh2_auth_none',
            'ssh2_auth_password',
            'ssh2_auth_pubkey_file',
            'ssh2_disconnect',
            'ssh2_exec',
            'ssh2_fetch_stream',
            'ssh2_fingerprint',
            'ssh2_methods_negotiated',
            'ssh2_publickey_add',
            'ssh2_publickey_init',
            'ssh2_publickey_list',
            'ssh2_publickey_remove',
            'ssh2_scp_recv',
            'ssh2_scp_send',
            'ssh2_sftp',
            'ssh2_sftp_chmod',
            'ssh2_sftp_lstat',
            'ssh2_sftp_mkdir',
            'ssh2_sftp_readlink',
            'ssh2_sftp_realpath',
            'ssh2_sftp_rename',
            'ssh2_sftp_rmdir',
            'ssh2_sftp_stat',
            'ssh2_sftp_symlink',
            'ssh2_sftp_unlink',
            'ssh2_shell',
            'ssh2_tunnel',
            'stomp_connect',
            'streamWrapper::stream_cast',
            'stream_bucket_append',
            'stream_bucket_make_writeable',
            'stream_bucket_new',
            'stream_bucket_prepend',
            'stream_context_create',
            'stream_context_get_default',
            'stream_context_get_options',
            'stream_context_get_params',
            'stream_context_set_default',
            'stream_context_set_params',
            'stream_copy_to_stream',
            'stream_encoding',
            'stream_filter_append',
            'stream_filter_prepend',
            'stream_filter_remove',
            'stream_get_contents',
            'stream_get_line',
            'stream_get_meta_data',
            'stream_isatty',
            'stream_set_blocking',
            'stream_set_chunk_size',
            'stream_set_read_buffer',
            'stream_set_timeout',
            'stream_set_write_buffer',
            'stream_socket_accept',
            'stream_socket_client',
            'stream_socket_enable_crypto',
            'stream_socket_get_name',
            'stream_socket_recvfrom',
            'stream_socket_sendto',
            'stream_socket_server',
            'stream_socket_shutdown',
            'stream_supports_lock',
            'svn_fs_abort_txn',
            'svn_fs_apply_text',
            'svn_fs_begin_txn2',
            'svn_fs_change_node_prop',
            'svn_fs_check_path',
            'svn_fs_contents_changed',
            'svn_fs_copy',
            'svn_fs_delete',
            'svn_fs_dir_entries',
            'svn_fs_file_contents',
            'svn_fs_file_length',
            'svn_fs_is_dir',
            'svn_fs_is_file',
            'svn_fs_make_dir',
            'svn_fs_make_file',
            'svn_fs_node_created_rev',
            'svn_fs_node_prop',
            'svn_fs_props_changed',
            'svn_fs_revision_prop',
            'svn_fs_revision_root',
            'svn_fs_txn_root',
            'svn_fs_youngest_rev',
            'svn_repos_create',
            'svn_repos_fs',
            'svn_repos_fs_begin_txn_for_commit',
            'svn_repos_fs_commit_txn',
            'svn_repos_open',
            'sybase_affected_rows',
            'sybase_close',
            'sybase_connect',
            'sybase_data_seek',
            'sybase_fetch_array',
            'sybase_fetch_assoc',
            'sybase_fetch_field',
            'sybase_fetch_object',
            'sybase_fetch_row',
            'sybase_field_seek',
            'sybase_free_result',
            'sybase_num_fields',
            'sybase_num_rows',
            'sybase_pconnect',
            'sybase_query',
            'sybase_result',
            'sybase_select_db',
            'sybase_set_message_handler',
            'sybase_unbuffered_query',
            'tmpfile',
            'udm_add_search_limit',
            'udm_alloc_agent',
            'udm_alloc_agent_array',
            'udm_cat_list',
            'udm_cat_path',
            'udm_check_charset',
            'udm_clear_search_limits',
            'udm_crc32',
            'udm_errno',
            'udm_error',
            'udm_find',
            'udm_free_agent',
            'udm_free_res',
            'udm_get_doc_count',
            'udm_get_res_field',
            'udm_get_res_param',
            'udm_hash32',
            'udm_load_ispell_data',
            'udm_set_agent_param',
            'unlink',
            'vfprintf',
            'w32api_init_dtype',
            'wddx_add_vars',
            'wddx_packet_end',
            'wddx_packet_start',
            'xml_get_current_byte_index',
            'xml_get_current_column_number',
            'xml_get_current_line_number',
            'xml_get_error_code',
            'xml_parse',
            'xml_parse_into_struct',
            'xml_parser_create',
            'xml_parser_create_ns',
            'xml_parser_free',
            'xml_parser_get_option',
            'xml_parser_set_option',
            'xml_set_character_data_handler',
            'xml_set_default_handler',
            'xml_set_element_handler',
            'xml_set_end_namespace_decl_handler',
            'xml_set_external_entity_ref_handler',
            'xml_set_notation_decl_handler',
            'xml_set_object',
            'xml_set_processing_instruction_handler',
            'xml_set_start_namespace_decl_handler',
            'xml_set_unparsed_entity_decl_handler',
            'xmlrpc_server_add_introspection_data',
            'xmlrpc_server_call_method',
            'xmlrpc_server_create',
            'xmlrpc_server_destroy',
            'xmlrpc_server_register_introspection_callback',
            'xmlrpc_server_register_method',
            'xmlwriter_end_attribute',
            'xmlwriter_end_cdata',
            'xmlwriter_end_comment',
            'xmlwriter_end_document',
            'xmlwriter_end_dtd',
            'xmlwriter_end_dtd_attlist',
            'xmlwriter_end_dtd_element',
            'xmlwriter_end_dtd_entity',
            'xmlwriter_end_element',
            'xmlwriter_end_pi',
            'xmlwriter_flush',
            'xmlwriter_full_end_element',
            'xmlwriter_open_memory',
            'xmlwriter_open_uri',
            'xmlwriter_output_memory',
            'xmlwriter_set_indent',
            'xmlwriter_set_indent_string',
            'xmlwriter_start_attribute',
            'xmlwriter_start_attribute_ns',
            'xmlwriter_start_cdata',
            'xmlwriter_start_comment',
            'xmlwriter_start_document',
            'xmlwriter_start_dtd',
            'xmlwriter_start_dtd_attlist',
            'xmlwriter_start_dtd_element',
            'xmlwriter_start_dtd_entity',
            'xmlwriter_start_element',
            'xmlwriter_start_element_ns',
            'xmlwriter_start_pi',
            'xmlwriter_text',
            'xmlwriter_write_attribute',
            'xmlwriter_write_attribute_ns',
            'xmlwriter_write_cdata',
            'xmlwriter_write_comment',
            'xmlwriter_write_dtd',
            'xmlwriter_write_dtd_attlist',
            'xmlwriter_write_dtd_element',
            'xmlwriter_write_dtd_entity',
            'xmlwriter_write_element',
            'xmlwriter_write_element_ns',
            'xmlwriter_write_pi',
            'xmlwriter_write_raw',
            'xslt_create',
            'yaz_addinfo',
            'yaz_ccl_conf',
            'yaz_ccl_parse',
            'yaz_close',
            'yaz_database',
            'yaz_element',
            'yaz_errno',
            'yaz_error',
            'yaz_es',
            'yaz_es_result',
            'yaz_get_option',
            'yaz_hits',
            'yaz_itemorder',
            'yaz_present',
            'yaz_range',
            'yaz_record',
            'yaz_scan',
            'yaz_scan_result',
            'yaz_schema',
            'yaz_search',
            'yaz_sort',
            'yaz_syntax',
            'zip_close',
            'zip_entry_close',
            'zip_entry_compressedsize',
            'zip_entry_compressionmethod',
            'zip_entry_filesize',
            'zip_entry_name',
            'zip_entry_open',
            'zip_entry_read',
            'zip_open',
            'zip_read',
        ];
    }
}
Resource Operations

Copyright (c) 2015-2018, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class VersionConstraintParser {
    /**
     * @param string $value
     *
     * @return VersionConstraint
     *
     * @throws UnsupportedVersionConstraintException
     */
    public function parse($value) {

        if (strpos($value, '||') !== false) {
            return $this->handleOrGroup($value);
        }

        if (!preg_match('/^[\^~\*]?[\d.\*]+(?:-.*)?$/', $value)) {
            throw new UnsupportedVersionConstraintException(
                sprintf('Version constraint %s is not supported.', $value)
            );
        }

        switch ($value[0]) {
            case '~':
                return $this->handleTildeOperator($value);
            case '^':
                return $this->handleCaretOperator($value);
        }

        $version = new VersionConstraintValue($value);

        if ($version->getMajor()->isAny()) {
            return new AnyVersionConstraint();
        }

        if ($version->getMinor()->isAny()) {
            return new SpecificMajorVersionConstraint(
                $version->getVersionString(),
                $version->getMajor()->getValue()
            );
        }

        if ($version->getPatch()->isAny()) {
            return new SpecificMajorAndMinorVersionConstraint(
                $version->getVersionString(),
                $version->getMajor()->getValue(),
                $version->getMinor()->getValue()
            );
        }

        return new ExactVersionConstraint($version->getVersionString());
    }

    /**
     * @param $value
     *
     * @return OrVersionConstraintGroup
     */
    private function handleOrGroup($value) {
        $constraints = [];

        foreach (explode('||', $value) as $groupSegment) {
            $constraints[] = $this->parse(trim($groupSegment));
        }

        return new OrVersionConstraintGroup($value, $constraints);
    }

    /**
     * @param string $value
     *
     * @return AndVersionConstraintGroup
     */
    private function handleTildeOperator($value) {
        $version = new Version(substr($value, 1));
        $constraints = [
            new GreaterThanOrEqualToVersionConstraint($value, $version)
        ];

        if ($version->getPatch()->isAny()) {
            $constraints[] = new SpecificMajorVersionConstraint(
                $value,
                $version->getMajor()->getValue()
            );
        } else {
            $constraints[] = new SpecificMajorAndMinorVersionConstraint(
                $value,
                $version->getMajor()->getValue(),
                $version->getMinor()->getValue()
            );
        }

        return new AndVersionConstraintGroup($value, $constraints);
    }

    /**
     * @param string $value
     *
     * @return AndVersionConstraintGroup
     */
    private function handleCaretOperator($value) {
        $version = new Version(substr($value, 1));

        return new AndVersionConstraintGroup(
            $value,
            [
                new GreaterThanOrEqualToVersionConstraint($value, $version),
                new SpecificMajorVersionConstraint($value, $version->getMajor()->getValue())
            ]
        );
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class Version {
    /**
     * @var VersionNumber
     */
    private $major;

    /**
     * @var VersionNumber
     */
    private $minor;

    /**
     * @var VersionNumber
     */
    private $patch;

    /**
     * @var PreReleaseSuffix
     */
    private $preReleaseSuffix;

    /**
     * @var string
     */
    private $versionString = '';

    /**
     * @param string $versionString
     */
    public function __construct($versionString) {
        $this->ensureVersionStringIsValid($versionString);

        $this->versionString = $versionString;
    }

    /**
     * @return PreReleaseSuffix
     */
    public function getPreReleaseSuffix() {
        return $this->preReleaseSuffix;
    }

    /**
     * @return string
     */
    public function getVersionString() {
        return $this->versionString;
    }

    /**
     * @return bool
     */
    public function hasPreReleaseSuffix() {
        return $this->preReleaseSuffix !== null;
    }

    /**
     * @param Version $version
     *
     * @return bool
     */
    public function isGreaterThan(Version $version) {
        if ($version->getMajor()->getValue() > $this->getMajor()->getValue()) {
            return false;
        }

        if ($version->getMajor()->getValue() < $this->getMajor()->getValue()) {
            return true;
        }

        if ($version->getMinor()->getValue() > $this->getMinor()->getValue()) {
            return false;
        }

        if ($version->getMinor()->getValue() < $this->getMinor()->getValue()) {
            return true;
        }

        if ($version->getPatch()->getValue() > $this->getPatch()->getValue()) {
            return false;
        }

        if ($version->getPatch()->getValue() < $this->getPatch()->getValue()) {
            return true;
        }

        if (!$version->hasPreReleaseSuffix() && !$this->hasPreReleaseSuffix()) {
            return false;
        }

        if ($version->hasPreReleaseSuffix() && !$this->hasPreReleaseSuffix()) {
            return true;
        }

        if (!$version->hasPreReleaseSuffix() && $this->hasPreReleaseSuffix()) {
            return false;
        }

        return $this->getPreReleaseSuffix()->isGreaterThan($version->getPreReleaseSuffix());
    }

    /**
     * @return VersionNumber
     */
    public function getMajor() {
        return $this->major;
    }

    /**
     * @return VersionNumber
     */
    public function getMinor() {
        return $this->minor;
    }

    /**
     * @return VersionNumber
     */
    public function getPatch() {
        return $this->patch;
    }

    /**
     * @param array $matches
     */
    private function parseVersion(array $matches) {
        $this->major = new VersionNumber($matches['Major']);
        $this->minor = new VersionNumber($matches['Minor']);
        $this->patch = isset($matches['Patch']) ? new VersionNumber($matches['Patch']) : new VersionNumber(null);

        if (isset($matches['PreReleaseSuffix'])) {
            $this->preReleaseSuffix = new PreReleaseSuffix($matches['PreReleaseSuffix']);
        }
    }

    /**
     * @param string $version
     *
     * @throws InvalidVersionException
     */
    private function ensureVersionStringIsValid($version) {
        $regex = '/^v?
            (?<Major>(0|(?:[1-9][0-9]*)))
            \\.
            (?<Minor>(0|(?:[1-9][0-9]*)))
            (\\.
                (?<Patch>(0|(?:[1-9][0-9]*)))
            )?
            (?:
                -
                (?<PreReleaseSuffix>(?:(dev|beta|b|RC|alpha|a|patch|p)\.?\d*))
            )?       
        $/x';

        if (preg_match($regex, $version, $matches) !== 1) {
            throw new InvalidVersionException(
                sprintf("Version string '%s' does not follow SemVer semantics", $version)
            );
        }

        $this->parseVersion($matches);
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

interface Exception {
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

final class UnsupportedVersionConstraintException extends \RuntimeException implements Exception {
}
<?php

namespace PharIo\Version;

class InvalidPreReleaseSuffixException extends \Exception implements Exception {

}
<?php

namespace PharIo\Version;

class InvalidVersionException extends \InvalidArgumentException implements Exception {
}
<?php

namespace PharIo\Version;

class PreReleaseSuffix {
    private $valueScoreMap = [
        'dev' => 0,
        'a' => 1,
        'alpha' => 1,
        'b' => 2,
        'beta' => 2,
        'rc' => 3,
        'p' => 4,
        'patch' => 4,
    ];

    /**
     * @var string
     */
    private $value;

    /**
     * @var int
     */
    private $valueScore;

    /**
     * @var int
     */
    private $number = 0;

    /**
     * @param string $value
     */
    public function __construct($value) {
        $this->parseValue($value);
    }

    /**
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * @return int|null
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * @param PreReleaseSuffix $suffix
     *
     * @return bool
     */
    public function isGreaterThan(PreReleaseSuffix $suffix) {
        if ($this->valueScore > $suffix->valueScore) {
            return true;
        }

        if ($this->valueScore < $suffix->valueScore) {
            return false;
        }

        return $this->getNumber() > $suffix->getNumber();
    }

    /**
     * @param $value
     *
     * @return int
     */
    private function mapValueToScore($value) {
        if (array_key_exists($value, $this->valueScoreMap)) {
            return $this->valueScoreMap[$value];
        }

        return 0;
    }

    private function parseValue($value) {
        $regex = '/-?(dev|beta|b|rc|alpha|a|patch|p)\.?(\d*).*$/i';
        if (preg_match($regex, $value, $matches) !== 1) {
            throw new InvalidPreReleaseSuffixException(sprintf('Invalid label %s', $value));
        }

        $this->value = $matches[1];
        if (isset($matches[2])) {
            $this->number = (int)$matches[2];
        }
        $this->valueScore = $this->mapValueToScore($this->value);
    }
}
<?php

namespace PharIo\Version;

class VersionConstraintValue {
    /**
     * @var VersionNumber
     */
    private $major;

    /**
     * @var VersionNumber
     */
    private $minor;

    /**
     * @var VersionNumber
     */
    private $patch;

    /**
     * @var string
     */
    private $label = '';

    /**
     * @var string
     */
    private $buildMetaData = '';

    /**
     * @var string
     */
    private $versionString = '';

    /**
     * @param string $versionString
     */
    public function __construct($versionString) {
        $this->versionString = $versionString;

        $this->parseVersion($versionString);
    }

    /**
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getBuildMetaData() {
        return $this->buildMetaData;
    }

    /**
     * @return string
     */
    public function getVersionString() {
        return $this->versionString;
    }

    /**
     * @return VersionNumber
     */
    public function getMajor() {
        return $this->major;
    }

    /**
     * @return VersionNumber
     */
    public function getMinor() {
        return $this->minor;
    }

    /**
     * @return VersionNumber
     */
    public function getPatch() {
        return $this->patch;
    }

    /**
     * @param $versionString
     */
    private function parseVersion($versionString) {
        $this->extractBuildMetaData($versionString);
        $this->extractLabel($versionString);

        $versionSegments = explode('.', $versionString);
        $this->major = new VersionNumber($versionSegments[0]);

        $minorValue = isset($versionSegments[1]) ? $versionSegments[1] : null;
        $patchValue = isset($versionSegments[2]) ? $versionSegments[2] : null;

        $this->minor = new VersionNumber($minorValue);
        $this->patch = new VersionNumber($patchValue);
    }

    /**
     * @param string $versionString
     */
    private function extractBuildMetaData(&$versionString) {
        if (preg_match('/\+(.*)/', $versionString, $matches) == 1) {
            $this->buildMetaData = $matches[1];
            $versionString = str_replace($matches[0], '', $versionString);
        }
    }

    /**
     * @param string $versionString
     */
    private function extractLabel(&$versionString) {
        if (preg_match('/\-(.*)/', $versionString, $matches) == 1) {
            $this->label = $matches[1];
            $versionString = str_replace($matches[0], '', $versionString);
        }
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

interface VersionConstraint {
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version);

    /**
     * @return string
     */
    public function asString();

}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

abstract class AbstractVersionConstraint implements VersionConstraint {
    /**
     * @var string
     */
    private $originalValue = '';

    /**
     * @param string $originalValue
     */
    public function __construct($originalValue) {
        $this->originalValue = $originalValue;
    }

    /**
     * @return string
     */
    public function asString() {
        return $this->originalValue;
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class SpecificMajorVersionConstraint extends AbstractVersionConstraint {
    /**
     * @var int
     */
    private $major = 0;

    /**
     * @param string $originalValue
     * @param int $major
     */
    public function __construct($originalValue, $major) {
        parent::__construct($originalValue);

        $this->major = $major;
    }

    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version) {
        return $version->getMajor()->getValue() == $this->major;
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class ExactVersionConstraint extends AbstractVersionConstraint {
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version) {
        return $this->asString() == $version->getVersionString();
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class GreaterThanOrEqualToVersionConstraint extends AbstractVersionConstraint {
    /**
     * @var Version
     */
    private $minimalVersion;

    /**
     * @param string $originalValue
     * @param Version $minimalVersion
     */
    public function __construct($originalValue, Version $minimalVersion) {
        parent::__construct($originalValue);

        $this->minimalVersion = $minimalVersion;
    }

    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version) {
        return $version->getVersionString() == $this->minimalVersion->getVersionString()
            || $version->isGreaterThan($this->minimalVersion);
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class AnyVersionConstraint implements VersionConstraint {
    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version) {
        return true;
    }

    /**
     * @return string
     */
    public function asString() {
        return '*';
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class OrVersionConstraintGroup extends AbstractVersionConstraint {
    /**
     * @var VersionConstraint[]
     */
    private $constraints = [];

    /**
     * @param string $originalValue
     * @param VersionConstraint[] $constraints
     */
    public function __construct($originalValue, array $constraints) {
        parent::__construct($originalValue);

        $this->constraints = $constraints;
    }

    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version) {
        foreach ($this->constraints as $constraint) {
            if ($constraint->complies($version)) {
                return true;
            }
        }

        return false;
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class AndVersionConstraintGroup extends AbstractVersionConstraint {
    /**
     * @var VersionConstraint[]
     */
    private $constraints = [];

    /**
     * @param string $originalValue
     * @param VersionConstraint[] $constraints
     */
    public function __construct($originalValue, array $constraints) {
        parent::__construct($originalValue);

        $this->constraints = $constraints;
    }

    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version) {
        foreach ($this->constraints as $constraint) {
            if (!$constraint->complies($version)) {
                return false;
            }
        }

        return true;
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class SpecificMajorAndMinorVersionConstraint extends AbstractVersionConstraint {
    /**
     * @var int
     */
    private $major = 0;

    /**
     * @var int
     */
    private $minor = 0;

    /**
     * @param string $originalValue
     * @param int $major
     * @param int $minor
     */
    public function __construct($originalValue, $major, $minor) {
        parent::__construct($originalValue);

        $this->major = $major;
        $this->minor = $minor;
    }

    /**
     * @param Version $version
     *
     * @return bool
     */
    public function complies(Version $version) {
        if ($version->getMajor()->getValue() != $this->major) {
            return false;
        }

        return $version->getMinor()->getValue() == $this->minor;
    }
}
<?php
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Version;

class VersionNumber {
    /**
     * @var int
     */
    private $value;

    /**
     * @param mixed $value
     */
    public function __construct($value) {
        if (is_numeric($value)) {
            $this->value = $value;
        }
    }

    /**
     * @return bool
     */
    public function isAny() {
        return $this->value === null;
    }

    /**
     * @return int
     */
    public function getValue() {
        return $this->value;
    }
}
phar-io/version

Copyright (c) 2016-2017 Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de> and contributors
All rights reserved.

Redistribution and use in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

* Redistributions of source code must retain the above copyright notice,
  this list of conditions and the following disclaimer.

* Redistributions in binary form must reproduce the above copyright notice,
  this list of conditions and the following disclaimer in the documentation
  and/or other materials provided with the distribution.

* Neither the name of Arne Blankerts nor the names of contributors
  may be used to endorse or promote products derived from this software
  without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT  * NOT LIMITED TO,
THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS
BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.

<?php declare(strict_types=1);
/*
 * This file is part of php-invoker.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Invoker;

final class TimeoutException extends \RuntimeException implements Exception
{
}
<?php declare(strict_types=1);
/*
 * This file is part of php-invoker.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Invoker;

interface Exception
{
}
<?php declare(strict_types=1);
/*
 * This file is part of php-invoker.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Invoker;

final class Invoker
{
    /**
     * @var int
     */
    private $timeout;

    /**
     * @throws \Throwable
     */
    public function invoke(callable $callable, array $arguments, int $timeout)
    {
        \pcntl_signal(
            \SIGALRM,
            function (): void {
                throw new TimeoutException(
                    \sprintf(
                        'Execution aborted after %d second%s',
                        $this->timeout,
                        $this->timeout === 1 ? '' : 's'
                    )
                );
            },
            true
        );

        $this->timeout = $timeout;

        \pcntl_async_signals(true);
        \pcntl_alarm($timeout);

        try {
            $result = \call_user_func_array($callable, $arguments);
        } catch (\Throwable $t) {
            \pcntl_alarm(0);

            throw $t;
        }

        \pcntl_alarm(0);

        return $result;
    }
}
<?php
/*
 * This file is part of Object Enumerator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\ObjectEnumerator;

interface Exception
{
}
<?php
/*
 * This file is part of Object Enumerator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\ObjectEnumerator;

class InvalidArgumentException extends \InvalidArgumentException implements Exception
{
}
<?php
/*
 * This file is part of Object Enumerator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\ObjectEnumerator;

use SebastianBergmann\ObjectReflector\ObjectReflector;
use SebastianBergmann\RecursionContext\Context;

/**
 * Traverses array structures and object graphs
 * to enumerate all referenced objects.
 */
class Enumerator
{
    /**
     * Returns an array of all objects referenced either
     * directly or indirectly by a variable.
     *
     * @param array|object $variable
     *
     * @return object[]
     */
    public function enumerate($variable)
    {
        if (!is_array($variable) && !is_object($variable)) {
            throw new InvalidArgumentException;
        }

        if (isset(func_get_args()[1])) {
            if (!func_get_args()[1] instanceof Context) {
                throw new InvalidArgumentException;
            }

            $processed = func_get_args()[1];
        } else {
            $processed = new Context;
        }

        $objects = [];

        if ($processed->contains($variable)) {
            return $objects;
        }

        $array = $variable;
        $processed->add($variable);

        if (is_array($variable)) {
            foreach ($array as $element) {
                if (!is_array($element) && !is_object($element)) {
                    continue;
                }

                $objects = array_merge(
                    $objects,
                    $this->enumerate($element, $processed)
                );
            }
        } else {
            $objects[] = $variable;

            $reflector = new ObjectReflector;

            foreach ($reflector->getAttributes($variable) as $value) {
                if (!is_array($value) && !is_object($value)) {
                    continue;
                }

                $objects = array_merge(
                    $objects,
                    $this->enumerate($value, $processed)
                );
            }
        }

        return $objects;
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/environment.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Environment;

final class Console
{
    /**
     * @var int
     */
    public const STDIN  = 0;

    /**
     * @var int
     */
    public const STDOUT = 1;

    /**
     * @var int
     */
    public const STDERR = 2;

    /**
     * Returns true if STDOUT supports colorization.
     *
     * This code has been copied and adapted from
     * Symfony\Component\Console\Output\StreamOutput.
     */
    public function hasColorSupport(): bool
    {
        if ('Hyper' === \getenv('TERM_PROGRAM')) {
            return true;
        }

        if ($this->isWindows()) {
            // @codeCoverageIgnoreStart
            return (\defined('STDOUT') && \function_exists('sapi_windows_vt100_support') && @\sapi_windows_vt100_support(\STDOUT))
                || false !== \getenv('ANSICON')
                || 'ON' === \getenv('ConEmuANSI')
                || 'xterm' === \getenv('TERM');
            // @codeCoverageIgnoreEnd
        }

        if (!\defined('STDOUT')) {
            // @codeCoverageIgnoreStart
            return false;
            // @codeCoverageIgnoreEnd
        }

        return $this->isInteractive(\STDOUT);
    }

    /**
     * Returns the number of columns of the terminal.
     *
     * @codeCoverageIgnore
     */
    public function getNumberOfColumns(): int
    {
        if (!$this->isInteractive(\defined('STDIN') ? \STDIN : self::STDIN)) {
            return 80;
        }

        if ($this->isWindows()) {
            return $this->getNumberOfColumnsWindows();
        }

        return $this->getNumberOfColumnsInteractive();
    }

    /**
     * Returns if the file descriptor is an interactive terminal or not.
     *
     * Normally, we want to use a resource as a parameter, yet sadly it's not always awailable,
     * eg when running code in interactive console (`php -a`), STDIN/STDOUT/STDERR constants are not defined.
     *
     * @param int|resource $fileDescriptor
     */
    public function isInteractive($fileDescriptor = self::STDOUT): bool
    {
        if (\is_resource($fileDescriptor)) {
            // These functions require a descriptor that is a real resource, not a numeric ID of it
            if (\function_exists('stream_isatty') && @\stream_isatty($fileDescriptor)) {
                return true;
            }

            $stat = @\fstat(\STDOUT);
            // Check if formatted mode is S_IFCHR
            return $stat ? 0020000 === ($stat['mode'] & 0170000) : false;
        }

        return \function_exists('posix_isatty') && @\posix_isatty($fileDescriptor);
    }

    private function isWindows(): bool
    {
        return \DIRECTORY_SEPARATOR === '\\';
    }

    /**
     * @codeCoverageIgnore
     */
    private function getNumberOfColumnsInteractive(): int
    {
        if (\function_exists('shell_exec') && \preg_match('#\d+ (\d+)#', \shell_exec('stty size') ?: '', $match) === 1) {
            if ((int) $match[1] > 0) {
                return (int) $match[1];
            }
        }

        if (\function_exists('shell_exec') && \preg_match('#columns = (\d+);#', \shell_exec('stty') ?: '', $match) === 1) {
            if ((int) $match[1] > 0) {
                return (int) $match[1];
            }
        }

        return 80;
    }

    /**
     * @codeCoverageIgnore
     */
    private function getNumberOfColumnsWindows(): int
    {
        $ansicon = \getenv('ANSICON');
        $columns = 80;

        if (\is_string($ansicon) && \preg_match('/^(\d+)x\d+ \(\d+x(\d+)\)$/', \trim($ansicon), $matches)) {
            $columns = $matches[1];
        } elseif (\function_exists('proc_open')) {
            $process = \proc_open(
                'mode CON',
                [
                    1 => ['pipe', 'w'],
                    2 => ['pipe', 'w'],
                ],
                $pipes,
                null,
                null,
                ['suppress_errors' => true]
            );

            if (\is_resource($process)) {
                $info = \stream_get_contents($pipes[1]);

                \fclose($pipes[1]);
                \fclose($pipes[2]);
                \proc_close($process);

                if (\preg_match('/--------+\r?\n.+?(\d+)\r?\n.+?(\d+)\r?\n/', $info, $matches)) {
                    $columns = $matches[2];
                }
            }
        }

        return $columns - 1;
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/environment.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Environment;

final class OperatingSystem
{
    /**
     * Returns PHP_OS_FAMILY (if defined (which it is on PHP >= 7.2)).
     * Returns a string (compatible with PHP_OS_FAMILY) derived from PHP_OS otherwise.
     */
    public function getFamily(): string
    {
        if (\defined('PHP_OS_FAMILY')) {
            return \PHP_OS_FAMILY;
        }

        if (\DIRECTORY_SEPARATOR === '\\') {
            return 'Windows';
        }

        switch (\PHP_OS) {
            case 'Darwin':
                return 'Darwin';

            case 'DragonFly':
            case 'FreeBSD':
            case 'NetBSD':
            case 'OpenBSD':
                return 'BSD';

            case 'Linux':
                return 'Linux';

            case 'SunOS':
                return 'Solaris';

            default:
                return 'Unknown';
        }
    }
}
sebastian/environment

Copyright (c) 2014-2019, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/environment.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Environment;

/**
 * Utility class for HHVM/PHP environment handling.
 */
final class Runtime
{
    /**
     * @var string
     */
    private static $binary;

    /**
     * Returns true when Xdebug or PCOV is available or
     * the runtime used is PHPDBG.
     */
    public function canCollectCodeCoverage(): bool
    {
        return $this->hasXdebug() || $this->hasPCOV() || $this->hasPHPDBGCodeCoverage();
    }

    /**
     * Returns true when Zend OPcache is loaded, enabled, and is configured to discard comments.
     */
    public function discardsComments(): bool
    {
        if (!\extension_loaded('Zend OPcache')) {
            return false;
        }

        if (\ini_get('opcache.save_comments') !== '0') {
            return false;
        }

        if ((\PHP_SAPI === 'cli' || \PHP_SAPI === 'phpdbg') && \ini_get('opcache.enable_cli') === '1') {
            return true;
        }

        if (\PHP_SAPI !== 'cli' && \PHP_SAPI !== 'phpdbg' && \ini_get('opcache.enable') === '1') {
            return true;
        }

        return false;
    }

    /**
     * Returns the path to the binary of the current runtime.
     * Appends ' --php' to the path when the runtime is HHVM.
     */
    public function getBinary(): string
    {
        // HHVM
        if (self::$binary === null && $this->isHHVM()) {
            // @codeCoverageIgnoreStart
            if ((self::$binary = \getenv('PHP_BINARY')) === false) {
                self::$binary = \PHP_BINARY;
            }

            self::$binary = \escapeshellarg(self::$binary) . ' --php' .
                ' -d hhvm.php7.all=1';
            // @codeCoverageIgnoreEnd
        }

        if (self::$binary === null && \PHP_BINARY !== '') {
            self::$binary = \escapeshellarg(\PHP_BINARY);
        }

        if (self::$binary === null) {
            // @codeCoverageIgnoreStart
            $possibleBinaryLocations = [
                \PHP_BINDIR . '/php',
                \PHP_BINDIR . '/php-cli.exe',
                \PHP_BINDIR . '/php.exe',
            ];

            foreach ($possibleBinaryLocations as $binary) {
                if (\is_readable($binary)) {
                    self::$binary = \escapeshellarg($binary);

                    break;
                }
            }
            // @codeCoverageIgnoreEnd
        }

        if (self::$binary === null) {
            // @codeCoverageIgnoreStart
            self::$binary = 'php';
            // @codeCoverageIgnoreEnd
        }

        return self::$binary;
    }

    public function getNameWithVersion(): string
    {
        return $this->getName() . ' ' . $this->getVersion();
    }

    public function getNameWithVersionAndCodeCoverageDriver(): string
    {
        if (!$this->canCollectCodeCoverage() || $this->hasPHPDBGCodeCoverage()) {
            return $this->getNameWithVersion();
        }

        if ($this->hasXdebug()) {
            return \sprintf(
                '%s with Xdebug %s',
                $this->getNameWithVersion(),
                \phpversion('xdebug')
            );
        }

        if ($this->hasPCOV()) {
            return \sprintf(
                '%s with PCOV %s',
                $this->getNameWithVersion(),
                \phpversion('pcov')
            );
        }
    }

    public function getName(): string
    {
        if ($this->isHHVM()) {
            // @codeCoverageIgnoreStart
            return 'HHVM';
            // @codeCoverageIgnoreEnd
        }

        if ($this->isPHPDBG()) {
            // @codeCoverageIgnoreStart
            return 'PHPDBG';
            // @codeCoverageIgnoreEnd
        }

        return 'PHP';
    }

    public function getVendorUrl(): string
    {
        if ($this->isHHVM()) {
            // @codeCoverageIgnoreStart
            return 'http://hhvm.com/';
            // @codeCoverageIgnoreEnd
        }

        return 'https://secure.php.net/';
    }

    public function getVersion(): string
    {
        if ($this->isHHVM()) {
            // @codeCoverageIgnoreStart
            return HHVM_VERSION;
            // @codeCoverageIgnoreEnd
        }

        return \PHP_VERSION;
    }

    /**
     * Returns true when the runtime used is PHP and Xdebug is loaded.
     */
    public function hasXdebug(): bool
    {
        return ($this->isPHP() || $this->isHHVM()) && \extension_loaded('xdebug');
    }

    /**
     * Returns true when the runtime used is HHVM.
     */
    public function isHHVM(): bool
    {
        return \defined('HHVM_VERSION');
    }

    /**
     * Returns true when the runtime used is PHP without the PHPDBG SAPI.
     */
    public function isPHP(): bool
    {
        return !$this->isHHVM() && !$this->isPHPDBG();
    }

    /**
     * Returns true when the runtime used is PHP with the PHPDBG SAPI.
     */
    public function isPHPDBG(): bool
    {
        return \PHP_SAPI === 'phpdbg' && !$this->isHHVM();
    }

    /**
     * Returns true when the runtime used is PHP with the PHPDBG SAPI
     * and the phpdbg_*_oplog() functions are available (PHP >= 7.0).
     */
    public function hasPHPDBGCodeCoverage(): bool
    {
        return $this->isPHPDBG();
    }

    /**
     * Returns true when the runtime used is PHP with PCOV loaded and enabled
     */
    public function hasPCOV(): bool
    {
        return $this->isPHP() && \extension_loaded('pcov') && \ini_get('pcov.enabled');
    }

    /**
     * Parses the loaded php.ini file (if any) as well as all
     * additional php.ini files from the additional ini dir for
     * a list of all configuration settings loaded from files
     * at startup. Then checks for each php.ini setting passed
     * via the `$values` parameter whether this setting has
     * been changed at runtime. Returns an array of strings
     * where each string has the format `key=value` denoting
     * the name of a changed php.ini setting with its new value.
     *
     * @return string[]
     */
    public function getCurrentSettings(array $values): array
    {
        $diff  = [];
        $files = [];

        if ($file = \php_ini_loaded_file()) {
            $files[] = $file;
        }

        if ($scanned = \php_ini_scanned_files()) {
            $files = \array_merge(
                $files,
                \array_map(
                    'trim',
                    \explode(",\n", $scanned)
                )
            );
        }

        foreach ($files as $ini) {
            $config = \parse_ini_file($ini, true);

            foreach ($values as $value) {
                $set = \ini_get($value);

                if (isset($config[$value]) && $set != $config[$value]) {
                    $diff[] = \sprintf('%s=%s', $value, $set);
                }
            }
        }

        return $diff;
    }
}
phpunit/phpunit: 7.5.20
doctrine/instantiator: 1.3.0
myclabs/deep-copy: 1.9.4
phar-io/manifest: 1.0.3
phar-io/version: 2.0.1
phpdocumentor/reflection-common: 2.0.0
phpdocumentor/reflection-docblock: 4.3.4
phpdocumentor/type-resolver: 1.0.1
phpspec/prophecy: 1.10.1
phpunit/php-code-coverage: 6.1.4
phpunit/php-file-iterator: 2.0.2
phpunit/php-invoker: 2.0.0
phpunit/php-text-template: 1.2.1
phpunit/php-timer: 2.1.2
phpunit/php-token-stream: 3.1.1
sebastian/code-unit-reverse-lookup: 1.0.1
sebastian/comparator: 3.0.2
sebastian/diff: 3.0.2
sebastian/environment: 4.2.3
sebastian/exporter: 3.1.2
sebastian/global-state: 2.0.0
sebastian/object-enumerator: 3.0.3
sebastian/object-reflector: 1.1.1
sebastian/recursion-context: 3.0.0
sebastian/resource-operations: 2.0.1
sebastian/version: 2.0.1
symfony/polyfill-ctype: v1.13.1
theseer/tokenizer: 1.1.3
webmozart/assert: 1.6.0
Object Reflector

Copyright (c) 2017, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

use ArrayIterator;
use InvalidArgumentException;
use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\Collection;
use phpDocumentor\Reflection\Types\Compound;
use phpDocumentor\Reflection\Types\Context;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\Iterable_;
use phpDocumentor\Reflection\Types\Nullable;
use phpDocumentor\Reflection\Types\Object_;
use phpDocumentor\Reflection\Types\String_;
use RuntimeException;
use const PREG_SPLIT_DELIM_CAPTURE;
use const PREG_SPLIT_NO_EMPTY;
use function array_keys;
use function array_pop;
use function class_exists;
use function class_implements;
use function count;
use function in_array;
use function preg_split;
use function strlen;
use function strpos;
use function strtolower;
use function substr;
use function trim;

final class TypeResolver
{
    /** @var string Definition of the ARRAY operator for types */
    private const OPERATOR_ARRAY = '[]';

    /** @var string Definition of the NAMESPACE operator in PHP */
    private const OPERATOR_NAMESPACE = '\\';

    /** @var int the iterator parser is inside a compound context */
    private const PARSER_IN_COMPOUND = 0;

    /** @var int the iterator parser is inside a nullable expression context */
    private const PARSER_IN_NULLABLE = 1;

    /** @var int the iterator parser is inside an array expression context */
    private const PARSER_IN_ARRAY_EXPRESSION = 2;

    /** @var int the iterator parser is inside a collection expression context */
    private const PARSER_IN_COLLECTION_EXPRESSION = 3;

    /**
     * @var array<string, string> List of recognized keywords and unto which Value Object they map
     * @psalm-var array<string, class-string<Type>>
     */
    private $keywords = [
        'string' => Types\String_::class,
        'int' => Types\Integer::class,
        'integer' => Types\Integer::class,
        'bool' => Types\Boolean::class,
        'boolean' => Types\Boolean::class,
        'real' => Types\Float_::class,
        'float' => Types\Float_::class,
        'double' => Types\Float_::class,
        'object' => Object_::class,
        'mixed' => Types\Mixed_::class,
        'array' => Array_::class,
        'resource' => Types\Resource_::class,
        'void' => Types\Void_::class,
        'null' => Types\Null_::class,
        'scalar' => Types\Scalar::class,
        'callback' => Types\Callable_::class,
        'callable' => Types\Callable_::class,
        'false' => Types\Boolean::class,
        'true' => Types\Boolean::class,
        'self' => Types\Self_::class,
        '$this' => Types\This::class,
        'static' => Types\Static_::class,
        'parent' => Types\Parent_::class,
        'iterable' => Iterable_::class,
    ];

    /** @var FqsenResolver */
    private $fqsenResolver;

    /**
     * Initializes this TypeResolver with the means to create and resolve Fqsen objects.
     */
    public function __construct(?FqsenResolver $fqsenResolver = null)
    {
        $this->fqsenResolver = $fqsenResolver ?: new FqsenResolver();
    }

    /**
     * Analyzes the given type and returns the FQCN variant.
     *
     * When a type is provided this method checks whether it is not a keyword or
     * Fully Qualified Class Name. If so it will use the given namespace and
     * aliases to expand the type to a FQCN representation.
     *
     * This method only works as expected if the namespace and aliases are set;
     * no dynamic reflection is being performed here.
     *
     * @uses Context::getNamespaceAliases() to check whether the first part of the relative type name should not be
     * replaced with another namespace.
     * @uses Context::getNamespace()        to determine with what to prefix the type name.
     *
     * @param string $type The relative or absolute type.
     */
    public function resolve(string $type, ?Context $context = null) : Type
    {
        $type = trim($type);
        if (!$type) {
            throw new InvalidArgumentException('Attempted to resolve "' . $type . '" but it appears to be empty');
        }

        if ($context === null) {
            $context = new Context('');
        }

        // split the type string into tokens `|`, `?`, `<`, `>`, `,`, `(`, `)[]`, '<', '>' and type names
        $tokens = preg_split(
            '/(\\||\\?|<|>|, ?|\\(|\\)(?:\\[\\])+)/',
            $type,
            -1,
            PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE
        );

        if ($tokens === false) {
            throw new InvalidArgumentException('Unable to split the type string "' . $type . '" into tokens');
        }

        $tokenIterator = new ArrayIterator($tokens);

        return $this->parseTypes($tokenIterator, $context, self::PARSER_IN_COMPOUND);
    }

    /**
     * Analyse each tokens and creates types
     *
     * @param ArrayIterator $tokens        the iterator on tokens
     * @param int           $parserContext on of self::PARSER_* constants, indicating
     * the context where we are in the parsing
     */
    private function parseTypes(ArrayIterator $tokens, Context $context, int $parserContext) : Type
    {
        $types = [];
        $token = '';
        while ($tokens->valid()) {
            $token = $tokens->current();

            if ($token === '|') {
                if (count($types) === 0) {
                    throw new RuntimeException(
                        'A type is missing before a type separator'
                    );
                }

                if ($parserContext !== self::PARSER_IN_COMPOUND
                    && $parserContext !== self::PARSER_IN_ARRAY_EXPRESSION
                    && $parserContext !== self::PARSER_IN_COLLECTION_EXPRESSION
                ) {
                    throw new RuntimeException(
                        'Unexpected type separator'
                    );
                }

                $tokens->next();
            } elseif ($token === '?') {
                if ($parserContext !== self::PARSER_IN_COMPOUND
                    && $parserContext !== self::PARSER_IN_ARRAY_EXPRESSION
                    && $parserContext !== self::PARSER_IN_COLLECTION_EXPRESSION
                ) {
                    throw new RuntimeException(
                        'Unexpected nullable character'
                    );
                }

                $tokens->next();
                $type    = $this->parseTypes($tokens, $context, self::PARSER_IN_NULLABLE);
                $types[] = new Nullable($type);
            } elseif ($token === '(') {
                $tokens->next();
                $type = $this->parseTypes($tokens, $context, self::PARSER_IN_ARRAY_EXPRESSION);

                $resolvedType = new Array_($type);

                $token = $tokens->current();
                // Someone did not properly close their array expression ..
                if ($token === null) {
                    break;
                }

                // we generate arrays corresponding to the number of '[]' after the ')'
                $numberOfArrays = (strlen($token) - 1) / 2;
                for ($i = 0; $i < $numberOfArrays - 1; ++$i) {
                    $resolvedType = new Array_($resolvedType);
                }

                $types[] = $resolvedType;
                $tokens->next();
            } elseif ($parserContext === self::PARSER_IN_ARRAY_EXPRESSION && $token[0] === ')') {
                break;
            } elseif ($token === '<') {
                if (count($types) === 0) {
                    throw new RuntimeException(
                        'Unexpected collection operator "<", class name is missing'
                    );
                }

                $classType = array_pop($types);
                if ($classType !== null) {
                    $types[] = $this->resolveCollection($tokens, $classType, $context);
                }

                $tokens->next();
            } elseif ($parserContext === self::PARSER_IN_COLLECTION_EXPRESSION
                && ($token === '>' || trim($token) === ',')
            ) {
                break;
            } else {
                $type = $this->resolveSingleType($token, $context);
                $tokens->next();
                if ($parserContext === self::PARSER_IN_NULLABLE) {
                    return $type;
                }

                $types[] = $type;
            }
        }

        if ($token === '|') {
            throw new RuntimeException(
                'A type is missing after a type separator'
            );
        }

        if (count($types) === 0) {
            if ($parserContext === self::PARSER_IN_NULLABLE) {
                throw new RuntimeException(
                    'A type is missing after a nullable character'
                );
            }

            if ($parserContext === self::PARSER_IN_ARRAY_EXPRESSION) {
                throw new RuntimeException(
                    'A type is missing in an array expression'
                );
            }

            if ($parserContext === self::PARSER_IN_COLLECTION_EXPRESSION) {
                throw new RuntimeException(
                    'A type is missing in a collection expression'
                );
            }
        } elseif (count($types) === 1) {
            return $types[0];
        }

        return new Compound($types);
    }

    /**
     * resolve the given type into a type object
     *
     * @param string $type the type string, representing a single type
     *
     * @return Type|Array_|Object_
     */
    private function resolveSingleType(string $type, Context $context)
    {
        switch (true) {
            case $this->isKeyword($type):
                return $this->resolveKeyword($type);
            case $this->isTypedArray($type):
                return $this->resolveTypedArray($type, $context);
            case $this->isFqsen($type):
                return $this->resolveTypedObject($type);
            case $this->isPartialStructuralElementName($type):
                return $this->resolveTypedObject($type, $context);
            // @codeCoverageIgnoreStart
            default:
                // I haven't got the foggiest how the logic would come here but added this as a defense.
                throw new RuntimeException(
                    'Unable to resolve type "' . $type . '", there is no known method to resolve it'
                );
        }

        // @codeCoverageIgnoreEnd
    }

    /**
     * Adds a keyword to the list of Keywords and associates it with a specific Value Object.
     */
    public function addKeyword(string $keyword, string $typeClassName) : void
    {
        if (!class_exists($typeClassName)) {
            throw new InvalidArgumentException(
                'The Value Object that needs to be created with a keyword "' . $keyword . '" must be an existing class'
                . ' but we could not find the class ' . $typeClassName
            );
        }

        if (!in_array(Type::class, class_implements($typeClassName), true)) {
            throw new InvalidArgumentException(
                'The class "' . $typeClassName . '" must implement the interface "phpDocumentor\Reflection\Type"'
            );
        }

        $this->keywords[$keyword] = $typeClassName;
    }

    /**
     * Detects whether the given type represents an array.
     *
     * @param string $type A relative or absolute type as defined in the phpDocumentor documentation.
     */
    private function isTypedArray(string $type) : bool
    {
        return substr($type, -2) === self::OPERATOR_ARRAY;
    }

    /**
     * Detects whether the given type represents a PHPDoc keyword.
     *
     * @param string $type A relative or absolute type as defined in the phpDocumentor documentation.
     */
    private function isKeyword(string $type) : bool
    {
        return in_array(strtolower($type), array_keys($this->keywords), true);
    }

    /**
     * Detects whether the given type represents a relative structural element name.
     *
     * @param string $type A relative or absolute type as defined in the phpDocumentor documentation.
     */
    private function isPartialStructuralElementName(string $type) : bool
    {
        return ($type[0] !== self::OPERATOR_NAMESPACE) && !$this->isKeyword($type);
    }

    /**
     * Tests whether the given type is a Fully Qualified Structural Element Name.
     */
    private function isFqsen(string $type) : bool
    {
        return strpos($type, self::OPERATOR_NAMESPACE) === 0;
    }

    /**
     * Resolves the given typed array string (i.e. `string[]`) into an Array object with the right types set.
     */
    private function resolveTypedArray(string $type, Context $context) : Array_
    {
        return new Array_($this->resolveSingleType(substr($type, 0, -2), $context));
    }

    /**
     * Resolves the given keyword (such as `string`) into a Type object representing that keyword.
     */
    private function resolveKeyword(string $type) : Type
    {
        $className = $this->keywords[strtolower($type)];
        return new $className();
    }

    /**
     * Resolves the given FQSEN string into an FQSEN object.
     */
    private function resolveTypedObject(string $type, ?Context $context = null) : Object_
    {
        return new Object_($this->fqsenResolver->resolve($type, $context));
    }

    /**
     * Resolves the collection values and keys
     *
     * @return Array_|Collection
     */
    private function resolveCollection(ArrayIterator $tokens, Type $classType, Context $context) : Type
    {
        $isArray = ((string) $classType === 'array');

        // allow only "array" or class name before "<"
        if (!$isArray
            && (!$classType instanceof Object_ || $classType->getFqsen() === null)) {
            throw new RuntimeException(
                $classType . ' is not a collection'
            );
        }

        $tokens->next();

        $valueType = $this->parseTypes($tokens, $context, self::PARSER_IN_COLLECTION_EXPRESSION);
        $keyType   = null;

        if ($tokens->current() !== null && trim($tokens->current()) === ',') {
            // if we have a comma, then we just parsed the key type, not the value type
            $keyType = $valueType;
            if ($isArray) {
                // check the key type for an "array" collection. We allow only
                // strings or integers.
                if (!$keyType instanceof String_ &&
                    !$keyType instanceof Integer &&
                    !$keyType instanceof Compound
                ) {
                    throw new RuntimeException(
                        'An array can have only integers or strings as keys'
                    );
                }

                if ($keyType instanceof Compound) {
                    foreach ($keyType->getIterator() as $item) {
                        if (!$item instanceof String_ &&
                            !$item instanceof Integer
                        ) {
                            throw new RuntimeException(
                                'An array can have only integers or strings as keys'
                            );
                        }
                    }
                }
            }

            $tokens->next();
            // now let's parse the value type
            $valueType = $this->parseTypes($tokens, $context, self::PARSER_IN_COLLECTION_EXPRESSION);
        }

        if ($tokens->current() !== '>') {
            if (empty($tokens->current())) {
                throw new RuntimeException(
                    'Collection: ">" is missing'
                );
            }

            throw new RuntimeException(
                'Unexpected character "' . $tokens->current() . '", ">" is missing'
            );
        }

        if ($isArray) {
            return new Array_($valueType, $keyType);
        }

        /** @psalm-suppress RedundantCondition */
        if ($classType instanceof Object_) {
            return $this->makeCollectionFromObject($classType, $valueType, $keyType);
        }

        throw new RuntimeException('Invalid $classType provided');
    }

    private function makeCollectionFromObject(Object_ $object, Type $valueType, ?Type $keyType = null) : Collection
    {
        return new Collection($object->getFqsen(), $valueType, $keyType);
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

interface Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string;
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

use InvalidArgumentException;
use phpDocumentor\Reflection\Types\Context;
use function explode;
use function implode;
use function strpos;

class FqsenResolver
{
    /** @var string Definition of the NAMESPACE operator in PHP */
    private const OPERATOR_NAMESPACE = '\\';

    public function resolve(string $fqsen, ?Context $context = null) : Fqsen
    {
        if ($context === null) {
            $context = new Context('');
        }

        if ($this->isFqsen($fqsen)) {
            return new Fqsen($fqsen);
        }

        return $this->resolvePartialStructuralElementName($fqsen, $context);
    }

    /**
     * Tests whether the given type is a Fully Qualified Structural Element Name.
     */
    private function isFqsen(string $type) : bool
    {
        return strpos($type, self::OPERATOR_NAMESPACE) === 0;
    }

    /**
     * Resolves a partial Structural Element Name (i.e. `Reflection\DocBlock`) to its FQSEN representation
     * (i.e. `\phpDocumentor\Reflection\DocBlock`) based on the Namespace and aliases mentioned in the Context.
     *
     * @throws InvalidArgumentException When type is not a valid FQSEN.
     */
    private function resolvePartialStructuralElementName(string $type, Context $context) : Fqsen
    {
        $typeParts = explode(self::OPERATOR_NAMESPACE, $type, 2);

        $namespaceAliases = $context->getNamespaceAliases();

        // if the first segment is not an alias; prepend namespace name and return
        if (!isset($namespaceAliases[$typeParts[0]])) {
            $namespace = $context->getNamespace();
            if ($namespace !== '') {
                $namespace .= self::OPERATOR_NAMESPACE;
            }

            return new Fqsen(self::OPERATOR_NAMESPACE . $namespace . $type);
        }

        $typeParts[0] = $namespaceAliases[$typeParts[0]];

        return new Fqsen(self::OPERATOR_NAMESPACE . implode(self::OPERATOR_NAMESPACE, $typeParts));
    }
}
The MIT License (MIT)

Copyright (c) 2010 Mike van Riel

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the '$this' pseudo-type.
 *
 * $this, as a Type, represents the instance of the class associated with the element as it was called. $this is
 * commonly used when documenting fluent interfaces since it represents that the same object is returned.
 */
final class This implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return '$this';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the pseudo-type 'void'.
 *
 * Void is generally only used when working with return types as it signifies that the method intentionally does not
 * return any value.
 */
final class Void_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'void';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the type 'string'.
 */
final class String_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'string';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the 'scalar' pseudo-type, which is either a string, integer, float or boolean.
 */
final class Scalar implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'scalar';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing a Callable type.
 */
final class Callable_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'callable';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

final class Integer implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'int';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing a Boolean type.
 */
final class Boolean implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'bool';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

/**
 * Represents an array type as described in the PSR-5, the PHPDoc Standard.
 *
 * An array can be represented in two forms:
 *
 * 1. Untyped (`array`), where the key and value type is unknown and hence classified as 'Mixed_'.
 * 2. Types (`string[]`), where the value type is provided by preceding an opening and closing square bracket with a
 *    type name.
 */
final class Array_ extends AbstractList
{
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing a null value or type.
 */
final class Null_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'null';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use InvalidArgumentException;
use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\Type;
use function strpos;

/**
 * Value Object representing an object.
 *
 * An object can be either typed or untyped. When an object is typed it means that it has an identifier, the FQSEN,
 * pointing to an element in PHP. Object types that are untyped do not refer to a specific class but represent objects
 * in general.
 */
final class Object_ implements Type
{
    /** @var Fqsen|null */
    private $fqsen;

    /**
     * Initializes this object with an optional FQSEN, if not provided this object is considered 'untyped'.
     *
     * @throws InvalidArgumentException When provided $fqsen is not a valid type.
     */
    public function __construct(?Fqsen $fqsen = null)
    {
        if (strpos((string) $fqsen, '::') !== false || strpos((string) $fqsen, '()') !== false) {
            throw new InvalidArgumentException(
                'Object types can only refer to a class, interface or trait but a method, function, constant or '
                . 'property was received: ' . (string) $fqsen
            );
        }

        $this->fqsen = $fqsen;
    }

    /**
     * Returns the FQSEN associated with this object.
     */
    public function getFqsen() : ?Fqsen
    {
        return $this->fqsen;
    }

    public function __toString() : string
    {
        if ($this->fqsen) {
            return (string) $this->fqsen;
        }

        return 'object';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing a Float.
 */
final class Float_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'float';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the 'resource' Type.
 */
final class Resource_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'resource';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the 'static' type.
 *
 * Self, as a Type, represents the class in which the associated element was called. This differs from self as self does
 * not take inheritance into account but static means that the return type is always that of the class of the called
 * element.
 *
 * See the documentation on late static binding in the PHP Documentation for more information on the difference between
 * static and self.
 */
final class Static_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'static';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Represents a list of values. This is an abstract class for Array_ and Collection.
 */
abstract class AbstractList implements Type
{
    /** @var Type */
    protected $valueType;

    /** @var Type|null */
    protected $keyType;

    /** @var Type */
    protected $defaultKeyType;

    /**
     * Initializes this representation of an array with the given Type.
     */
    public function __construct(?Type $valueType = null, ?Type $keyType = null)
    {
        if ($valueType === null) {
            $valueType = new Mixed_();
        }

        $this->valueType      = $valueType;
        $this->defaultKeyType = new Compound([new String_(), new Integer()]);
        $this->keyType        = $keyType;
    }

    /**
     * Returns the type for the keys of this array.
     */
    public function getKeyType() : Type
    {
        if ($this->keyType === null) {
            return $this->defaultKeyType;
        }

        return $this->keyType;
    }

    /**
     * Returns the value for the keys of this array.
     */
    public function getValueType() : Type
    {
        return $this->valueType;
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        if ($this->keyType) {
            return 'array<' . $this->keyType . ',' . $this->valueType . '>';
        }

        if ($this->valueType instanceof Mixed_) {
            return 'array';
        }

        if ($this->valueType instanceof Compound) {
            return '(' . $this->valueType . ')[]';
        }

        return $this->valueType . '[]';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing a nullable type. The real type is wrapped.
 */
final class Nullable implements Type
{
    /** @var Type The actual type that is wrapped */
    private $realType;

    /**
     * Initialises this nullable type using the real type embedded
     */
    public function __construct(Type $realType)
    {
        $this->realType = $realType;
    }

    /**
     * Provide access to the actual type directly, if needed.
     */
    public function getActualType() : Type
    {
        return $this->realType;
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return '?' . $this->realType->__toString();
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the 'self' type.
 *
 * Self, as a Type, represents the class in which the associated element was defined.
 */
final class Self_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'self';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing iterable type
 */
final class Iterable_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'iterable';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing the 'parent' type.
 *
 * Parent, as a Type, represents the parent class of class in which the associated element was defined.
 */
final class Parent_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'parent';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use ArrayIterator;
use InvalidArgumentException;
use ReflectionClass;
use ReflectionClassConstant;
use ReflectionMethod;
use ReflectionParameter;
use ReflectionProperty;
use Reflector;
use RuntimeException;
use UnexpectedValueException;
use const T_AS;
use const T_CLASS;
use const T_CURLY_OPEN;
use const T_DOLLAR_OPEN_CURLY_BRACES;
use const T_NAMESPACE;
use const T_NS_SEPARATOR;
use const T_STRING;
use const T_USE;
use function array_merge;
use function file_exists;
use function file_get_contents;
use function get_class;
use function is_string;
use function token_get_all;
use function trim;

/**
 * Convenience class to create a Context for DocBlocks when not using the Reflection Component of phpDocumentor.
 *
 * For a DocBlock to be able to resolve types that use partial namespace names or rely on namespace imports we need to
 * provide a bit of context so that the DocBlock can read that and based on it decide how to resolve the types to
 * Fully Qualified names.
 *
 * @see Context for more information.
 */
final class ContextFactory
{
    /** The literal used at the end of a use statement. */
    private const T_LITERAL_END_OF_USE = ';';

    /** The literal used between sets of use statements */
    private const T_LITERAL_USE_SEPARATOR = ',';

    /**
     * Build a Context given a Class Reflection.
     *
     * @see Context for more information on Contexts.
     */
    public function createFromReflector(Reflector $reflector) : Context
    {
        if ($reflector instanceof ReflectionClass) {
            return $this->createFromReflectionClass($reflector);
        }

        if ($reflector instanceof ReflectionParameter) {
            return $this->createFromReflectionParameter($reflector);
        }

        if ($reflector instanceof ReflectionMethod) {
            return $this->createFromReflectionMethod($reflector);
        }

        if ($reflector instanceof ReflectionProperty) {
            return $this->createFromReflectionProperty($reflector);
        }

        if ($reflector instanceof ReflectionClassConstant) {
            return $this->createFromReflectionClassConstant($reflector);
        }

        throw new UnexpectedValueException('Unhandled \Reflector instance given:  ' . get_class($reflector));
    }

    private function createFromReflectionParameter(ReflectionParameter $parameter) : Context
    {
        $class = $parameter->getDeclaringClass();
        if ($class) {
            return $this->createFromReflectionClass($class);
        }

        throw new InvalidArgumentException('Unable to get class of ' . $parameter->getName());
    }

    private function createFromReflectionMethod(ReflectionMethod $method) : Context
    {
        return $this->createFromReflectionClass($method->getDeclaringClass());
    }

    private function createFromReflectionProperty(ReflectionProperty $property) : Context
    {
        return $this->createFromReflectionClass($property->getDeclaringClass());
    }

    private function createFromReflectionClassConstant(ReflectionClassConstant $constant) : Context
    {
        return $this->createFromReflectionClass($constant->getDeclaringClass());
    }

    private function createFromReflectionClass(ReflectionClass $class) : Context
    {
        $fileName  = $class->getFileName();
        $namespace = $class->getNamespaceName();

        if (is_string($fileName) && file_exists($fileName)) {
            $contents = file_get_contents($fileName);
            if ($contents === false) {
                throw new RuntimeException('Unable to read file "' . $fileName . '"');
            }

            return $this->createForNamespace($namespace, $contents);
        }

        return new Context($namespace, []);
    }

    /**
     * Build a Context for a namespace in the provided file contents.
     *
     * @see Context for more information on Contexts.
     *
     * @param string $namespace    It does not matter if a `\` precedes the namespace name,
     * this method first normalizes.
     * @param string $fileContents The file's contents to retrieve the aliases from with the given namespace.
     */
    public function createForNamespace(string $namespace, string $fileContents) : Context
    {
        $namespace        = trim($namespace, '\\');
        $useStatements    = [];
        $currentNamespace = '';
        $tokens           = new ArrayIterator(token_get_all($fileContents));

        while ($tokens->valid()) {
            switch ($tokens->current()[0]) {
                case T_NAMESPACE:
                    $currentNamespace = $this->parseNamespace($tokens);
                    break;
                case T_CLASS:
                    // Fast-forward the iterator through the class so that any
                    // T_USE tokens found within are skipped - these are not
                    // valid namespace use statements so should be ignored.
                    $braceLevel      = 0;
                    $firstBraceFound = false;
                    while ($tokens->valid() && ($braceLevel > 0 || !$firstBraceFound)) {
                        if ($tokens->current() === '{'
                            || $tokens->current()[0] === T_CURLY_OPEN
                            || $tokens->current()[0] === T_DOLLAR_OPEN_CURLY_BRACES) {
                            if (!$firstBraceFound) {
                                $firstBraceFound = true;
                            }

                            ++$braceLevel;
                        }

                        if ($tokens->current() === '}') {
                            --$braceLevel;
                        }

                        $tokens->next();
                    }
                    break;
                case T_USE:
                    if ($currentNamespace === $namespace) {
                        $useStatements = array_merge($useStatements, $this->parseUseStatement($tokens));
                    }
                    break;
            }

            $tokens->next();
        }

        return new Context($namespace, $useStatements);
    }

    /**
     * Deduce the name from tokens when we are at the T_NAMESPACE token.
     */
    private function parseNamespace(ArrayIterator $tokens) : string
    {
        // skip to the first string or namespace separator
        $this->skipToNextStringOrNamespaceSeparator($tokens);

        $name = '';
        while ($tokens->valid() && ($tokens->current()[0] === T_STRING || $tokens->current()[0] === T_NS_SEPARATOR)
        ) {
            $name .= $tokens->current()[1];
            $tokens->next();
        }

        return $name;
    }

    /**
     * Deduce the names of all imports when we are at the T_USE token.
     *
     * @return string[]
     */
    private function parseUseStatement(ArrayIterator $tokens) : array
    {
        $uses = [];

        while (true) {
            $this->skipToNextStringOrNamespaceSeparator($tokens);

            $uses = array_merge($uses, $this->extractUseStatements($tokens));
            if ($tokens->current()[0] === self::T_LITERAL_END_OF_USE) {
                return $uses;
            }
        }

        return $uses;
    }

    /**
     * Fast-forwards the iterator as longs as we don't encounter a T_STRING or T_NS_SEPARATOR token.
     */
    private function skipToNextStringOrNamespaceSeparator(ArrayIterator $tokens) : void
    {
        while ($tokens->valid() && ($tokens->current()[0] !== T_STRING) && ($tokens->current()[0] !== T_NS_SEPARATOR)) {
            $tokens->next();
        }
    }

    /**
     * Deduce the namespace name and alias of an import when we are at the T_USE token or have not reached the end of
     * a USE statement yet. This will return a key/value array of the alias => namespace.
     *
     * @return string[]
     *
     * @psalm-suppress TypeDoesNotContainType
     */
    private function extractUseStatements(ArrayIterator $tokens) : array
    {
        $extractedUseStatements = [];
        $groupedNs              = '';
        $currentNs              = '';
        $currentAlias           = '';
        $state                  = 'start';

        while ($tokens->valid()) {
            $currentToken = $tokens->current();
            $tokenId      = is_string($currentToken) ? $currentToken : $currentToken[0];
            $tokenValue   = is_string($currentToken) ? null : $currentToken[1];
            switch ($state) {
                case 'start':
                    switch ($tokenId) {
                        case T_STRING:
                        case T_NS_SEPARATOR:
                            $currentNs   .= $tokenValue;
                            $currentAlias =  $tokenValue;
                            break;
                        case T_CURLY_OPEN:
                        case '{':
                            $state     = 'grouped';
                            $groupedNs = $currentNs;
                            break;
                        case T_AS:
                            $state = 'start-alias';
                            break;
                        case self::T_LITERAL_USE_SEPARATOR:
                        case self::T_LITERAL_END_OF_USE:
                            $state = 'end';
                            break;
                        default:
                            break;
                    }
                    break;
                case 'start-alias':
                    switch ($tokenId) {
                        case T_STRING:
                            $currentAlias = $tokenValue;
                            break;
                        case self::T_LITERAL_USE_SEPARATOR:
                        case self::T_LITERAL_END_OF_USE:
                            $state = 'end';
                            break;
                        default:
                            break;
                    }
                    break;
                case 'grouped':
                    switch ($tokenId) {
                        case T_STRING:
                        case T_NS_SEPARATOR:
                            $currentNs   .= $tokenValue;
                            $currentAlias = $tokenValue;
                            break;
                        case T_AS:
                            $state = 'grouped-alias';
                            break;
                        case self::T_LITERAL_USE_SEPARATOR:
                            $state                                 = 'grouped';
                            $extractedUseStatements[$currentAlias] = $currentNs;
                            $currentNs                             = $groupedNs;
                            $currentAlias                          = '';
                            break;
                        case self::T_LITERAL_END_OF_USE:
                            $state = 'end';
                            break;
                        default:
                            break;
                    }
                    break;
                case 'grouped-alias':
                    switch ($tokenId) {
                        case T_STRING:
                            $currentAlias = $tokenValue;
                            break;
                        case self::T_LITERAL_USE_SEPARATOR:
                            $state                                 = 'grouped';
                            $extractedUseStatements[$currentAlias] = $currentNs;
                            $currentNs                             = $groupedNs;
                            $currentAlias                          = '';
                            break;
                        case self::T_LITERAL_END_OF_USE:
                            $state = 'end';
                            break;
                        default:
                            break;
                    }
            }

            if ($state === 'end') {
                break;
            }

            $tokens->next();
        }

        if ($groupedNs !== $currentNs) {
            $extractedUseStatements[$currentAlias] = $currentNs;
        }

        return $extractedUseStatements;
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing an unknown, or mixed, type.
 */
final class Mixed_ implements Type
{
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'mixed';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use function strlen;
use function substr;
use function trim;

/**
 * Provides information about the Context in which the DocBlock occurs that receives this context.
 *
 * A DocBlock does not know of its own accord in which namespace it occurs and which namespace aliases are applicable
 * for the block of code in which it is in. This information is however necessary to resolve Class names in tags since
 * you can provide a short form or make use of namespace aliases.
 *
 * The phpDocumentor Reflection component knows how to create this class but if you use the DocBlock parser from your
 * own application it is possible to generate a Context class using the ContextFactory; this will analyze the file in
 * which an associated class resides for its namespace and imports.
 *
 * @see ContextFactory::createFromClassReflector()
 * @see ContextFactory::createForNamespace()
 */
final class Context
{
    /** @var string The current namespace. */
    private $namespace;

    /** @var string[] List of namespace aliases => Fully Qualified Namespace. */
    private $namespaceAliases;

    /**
     * Initializes the new context and normalizes all passed namespaces to be in Qualified Namespace Name (QNN)
     * format (without a preceding `\`).
     *
     * @param string   $namespace        The namespace where this DocBlock resides in.
     * @param string[] $namespaceAliases List of namespace aliases => Fully Qualified Namespace.
     */
    public function __construct(string $namespace, array $namespaceAliases = [])
    {
        $this->namespace = $namespace !== 'global' && $namespace !== 'default'
            ? trim($namespace, '\\')
            : '';

        foreach ($namespaceAliases as $alias => $fqnn) {
            if ($fqnn[0] === '\\') {
                $fqnn = substr($fqnn, 1);
            }

            if ($fqnn[strlen($fqnn) - 1] === '\\') {
                $fqnn = substr($fqnn, 0, -1);
            }

            $namespaceAliases[$alias] = $fqnn;
        }

        $this->namespaceAliases = $namespaceAliases;
    }

    /**
     * Returns the Qualified Namespace Name (thus without `\` in front) where the associated element is in.
     */
    public function getNamespace() : string
    {
        return $this->namespace;
    }

    /**
     * Returns a list of Qualified Namespace Names (thus without `\` in front) that are imported, the keys represent
     * the alias for the imported Namespace.
     *
     * @return string[]
     */
    public function getNamespaceAliases() : array
    {
        return $this->namespaceAliases;
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\Type;

/**
 * Represents a collection type as described in the PSR-5, the PHPDoc Standard.
 *
 * A collection can be represented in two forms:
 *
 * 1. `ACollectionObject<aValueType>`
 * 2. `ACollectionObject<aValueType,aKeyType>`
 *
 * - ACollectionObject can be 'array' or an object that can act as an array
 * - aValueType and aKeyType can be any type expression
 */
final class Collection extends AbstractList
{
    /** @var Fqsen|null */
    private $fqsen;

    /**
     * Initializes this representation of an array with the given Type or Fqsen.
     */
    public function __construct(?Fqsen $fqsen, Type $valueType, ?Type $keyType = null)
    {
        parent::__construct($valueType, $keyType);

        $this->fqsen = $fqsen;
    }

    /**
     * Returns the FQSEN associated with this object.
     */
    public function getFqsen() : ?Fqsen
    {
        return $this->fqsen;
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        $objectType = (string) ($this->fqsen ?? 'object');

        if ($this->keyType === null) {
            return $objectType . '<' . $this->valueType . '>';
        }

        return $objectType . '<' . $this->keyType . ',' . $this->valueType . '>';
    }
}
<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use ArrayIterator;
use InvalidArgumentException;
use IteratorAggregate;
use phpDocumentor\Reflection\Type;
use function implode;

/**
 * Value Object representing a Compound Type.
 *
 * A Compound Type is not so much a special keyword or object reference but is a series of Types that are separated
 * using an OR operator (`|`). This combination of types signifies that whatever is associated with this compound type
 * may contain a value with any of the given types.
 */
final class Compound implements Type, IteratorAggregate
{
    /** @var Type[] */
    private $types;

    /**
     * Initializes a compound type (i.e. `string|int`) and tests if the provided types all implement the Type interface.
     *
     * @param Type[] $types
     *
     * @throws InvalidArgumentException When types are not all instance of Type.
     */
    public function __construct(array $types)
    {
        foreach ($types as $type) {
            /** @psalm-suppress RedundantConditionGivenDocblockType */
            if (!$type instanceof Type) {
                throw new InvalidArgumentException('A compound type can only have other types as elements');
            }
        }

        $this->types = $types;
    }

    /**
     * Returns the type at the given index.
     */
    public function get(int $index) : ?Type
    {
        if (!$this->has($index)) {
            return null;
        }

        return $this->types[$index];
    }

    /**
     * Tests if this compound type has a type with the given index.
     */
    public function has(int $index) : bool
    {
        return isset($this->types[$index]);
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return implode('|', $this->types);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new ArrayIterator($this->types);
    }
}
<?php
/*
 * This file is part of the Version package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann;

/**
 * @since Class available since Release 1.0.0
 */
class Version
{
    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $release;

    /**
     * @var string
     */
    private $version;

    /**
     * @param string $release
     * @param string $path
     */
    public function __construct($release, $path)
    {
        $this->release = $release;
        $this->path    = $path;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        if ($this->version === null) {
            if (count(explode('.', $this->release)) == 3) {
                $this->version = $this->release;
            } else {
                $this->version = $this->release . '-dev';
            }

            $git = $this->getGitInformation($this->path);

            if ($git) {
                if (count(explode('.', $this->release)) == 3) {
                    $this->version = $git;
                } else {
                    $git = explode('-', $git);

                    $this->version = $this->release . '-' . end($git);
                }
            }
        }

        return $this->version;
    }

    /**
     * @param string $path
     *
     * @return bool|string
     */
    private function getGitInformation($path)
    {
        if (!is_dir($path . DIRECTORY_SEPARATOR . '.git')) {
            return false;
        }

        $process = proc_open(
            'git describe --tags',
            [
                1 => ['pipe', 'w'],
                2 => ['pipe', 'w'],
            ],
            $pipes,
            $path
        );

        if (!is_resource($process)) {
            return false;
        }

        $result = trim(stream_get_contents($pipes[1]));

        fclose($pipes[1]);
        fclose($pipes[2]);

        $returnCode = proc_close($process);

        if ($returnCode !== 0) {
            return false;
        }

        return $result;
    }
}
Version

Copyright (c) 2013-2015, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php

/*
 * This file is part of the webmozart/assert package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Assert;

use ArrayAccess;
use BadMethodCallException;
use Closure;
use Countable;
use Exception;
use InvalidArgumentException;
use ResourceBundle;
use SimpleXMLElement;
use Throwable;
use Traversable;

/**
 * Efficient assertions to validate the input/output of your methods.
 *
 * @method static void nullOrString($value, $message = '')
 * @method static void nullOrStringNotEmpty($value, $message = '')
 * @method static void nullOrInteger($value, $message = '')
 * @method static void nullOrIntegerish($value, $message = '')
 * @method static void nullOrFloat($value, $message = '')
 * @method static void nullOrNumeric($value, $message = '')
 * @method static void nullOrNatural($value, $message = '')
 * @method static void nullOrBoolean($value, $message = '')
 * @method static void nullOrScalar($value, $message = '')
 * @method static void nullOrObject($value, $message = '')
 * @method static void nullOrResource($value, $type = null, $message = '')
 * @method static void nullOrIsCallable($value, $message = '')
 * @method static void nullOrIsArray($value, $message = '')
 * @method static void nullOrIsTraversable($value, $message = '')
 * @method static void nullOrIsArrayAccessible($value, $message = '')
 * @method static void nullOrIsCountable($value, $message = '')
 * @method static void nullOrIsIterable($value, $message = '')
 * @method static void nullOrIsInstanceOf($value, $class, $message = '')
 * @method static void nullOrNotInstanceOf($value, $class, $message = '')
 * @method static void nullOrIsInstanceOfAny($value, $classes, $message = '')
 * @method static void nullOrIsEmpty($value, $message = '')
 * @method static void nullOrNotEmpty($value, $message = '')
 * @method static void nullOrTrue($value, $message = '')
 * @method static void nullOrFalse($value, $message = '')
 * @method static void nullOrIp($value, $message = '')
 * @method static void nullOrIpv4($value, $message = '')
 * @method static void nullOrIpv6($value, $message = '')
 * @method static void nullOrEmail($value, $message = '')
 * @method static void nullOrUniqueValues($values, $message = '')
 * @method static void nullOrEq($value, $expect, $message = '')
 * @method static void nullOrNotEq($value, $expect, $message = '')
 * @method static void nullOrSame($value, $expect, $message = '')
 * @method static void nullOrNotSame($value, $expect, $message = '')
 * @method static void nullOrGreaterThan($value, $limit, $message = '')
 * @method static void nullOrGreaterThanEq($value, $limit, $message = '')
 * @method static void nullOrLessThan($value, $limit, $message = '')
 * @method static void nullOrLessThanEq($value, $limit, $message = '')
 * @method static void nullOrRange($value, $min, $max, $message = '')
 * @method static void nullOrOneOf($value, $values, $message = '')
 * @method static void nullOrContains($value, $subString, $message = '')
 * @method static void nullOrNotContains($value, $subString, $message = '')
 * @method static void nullOrNotWhitespaceOnly($value, $message = '')
 * @method static void nullOrStartsWith($value, $prefix, $message = '')
 * @method static void nullOrStartsWithLetter($value, $message = '')
 * @method static void nullOrEndsWith($value, $suffix, $message = '')
 * @method static void nullOrRegex($value, $pattern, $message = '')
 * @method static void nullOrNotRegex($value, $pattern, $message = '')
 * @method static void nullOrUnicodeLetters($value, $message = '')
 * @method static void nullOrAlpha($value, $message = '')
 * @method static void nullOrDigits($value, $message = '')
 * @method static void nullOrAlnum($value, $message = '')
 * @method static void nullOrLower($value, $message = '')
 * @method static void nullOrUpper($value, $message = '')
 * @method static void nullOrLength($value, $length, $message = '')
 * @method static void nullOrMinLength($value, $min, $message = '')
 * @method static void nullOrMaxLength($value, $max, $message = '')
 * @method static void nullOrLengthBetween($value, $min, $max, $message = '')
 * @method static void nullOrFileExists($value, $message = '')
 * @method static void nullOrFile($value, $message = '')
 * @method static void nullOrDirectory($value, $message = '')
 * @method static void nullOrReadable($value, $message = '')
 * @method static void nullOrWritable($value, $message = '')
 * @method static void nullOrClassExists($value, $message = '')
 * @method static void nullOrSubclassOf($value, $class, $message = '')
 * @method static void nullOrInterfaceExists($value, $message = '')
 * @method static void nullOrImplementsInterface($value, $interface, $message = '')
 * @method static void nullOrPropertyExists($value, $property, $message = '')
 * @method static void nullOrPropertyNotExists($value, $property, $message = '')
 * @method static void nullOrMethodExists($value, $method, $message = '')
 * @method static void nullOrMethodNotExists($value, $method, $message = '')
 * @method static void nullOrKeyExists($value, $key, $message = '')
 * @method static void nullOrKeyNotExists($value, $key, $message = '')
 * @method static void nullOrValidArrayKey($value, $message = '')
 * @method static void nullOrCount($value, $key, $message = '')
 * @method static void nullOrMinCount($value, $min, $message = '')
 * @method static void nullOrMaxCount($value, $max, $message = '')
 * @method static void nullOrIsList($value, $message = '')
 * @method static void nullOrIsNonEmptyList($value, $message = '')
 * @method static void nullOrIsMap($value, $message = '')
 * @method static void nullOrIsNonEmptyMap($value, $message = '')
 * @method static void nullOrCountBetween($value, $min, $max, $message = '')
 * @method static void nullOrUuid($values, $message = '')
 * @method static void nullOrThrows($expression, $class = 'Exception', $message = '')
 * @method static void allString($values, $message = '')
 * @method static void allStringNotEmpty($values, $message = '')
 * @method static void allInteger($values, $message = '')
 * @method static void allIntegerish($values, $message = '')
 * @method static void allFloat($values, $message = '')
 * @method static void allNumeric($values, $message = '')
 * @method static void allNatural($values, $message = '')
 * @method static void allBoolean($values, $message = '')
 * @method static void allScalar($values, $message = '')
 * @method static void allObject($values, $message = '')
 * @method static void allResource($values, $type = null, $message = '')
 * @method static void allIsCallable($values, $message = '')
 * @method static void allIsArray($values, $message = '')
 * @method static void allIsTraversable($values, $message = '')
 * @method static void allIsArrayAccessible($values, $message = '')
 * @method static void allIsCountable($values, $message = '')
 * @method static void allIsIterable($values, $message = '')
 * @method static void allIsInstanceOf($values, $class, $message = '')
 * @method static void allNotInstanceOf($values, $class, $message = '')
 * @method static void allIsInstanceOfAny($values, $classes, $message = '')
 * @method static void allNull($values, $message = '')
 * @method static void allNotNull($values, $message = '')
 * @method static void allIsEmpty($values, $message = '')
 * @method static void allNotEmpty($values, $message = '')
 * @method static void allTrue($values, $message = '')
 * @method static void allFalse($values, $message = '')
 * @method static void allIp($values, $message = '')
 * @method static void allIpv4($values, $message = '')
 * @method static void allIpv6($values, $message = '')
 * @method static void allEmail($values, $message = '')
 * @method static void allUniqueValues($values, $message = '')
 * @method static void allEq($values, $expect, $message = '')
 * @method static void allNotEq($values, $expect, $message = '')
 * @method static void allSame($values, $expect, $message = '')
 * @method static void allNotSame($values, $expect, $message = '')
 * @method static void allGreaterThan($values, $limit, $message = '')
 * @method static void allGreaterThanEq($values, $limit, $message = '')
 * @method static void allLessThan($values, $limit, $message = '')
 * @method static void allLessThanEq($values, $limit, $message = '')
 * @method static void allRange($values, $min, $max, $message = '')
 * @method static void allOneOf($values, $values, $message = '')
 * @method static void allContains($values, $subString, $message = '')
 * @method static void allNotContains($values, $subString, $message = '')
 * @method static void allNotWhitespaceOnly($values, $message = '')
 * @method static void allStartsWith($values, $prefix, $message = '')
 * @method static void allStartsWithLetter($values, $message = '')
 * @method static void allEndsWith($values, $suffix, $message = '')
 * @method static void allRegex($values, $pattern, $message = '')
 * @method static void allNotRegex($values, $pattern, $message = '')
 * @method static void allUnicodeLetters($values, $message = '')
 * @method static void allAlpha($values, $message = '')
 * @method static void allDigits($values, $message = '')
 * @method static void allAlnum($values, $message = '')
 * @method static void allLower($values, $message = '')
 * @method static void allUpper($values, $message = '')
 * @method static void allLength($values, $length, $message = '')
 * @method static void allMinLength($values, $min, $message = '')
 * @method static void allMaxLength($values, $max, $message = '')
 * @method static void allLengthBetween($values, $min, $max, $message = '')
 * @method static void allFileExists($values, $message = '')
 * @method static void allFile($values, $message = '')
 * @method static void allDirectory($values, $message = '')
 * @method static void allReadable($values, $message = '')
 * @method static void allWritable($values, $message = '')
 * @method static void allClassExists($values, $message = '')
 * @method static void allSubclassOf($values, $class, $message = '')
 * @method static void allInterfaceExists($values, $message = '')
 * @method static void allImplementsInterface($values, $interface, $message = '')
 * @method static void allPropertyExists($values, $property, $message = '')
 * @method static void allPropertyNotExists($values, $property, $message = '')
 * @method static void allMethodExists($values, $method, $message = '')
 * @method static void allMethodNotExists($values, $method, $message = '')
 * @method static void allKeyExists($values, $key, $message = '')
 * @method static void allKeyNotExists($values, $key, $message = '')
 * @method static void allValidArrayKey($values, $message = '')
 * @method static void allCount($values, $key, $message = '')
 * @method static void allMinCount($values, $min, $message = '')
 * @method static void allMaxCount($values, $max, $message = '')
 * @method static void allCountBetween($values, $min, $max, $message = '')
 * @method static void allIsList($values, $message = '')
 * @method static void allIsNonEmptyList($values, $message = '')
 * @method static void allIsMap($values, $message = '')
 * @method static void allIsNonEmptyMap($values, $message = '')
 * @method static void allUuid($values, $message = '')
 * @method static void allThrows($expressions, $class = 'Exception', $message = '')
 *
 * @since  1.0
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Assert
{
    /**
     * @psalm-assert string $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function string($value, $message = '')
    {
        if (!\is_string($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a string. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function stringNotEmpty($value, $message = '')
    {
        static::string($value, $message);
        static::notEq($value, '', $message);
    }

    /**
     * @psalm-assert int $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function integer($value, $message = '')
    {
        if (!\is_int($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an integer. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert numeric $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function integerish($value, $message = '')
    {
        if (!\is_numeric($value) || $value != (int) $value) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an integerish value. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert float $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function float($value, $message = '')
    {
        if (!\is_float($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a float. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert numeric $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function numeric($value, $message = '')
    {
        if (!\is_numeric($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a numeric. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert int $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function natural($value, $message = '')
    {
        if (!\is_int($value) || $value < 0) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a non-negative integer. Got %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @psalm-assert bool $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function boolean($value, $message = '')
    {
        if (!\is_bool($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a boolean. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert scalar $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function scalar($value, $message = '')
    {
        if (!\is_scalar($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a scalar. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert object $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function object($value, $message = '')
    {
        if (!\is_object($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an object. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert resource $value
     *
     * @param mixed       $value
     * @param string|null $type    type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string      $message
     *
     * @throws InvalidArgumentException
     */
    public static function resource($value, $type = null, $message = '')
    {
        if (!\is_resource($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a resource. Got: %s',
                static::typeToString($value)
            ));
        }

        if ($type && $type !== \get_resource_type($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a resource of type %2$s. Got: %s',
                static::typeToString($value),
                $type
            ));
        }
    }

    /**
     * @psalm-assert callable $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isCallable($value, $message = '')
    {
        if (!\is_callable($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a callable. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert array $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isArray($value, $message = '')
    {
        if (!\is_array($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert iterable $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isTraversable($value, $message = '')
    {
        @\trigger_error(
            \sprintf(
                'The "%s" assertion is deprecated. You should stop using it, as it will soon be removed in 2.0 version. Use "isIterable" or "isInstanceOf" instead.',
                __METHOD__
            ),
            \E_USER_DEPRECATED
        );

        if (!\is_array($value) && !($value instanceof Traversable)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a traversable. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isArrayAccessible($value, $message = '')
    {
        if (!\is_array($value) && !($value instanceof ArrayAccess)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array accessible. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert countable $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isCountable($value, $message = '')
    {
        if (
            !\is_array($value)
            && !($value instanceof Countable)
            && !($value instanceof ResourceBundle)
            && !($value instanceof SimpleXMLElement)
        ) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a countable. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-assert iterable $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isIterable($value, $message = '')
    {
        if (!\is_array($value) && !($value instanceof Traversable)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an iterable. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert ExpectedType $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function isInstanceOf($value, $class, $message = '')
    {
        if (!($value instanceof $class)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an instance of %2$s. Got: %s',
                static::typeToString($value),
                $class
            ));
        }
    }

    /**
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert !ExpectedType $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function notInstanceOf($value, $class, $message = '')
    {
        if ($value instanceof $class) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an instance other than %2$s. Got: %s',
                static::typeToString($value),
                $class
            ));
        }
    }

    /**
     * @param mixed                $value
     * @param array<object|string> $classes
     * @param string               $message
     *
     * @throws InvalidArgumentException
     */
    public static function isInstanceOfAny($value, array $classes, $message = '')
    {
        foreach ($classes as $class) {
            if ($value instanceof $class) {
                return;
            }
        }

        static::reportInvalidArgument(\sprintf(
            $message ?: 'Expected an instance of any of %2$s. Got: %s',
            static::typeToString($value),
            \implode(', ', \array_map(array('static', 'valueToString'), $classes))
        ));
    }

    /**
     * @psalm-assert empty $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isEmpty($value, $message = '')
    {
        if (!empty($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an empty value. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @psalm-assert !empty $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notEmpty($value, $message = '')
    {
        if (empty($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a non-empty value. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @psalm-assert null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function null($value, $message = '')
    {
        if (null !== $value) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected null. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @psalm-assert !null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notNull($value, $message = '')
    {
        if (null === $value) {
            static::reportInvalidArgument(
                $message ?: 'Expected a value other than null.'
            );
        }
    }

    /**
     * @psalm-assert true $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function true($value, $message = '')
    {
        if (true !== $value) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be true. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @psalm-assert false $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function false($value, $message = '')
    {
        if (false !== $value) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be false. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function ip($value, $message = '')
    {
        if (false === \filter_var($value, \FILTER_VALIDATE_IP)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be an IP. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function ipv4($value, $message = '')
    {
        if (false === \filter_var($value, \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV4)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be an IPv4. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function ipv6($value, $message = '')
    {
        if (false === \filter_var($value, \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV6)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be an IPv6. Got %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function email($value, $message = '')
    {
        if (false === \filter_var($value, FILTER_VALIDATE_EMAIL)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to be a valid e-mail address. Got %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Does non strict comparisons on the items, so ['3', 3] will not pass the assertion.
     *
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function uniqueValues(array $values, $message = '')
    {
        $allValues = \count($values);
        $uniqueValues = \count(\array_unique($values));

        if ($allValues !== $uniqueValues) {
            $difference = $allValues - $uniqueValues;

            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array of unique values, but %s of them %s duplicated',
                $difference,
                (1 === $difference ? 'is' : 'are')
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function eq($value, $expect, $message = '')
    {
        if ($expect != $value) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($expect)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notEq($value, $expect, $message = '')
    {
        if ($expect == $value) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a different value than %s.',
                static::valueToString($expect)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function same($value, $expect, $message = '')
    {
        if ($expect !== $value) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value identical to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($expect)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notSame($value, $expect, $message = '')
    {
        if ($expect === $value) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value not identical to %s.',
                static::valueToString($expect)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function greaterThan($value, $limit, $message = '')
    {
        if ($value <= $limit) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value greater than %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function greaterThanEq($value, $limit, $message = '')
    {
        if ($value < $limit) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value greater than or equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function lessThan($value, $limit, $message = '')
    {
        if ($value >= $limit) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value less than %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function lessThanEq($value, $limit, $message = '')
    {
        if ($value > $limit) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value less than or equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
        }
    }

    /**
     * Inclusive range, so Assert::(3, 3, 5) passes.
     *
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function range($value, $min, $max, $message = '')
    {
        if ($value < $min || $value > $max) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value between %2$s and %3$s. Got: %s',
                static::valueToString($value),
                static::valueToString($min),
                static::valueToString($max)
            ));
        }
    }

    /**
     * Does strict comparison, so Assert::oneOf(3, ['3']) does not pass the assertion.
     *
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function oneOf($value, array $values, $message = '')
    {
        if (!\in_array($value, $values, true)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected one of: %2$s. Got: %s',
                static::valueToString($value),
                \implode(', ', \array_map(array('static', 'valueToString'), $values))
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $subString
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function contains($value, $subString, $message = '')
    {
        if (false === \strpos($value, $subString)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($subString)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $subString
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notContains($value, $subString, $message = '')
    {
        if (false !== \strpos($value, $subString)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: '%2$s was not expected to be contained in a value. Got: %s',
                static::valueToString($value),
                static::valueToString($subString)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notWhitespaceOnly($value, $message = '')
    {
        if (\preg_match('/^\s*$/', $value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a non-whitespace string. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $prefix
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function startsWith($value, $prefix, $message = '')
    {
        if (0 !== \strpos($value, $prefix)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to start with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($prefix)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function startsWithLetter($value, $message = '')
    {
        static::string($value);

        $valid = isset($value[0]);

        if ($valid) {
            $locale = \setlocale(LC_CTYPE, 0);
            \setlocale(LC_CTYPE, 'C');
            $valid = \ctype_alpha($value[0]);
            \setlocale(LC_CTYPE, $locale);
        }

        if (!$valid) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to start with a letter. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $suffix
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function endsWith($value, $suffix, $message = '')
    {
        if ($suffix !== \substr($value, -\strlen($suffix))) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to end with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($suffix)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $pattern
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function regex($value, $pattern, $message = '')
    {
        if (!\preg_match($pattern, $value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The value %s does not match the expected pattern.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $pattern
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function notRegex($value, $pattern, $message = '')
    {
        if (\preg_match($pattern, $value, $matches, PREG_OFFSET_CAPTURE)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The value %s matches the pattern %s (at offset %d).',
                static::valueToString($value),
                static::valueToString($pattern),
                $matches[0][1]
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function unicodeLetters($value, $message = '')
    {
        static::string($value);

        if (!\preg_match('/^\p{L}+$/u', $value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain only Unicode letters. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function alpha($value, $message = '')
    {
        static::string($value);

        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_alpha($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain only letters. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function digits($value, $message = '')
    {
        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_digit($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain digits only. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function alnum($value, $message = '')
    {
        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_alnum($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain letters and digits only. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function lower($value, $message = '')
    {
        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_lower($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain lowercase characters only. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function upper($value, $message = '')
    {
        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_upper($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain uppercase characters only. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $length
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function length($value, $length, $message = '')
    {
        if ($length !== static::strlen($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain %2$s characters. Got: %s',
                static::valueToString($value),
                $length
            ));
        }
    }

    /**
     * Inclusive min.
     *
     * @param mixed  $value
     * @param mixed  $min
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function minLength($value, $min, $message = '')
    {
        if (static::strlen($value) < $min) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain at least %2$s characters. Got: %s',
                static::valueToString($value),
                $min
            ));
        }
    }

    /**
     * Inclusive max.
     *
     * @param mixed  $value
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function maxLength($value, $max, $message = '')
    {
        if (static::strlen($value) > $max) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain at most %2$s characters. Got: %s',
                static::valueToString($value),
                $max
            ));
        }
    }

    /**
     * Inclusive , so Assert::lengthBetween('asd', 3, 5); passes the assertion.
     *
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function lengthBetween($value, $min, $max, $message = '')
    {
        $length = static::strlen($value);

        if ($length < $min || $length > $max) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a value to contain between %2$s and %3$s characters. Got: %s',
                static::valueToString($value),
                $min,
                $max
            ));
        }
    }

    /**
     * Will also pass if $value is a directory, use Assert::file() instead if you need to be sure it is a file.
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function fileExists($value, $message = '')
    {
        static::string($value);

        if (!\file_exists($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The file %s does not exist.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function file($value, $message = '')
    {
        static::fileExists($value, $message);

        if (!\is_file($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s is not a file.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function directory($value, $message = '')
    {
        static::fileExists($value, $message);

        if (!\is_dir($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s is no directory.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function readable($value, $message = '')
    {
        if (!\is_readable($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s is not readable.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function writable($value, $message = '')
    {
        if (!\is_writable($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'The path %s is not writable.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @psalm-assert class-string $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function classExists($value, $message = '')
    {
        if (!\class_exists($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an existing class name. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function subclassOf($value, $class, $message = '')
    {
        if (!\is_subclass_of($value, $class)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected a sub-class of %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($class)
            ));
        }
    }

    /**
     * @psalm-assert class-string $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function interfaceExists($value, $message = '')
    {
        if (!\interface_exists($value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an existing interface name. got %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param mixed  $value
     * @param mixed  $interface
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function implementsInterface($value, $interface, $message = '')
    {
        if (!\in_array($interface, \class_implements($value))) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an implementation of %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($interface)
            ));
        }
    }

    /**
     * @param string|object $classOrObject
     * @param mixed         $property
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function propertyExists($classOrObject, $property, $message = '')
    {
        if (!\property_exists($classOrObject, $property)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the property %s to exist.',
                static::valueToString($property)
            ));
        }
    }

    /**
     * @param string|object $classOrObject
     * @param mixed         $property
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function propertyNotExists($classOrObject, $property, $message = '')
    {
        if (\property_exists($classOrObject, $property)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the property %s to not exist.',
                static::valueToString($property)
            ));
        }
    }

    /**
     * @param string|object $classOrObject
     * @param mixed         $method
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function methodExists($classOrObject, $method, $message = '')
    {
        if (!\method_exists($classOrObject, $method)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the method %s to exist.',
                static::valueToString($method)
            ));
        }
    }

    /**
     * @param string|object $classOrObject
     * @param mixed         $method
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function methodNotExists($classOrObject, $method, $message = '')
    {
        if (\method_exists($classOrObject, $method)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the method %s to not exist.',
                static::valueToString($method)
            ));
        }
    }

    /**
     * @param array      $array
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
     */
    public static function keyExists($array, $key, $message = '')
    {
        if (!(isset($array[$key]) || \array_key_exists($key, $array))) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the key %s to exist.',
                static::valueToString($key)
            ));
        }
    }

    /**
     * @param array      $array
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
     */
    public static function keyNotExists($array, $key, $message = '')
    {
        if (isset($array[$key]) || \array_key_exists($key, $array)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected the key %s to not exist.',
                static::valueToString($key)
            ));
        }
    }

    /**
     * Checks if a value is a valid array key (int or string).
     *
     * @psalm-assert array-key $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function validArrayKey($value, $message = '')
    {
        if (!(\is_int($value) || \is_string($value))) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected string or integer. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param mixed  $array
     * @param mixed  $number
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function count($array, $number, $message = '')
    {
        static::eq(
            \count($array),
            $number,
            $message ?: \sprintf('Expected an array to contain %d elements. Got: %d.', $number, \count($array))
        );
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param mixed  $array
     * @param mixed  $min
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function minCount($array, $min, $message = '')
    {
        if (\count($array) < $min) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array to contain at least %2$d elements. Got: %d',
                \count($array),
                $min
            ));
        }
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param mixed  $array
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function maxCount($array, $max, $message = '')
    {
        if (\count($array) > $max) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array to contain at most %2$d elements. Got: %d',
                \count($array),
                $max
            ));
        }
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param mixed  $array
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function countBetween($array, $min, $max, $message = '')
    {
        $count = \count($array);

        if ($count < $min || $count > $max) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Expected an array to contain between %2$d and %3$d elements. Got: %d',
                $count,
                $min,
                $max
            ));
        }
    }

    /**
     * @psalm-assert list $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isList($array, $message = '')
    {
        if (!\is_array($array) || $array !== \array_values($array)) {
            static::reportInvalidArgument(
                $message ?: 'Expected list - non-associative array.'
            );
        }
    }

    /**
     * @psalm-assert non-empty-list $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isNonEmptyList($array, $message = '')
    {
        static::isList($array, $message);
        static::notEmpty($array, $message);
    }

    /**
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isMap($array, $message = '')
    {
        if (
            !\is_array($array) ||
            \array_keys($array) !== \array_filter(\array_keys($array), '\is_string')
        ) {
            static::reportInvalidArgument(
                $message ?: 'Expected map - associative array with string keys.'
            );
        }
    }

    /**
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function isNonEmptyMap($array, $message = '')
    {
        static::isMap($array, $message);
        static::notEmpty($array, $message);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    public static function uuid($value, $message = '')
    {
        $value = \str_replace(array('urn:', 'uuid:', '{', '}'), '', $value);

        // The nil UUID is special form of UUID that is specified to have all
        // 128 bits set to zero.
        if ('00000000-0000-0000-0000-000000000000' === $value) {
            return;
        }

        if (!\preg_match('/^[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}$/', $value)) {
            static::reportInvalidArgument(\sprintf(
                $message ?: 'Value %s is not a valid UUID.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * @param Closure       $expression
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     */
    public static function throws(Closure $expression, $class = 'Exception', $message = '')
    {
        static::string($class);

        $actual = 'none';

        try {
            $expression();
        } catch (Exception $e) {
            $actual = \get_class($e);
            if ($e instanceof $class) {
                return;
            }
        } catch (Throwable $e) {
            $actual = \get_class($e);
            if ($e instanceof $class) {
                return;
            }
        }

        static::reportInvalidArgument($message ?: \sprintf(
            'Expected to throw "%s", got "%s"',
            $class,
            $actual
        ));
    }

    /**
     * @throws BadMethodCallException
     */
    public static function __callStatic($name, $arguments)
    {
        if ('nullOr' === \substr($name, 0, 6)) {
            if (null !== $arguments[0]) {
                $method = \lcfirst(\substr($name, 6));
                \call_user_func_array(array('static', $method), $arguments);
            }

            return;
        }

        if ('all' === \substr($name, 0, 3)) {
            static::isIterable($arguments[0]);

            $method = \lcfirst(\substr($name, 3));
            $args = $arguments;

            foreach ($arguments[0] as $entry) {
                $args[0] = $entry;

                \call_user_func_array(array('static', $method), $args);
            }

            return;
        }

        throw new BadMethodCallException('No such method: '.$name);
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    protected static function valueToString($value)
    {
        if (null === $value) {
            return 'null';
        }

        if (true === $value) {
            return 'true';
        }

        if (false === $value) {
            return 'false';
        }

        if (\is_array($value)) {
            return 'array';
        }

        if (\is_object($value)) {
            if (\method_exists($value, '__toString')) {
                return \get_class($value).': '.self::valueToString($value->__toString());
            }

            return \get_class($value);
        }

        if (\is_resource($value)) {
            return 'resource';
        }

        if (\is_string($value)) {
            return '"'.$value.'"';
        }

        return (string) $value;
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    protected static function typeToString($value)
    {
        return \is_object($value) ? \get_class($value) : \gettype($value);
    }

    protected static function strlen($value)
    {
        if (!\function_exists('mb_detect_encoding')) {
            return \strlen($value);
        }

        if (false === $encoding = \mb_detect_encoding($value)) {
            return \strlen($value);
        }

        return \mb_strlen($value, $encoding);
    }

    /**
     * @param string $message
     *
     * @throws InvalidArgumentException
     */
    protected static function reportInvalidArgument($message)
    {
        throw new InvalidArgumentException($message);
    }

    private function __construct()
    {
    }
}
The MIT License (MIT)

Copyright (c) 2014 Bernhard Schussek

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
<?php
/*
 * This file is part of php-file-iterator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\FileIterator;

class Factory
{
    /**
     * @param array|string $paths
     * @param array|string $suffixes
     * @param array|string $prefixes
     * @param array        $exclude
     *
     * @return \AppendIterator
     */
    public function getFileIterator($paths, $suffixes = '', $prefixes = '', array $exclude = []): \AppendIterator
    {
        if (\is_string($paths)) {
            $paths = [$paths];
        }

        $paths   = $this->getPathsAfterResolvingWildcards($paths);
        $exclude = $this->getPathsAfterResolvingWildcards($exclude);

        if (\is_string($prefixes)) {
            if ($prefixes !== '') {
                $prefixes = [$prefixes];
            } else {
                $prefixes = [];
            }
        }

        if (\is_string($suffixes)) {
            if ($suffixes !== '') {
                $suffixes = [$suffixes];
            } else {
                $suffixes = [];
            }
        }

        $iterator = new \AppendIterator;

        foreach ($paths as $path) {
            if (\is_dir($path)) {
                $iterator->append(
                    new Iterator(
                        $path,
                        new \RecursiveIteratorIterator(
                            new \RecursiveDirectoryIterator($path, \RecursiveDirectoryIterator::FOLLOW_SYMLINKS | \RecursiveDirectoryIterator::SKIP_DOTS)
                        ),
                        $suffixes,
                        $prefixes,
                        $exclude
                    )
                );
            }
        }

        return $iterator;
    }

    protected function getPathsAfterResolvingWildcards(array $paths): array
    {
        $_paths = [];

        foreach ($paths as $path) {
            if ($locals = \glob($path, GLOB_ONLYDIR)) {
                $_paths = \array_merge($_paths, \array_map('\realpath', $locals));
            } else {
                $_paths[] = \realpath($path);
            }
        }

        return \array_filter($_paths);
    }
}
<?php
/*
 * This file is part of php-file-iterator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\FileIterator;

class Iterator extends \FilterIterator
{
    const PREFIX = 0;
    const SUFFIX = 1;

    /**
     * @var string
     */
    private $basePath;

    /**
     * @var array
     */
    private $suffixes = [];

    /**
     * @var array
     */
    private $prefixes = [];

    /**
     * @var array
     */
    private $exclude = [];

    /**
     * @param string    $basePath
     * @param \Iterator $iterator
     * @param array     $suffixes
     * @param array     $prefixes
     * @param array     $exclude
     */
    public function __construct(string $basePath, \Iterator $iterator, array $suffixes = [], array $prefixes = [], array $exclude = [])
    {
        $this->basePath = \realpath($basePath);
        $this->prefixes = $prefixes;
        $this->suffixes = $suffixes;
        $this->exclude  = \array_filter(\array_map('realpath', $exclude));

        parent::__construct($iterator);
    }

    public function accept()
    {
        $current  = $this->getInnerIterator()->current();
        $filename = $current->getFilename();
        $realPath = $current->getRealPath();

        return $this->acceptPath($realPath) &&
               $this->acceptPrefix($filename) &&
               $this->acceptSuffix($filename);
    }

    private function acceptPath(string $path): bool
    {
        // Filter files in hidden directories by checking path that is relative to the base path.
        if (\preg_match('=/\.[^/]*/=', \str_replace($this->basePath, '', $path))) {
            return false;
        }

        foreach ($this->exclude as $exclude) {
            if (\strpos($path, $exclude) === 0) {
                return false;
            }
        }

        return true;
    }

    private function acceptPrefix(string $filename): bool
    {
        return $this->acceptSubString($filename, $this->prefixes, self::PREFIX);
    }

    private function acceptSuffix(string $filename): bool
    {
        return $this->acceptSubString($filename, $this->suffixes, self::SUFFIX);
    }

    private function acceptSubString(string $filename, array $subStrings, int $type): bool
    {
        if (empty($subStrings)) {
            return true;
        }

        $matched = false;

        foreach ($subStrings as $string) {
            if (($type === self::PREFIX && \strpos($filename, $string) === 0) ||
                ($type === self::SUFFIX &&
                 \substr($filename, -1 * \strlen($string)) === $string)) {
                $matched = true;

                break;
            }
        }

        return $matched;
    }
}
<?php
/*
 * This file is part of php-file-iterator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\FileIterator;

class Facade
{
    /**
     * @param array|string $paths
     * @param array|string $suffixes
     * @param array|string $prefixes
     * @param array        $exclude
     * @param bool         $commonPath
     *
     * @return array
     */
    public function getFilesAsArray($paths, $suffixes = '', $prefixes = '', array $exclude = [], bool $commonPath = false): array
    {
        if (\is_string($paths)) {
            $paths = [$paths];
        }

        $factory = new Factory;

        $iterator = $factory->getFileIterator($paths, $suffixes, $prefixes, $exclude);

        $files = [];

        foreach ($iterator as $file) {
            $file = $file->getRealPath();

            if ($file) {
                $files[] = $file;
            }
        }

        foreach ($paths as $path) {
            if (\is_file($path)) {
                $files[] = \realpath($path);
            }
        }

        $files = \array_unique($files);
        \sort($files);

        if ($commonPath) {
            return [
              'commonPath' => $this->getCommonPath($files),
              'files'      => $files
            ];
        }

        return $files;
    }

    protected function getCommonPath(array $files): string
    {
        $count = \count($files);

        if ($count === 0) {
            return '';
        }

        if ($count === 1) {
            return \dirname($files[0]) . DIRECTORY_SEPARATOR;
        }

        $_files = [];

        foreach ($files as $file) {
            $_files[] = $_fileParts = \explode(DIRECTORY_SEPARATOR, $file);

            if (empty($_fileParts[0])) {
                $_fileParts[0] = DIRECTORY_SEPARATOR;
            }
        }

        $common = '';
        $done   = false;
        $j      = 0;
        $count--;

        while (!$done) {
            for ($i = 0; $i < $count; $i++) {
                if ($_files[$i][$j] != $_files[$i + 1][$j]) {
                    $done = true;

                    break;
                }
            }

            if (!$done) {
                $common .= $_files[0][$j];

                if ($j > 0) {
                    $common .= DIRECTORY_SEPARATOR;
                }
            }

            $j++;
        }

        return DIRECTORY_SEPARATOR . $common;
    }
}
php-file-iterator

Copyright (c) 2009-2018, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class TokenCollection implements \ArrayAccess, \Iterator, \Countable {

    /**
     * @var Token[]
     */
    private $tokens = [];

    /**
     * @var int
     */
    private $pos;

    /**
     * @param Token $token
     */
    public function addToken(Token $token) {
        $this->tokens[] = $token;
    }

    /**
     * @return Token
     */
    public function current(): Token {
        return current($this->tokens);
    }

    /**
     * @return int
     */
    public function key(): int {
        return key($this->tokens);
    }

    /**
     * @return void
     */
    public function next() {
        next($this->tokens);
        $this->pos++;
    }

    /**
     * @return bool
     */
    public function valid(): bool {
        return $this->count() > $this->pos;
    }

    /**
     * @return void
     */
    public function rewind() {
        reset($this->tokens);
        $this->pos = 0;
    }

    /**
     * @return int
     */
    public function count(): int {
        return count($this->tokens);
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool {
        return isset($this->tokens[$offset]);
    }

    /**
     * @param mixed $offset
     *
     * @return Token
     * @throws TokenCollectionException
     */
    public function offsetGet($offset): Token {
        if (!$this->offsetExists($offset)) {
            throw new TokenCollectionException(
                sprintf('No Token at offest %s', $offset)
            );
        }

        return $this->tokens[$offset];
    }

    /**
     * @param mixed $offset
     * @param Token $value
     *
     * @throws TokenCollectionException
     */
    public function offsetSet($offset, $value) {
        if (!is_int($offset)) {
            $type = gettype($offset);
            throw new TokenCollectionException(
                sprintf(
                    'Offset must be of type integer, %s given',
                    $type === 'object' ? get_class($value) : $type
                )
            );
        }
        if (!$value instanceof Token) {
            $type = gettype($value);
            throw new TokenCollectionException(
                sprintf(
                    'Value must be of type %s, %s given',
                    Token::class,
                    $type === 'object' ? get_class($value) : $type
                )
            );
        }
        $this->tokens[$offset] = $value;
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset) {
        unset($this->tokens[$offset]);
    }

}
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class NamespaceUriException extends Exception {

}
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class Exception extends \Exception {

}
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class NamespaceUri {

    /** @var string */
    private $value;

    /**
     * @param string $value
     */
    public function __construct(string $value) {
        $this->ensureValidUri($value);
        $this->value = $value;
    }

    public function asString(): string {
        return $this->value;
    }

    private function ensureValidUri($value) {
        if (strpos($value, ':') === false) {
            throw new NamespaceUriException(
                sprintf("Namespace URI '%s' must contain at least one colon", $value)
            );
        }
    }
}
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

use DOMDocument;

class XMLSerializer {

    /**
     * @var \XMLWriter
     */
    private $writer;

    /**
     * @var Token
     */
    private $previousToken;

    /**
     * @var NamespaceUri
     */
    private $xmlns;

    /**
     * XMLSerializer constructor.
     *
     * @param NamespaceUri $xmlns
     */
    public function __construct(NamespaceUri $xmlns = null) {
        if ($xmlns === null) {
            $xmlns = new NamespaceUri('https://github.com/theseer/tokenizer');
        }
        $this->xmlns = $xmlns;
    }

    /**
     * @param TokenCollection $tokens
     *
     * @return DOMDocument
     */
    public function toDom(TokenCollection $tokens): DOMDocument {
        $dom = new DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->loadXML($this->toXML($tokens));

        return $dom;
    }

    /**
     * @param TokenCollection $tokens
     *
     * @return string
     */
    public function toXML(TokenCollection $tokens): string {
        $this->writer = new \XMLWriter();
        $this->writer->openMemory();
        $this->writer->setIndent(true);
        $this->writer->startDocument();
        $this->writer->startElement('source');
        $this->writer->writeAttribute('xmlns', $this->xmlns->asString());

        if (count($tokens) > 0) {
            $this->writer->startElement('line');
            $this->writer->writeAttribute('no', '1');

            $this->previousToken = $tokens[0];
            foreach ($tokens as $token) {
                $this->addToken($token);
            }
        }

        $this->writer->endElement();
        $this->writer->endElement();
        $this->writer->endDocument();

        return $this->writer->outputMemory();
    }

    /**
     * @param Token $token
     */
    private function addToken(Token $token) {
        if ($this->previousToken->getLine() < $token->getLine()) {
            $this->writer->endElement();

            $this->writer->startElement('line');
            $this->writer->writeAttribute('no', (string)$token->getLine());
            $this->previousToken = $token;
        }

        if ($token->getValue() !== '') {
            $this->writer->startElement('token');
            $this->writer->writeAttribute('name', $token->getName());
            $this->writer->writeRaw(htmlspecialchars($token->getValue(), ENT_NOQUOTES | ENT_DISALLOWED | ENT_XML1));
            $this->writer->endElement();
        }
    }
}
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class TokenCollectionException extends Exception {

}
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class Tokenizer {

    /**
     * Token Map for "non-tokens"
     *
     * @var array
     */
    private $map = [
        '(' => 'T_OPEN_BRACKET',
        ')' => 'T_CLOSE_BRACKET',
        '[' => 'T_OPEN_SQUARE',
        ']' => 'T_CLOSE_SQUARE',
        '{' => 'T_OPEN_CURLY',
        '}' => 'T_CLOSE_CURLY',
        ';' => 'T_SEMICOLON',
        '.' => 'T_DOT',
        ',' => 'T_COMMA',
        '=' => 'T_EQUAL',
        '<' => 'T_LT',
        '>' => 'T_GT',
        '+' => 'T_PLUS',
        '-' => 'T_MINUS',
        '*' => 'T_MULT',
        '/' => 'T_DIV',
        '?' => 'T_QUESTION_MARK',
        '!' => 'T_EXCLAMATION_MARK',
        ':' => 'T_COLON',
        '"' => 'T_DOUBLE_QUOTES',
        '@' => 'T_AT',
        '&' => 'T_AMPERSAND',
        '%' => 'T_PERCENT',
        '|' => 'T_PIPE',
        '$' => 'T_DOLLAR',
        '^' => 'T_CARET',
        '~' => 'T_TILDE',
        '`' => 'T_BACKTICK'
    ];

    public function parse(string $source): TokenCollection {
        $result = new TokenCollection();

        if ($source === '') {
            return $result;
        }

        $tokens = token_get_all($source);

        $lastToken = new Token(
            $tokens[0][2],
            'Placeholder',
            ''
        );

        foreach ($tokens as $pos => $tok) {
            if (is_string($tok)) {
                $token = new Token(
                    $lastToken->getLine(),
                    $this->map[$tok],
                    $tok
                );
                $result->addToken($token);
                $lastToken = $token;
                continue;
            }

            $line   = $tok[2];
            $values = preg_split('/\R+/Uu', $tok[1]);

            foreach ($values as $v) {
                $token = new Token(
                    $line,
                    token_name($tok[0]),
                    $v
                );
                $result->addToken($token);
                $line++;
                $lastToken = $token;
            }
        }

        return $result;
    }

}
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class Token {

    /**
     * @var int
     */
    private $line;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * Token constructor.
     *
     * @param int    $line
     * @param string $name
     * @param string $value
     */
    public function __construct(int $line, string $name, string $value) {
        $this->line  = $line;
        $this->name  = $name;
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getLine(): int {
        return $this->line;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue(): string {
        return $this->value;
    }

}
Tokenizer

Copyright (c) 2017 Arne Blankerts <arne@blankerts.de> and contributors
All rights reserved.

Redistribution and use in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

* Redistributions of source code must retain the above copyright notice,
  this list of conditions and the following disclaimer.

* Redistributions in binary form must reproduce the above copyright notice,
  this list of conditions and the following disclaimer in the documentation
  and/or other materials provided with the distribution.

* Neither the name of Arne Blankerts nor the names of contributors
  may be used to endorse or promote products derived from this software
  without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT  * NOT LIMITED TO,
THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS
BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php declare(strict_types=1);
/*
 * This file is part of php-token-stream.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

final class PHP_Token_Util
{
    public static function getClass($object): string
    {
        $parts = explode('\\', get_class($object));

        return array_pop($parts);
    }
}<?php
/*
 * This file is part of php-token-stream.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A caching factory for token stream objects.
 */
class PHP_Token_Stream_CachingFactory
{
    /**
     * @var array
     */
    protected static $cache = [];

    /**
     * @param string $filename
     *
     * @return PHP_Token_Stream
     */
    public static function get($filename)
    {
        if (!isset(self::$cache[$filename])) {
            self::$cache[$filename] = new PHP_Token_Stream($filename);
        }

        return self::$cache[$filename];
    }

    /**
     * @param string $filename
     */
    public static function clear($filename = null)
    {
        if (is_string($filename)) {
            unset(self::$cache[$filename]);
        } else {
            self::$cache = [];
        }
    }
}
<?php
/*
 * This file is part of php-token-stream.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A stream of PHP tokens.
 */
class PHP_Token_Stream implements ArrayAccess, Countable, SeekableIterator
{
    /**
     * @var array
     */
    protected static $customTokens = [
        '(' => 'PHP_Token_OPEN_BRACKET',
        ')' => 'PHP_Token_CLOSE_BRACKET',
        '[' => 'PHP_Token_OPEN_SQUARE',
        ']' => 'PHP_Token_CLOSE_SQUARE',
        '{' => 'PHP_Token_OPEN_CURLY',
        '}' => 'PHP_Token_CLOSE_CURLY',
        ';' => 'PHP_Token_SEMICOLON',
        '.' => 'PHP_Token_DOT',
        ',' => 'PHP_Token_COMMA',
        '=' => 'PHP_Token_EQUAL',
        '<' => 'PHP_Token_LT',
        '>' => 'PHP_Token_GT',
        '+' => 'PHP_Token_PLUS',
        '-' => 'PHP_Token_MINUS',
        '*' => 'PHP_Token_MULT',
        '/' => 'PHP_Token_DIV',
        '?' => 'PHP_Token_QUESTION_MARK',
        '!' => 'PHP_Token_EXCLAMATION_MARK',
        ':' => 'PHP_Token_COLON',
        '"' => 'PHP_Token_DOUBLE_QUOTES',
        '@' => 'PHP_Token_AT',
        '&' => 'PHP_Token_AMPERSAND',
        '%' => 'PHP_Token_PERCENT',
        '|' => 'PHP_Token_PIPE',
        '$' => 'PHP_Token_DOLLAR',
        '^' => 'PHP_Token_CARET',
        '~' => 'PHP_Token_TILDE',
        '`' => 'PHP_Token_BACKTICK'
    ];

    /**
     * @var string
     */
    protected $filename;

    /**
     * @var array
     */
    protected $tokens = [];

    /**
     * @var int
     */
    protected $position = 0;

    /**
     * @var array
     */
    protected $linesOfCode = ['loc' => 0, 'cloc' => 0, 'ncloc' => 0];

    /**
     * @var array
     */
    protected $classes;

    /**
     * @var array
     */
    protected $functions;

    /**
     * @var array
     */
    protected $includes;

    /**
     * @var array
     */
    protected $interfaces;

    /**
     * @var array
     */
    protected $traits;

    /**
     * @var array
     */
    protected $lineToFunctionMap = [];

    /**
     * Constructor.
     *
     * @param string $sourceCode
     */
    public function __construct($sourceCode)
    {
        if (is_file($sourceCode)) {
            $this->filename = $sourceCode;
            $sourceCode     = file_get_contents($sourceCode);
        }

        $this->scan($sourceCode);
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        $this->tokens = [];
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $buffer = '';

        foreach ($this as $token) {
            $buffer .= $token;
        }

        return $buffer;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Scans the source for sequences of characters and converts them into a
     * stream of tokens.
     *
     * @param string $sourceCode
     */
    protected function scan($sourceCode)
    {
        $id        = 0;
        $line      = 1;
        $tokens    = token_get_all($sourceCode);
        $numTokens = count($tokens);

        $lastNonWhitespaceTokenWasDoubleColon = false;

        for ($i = 0; $i < $numTokens; ++$i) {
            $token = $tokens[$i];
            $skip  = 0;

            if (is_array($token)) {
                $name = substr(token_name($token[0]), 2);
                $text = $token[1];

                if ($lastNonWhitespaceTokenWasDoubleColon && $name == 'CLASS') {
                    $name = 'CLASS_NAME_CONSTANT';
                } elseif ($name == 'USE' && isset($tokens[$i + 2][0]) && $tokens[$i + 2][0] == T_FUNCTION) {
                    $name = 'USE_FUNCTION';
                    $text .= $tokens[$i + 1][1] . $tokens[$i + 2][1];
                    $skip = 2;
                }

                $tokenClass = 'PHP_Token_' . $name;
            } else {
                $text       = $token;
                $tokenClass = self::$customTokens[$token];
            }

            $this->tokens[] = new $tokenClass($text, $line, $this, $id++);
            $lines          = substr_count($text, "\n");
            $line += $lines;

            if ($tokenClass == 'PHP_Token_HALT_COMPILER') {
                break;
            } elseif ($tokenClass == 'PHP_Token_COMMENT' ||
                $tokenClass == 'PHP_Token_DOC_COMMENT') {
                $this->linesOfCode['cloc'] += $lines + 1;
            }

            if ($name == 'DOUBLE_COLON') {
                $lastNonWhitespaceTokenWasDoubleColon = true;
            } elseif ($name != 'WHITESPACE') {
                $lastNonWhitespaceTokenWasDoubleColon = false;
            }

            $i += $skip;
        }

        $this->linesOfCode['loc']   = substr_count($sourceCode, "\n");
        $this->linesOfCode['ncloc'] = $this->linesOfCode['loc'] -
                                      $this->linesOfCode['cloc'];
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->tokens);
    }

    /**
     * @return PHP_Token[]
     */
    public function tokens()
    {
        return $this->tokens;
    }

    /**
     * @return array
     */
    public function getClasses()
    {
        if ($this->classes !== null) {
            return $this->classes;
        }

        $this->parse();

        return $this->classes;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        if ($this->functions !== null) {
            return $this->functions;
        }

        $this->parse();

        return $this->functions;
    }

    /**
     * @return array
     */
    public function getInterfaces()
    {
        if ($this->interfaces !== null) {
            return $this->interfaces;
        }

        $this->parse();

        return $this->interfaces;
    }

    /**
     * @return array
     */
    public function getTraits()
    {
        if ($this->traits !== null) {
            return $this->traits;
        }

        $this->parse();

        return $this->traits;
    }

    /**
     * Gets the names of all files that have been included
     * using include(), include_once(), require() or require_once().
     *
     * Parameter $categorize set to TRUE causing this function to return a
     * multi-dimensional array with categories in the keys of the first dimension
     * and constants and their values in the second dimension.
     *
     * Parameter $category allow to filter following specific inclusion type
     *
     * @param bool   $categorize OPTIONAL
     * @param string $category   OPTIONAL Either 'require_once', 'require',
     *                           'include_once', 'include'.
     *
     * @return array
     */
    public function getIncludes($categorize = false, $category = null)
    {
        if ($this->includes === null) {
            $this->includes = [
              'require_once' => [],
              'require'      => [],
              'include_once' => [],
              'include'      => []
            ];

            foreach ($this->tokens as $token) {
                switch (PHP_Token_Util::getClass($token)) {
                    case 'PHP_Token_REQUIRE_ONCE':
                    case 'PHP_Token_REQUIRE':
                    case 'PHP_Token_INCLUDE_ONCE':
                    case 'PHP_Token_INCLUDE':
                        $this->includes[$token->getType()][] = $token->getName();
                        break;
                }
            }
        }

        if (isset($this->includes[$category])) {
            $includes = $this->includes[$category];
        } elseif ($categorize === false) {
            $includes = array_merge(
                $this->includes['require_once'],
                $this->includes['require'],
                $this->includes['include_once'],
                $this->includes['include']
            );
        } else {
            $includes = $this->includes;
        }

        return $includes;
    }

    /**
     * Returns the name of the function or method a line belongs to.
     *
     * @return string or null if the line is not in a function or method
     */
    public function getFunctionForLine($line)
    {
        $this->parse();

        if (isset($this->lineToFunctionMap[$line])) {
            return $this->lineToFunctionMap[$line];
        }
    }

    protected function parse()
    {
        $this->interfaces = [];
        $this->classes    = [];
        $this->traits     = [];
        $this->functions  = [];
        $class            = [];
        $classEndLine     = [];
        $trait            = false;
        $traitEndLine     = false;
        $interface        = false;
        $interfaceEndLine = false;

        foreach ($this->tokens as $token) {
            switch (PHP_Token_Util::getClass($token)) {
                case 'PHP_Token_HALT_COMPILER':
                    return;

                case 'PHP_Token_INTERFACE':
                    $interface        = $token->getName();
                    $interfaceEndLine = $token->getEndLine();

                    $this->interfaces[$interface] = [
                      'methods'   => [],
                      'parent'    => $token->getParent(),
                      'keywords'  => $token->getKeywords(),
                      'docblock'  => $token->getDocblock(),
                      'startLine' => $token->getLine(),
                      'endLine'   => $interfaceEndLine,
                      'package'   => $token->getPackage(),
                      'file'      => $this->filename
                    ];
                    break;

                case 'PHP_Token_CLASS':
                case 'PHP_Token_TRAIT':
                    $tmp = [
                      'methods'   => [],
                      'parent'    => $token->getParent(),
                      'interfaces'=> $token->getInterfaces(),
                      'keywords'  => $token->getKeywords(),
                      'docblock'  => $token->getDocblock(),
                      'startLine' => $token->getLine(),
                      'endLine'   => $token->getEndLine(),
                      'package'   => $token->getPackage(),
                      'file'      => $this->filename
                    ];

                    if ($token->getName() !== null) {
                        if ($token instanceof PHP_Token_CLASS) {
                            $class[]        = $token->getName();
                            $classEndLine[] = $token->getEndLine();

                            $this->classes[$class[count($class) - 1]] = $tmp;
                        } else {
                            $trait                = $token->getName();
                            $traitEndLine         = $token->getEndLine();
                            $this->traits[$trait] = $tmp;
                        }
                    }
                    break;

                case 'PHP_Token_FUNCTION':
                    $name = $token->getName();
                    $tmp  = [
                      'docblock'  => $token->getDocblock(),
                      'keywords'  => $token->getKeywords(),
                      'visibility'=> $token->getVisibility(),
                      'signature' => $token->getSignature(),
                      'startLine' => $token->getLine(),
                      'endLine'   => $token->getEndLine(),
                      'ccn'       => $token->getCCN(),
                      'file'      => $this->filename
                    ];

                    if (empty($class) &&
                        $trait === false &&
                        $interface === false) {
                        $this->functions[$name] = $tmp;

                        $this->addFunctionToMap(
                            $name,
                            $tmp['startLine'],
                            $tmp['endLine']
                        );
                    } elseif (!empty($class)) {
                        $this->classes[$class[count($class) - 1]]['methods'][$name] = $tmp;

                        $this->addFunctionToMap(
                            $class[count($class) - 1] . '::' . $name,
                            $tmp['startLine'],
                            $tmp['endLine']
                        );
                    } elseif ($trait !== false) {
                        $this->traits[$trait]['methods'][$name] = $tmp;

                        $this->addFunctionToMap(
                            $trait . '::' . $name,
                            $tmp['startLine'],
                            $tmp['endLine']
                        );
                    } else {
                        $this->interfaces[$interface]['methods'][$name] = $tmp;
                    }
                    break;

                case 'PHP_Token_CLOSE_CURLY':
                    if (!empty($classEndLine) &&
                        $classEndLine[count($classEndLine) - 1] == $token->getLine()) {
                        array_pop($classEndLine);
                        array_pop($class);
                    } elseif ($traitEndLine !== false &&
                        $traitEndLine == $token->getLine()) {
                        $trait        = false;
                        $traitEndLine = false;
                    } elseif ($interfaceEndLine !== false &&
                        $interfaceEndLine == $token->getLine()) {
                        $interface        = false;
                        $interfaceEndLine = false;
                    }
                    break;
            }
        }
    }

    /**
     * @return array
     */
    public function getLinesOfCode()
    {
        return $this->linesOfCode;
    }

    /**
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->tokens[$this->position]);
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @return PHP_Token
     */
    public function current()
    {
        return $this->tokens[$this->position];
    }

    /**
     */
    public function next()
    {
        $this->position++;
    }

    /**
     * @param int $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->tokens[$offset]);
    }

    /**
     * @param int $offset
     *
     * @return mixed
     *
     * @throws OutOfBoundsException
     */
    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset)) {
            throw new OutOfBoundsException(
                sprintf(
                    'No token at position "%s"',
                    $offset
                )
            );
        }

        return $this->tokens[$offset];
    }

    /**
     * @param int   $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->tokens[$offset] = $value;
    }

    /**
     * @param int $offset
     *
     * @throws OutOfBoundsException
     */
    public function offsetUnset($offset)
    {
        if (!$this->offsetExists($offset)) {
            throw new OutOfBoundsException(
                sprintf(
                    'No token at position "%s"',
                    $offset
                )
            );
        }

        unset($this->tokens[$offset]);
    }

    /**
     * Seek to an absolute position.
     *
     * @param int $position
     *
     * @throws OutOfBoundsException
     */
    public function seek($position)
    {
        $this->position = $position;

        if (!$this->valid()) {
            throw new OutOfBoundsException(
                sprintf(
                    'No token at position "%s"',
                    $this->position
                )
            );
        }
    }

    /**
     * @param string $name
     * @param int    $startLine
     * @param int    $endLine
     */
    private function addFunctionToMap($name, $startLine, $endLine)
    {
        for ($line = $startLine; $line <= $endLine; $line++) {
            $this->lineToFunctionMap[$line] = $name;
        }
    }
}
<?php
/*
 * This file is part of php-token-stream.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A PHP token.
 */
abstract class PHP_Token
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @var int
     */
    protected $line;

    /**
     * @var PHP_Token_Stream
     */
    protected $tokenStream;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param string           $text
     * @param int              $line
     * @param PHP_Token_Stream $tokenStream
     * @param int              $id
     */
    public function __construct($text, $line, PHP_Token_Stream $tokenStream, $id)
    {
        $this->text        = $text;
        $this->line        = $line;
        $this->tokenStream = $tokenStream;
        $this->id          = $id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

abstract class PHP_TokenWithScope extends PHP_Token
{
    /**
     * @var int
     */
    protected $endTokenId;

    /**
     * Get the docblock for this token
     *
     * This method will fetch the docblock belonging to the current token. The
     * docblock must be placed on the line directly above the token to be
     * recognized.
     *
     * @return string|null Returns the docblock as a string if found
     */
    public function getDocblock()
    {
        $tokens            = $this->tokenStream->tokens();
        $currentLineNumber = $tokens[$this->id]->getLine();
        $prevLineNumber    = $currentLineNumber - 1;

        for ($i = $this->id - 1; $i; $i--) {
            if (!isset($tokens[$i])) {
                return;
            }

            if ($tokens[$i] instanceof PHP_Token_FUNCTION ||
                $tokens[$i] instanceof PHP_Token_CLASS ||
                $tokens[$i] instanceof PHP_Token_TRAIT) {
                // Some other trait, class or function, no docblock can be
                // used for the current token
                break;
            }

            $line = $tokens[$i]->getLine();

            if ($line == $currentLineNumber ||
                ($line == $prevLineNumber &&
                 $tokens[$i] instanceof PHP_Token_WHITESPACE)) {
                continue;
            }

            if ($line < $currentLineNumber &&
                !$tokens[$i] instanceof PHP_Token_DOC_COMMENT) {
                break;
            }

            return (string) $tokens[$i];
        }
    }

    /**
     * @return int
     */
    public function getEndTokenId()
    {
        $block  = 0;
        $i      = $this->id;
        $tokens = $this->tokenStream->tokens();

        while ($this->endTokenId === null && isset($tokens[$i])) {
            if ($tokens[$i] instanceof PHP_Token_OPEN_CURLY ||
                $tokens[$i] instanceof PHP_Token_DOLLAR_OPEN_CURLY_BRACES ||
                $tokens[$i] instanceof PHP_Token_CURLY_OPEN) {
                $block++;
            } elseif ($tokens[$i] instanceof PHP_Token_CLOSE_CURLY) {
                $block--;

                if ($block === 0) {
                    $this->endTokenId = $i;
                }
            } elseif (($this instanceof PHP_Token_FUNCTION ||
                $this instanceof PHP_Token_NAMESPACE) &&
                $tokens[$i] instanceof PHP_Token_SEMICOLON) {
                if ($block === 0) {
                    $this->endTokenId = $i;
                }
            }

            $i++;
        }

        if ($this->endTokenId === null) {
            $this->endTokenId = $this->id;
        }

        return $this->endTokenId;
    }

    /**
     * @return int
     */
    public function getEndLine()
    {
        return $this->tokenStream[$this->getEndTokenId()]->getLine();
    }
}

abstract class PHP_TokenWithScopeAndVisibility extends PHP_TokenWithScope
{
    /**
     * @return string
     */
    public function getVisibility()
    {
        $tokens = $this->tokenStream->tokens();

        for ($i = $this->id - 2; $i > $this->id - 7; $i -= 2) {
            if (isset($tokens[$i]) &&
               ($tokens[$i] instanceof PHP_Token_PRIVATE ||
                $tokens[$i] instanceof PHP_Token_PROTECTED ||
                $tokens[$i] instanceof PHP_Token_PUBLIC)) {
                return strtolower(
                    str_replace('PHP_Token_', '', PHP_Token_Util::getClass($tokens[$i]))
                );
            }
            if (isset($tokens[$i]) &&
              !($tokens[$i] instanceof PHP_Token_STATIC ||
                $tokens[$i] instanceof PHP_Token_FINAL ||
                $tokens[$i] instanceof PHP_Token_ABSTRACT)) {
                // no keywords; stop visibility search
                break;
            }
        }
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        $keywords = [];
        $tokens   = $this->tokenStream->tokens();

        for ($i = $this->id - 2; $i > $this->id - 7; $i -= 2) {
            if (isset($tokens[$i]) &&
               ($tokens[$i] instanceof PHP_Token_PRIVATE ||
                $tokens[$i] instanceof PHP_Token_PROTECTED ||
                $tokens[$i] instanceof PHP_Token_PUBLIC)) {
                continue;
            }

            if (isset($tokens[$i]) &&
               ($tokens[$i] instanceof PHP_Token_STATIC ||
                $tokens[$i] instanceof PHP_Token_FINAL ||
                $tokens[$i] instanceof PHP_Token_ABSTRACT)) {
                $keywords[] = strtolower(
                    str_replace('PHP_Token_', '', PHP_Token_Util::getClass($tokens[$i]))
                );
            }
        }

        return implode(',', $keywords);
    }
}

abstract class PHP_Token_Includes extends PHP_Token
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getName()
    {
        if ($this->name === null) {
            $this->process();
        }

        return $this->name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        if ($this->type === null) {
            $this->process();
        }

        return $this->type;
    }

    private function process()
    {
        $tokens = $this->tokenStream->tokens();

        if ($tokens[$this->id + 2] instanceof PHP_Token_CONSTANT_ENCAPSED_STRING) {
            $this->name = trim($tokens[$this->id + 2], "'\"");
            $this->type = strtolower(
                str_replace('PHP_Token_', '', PHP_Token_Util::getClass($tokens[$this->id]))
            );
        }
    }
}

class PHP_Token_FUNCTION extends PHP_TokenWithScopeAndVisibility
{
    /**
     * @var array
     */
    protected $arguments;

    /**
     * @var int
     */
    protected $ccn;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $signature;

    /**
     * @var bool
     */
    private $anonymous = false;

    /**
     * @return array
     */
    public function getArguments()
    {
        if ($this->arguments !== null) {
            return $this->arguments;
        }

        $this->arguments = [];
        $tokens          = $this->tokenStream->tokens();
        $typeDeclaration = null;

        // Search for first token inside brackets
        $i = $this->id + 2;

        while (!$tokens[$i - 1] instanceof PHP_Token_OPEN_BRACKET) {
            $i++;
        }

        while (!$tokens[$i] instanceof PHP_Token_CLOSE_BRACKET) {
            if ($tokens[$i] instanceof PHP_Token_STRING) {
                $typeDeclaration = (string) $tokens[$i];
            } elseif ($tokens[$i] instanceof PHP_Token_VARIABLE) {
                $this->arguments[(string) $tokens[$i]] = $typeDeclaration;
                $typeDeclaration                       = null;
            }

            $i++;
        }

        return $this->arguments;
    }

    /**
     * @return string
     */
    public function getName()
    {
        if ($this->name !== null) {
            return $this->name;
        }

        $tokens = $this->tokenStream->tokens();

        $i = $this->id + 1;

        if ($tokens[$i] instanceof PHP_Token_WHITESPACE) {
            $i++;
        }

        if ($tokens[$i] instanceof PHP_Token_AMPERSAND) {
            $i++;
        }

        if ($tokens[$i + 1] instanceof PHP_Token_OPEN_BRACKET) {
            $this->name = (string) $tokens[$i];
        } elseif ($tokens[$i + 1] instanceof PHP_Token_WHITESPACE && $tokens[$i + 2] instanceof PHP_Token_OPEN_BRACKET) {
            $this->name = (string) $tokens[$i];
        } else {
            $this->anonymous = true;

            $this->name = sprintf(
                'anonymousFunction:%s#%s',
                $this->getLine(),
                $this->getId()
            );
        }

        if (!$this->isAnonymous()) {
            for ($i = $this->id; $i; --$i) {
                if ($tokens[$i] instanceof PHP_Token_NAMESPACE) {
                    $this->name = $tokens[$i]->getName() . '\\' . $this->name;

                    break;
                }

                if ($tokens[$i] instanceof PHP_Token_INTERFACE) {
                    break;
                }
            }
        }

        return $this->name;
    }

    /**
     * @return int
     */
    public function getCCN()
    {
        if ($this->ccn !== null) {
            return $this->ccn;
        }

        $this->ccn = 1;
        $end       = $this->getEndTokenId();
        $tokens    = $this->tokenStream->tokens();

        for ($i = $this->id; $i <= $end; $i++) {
            switch (PHP_Token_Util::getClass($tokens[$i])) {
                case 'PHP_Token_IF':
                case 'PHP_Token_ELSEIF':
                case 'PHP_Token_FOR':
                case 'PHP_Token_FOREACH':
                case 'PHP_Token_WHILE':
                case 'PHP_Token_CASE':
                case 'PHP_Token_CATCH':
                case 'PHP_Token_BOOLEAN_AND':
                case 'PHP_Token_LOGICAL_AND':
                case 'PHP_Token_BOOLEAN_OR':
                case 'PHP_Token_LOGICAL_OR':
                case 'PHP_Token_QUESTION_MARK':
                    $this->ccn++;
                    break;
            }
        }

        return $this->ccn;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        if ($this->signature !== null) {
            return $this->signature;
        }

        if ($this->isAnonymous()) {
            $this->signature = 'anonymousFunction';
            $i               = $this->id + 1;
        } else {
            $this->signature = '';
            $i               = $this->id + 2;
        }

        $tokens = $this->tokenStream->tokens();

        while (isset($tokens[$i]) &&
               !$tokens[$i] instanceof PHP_Token_OPEN_CURLY &&
               !$tokens[$i] instanceof PHP_Token_SEMICOLON) {
            $this->signature .= $tokens[$i++];
        }

        $this->signature = trim($this->signature);

        return $this->signature;
    }

    /**
     * @return bool
     */
    public function isAnonymous()
    {
        return $this->anonymous;
    }
}

class PHP_Token_INTERFACE extends PHP_TokenWithScopeAndVisibility
{
    /**
     * @var array
     */
    protected $interfaces;

    /**
     * @return string
     */
    public function getName()
    {
        return (string) $this->tokenStream[$this->id + 2];
    }

    /**
     * @return bool
     */
    public function hasParent()
    {
        return $this->tokenStream[$this->id + 4] instanceof PHP_Token_EXTENDS;
    }

    /**
     * @return array
     */
    public function getPackage()
    {
        $className  = $this->getName();
        $docComment = $this->getDocblock();

        $result = [
            'namespace'   => '',
            'fullPackage' => '',
            'category'    => '',
            'package'     => '',
            'subpackage'  => ''
        ];

        for ($i = $this->id; $i; --$i) {
            if ($this->tokenStream[$i] instanceof PHP_Token_NAMESPACE) {
                $result['namespace'] = $this->tokenStream[$i]->getName();
                break;
            }
        }

        if (preg_match('/@category[\s]+([\.\w]+)/', $docComment, $matches)) {
            $result['category'] = $matches[1];
        }

        if (preg_match('/@package[\s]+([\.\w]+)/', $docComment, $matches)) {
            $result['package']     = $matches[1];
            $result['fullPackage'] = $matches[1];
        }

        if (preg_match('/@subpackage[\s]+([\.\w]+)/', $docComment, $matches)) {
            $result['subpackage']   = $matches[1];
            $result['fullPackage'] .= '.' . $matches[1];
        }

        if (empty($result['fullPackage'])) {
            $result['fullPackage'] = $this->arrayToName(
                explode('_', str_replace('\\', '_', $className)),
                '.'
            );
        }

        return $result;
    }

    /**
     * @param array  $parts
     * @param string $join
     *
     * @return string
     */
    protected function arrayToName(array $parts, $join = '\\')
    {
        $result = '';

        if (count($parts) > 1) {
            array_pop($parts);

            $result = implode($join, $parts);
        }

        return $result;
    }

    /**
     * @return bool|string
     */
    public function getParent()
    {
        if (!$this->hasParent()) {
            return false;
        }

        $i         = $this->id + 6;
        $tokens    = $this->tokenStream->tokens();
        $className = (string) $tokens[$i];

        while (isset($tokens[$i + 1]) &&
               !$tokens[$i + 1] instanceof PHP_Token_WHITESPACE) {
            $className .= (string) $tokens[++$i];
        }

        return $className;
    }

    /**
     * @return bool
     */
    public function hasInterfaces()
    {
        return (isset($this->tokenStream[$this->id + 4]) &&
                $this->tokenStream[$this->id + 4] instanceof PHP_Token_IMPLEMENTS) ||
               (isset($this->tokenStream[$this->id + 8]) &&
                $this->tokenStream[$this->id + 8] instanceof PHP_Token_IMPLEMENTS);
    }

    /**
     * @return array|bool
     */
    public function getInterfaces()
    {
        if ($this->interfaces !== null) {
            return $this->interfaces;
        }

        if (!$this->hasInterfaces()) {
            return ($this->interfaces = false);
        }

        if ($this->tokenStream[$this->id + 4] instanceof PHP_Token_IMPLEMENTS) {
            $i = $this->id + 3;
        } else {
            $i = $this->id + 7;
        }

        $tokens = $this->tokenStream->tokens();

        while (!$tokens[$i + 1] instanceof PHP_Token_OPEN_CURLY) {
            $i++;

            if ($tokens[$i] instanceof PHP_Token_STRING) {
                $this->interfaces[] = (string) $tokens[$i];
            }
        }

        return $this->interfaces;
    }
}

class PHP_Token_ABSTRACT extends PHP_Token
{
}

class PHP_Token_AMPERSAND extends PHP_Token
{
}

class PHP_Token_AND_EQUAL extends PHP_Token
{
}

class PHP_Token_ARRAY extends PHP_Token
{
}

class PHP_Token_ARRAY_CAST extends PHP_Token
{
}

class PHP_Token_AS extends PHP_Token
{
}

class PHP_Token_AT extends PHP_Token
{
}

class PHP_Token_BACKTICK extends PHP_Token
{
}

class PHP_Token_BAD_CHARACTER extends PHP_Token
{
}

class PHP_Token_BOOLEAN_AND extends PHP_Token
{
}

class PHP_Token_BOOLEAN_OR extends PHP_Token
{
}

class PHP_Token_BOOL_CAST extends PHP_Token
{
}

class PHP_Token_BREAK extends PHP_Token
{
}

class PHP_Token_CARET extends PHP_Token
{
}

class PHP_Token_CASE extends PHP_Token
{
}

class PHP_Token_CATCH extends PHP_Token
{
}

class PHP_Token_CHARACTER extends PHP_Token
{
}

class PHP_Token_CLASS extends PHP_Token_INTERFACE
{
    /**
     * @var bool
     */
    private $anonymous = false;

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        if ($this->name !== null) {
            return $this->name;
        }

        $next = $this->tokenStream[$this->id + 1];

        if ($next instanceof PHP_Token_WHITESPACE) {
            $next = $this->tokenStream[$this->id + 2];
        }

        if ($next instanceof PHP_Token_STRING) {
            $this->name =(string) $next;

            return $this->name;
        }

        if ($next instanceof PHP_Token_OPEN_CURLY ||
            $next instanceof PHP_Token_EXTENDS ||
            $next instanceof PHP_Token_IMPLEMENTS) {

            $this->name = sprintf(
                'AnonymousClass:%s#%s',
                $this->getLine(),
                $this->getId()
            );

            $this->anonymous = true;

            return $this->name;
        }
    }

    public function isAnonymous()
    {
        return $this->anonymous;
    }
}

class PHP_Token_CLASS_C extends PHP_Token
{
}

class PHP_Token_CLASS_NAME_CONSTANT extends PHP_Token
{
}

class PHP_Token_CLONE extends PHP_Token
{
}

class PHP_Token_CLOSE_BRACKET extends PHP_Token
{
}

class PHP_Token_CLOSE_CURLY extends PHP_Token
{
}

class PHP_Token_CLOSE_SQUARE extends PHP_Token
{
}

class PHP_Token_CLOSE_TAG extends PHP_Token
{
}

class PHP_Token_COLON extends PHP_Token
{
}

class PHP_Token_COMMA extends PHP_Token
{
}

class PHP_Token_COMMENT extends PHP_Token
{
}

class PHP_Token_CONCAT_EQUAL extends PHP_Token
{
}

class PHP_Token_CONST extends PHP_Token
{
}

class PHP_Token_CONSTANT_ENCAPSED_STRING extends PHP_Token
{
}

class PHP_Token_CONTINUE extends PHP_Token
{
}

class PHP_Token_CURLY_OPEN extends PHP_Token
{
}

class PHP_Token_DEC extends PHP_Token
{
}

class PHP_Token_DECLARE extends PHP_Token
{
}

class PHP_Token_DEFAULT extends PHP_Token
{
}

class PHP_Token_DIV extends PHP_Token
{
}

class PHP_Token_DIV_EQUAL extends PHP_Token
{
}

class PHP_Token_DNUMBER extends PHP_Token
{
}

class PHP_Token_DO extends PHP_Token
{
}

class PHP_Token_DOC_COMMENT extends PHP_Token
{
}

class PHP_Token_DOLLAR extends PHP_Token
{
}

class PHP_Token_DOLLAR_OPEN_CURLY_BRACES extends PHP_Token
{
}

class PHP_Token_DOT extends PHP_Token
{
}

class PHP_Token_DOUBLE_ARROW extends PHP_Token
{
}

class PHP_Token_DOUBLE_CAST extends PHP_Token
{
}

class PHP_Token_DOUBLE_COLON extends PHP_Token
{
}

class PHP_Token_DOUBLE_QUOTES extends PHP_Token
{
}

class PHP_Token_ECHO extends PHP_Token
{
}

class PHP_Token_ELSE extends PHP_Token
{
}

class PHP_Token_ELSEIF extends PHP_Token
{
}

class PHP_Token_EMPTY extends PHP_Token
{
}

class PHP_Token_ENCAPSED_AND_WHITESPACE extends PHP_Token
{
}

class PHP_Token_ENDDECLARE extends PHP_Token
{
}

class PHP_Token_ENDFOR extends PHP_Token
{
}

class PHP_Token_ENDFOREACH extends PHP_Token
{
}

class PHP_Token_ENDIF extends PHP_Token
{
}

class PHP_Token_ENDSWITCH extends PHP_Token
{
}

class PHP_Token_ENDWHILE extends PHP_Token
{
}

class PHP_Token_END_HEREDOC extends PHP_Token
{
}

class PHP_Token_EQUAL extends PHP_Token
{
}

class PHP_Token_EVAL extends PHP_Token
{
}

class PHP_Token_EXCLAMATION_MARK extends PHP_Token
{
}

class PHP_Token_EXIT extends PHP_Token
{
}

class PHP_Token_EXTENDS extends PHP_Token
{
}

class PHP_Token_FILE extends PHP_Token
{
}

class PHP_Token_FINAL extends PHP_Token
{
}

class PHP_Token_FOR extends PHP_Token
{
}

class PHP_Token_FOREACH extends PHP_Token
{
}

class PHP_Token_FUNC_C extends PHP_Token
{
}

class PHP_Token_GLOBAL extends PHP_Token
{
}

class PHP_Token_GT extends PHP_Token
{
}

class PHP_Token_IF extends PHP_Token
{
}

class PHP_Token_IMPLEMENTS extends PHP_Token
{
}

class PHP_Token_INC extends PHP_Token
{
}

class PHP_Token_INCLUDE extends PHP_Token_Includes
{
}

class PHP_Token_INCLUDE_ONCE extends PHP_Token_Includes
{
}

class PHP_Token_INLINE_HTML extends PHP_Token
{
}

class PHP_Token_INSTANCEOF extends PHP_Token
{
}

class PHP_Token_INT_CAST extends PHP_Token
{
}

class PHP_Token_ISSET extends PHP_Token
{
}

class PHP_Token_IS_EQUAL extends PHP_Token
{
}

class PHP_Token_IS_GREATER_OR_EQUAL extends PHP_Token
{
}

class PHP_Token_IS_IDENTICAL extends PHP_Token
{
}

class PHP_Token_IS_NOT_EQUAL extends PHP_Token
{
}

class PHP_Token_IS_NOT_IDENTICAL extends PHP_Token
{
}

class PHP_Token_IS_SMALLER_OR_EQUAL extends PHP_Token
{
}

class PHP_Token_LINE extends PHP_Token
{
}

class PHP_Token_LIST extends PHP_Token
{
}

class PHP_Token_LNUMBER extends PHP_Token
{
}

class PHP_Token_LOGICAL_AND extends PHP_Token
{
}

class PHP_Token_LOGICAL_OR extends PHP_Token
{
}

class PHP_Token_LOGICAL_XOR extends PHP_Token
{
}

class PHP_Token_LT extends PHP_Token
{
}

class PHP_Token_METHOD_C extends PHP_Token
{
}

class PHP_Token_MINUS extends PHP_Token
{
}

class PHP_Token_MINUS_EQUAL extends PHP_Token
{
}

class PHP_Token_MOD_EQUAL extends PHP_Token
{
}

class PHP_Token_MULT extends PHP_Token
{
}

class PHP_Token_MUL_EQUAL extends PHP_Token
{
}

class PHP_Token_NEW extends PHP_Token
{
}

class PHP_Token_NUM_STRING extends PHP_Token
{
}

class PHP_Token_OBJECT_CAST extends PHP_Token
{
}

class PHP_Token_OBJECT_OPERATOR extends PHP_Token
{
}

class PHP_Token_OPEN_BRACKET extends PHP_Token
{
}

class PHP_Token_OPEN_CURLY extends PHP_Token
{
}

class PHP_Token_OPEN_SQUARE extends PHP_Token
{
}

class PHP_Token_OPEN_TAG extends PHP_Token
{
}

class PHP_Token_OPEN_TAG_WITH_ECHO extends PHP_Token
{
}

class PHP_Token_OR_EQUAL extends PHP_Token
{
}

class PHP_Token_PAAMAYIM_NEKUDOTAYIM extends PHP_Token
{
}

class PHP_Token_PERCENT extends PHP_Token
{
}

class PHP_Token_PIPE extends PHP_Token
{
}

class PHP_Token_PLUS extends PHP_Token
{
}

class PHP_Token_PLUS_EQUAL extends PHP_Token
{
}

class PHP_Token_PRINT extends PHP_Token
{
}

class PHP_Token_PRIVATE extends PHP_Token
{
}

class PHP_Token_PROTECTED extends PHP_Token
{
}

class PHP_Token_PUBLIC extends PHP_Token
{
}

class PHP_Token_QUESTION_MARK extends PHP_Token
{
}

class PHP_Token_REQUIRE extends PHP_Token_Includes
{
}

class PHP_Token_REQUIRE_ONCE extends PHP_Token_Includes
{
}

class PHP_Token_RETURN extends PHP_Token
{
}

class PHP_Token_SEMICOLON extends PHP_Token
{
}

class PHP_Token_SL extends PHP_Token
{
}

class PHP_Token_SL_EQUAL extends PHP_Token
{
}

class PHP_Token_SR extends PHP_Token
{
}

class PHP_Token_SR_EQUAL extends PHP_Token
{
}

class PHP_Token_START_HEREDOC extends PHP_Token
{
}

class PHP_Token_STATIC extends PHP_Token
{
}

class PHP_Token_STRING extends PHP_Token
{
}

class PHP_Token_STRING_CAST extends PHP_Token
{
}

class PHP_Token_STRING_VARNAME extends PHP_Token
{
}

class PHP_Token_SWITCH extends PHP_Token
{
}

class PHP_Token_THROW extends PHP_Token
{
}

class PHP_Token_TILDE extends PHP_Token
{
}

class PHP_Token_TRY extends PHP_Token
{
}

class PHP_Token_UNSET extends PHP_Token
{
}

class PHP_Token_UNSET_CAST extends PHP_Token
{
}

class PHP_Token_USE extends PHP_Token
{
}

class PHP_Token_USE_FUNCTION extends PHP_Token
{
}

class PHP_Token_VAR extends PHP_Token
{
}

class PHP_Token_VARIABLE extends PHP_Token
{
}

class PHP_Token_WHILE extends PHP_Token
{
}

class PHP_Token_WHITESPACE extends PHP_Token
{
}

class PHP_Token_XOR_EQUAL extends PHP_Token
{
}

// Tokens introduced in PHP 5.1
class PHP_Token_HALT_COMPILER extends PHP_Token
{
}

// Tokens introduced in PHP 5.3
class PHP_Token_DIR extends PHP_Token
{
}

class PHP_Token_GOTO extends PHP_Token
{
}

class PHP_Token_NAMESPACE extends PHP_TokenWithScope
{
    /**
     * @return string
     */
    public function getName()
    {
        $tokens    = $this->tokenStream->tokens();
        $namespace = (string) $tokens[$this->id + 2];

        for ($i = $this->id + 3;; $i += 2) {
            if (isset($tokens[$i]) &&
                $tokens[$i] instanceof PHP_Token_NS_SEPARATOR) {
                $namespace .= '\\' . $tokens[$i + 1];
            } else {
                break;
            }
        }

        return $namespace;
    }
}

class PHP_Token_NS_C extends PHP_Token
{
}

class PHP_Token_NS_SEPARATOR extends PHP_Token
{
}

// Tokens introduced in PHP 5.4
class PHP_Token_CALLABLE extends PHP_Token
{
}

class PHP_Token_INSTEADOF extends PHP_Token
{
}

class PHP_Token_TRAIT extends PHP_Token_INTERFACE
{
}

class PHP_Token_TRAIT_C extends PHP_Token
{
}

// Tokens introduced in PHP 5.5
class PHP_Token_FINALLY extends PHP_Token
{
}

class PHP_Token_YIELD extends PHP_Token
{
}

// Tokens introduced in PHP 5.6
class PHP_Token_ELLIPSIS extends PHP_Token
{
}

class PHP_Token_POW extends PHP_Token
{
}

class PHP_Token_POW_EQUAL extends PHP_Token
{
}

// Tokens introduced in PHP 7.0
class PHP_Token_COALESCE extends PHP_Token
{
}

class PHP_Token_SPACESHIP extends PHP_Token
{
}

class PHP_Token_YIELD_FROM extends PHP_Token
{
}

// Tokens introduced in PHP 7.4
class PHP_Token_COALESCE_EQUAL extends PHP_Token
{
}

class PHP_Token_FN extends PHP_Token
{
}
php-token-stream

Copyright (c) 2009-2019, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php
declare(strict_types=1);

/**
 * phpDocumentor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

/**
 * Interface for project. Since the definition of a project can be different per factory this interface will be small.
 */
interface Project
{
    /**
     * Returns the name of the project.
     */
    public function getName(): string;
}
<?php
declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

/**
 * The location where an element occurs within a file.
 */
final class Location
{
    /** @var int */
    private $lineNumber = 0;

    /** @var int */
    private $columnNumber = 0;

    /**
     * Initializes the location for an element using its line number in the file and optionally the column number.
     */
    public function __construct(int $lineNumber, int $columnNumber = 0)
    {
        $this->lineNumber = $lineNumber;
        $this->columnNumber = $columnNumber;
    }

    /**
     * Returns the line number that is covered by this location.
     */
    public function getLineNumber(): int
    {
        return $this->lineNumber;
    }

    /**
     * Returns the column number (character position on a line) for this location object.
     */
    public function getColumnNumber(): int
    {
        return $this->columnNumber;
    }
}
<?php
declare(strict_types=1);

/**
 * phpDocumentor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

/**
 * Interface for Api Elements
 */
interface Element
{
    /**
     * Returns the Fqsen of the element.
     */
    public function getFqsen(): Fqsen;

    /**
     * Returns the name of the element.
     */
    public function getName(): string;
}
<?php
declare(strict_types=1);

/**
 * phpDocumentor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

use InvalidArgumentException;

/**
 * Value Object for Fqsen.
 *
 * @link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc-meta.md
 */
final class Fqsen
{
    /**
     * @var string full quallified class name
     */
    private $fqsen;

    /**
     * @var string name of the element without path.
     */
    private $name;

    /**
     * Initializes the object.
     *
     * @throws InvalidArgumentException when $fqsen is not matching the format.
     */
    public function __construct(string $fqsen)
    {
        $matches = [];
        $result = preg_match(
            '/^\\\\([a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff\\\\]*)?(?:[:]{2}\\$?([a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*))?(?:\\(\\))?$/',
            $fqsen,
            $matches
        );

        if ($result === 0) {
            throw new InvalidArgumentException(
                sprintf('"%s" is not a valid Fqsen.', $fqsen)
            );
        }

        $this->fqsen = $fqsen;

        if (isset($matches[2])) {
            $this->name = $matches[2];
        } else {
            $matches = explode('\\', $fqsen);
            $this->name = trim(end($matches), '()');
        }
    }

    /**
     * converts this class to string.
     */
    public function __toString(): string
    {
        return $this->fqsen;
    }

    /**
     * Returns the name of the element without path.
     */
    public function getName(): string
    {
        return $this->name;
    }
}
The MIT License (MIT)

Copyright (c) 2015 phpDocumentor

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<?php
declare(strict_types=1);

/**
 * phpDocumentor
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

/**
 * Interface for project factories. A project factory shall convert a set of files
 * into an object implementing the Project interface.
 */
interface ProjectFactory
{
    /**
     * Creates a project from the set of files.
     *
     * @param string $name
     * @param File[] $files
     * @return Project
     */
    public function create($name, array $files): Project;
}
<?php
declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

/**
 * Interface for files processed by the ProjectFactory
 */
interface File
{
    /**
     * Returns the content of the file as a string.
     */
    public function getContents(): string;

    /**
     * Returns md5 hash of the file.
     */
    public function md5(): string;

    /**
     * Returns an relative path to the file.
     */
    public function path(): string;
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

use SebastianBergmann\Diff\Output\DiffOutputBuilderInterface;
use SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;

/**
 * Diff implementation.
 */
final class Differ
{
    public const OLD                     = 0;
    public const ADDED                   = 1;
    public const REMOVED                 = 2;
    public const DIFF_LINE_END_WARNING   = 3;
    public const NO_LINE_END_EOF_WARNING = 4;

    /**
     * @var DiffOutputBuilderInterface
     */
    private $outputBuilder;

    /**
     * @param DiffOutputBuilderInterface $outputBuilder
     *
     * @throws InvalidArgumentException
     */
    public function __construct($outputBuilder = null)
    {
        if ($outputBuilder instanceof DiffOutputBuilderInterface) {
            $this->outputBuilder = $outputBuilder;
        } elseif (null === $outputBuilder) {
            $this->outputBuilder = new UnifiedDiffOutputBuilder;
        } elseif (\is_string($outputBuilder)) {
            // PHPUnit 6.1.4, 6.2.0, 6.2.1, 6.2.2, and 6.2.3 support
            // @see https://github.com/sebastianbergmann/phpunit/issues/2734#issuecomment-314514056
            // @deprecated
            $this->outputBuilder = new UnifiedDiffOutputBuilder($outputBuilder);
        } else {
            throw new InvalidArgumentException(
                \sprintf(
                    'Expected builder to be an instance of DiffOutputBuilderInterface, <null> or a string, got %s.',
                    \is_object($outputBuilder) ? 'instance of "' . \get_class($outputBuilder) . '"' : \gettype($outputBuilder) . ' "' . $outputBuilder . '"'
                )
            );
        }
    }

    /**
     * Returns the diff between two arrays or strings as string.
     *
     * @param array|string                            $from
     * @param array|string                            $to
     * @param null|LongestCommonSubsequenceCalculator $lcs
     *
     * @return string
     */
    public function diff($from, $to, LongestCommonSubsequenceCalculator $lcs = null): string
    {
        $diff = $this->diffToArray(
            $this->normalizeDiffInput($from),
            $this->normalizeDiffInput($to),
            $lcs
        );

        return $this->outputBuilder->getDiff($diff);
    }

    /**
     * Returns the diff between two arrays or strings as array.
     *
     * Each array element contains two elements:
     *   - [0] => mixed $token
     *   - [1] => 2|1|0
     *
     * - 2: REMOVED: $token was removed from $from
     * - 1: ADDED: $token was added to $from
     * - 0: OLD: $token is not changed in $to
     *
     * @param array|string                       $from
     * @param array|string                       $to
     * @param LongestCommonSubsequenceCalculator $lcs
     *
     * @return array
     */
    public function diffToArray($from, $to, LongestCommonSubsequenceCalculator $lcs = null): array
    {
        if (\is_string($from)) {
            $from = $this->splitStringByLines($from);
        } elseif (!\is_array($from)) {
            throw new InvalidArgumentException('"from" must be an array or string.');
        }

        if (\is_string($to)) {
            $to = $this->splitStringByLines($to);
        } elseif (!\is_array($to)) {
            throw new InvalidArgumentException('"to" must be an array or string.');
        }

        [$from, $to, $start, $end] = self::getArrayDiffParted($from, $to);

        if ($lcs === null) {
            $lcs = $this->selectLcsImplementation($from, $to);
        }

        $common = $lcs->calculate(\array_values($from), \array_values($to));
        $diff   = [];

        foreach ($start as $token) {
            $diff[] = [$token, self::OLD];
        }

        \reset($from);
        \reset($to);

        foreach ($common as $token) {
            while (($fromToken = \reset($from)) !== $token) {
                $diff[] = [\array_shift($from), self::REMOVED];
            }

            while (($toToken = \reset($to)) !== $token) {
                $diff[] = [\array_shift($to), self::ADDED];
            }

            $diff[] = [$token, self::OLD];

            \array_shift($from);
            \array_shift($to);
        }

        while (($token = \array_shift($from)) !== null) {
            $diff[] = [$token, self::REMOVED];
        }

        while (($token = \array_shift($to)) !== null) {
            $diff[] = [$token, self::ADDED];
        }

        foreach ($end as $token) {
            $diff[] = [$token, self::OLD];
        }

        if ($this->detectUnmatchedLineEndings($diff)) {
            \array_unshift($diff, ["#Warning: Strings contain different line endings!\n", self::DIFF_LINE_END_WARNING]);
        }

        return $diff;
    }

    /**
     * Casts variable to string if it is not a string or array.
     *
     * @param mixed $input
     *
     * @return array|string
     */
    private function normalizeDiffInput($input)
    {
        if (!\is_array($input) && !\is_string($input)) {
            return (string) $input;
        }

        return $input;
    }

    /**
     * Checks if input is string, if so it will split it line-by-line.
     *
     * @param string $input
     *
     * @return array
     */
    private function splitStringByLines(string $input): array
    {
        return \preg_split('/(.*\R)/', $input, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    }

    /**
     * @param array $from
     * @param array $to
     *
     * @return LongestCommonSubsequenceCalculator
     */
    private function selectLcsImplementation(array $from, array $to): LongestCommonSubsequenceCalculator
    {
        // We do not want to use the time-efficient implementation if its memory
        // footprint will probably exceed this value. Note that the footprint
        // calculation is only an estimation for the matrix and the LCS method
        // will typically allocate a bit more memory than this.
        $memoryLimit = 100 * 1024 * 1024;

        if ($this->calculateEstimatedFootprint($from, $to) > $memoryLimit) {
            return new MemoryEfficientLongestCommonSubsequenceCalculator;
        }

        return new TimeEfficientLongestCommonSubsequenceCalculator;
    }

    /**
     * Calculates the estimated memory footprint for the DP-based method.
     *
     * @param array $from
     * @param array $to
     *
     * @return float|int
     */
    private function calculateEstimatedFootprint(array $from, array $to)
    {
        $itemSize = PHP_INT_SIZE === 4 ? 76 : 144;

        return $itemSize * \min(\count($from), \count($to)) ** 2;
    }

    /**
     * Returns true if line ends don't match in a diff.
     *
     * @param array $diff
     *
     * @return bool
     */
    private function detectUnmatchedLineEndings(array $diff): bool
    {
        $newLineBreaks = ['' => true];
        $oldLineBreaks = ['' => true];

        foreach ($diff as $entry) {
            if (self::OLD === $entry[1]) {
                $ln                 = $this->getLinebreak($entry[0]);
                $oldLineBreaks[$ln] = true;
                $newLineBreaks[$ln] = true;
            } elseif (self::ADDED === $entry[1]) {
                $newLineBreaks[$this->getLinebreak($entry[0])] = true;
            } elseif (self::REMOVED === $entry[1]) {
                $oldLineBreaks[$this->getLinebreak($entry[0])] = true;
            }
        }

        // if either input or output is a single line without breaks than no warning should be raised
        if (['' => true] === $newLineBreaks || ['' => true] === $oldLineBreaks) {
            return false;
        }

        // two way compare
        foreach ($newLineBreaks as $break => $set) {
            if (!isset($oldLineBreaks[$break])) {
                return true;
            }
        }

        foreach ($oldLineBreaks as $break => $set) {
            if (!isset($newLineBreaks[$break])) {
                return true;
            }
        }

        return false;
    }

    private function getLinebreak($line): string
    {
        if (!\is_string($line)) {
            return '';
        }

        $lc = \substr($line, -1);

        if ("\r" === $lc) {
            return "\r";
        }

        if ("\n" !== $lc) {
            return '';
        }

        if ("\r\n" === \substr($line, -2)) {
            return "\r\n";
        }

        return "\n";
    }

    private static function getArrayDiffParted(array &$from, array &$to): array
    {
        $start = [];
        $end   = [];

        \reset($to);

        foreach ($from as $k => $v) {
            $toK = \key($to);

            if ($toK === $k && $v === $to[$k]) {
                $start[$k] = $v;

                unset($from[$k], $to[$k]);
            } else {
                break;
            }
        }

        \end($from);
        \end($to);

        do {
            $fromK = \key($from);
            $toK   = \key($to);

            if (null === $fromK || null === $toK || \current($from) !== \current($to)) {
                break;
            }

            \prev($from);
            \prev($to);

            $end = [$fromK => $from[$fromK]] + $end;
            unset($from[$fromK], $to[$toK]);
        } while (true);

        return [$from, $to, $start, $end];
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

interface Exception
{
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

class InvalidArgumentException extends \InvalidArgumentException implements Exception
{
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

final class ConfigurationException extends InvalidArgumentException
{
    /**
     * @param string          $option
     * @param string          $expected
     * @param mixed           $value
     * @param int             $code
     * @param null|\Exception $previous
     */
    public function __construct(
        string $option,
        string $expected,
        $value,
        int $code = 0,
        \Exception $previous = null
    ) {
        parent::__construct(
            \sprintf(
                'Option "%s" must be %s, got "%s".',
                $option,
                $expected,
                \is_object($value) ? \get_class($value) : (null === $value ? '<null>' : \gettype($value) . '#' . $value)
            ),
            $code,
            $previous
        );
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

final class Diff
{
    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    /**
     * @var Chunk[]
     */
    private $chunks;

    /**
     * @param string  $from
     * @param string  $to
     * @param Chunk[] $chunks
     */
    public function __construct(string $from, string $to, array $chunks = [])
    {
        $this->from   = $from;
        $this->to     = $to;
        $this->chunks = $chunks;
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @return Chunk[]
     */
    public function getChunks(): array
    {
        return $this->chunks;
    }

    /**
     * @param Chunk[] $chunks
     */
    public function setChunks(array $chunks): void
    {
        $this->chunks = $chunks;
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

/**
 * Unified diff parser.
 */
final class Parser
{
    /**
     * @param string $string
     *
     * @return Diff[]
     */
    public function parse(string $string): array
    {
        $lines = \preg_split('(\r\n|\r|\n)', $string);

        if (!empty($lines) && $lines[\count($lines) - 1] === '') {
            \array_pop($lines);
        }

        $lineCount = \count($lines);
        $diffs     = [];
        $diff      = null;
        $collected = [];

        for ($i = 0; $i < $lineCount; ++$i) {
            if (\preg_match('(^---\\s+(?P<file>\\S+))', $lines[$i], $fromMatch) &&
                \preg_match('(^\\+\\+\\+\\s+(?P<file>\\S+))', $lines[$i + 1], $toMatch)) {
                if ($diff !== null) {
                    $this->parseFileDiff($diff, $collected);

                    $diffs[]   = $diff;
                    $collected = [];
                }

                $diff = new Diff($fromMatch['file'], $toMatch['file']);

                ++$i;
            } else {
                if (\preg_match('/^(?:diff --git |index [\da-f\.]+|[+-]{3} [ab])/', $lines[$i])) {
                    continue;
                }

                $collected[] = $lines[$i];
            }
        }

        if ($diff !== null && \count($collected)) {
            $this->parseFileDiff($diff, $collected);

            $diffs[] = $diff;
        }

        return $diffs;
    }

    private function parseFileDiff(Diff $diff, array $lines): void
    {
        $chunks = [];
        $chunk  = null;

        foreach ($lines as $line) {
            if (\preg_match('/^@@\s+-(?P<start>\d+)(?:,\s*(?P<startrange>\d+))?\s+\+(?P<end>\d+)(?:,\s*(?P<endrange>\d+))?\s+@@/', $line, $match)) {
                $chunk = new Chunk(
                    (int) $match['start'],
                    isset($match['startrange']) ? \max(1, (int) $match['startrange']) : 1,
                    (int) $match['end'],
                    isset($match['endrange']) ? \max(1, (int) $match['endrange']) : 1
                );

                $chunks[]  = $chunk;
                $diffLines = [];

                continue;
            }

            if (\preg_match('/^(?P<type>[+ -])?(?P<line>.*)/', $line, $match)) {
                $type = Line::UNCHANGED;

                if ($match['type'] === '+') {
                    $type = Line::ADDED;
                } elseif ($match['type'] === '-') {
                    $type = Line::REMOVED;
                }

                $diffLines[] = new Line($type, $match['line']);

                if (null !== $chunk) {
                    $chunk->setLines($diffLines);
                }
            }
        }

        $diff->setChunks($chunks);
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff\Output;

abstract class AbstractChunkOutputBuilder implements DiffOutputBuilderInterface
{
    /**
     * Takes input of the diff array and returns the common parts.
     * Iterates through diff line by line.
     *
     * @param array $diff
     * @param int   $lineThreshold
     *
     * @return array
     */
    protected function getCommonChunks(array $diff, int $lineThreshold = 5): array
    {
        $diffSize     = \count($diff);
        $capturing    = false;
        $chunkStart   = 0;
        $chunkSize    = 0;
        $commonChunks = [];

        for ($i = 0; $i < $diffSize; ++$i) {
            if ($diff[$i][1] === 0 /* OLD */) {
                if ($capturing === false) {
                    $capturing  = true;
                    $chunkStart = $i;
                    $chunkSize  = 0;
                } else {
                    ++$chunkSize;
                }
            } elseif ($capturing !== false) {
                if ($chunkSize >= $lineThreshold) {
                    $commonChunks[$chunkStart] = $chunkStart + $chunkSize;
                }

                $capturing = false;
            }
        }

        if ($capturing !== false && $chunkSize >= $lineThreshold) {
            $commonChunks[$chunkStart] = $chunkStart + $chunkSize;
        }

        return $commonChunks;
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff\Output;

/**
 * Defines how an output builder should take a generated
 * diff array and return a string representation of that diff.
 */
interface DiffOutputBuilderInterface
{
    public function getDiff(array $diff): string;
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff\Output;

use SebastianBergmann\Diff\Differ;

/**
 * Builds a diff string representation in unified diff format in chunks.
 */
final class UnifiedDiffOutputBuilder extends AbstractChunkOutputBuilder
{
    /**
     * @var bool
     */
    private $collapseRanges = true;

    /**
     * @var int >= 0
     */
    private $commonLineThreshold = 6;

    /**
     * @var int >= 0
     */
    private $contextLines = 3;

    /**
     * @var string
     */
    private $header;

    /**
     * @var bool
     */
    private $addLineNumbers;

    public function __construct(string $header = "--- Original\n+++ New\n", bool $addLineNumbers = false)
    {
        $this->header         = $header;
        $this->addLineNumbers = $addLineNumbers;
    }

    public function getDiff(array $diff): string
    {
        $buffer = \fopen('php://memory', 'r+b');

        if ('' !== $this->header) {
            \fwrite($buffer, $this->header);

            if ("\n" !== \substr($this->header, -1, 1)) {
                \fwrite($buffer, "\n");
            }
        }

        if (0 !== \count($diff)) {
            $this->writeDiffHunks($buffer, $diff);
        }

        $diff = \stream_get_contents($buffer, -1, 0);

        \fclose($buffer);

        // If the last char is not a linebreak: add it.
        // This might happen when both the `from` and `to` do not have a trailing linebreak
        $last = \substr($diff, -1);

        return "\n" !== $last && "\r" !== $last
            ? $diff . "\n"
            : $diff
        ;
    }

    private function writeDiffHunks($output, array $diff): void
    {
        // detect "No newline at end of file" and insert into `$diff` if needed

        $upperLimit = \count($diff);

        if (0 === $diff[$upperLimit - 1][1]) {
            $lc = \substr($diff[$upperLimit - 1][0], -1);

            if ("\n" !== $lc) {
                \array_splice($diff, $upperLimit, 0, [["\n\\ No newline at end of file\n", Differ::NO_LINE_END_EOF_WARNING]]);
            }
        } else {
            // search back for the last `+` and `-` line,
            // check if has trailing linebreak, else add under it warning under it
            $toFind = [1 => true, 2 => true];

            for ($i = $upperLimit - 1; $i >= 0; --$i) {
                if (isset($toFind[$diff[$i][1]])) {
                    unset($toFind[$diff[$i][1]]);
                    $lc = \substr($diff[$i][0], -1);

                    if ("\n" !== $lc) {
                        \array_splice($diff, $i + 1, 0, [["\n\\ No newline at end of file\n", Differ::NO_LINE_END_EOF_WARNING]]);
                    }

                    if (!\count($toFind)) {
                        break;
                    }
                }
            }
        }

        // write hunks to output buffer

        $cutOff      = \max($this->commonLineThreshold, $this->contextLines);
        $hunkCapture = false;
        $sameCount   = $toRange   = $fromRange = 0;
        $toStart     = $fromStart = 1;

        foreach ($diff as $i => $entry) {
            if (0 === $entry[1]) { // same
                if (false === $hunkCapture) {
                    ++$fromStart;
                    ++$toStart;

                    continue;
                }

                ++$sameCount;
                ++$toRange;
                ++$fromRange;

                if ($sameCount === $cutOff) {
                    $contextStartOffset = ($hunkCapture - $this->contextLines) < 0
                        ? $hunkCapture
                        : $this->contextLines
                    ;

                    // note: $contextEndOffset = $this->contextLines;
                    //
                    // because we never go beyond the end of the diff.
                    // with the cutoff/contextlines here the follow is never true;
                    //
                    // if ($i - $cutOff + $this->contextLines + 1 > \count($diff)) {
                    //    $contextEndOffset = count($diff) - 1;
                    // }
                    //
                    // ; that would be true for a trailing incomplete hunk case which is dealt with after this loop

                    $this->writeHunk(
                        $diff,
                        $hunkCapture - $contextStartOffset,
                        $i - $cutOff + $this->contextLines + 1,
                        $fromStart - $contextStartOffset,
                        $fromRange - $cutOff + $contextStartOffset + $this->contextLines,
                        $toStart - $contextStartOffset,
                        $toRange - $cutOff + $contextStartOffset + $this->contextLines,
                        $output
                    );

                    $fromStart += $fromRange;
                    $toStart += $toRange;

                    $hunkCapture = false;
                    $sameCount   = $toRange = $fromRange = 0;
                }

                continue;
            }

            $sameCount = 0;

            if ($entry[1] === Differ::NO_LINE_END_EOF_WARNING) {
                continue;
            }

            if (false === $hunkCapture) {
                $hunkCapture = $i;
            }

            if (Differ::ADDED === $entry[1]) {
                ++$toRange;
            }

            if (Differ::REMOVED === $entry[1]) {
                ++$fromRange;
            }
        }

        if (false === $hunkCapture) {
            return;
        }

        // we end here when cutoff (commonLineThreshold) was not reached, but we where capturing a hunk,
        // do not render hunk till end automatically because the number of context lines might be less than the commonLineThreshold

        $contextStartOffset = $hunkCapture - $this->contextLines < 0
            ? $hunkCapture
            : $this->contextLines
        ;

        // prevent trying to write out more common lines than there are in the diff _and_
        // do not write more than configured through the context lines
        $contextEndOffset = \min($sameCount, $this->contextLines);

        $fromRange -= $sameCount;
        $toRange -= $sameCount;

        $this->writeHunk(
            $diff,
            $hunkCapture - $contextStartOffset,
            $i - $sameCount + $contextEndOffset + 1,
            $fromStart - $contextStartOffset,
            $fromRange + $contextStartOffset + $contextEndOffset,
            $toStart - $contextStartOffset,
            $toRange + $contextStartOffset + $contextEndOffset,
            $output
        );
    }

    private function writeHunk(
        array $diff,
        int $diffStartIndex,
        int $diffEndIndex,
        int $fromStart,
        int $fromRange,
        int $toStart,
        int $toRange,
        $output
    ): void {
        if ($this->addLineNumbers) {
            \fwrite($output, '@@ -' . $fromStart);

            if (!$this->collapseRanges || 1 !== $fromRange) {
                \fwrite($output, ',' . $fromRange);
            }

            \fwrite($output, ' +' . $toStart);

            if (!$this->collapseRanges || 1 !== $toRange) {
                \fwrite($output, ',' . $toRange);
            }

            \fwrite($output, " @@\n");
        } else {
            \fwrite($output, "@@ @@\n");
        }

        for ($i = $diffStartIndex; $i < $diffEndIndex; ++$i) {
            if ($diff[$i][1] === Differ::ADDED) {
                \fwrite($output, '+' . $diff[$i][0]);
            } elseif ($diff[$i][1] === Differ::REMOVED) {
                \fwrite($output, '-' . $diff[$i][0]);
            } elseif ($diff[$i][1] === Differ::OLD) {
                \fwrite($output, ' ' . $diff[$i][0]);
            } elseif ($diff[$i][1] === Differ::NO_LINE_END_EOF_WARNING) {
                \fwrite($output, "\n"); // $diff[$i][0]
            } else { /* Not changed (old) Differ::OLD or Warning Differ::DIFF_LINE_END_WARNING */
                \fwrite($output, ' ' . $diff[$i][0]);
            }
        }
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff\Output;

use SebastianBergmann\Diff\Differ;

/**
 * Builds a diff string representation in a loose unified diff format
 * listing only changes lines. Does not include line numbers.
 */
final class DiffOnlyOutputBuilder implements DiffOutputBuilderInterface
{
    /**
     * @var string
     */
    private $header;

    public function __construct(string $header = "--- Original\n+++ New\n")
    {
        $this->header = $header;
    }

    public function getDiff(array $diff): string
    {
        $buffer = \fopen('php://memory', 'r+b');

        if ('' !== $this->header) {
            \fwrite($buffer, $this->header);

            if ("\n" !== \substr($this->header, -1, 1)) {
                \fwrite($buffer, "\n");
            }
        }

        foreach ($diff as $diffEntry) {
            if ($diffEntry[1] === Differ::ADDED) {
                \fwrite($buffer, '+' . $diffEntry[0]);
            } elseif ($diffEntry[1] === Differ::REMOVED) {
                \fwrite($buffer, '-' . $diffEntry[0]);
            } elseif ($diffEntry[1] === Differ::DIFF_LINE_END_WARNING) {
                \fwrite($buffer, ' ' . $diffEntry[0]);

                continue; // Warnings should not be tested for line break, it will always be there
            } else { /* Not changed (old) 0 */
                continue; // we didn't write the non changs line, so do not add a line break either
            }

            $lc = \substr($diffEntry[0], -1);

            if ($lc !== "\n" && $lc !== "\r") {
                \fwrite($buffer, "\n"); // \No newline at end of file
            }
        }

        $diff = \stream_get_contents($buffer, -1, 0);
        \fclose($buffer);

        return $diff;
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff\Output;

use SebastianBergmann\Diff\ConfigurationException;
use SebastianBergmann\Diff\Differ;

/**
 * Strict Unified diff output builder.
 *
 * Generates (strict) Unified diff's (unidiffs) with hunks.
 */
final class StrictUnifiedDiffOutputBuilder implements DiffOutputBuilderInterface
{
    private static $default = [
        'collapseRanges'      => true, // ranges of length one are rendered with the trailing `,1`
        'commonLineThreshold' => 6,    // number of same lines before ending a new hunk and creating a new one (if needed)
        'contextLines'        => 3,    // like `diff:  -u, -U NUM, --unified[=NUM]`, for patch/git apply compatibility best to keep at least @ 3
        'fromFile'            => null,
        'fromFileDate'        => null,
        'toFile'              => null,
        'toFileDate'          => null,
    ];
    /**
     * @var bool
     */
    private $changed;

    /**
     * @var bool
     */
    private $collapseRanges;

    /**
     * @var int >= 0
     */
    private $commonLineThreshold;

    /**
     * @var string
     */
    private $header;

    /**
     * @var int >= 0
     */
    private $contextLines;

    public function __construct(array $options = [])
    {
        $options = \array_merge(self::$default, $options);

        if (!\is_bool($options['collapseRanges'])) {
            throw new ConfigurationException('collapseRanges', 'a bool', $options['collapseRanges']);
        }

        if (!\is_int($options['contextLines']) || $options['contextLines'] < 0) {
            throw new ConfigurationException('contextLines', 'an int >= 0', $options['contextLines']);
        }

        if (!\is_int($options['commonLineThreshold']) || $options['commonLineThreshold'] <= 0) {
            throw new ConfigurationException('commonLineThreshold', 'an int > 0', $options['commonLineThreshold']);
        }

        foreach (['fromFile', 'toFile'] as $option) {
            if (!\is_string($options[$option])) {
                throw new ConfigurationException($option, 'a string', $options[$option]);
            }
        }

        foreach (['fromFileDate', 'toFileDate'] as $option) {
            if (null !== $options[$option] && !\is_string($options[$option])) {
                throw new ConfigurationException($option, 'a string or <null>', $options[$option]);
            }
        }

        $this->header = \sprintf(
            "--- %s%s\n+++ %s%s\n",
            $options['fromFile'],
            null === $options['fromFileDate'] ? '' : "\t" . $options['fromFileDate'],
            $options['toFile'],
            null === $options['toFileDate'] ? '' : "\t" . $options['toFileDate']
        );

        $this->collapseRanges      = $options['collapseRanges'];
        $this->commonLineThreshold = $options['commonLineThreshold'];
        $this->contextLines        = $options['contextLines'];
    }

    public function getDiff(array $diff): string
    {
        if (0 === \count($diff)) {
            return '';
        }

        $this->changed = false;

        $buffer = \fopen('php://memory', 'r+b');
        \fwrite($buffer, $this->header);

        $this->writeDiffHunks($buffer, $diff);

        if (!$this->changed) {
            \fclose($buffer);

            return '';
        }

        $diff = \stream_get_contents($buffer, -1, 0);

        \fclose($buffer);

        // If the last char is not a linebreak: add it.
        // This might happen when both the `from` and `to` do not have a trailing linebreak
        $last = \substr($diff, -1);

        return "\n" !== $last && "\r" !== $last
            ? $diff . "\n"
            : $diff
        ;
    }

    private function writeDiffHunks($output, array $diff): void
    {
        // detect "No newline at end of file" and insert into `$diff` if needed

        $upperLimit = \count($diff);

        if (0 === $diff[$upperLimit - 1][1]) {
            $lc = \substr($diff[$upperLimit - 1][0], -1);

            if ("\n" !== $lc) {
                \array_splice($diff, $upperLimit, 0, [["\n\\ No newline at end of file\n", Differ::NO_LINE_END_EOF_WARNING]]);
            }
        } else {
            // search back for the last `+` and `-` line,
            // check if has trailing linebreak, else add under it warning under it
            $toFind = [1 => true, 2 => true];

            for ($i = $upperLimit - 1; $i >= 0; --$i) {
                if (isset($toFind[$diff[$i][1]])) {
                    unset($toFind[$diff[$i][1]]);
                    $lc = \substr($diff[$i][0], -1);

                    if ("\n" !== $lc) {
                        \array_splice($diff, $i + 1, 0, [["\n\\ No newline at end of file\n", Differ::NO_LINE_END_EOF_WARNING]]);
                    }

                    if (!\count($toFind)) {
                        break;
                    }
                }
            }
        }

        // write hunks to output buffer

        $cutOff      = \max($this->commonLineThreshold, $this->contextLines);
        $hunkCapture = false;
        $sameCount   = $toRange = $fromRange = 0;
        $toStart     = $fromStart = 1;

        foreach ($diff as $i => $entry) {
            if (0 === $entry[1]) { // same
                if (false === $hunkCapture) {
                    ++$fromStart;
                    ++$toStart;

                    continue;
                }

                ++$sameCount;
                ++$toRange;
                ++$fromRange;

                if ($sameCount === $cutOff) {
                    $contextStartOffset = ($hunkCapture - $this->contextLines) < 0
                        ? $hunkCapture
                        : $this->contextLines
                    ;

                    // note: $contextEndOffset = $this->contextLines;
                    //
                    // because we never go beyond the end of the diff.
                    // with the cutoff/contextlines here the follow is never true;
                    //
                    // if ($i - $cutOff + $this->contextLines + 1 > \count($diff)) {
                    //    $contextEndOffset = count($diff) - 1;
                    // }
                    //
                    // ; that would be true for a trailing incomplete hunk case which is dealt with after this loop

                    $this->writeHunk(
                        $diff,
                        $hunkCapture - $contextStartOffset,
                        $i - $cutOff + $this->contextLines + 1,
                        $fromStart - $contextStartOffset,
                        $fromRange - $cutOff + $contextStartOffset + $this->contextLines,
                        $toStart - $contextStartOffset,
                        $toRange - $cutOff + $contextStartOffset + $this->contextLines,
                        $output
                    );

                    $fromStart += $fromRange;
                    $toStart += $toRange;

                    $hunkCapture = false;
                    $sameCount   = $toRange = $fromRange = 0;
                }

                continue;
            }

            $sameCount = 0;

            if ($entry[1] === Differ::NO_LINE_END_EOF_WARNING) {
                continue;
            }

            $this->changed = true;

            if (false === $hunkCapture) {
                $hunkCapture = $i;
            }

            if (Differ::ADDED === $entry[1]) { // added
                ++$toRange;
            }

            if (Differ::REMOVED === $entry[1]) { // removed
                ++$fromRange;
            }
        }

        if (false === $hunkCapture) {
            return;
        }

        // we end here when cutoff (commonLineThreshold) was not reached, but we where capturing a hunk,
        // do not render hunk till end automatically because the number of context lines might be less than the commonLineThreshold

        $contextStartOffset = $hunkCapture - $this->contextLines < 0
            ? $hunkCapture
            : $this->contextLines
        ;

        // prevent trying to write out more common lines than there are in the diff _and_
        // do not write more than configured through the context lines
        $contextEndOffset = \min($sameCount, $this->contextLines);

        $fromRange -= $sameCount;
        $toRange -= $sameCount;

        $this->writeHunk(
            $diff,
            $hunkCapture - $contextStartOffset,
            $i - $sameCount + $contextEndOffset + 1,
            $fromStart - $contextStartOffset,
            $fromRange + $contextStartOffset + $contextEndOffset,
            $toStart - $contextStartOffset,
            $toRange + $contextStartOffset + $contextEndOffset,
            $output
        );
    }

    private function writeHunk(
        array $diff,
        int $diffStartIndex,
        int $diffEndIndex,
        int $fromStart,
        int $fromRange,
        int $toStart,
        int $toRange,
        $output
    ): void {
        \fwrite($output, '@@ -' . $fromStart);

        if (!$this->collapseRanges || 1 !== $fromRange) {
            \fwrite($output, ',' . $fromRange);
        }

        \fwrite($output, ' +' . $toStart);

        if (!$this->collapseRanges || 1 !== $toRange) {
            \fwrite($output, ',' . $toRange);
        }

        \fwrite($output, " @@\n");

        for ($i = $diffStartIndex; $i < $diffEndIndex; ++$i) {
            if ($diff[$i][1] === Differ::ADDED) {
                $this->changed = true;
                \fwrite($output, '+' . $diff[$i][0]);
            } elseif ($diff[$i][1] === Differ::REMOVED) {
                $this->changed = true;
                \fwrite($output, '-' . $diff[$i][0]);
            } elseif ($diff[$i][1] === Differ::OLD) {
                \fwrite($output, ' ' . $diff[$i][0]);
            } elseif ($diff[$i][1] === Differ::NO_LINE_END_EOF_WARNING) {
                $this->changed = true;
                \fwrite($output, $diff[$i][0]);
            }
            //} elseif ($diff[$i][1] === Differ::DIFF_LINE_END_WARNING) { // custom comment inserted by PHPUnit/diff package
                //  skip
            //} else {
                //  unknown/invalid
            //}
        }
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

final class Line
{
    public const ADDED     = 1;
    public const REMOVED   = 2;
    public const UNCHANGED = 3;

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $content;

    public function __construct(int $type = self::UNCHANGED, string $content = '')
    {
        $this->type    = $type;
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getType(): int
    {
        return $this->type;
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

final class TimeEfficientLongestCommonSubsequenceCalculator implements LongestCommonSubsequenceCalculator
{
    /**
     * {@inheritdoc}
     */
    public function calculate(array $from, array $to): array
    {
        $common     = [];
        $fromLength = \count($from);
        $toLength   = \count($to);
        $width      = $fromLength + 1;
        $matrix     = new \SplFixedArray($width * ($toLength + 1));

        for ($i = 0; $i <= $fromLength; ++$i) {
            $matrix[$i] = 0;
        }

        for ($j = 0; $j <= $toLength; ++$j) {
            $matrix[$j * $width] = 0;
        }

        for ($i = 1; $i <= $fromLength; ++$i) {
            for ($j = 1; $j <= $toLength; ++$j) {
                $o          = ($j * $width) + $i;
                $matrix[$o] = \max(
                    $matrix[$o - 1],
                    $matrix[$o - $width],
                    $from[$i - 1] === $to[$j - 1] ? $matrix[$o - $width - 1] + 1 : 0
                );
            }
        }

        $i = $fromLength;
        $j = $toLength;

        while ($i > 0 && $j > 0) {
            if ($from[$i - 1] === $to[$j - 1]) {
                $common[] = $from[$i - 1];
                --$i;
                --$j;
            } else {
                $o = ($j * $width) + $i;

                if ($matrix[$o - $width] > $matrix[$o - 1]) {
                    --$j;
                } else {
                    --$i;
                }
            }
        }

        return \array_reverse($common);
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

final class Chunk
{
    /**
     * @var int
     */
    private $start;

    /**
     * @var int
     */
    private $startRange;

    /**
     * @var int
     */
    private $end;

    /**
     * @var int
     */
    private $endRange;

    /**
     * @var Line[]
     */
    private $lines;

    public function __construct(int $start = 0, int $startRange = 1, int $end = 0, int $endRange = 1, array $lines = [])
    {
        $this->start      = $start;
        $this->startRange = $startRange;
        $this->end        = $end;
        $this->endRange   = $endRange;
        $this->lines      = $lines;
    }

    public function getStart(): int
    {
        return $this->start;
    }

    public function getStartRange(): int
    {
        return $this->startRange;
    }

    public function getEnd(): int
    {
        return $this->end;
    }

    public function getEndRange(): int
    {
        return $this->endRange;
    }

    /**
     * @return Line[]
     */
    public function getLines(): array
    {
        return $this->lines;
    }

    /**
     * @param Line[] $lines
     */
    public function setLines(array $lines): void
    {
        foreach ($lines as $line) {
            if (!$line instanceof Line) {
                throw new InvalidArgumentException;
            }
        }

        $this->lines = $lines;
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

final class MemoryEfficientLongestCommonSubsequenceCalculator implements LongestCommonSubsequenceCalculator
{
    /**
     * {@inheritdoc}
     */
    public function calculate(array $from, array $to): array
    {
        $cFrom = \count($from);
        $cTo   = \count($to);

        if ($cFrom === 0) {
            return [];
        }

        if ($cFrom === 1) {
            if (\in_array($from[0], $to, true)) {
                return [$from[0]];
            }

            return [];
        }

        $i         = (int) ($cFrom / 2);
        $fromStart = \array_slice($from, 0, $i);
        $fromEnd   = \array_slice($from, $i);
        $llB       = $this->length($fromStart, $to);
        $llE       = $this->length(\array_reverse($fromEnd), \array_reverse($to));
        $jMax      = 0;
        $max       = 0;

        for ($j = 0; $j <= $cTo; $j++) {
            $m = $llB[$j] + $llE[$cTo - $j];

            if ($m >= $max) {
                $max  = $m;
                $jMax = $j;
            }
        }

        $toStart = \array_slice($to, 0, $jMax);
        $toEnd   = \array_slice($to, $jMax);

        return \array_merge(
            $this->calculate($fromStart, $toStart),
            $this->calculate($fromEnd, $toEnd)
        );
    }

    private function length(array $from, array $to): array
    {
        $current = \array_fill(0, \count($to) + 1, 0);
        $cFrom   = \count($from);
        $cTo     = \count($to);

        for ($i = 0; $i < $cFrom; $i++) {
            $prev = $current;

            for ($j = 0; $j < $cTo; $j++) {
                if ($from[$i] === $to[$j]) {
                    $current[$j + 1] = $prev[$j] + 1;
                } else {
                    $current[$j + 1] = \max($current[$j], $prev[$j + 1]);
                }
            }
        }

        return $current;
    }
}
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Diff;

interface LongestCommonSubsequenceCalculator
{
    /**
     * Calculates the longest common subsequence of two arrays.
     *
     * @param array $from
     * @param array $to
     *
     * @return array
     */
    public function calculate(array $from, array $to): array;
}
sebastian/diff

Copyright (c) 2002-2019, Sebastian Bergmann <sebastian@phpunit.de>.
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

 * Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.

 * Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in
   the documentation and/or other materials provided with the
   distribution.

 * Neither the name of Sebastian Bergmann nor the names of his
   contributors may be used to endorse or promote products derived
   from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
"AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
POSSIBILITY OF SUCH DAMAGE.
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\PhptTestCase;
use PHPUnit\Util\Test;
use SebastianBergmann\CodeCoverage\Driver\Driver;
use SebastianBergmann\CodeCoverage\Driver\PHPDBG;
use SebastianBergmann\CodeCoverage\Driver\Xdebug;
use SebastianBergmann\CodeCoverage\Node\Builder;
use SebastianBergmann\CodeCoverage\Node\Directory;
use SebastianBergmann\CodeUnitReverseLookup\Wizard;
use SebastianBergmann\Environment\Runtime;

/**
 * Provides collection functionality for PHP code coverage information.
 */
final class CodeCoverage
{
    /**
     * @var Driver
     */
    private $driver;

    /**
     * @var Filter
     */
    private $filter;

    /**
     * @var Wizard
     */
    private $wizard;

    /**
     * @var bool
     */
    private $cacheTokens = false;

    /**
     * @var bool
     */
    private $checkForUnintentionallyCoveredCode = false;

    /**
     * @var bool
     */
    private $forceCoversAnnotation = false;

    /**
     * @var bool
     */
    private $checkForUnexecutedCoveredCode = false;

    /**
     * @var bool
     */
    private $checkForMissingCoversAnnotation = false;

    /**
     * @var bool
     */
    private $addUncoveredFilesFromWhitelist = true;

    /**
     * @var bool
     */
    private $processUncoveredFilesFromWhitelist = false;

    /**
     * @var bool
     */
    private $ignoreDeprecatedCode = false;

    /**
     * @var PhptTestCase|string|TestCase
     */
    private $currentId;

    /**
     * Code coverage data.
     *
     * @var array
     */
    private $data = [];

    /**
     * @var array
     */
    private $ignoredLines = [];

    /**
     * @var bool
     */
    private $disableIgnoredLines = false;

    /**
     * Test data.
     *
     * @var array
     */
    private $tests = [];

    /**
     * @var string[]
     */
    private $unintentionallyCoveredSubclassesWhitelist = [];

    /**
     * Determine if the data has been initialized or not
     *
     * @var bool
     */
    private $isInitialized = false;

    /**
     * Determine whether we need to check for dead and unused code on each test
     *
     * @var bool
     */
    private $shouldCheckForDeadAndUnused = true;

    /**
     * @var Directory
     */
    private $report;

    /**
     * @throws RuntimeException
     */
    public function __construct(Driver $driver = null, Filter $filter = null)
    {
        if ($filter === null) {
            $filter = new Filter;
        }

        if ($driver === null) {
            $driver = $this->selectDriver($filter);
        }

        $this->driver = $driver;
        $this->filter = $filter;

        $this->wizard = new Wizard;
    }

    /**
     * Returns the code coverage information as a graph of node objects.
     */
    public function getReport(): Directory
    {
        if ($this->report === null) {
            $builder = new Builder;

            $this->report = $builder->build($this);
        }

        return $this->report;
    }

    /**
     * Clears collected code coverage data.
     */
    public function clear(): void
    {
        $this->isInitialized = false;
        $this->currentId     = null;
        $this->data          = [];
        $this->tests         = [];
        $this->report        = null;
    }

    /**
     * Returns the filter object used.
     */
    public function filter(): Filter
    {
        return $this->filter;
    }

    /**
     * Returns the collected code coverage data.
     */
    public function getData(bool $raw = false): array
    {
        if (!$raw && $this->addUncoveredFilesFromWhitelist) {
            $this->addUncoveredFilesFromWhitelist();
        }

        return $this->data;
    }

    /**
     * Sets the coverage data.
     */
    public function setData(array $data): void
    {
        $this->data   = $data;
        $this->report = null;
    }

    /**
     * Returns the test data.
     */
    public function getTests(): array
    {
        return $this->tests;
    }

    /**
     * Sets the test data.
     */
    public function setTests(array $tests): void
    {
        $this->tests = $tests;
    }

    /**
     * Start collection of code coverage information.
     *
     * @param PhptTestCase|string|TestCase $id
     *
     * @throws RuntimeException
     */
    public function start($id, bool $clear = false): void
    {
        if ($clear) {
            $this->clear();
        }

        if ($this->isInitialized === false) {
            $this->initializeData();
        }

        $this->currentId = $id;

        $this->driver->start($this->shouldCheckForDeadAndUnused);
    }

    /**
     * Stop collection of code coverage information.
     *
     * @param array|false $linesToBeCovered
     *
     * @throws MissingCoversAnnotationException
     * @throws CoveredCodeNotExecutedException
     * @throws RuntimeException
     * @throws InvalidArgumentException
     * @throws \ReflectionException
     */
    public function stop(bool $append = true, $linesToBeCovered = [], array $linesToBeUsed = [], bool $ignoreForceCoversAnnotation = false): array
    {
        if (!\is_array($linesToBeCovered) && $linesToBeCovered !== false) {
            throw InvalidArgumentException::create(
                2,
                'array or false'
            );
        }

        $data = $this->driver->stop();
        $this->append($data, null, $append, $linesToBeCovered, $linesToBeUsed, $ignoreForceCoversAnnotation);

        $this->currentId = null;

        return $data;
    }

    /**
     * Appends code coverage data.
     *
     * @param PhptTestCase|string|TestCase $id
     * @param array|false                  $linesToBeCovered
     *
     * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\CodeCoverage\MissingCoversAnnotationException
     * @throws \SebastianBergmann\CodeCoverage\CoveredCodeNotExecutedException
     * @throws \ReflectionException
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws RuntimeException
     */
    public function append(array $data, $id = null, bool $append = true, $linesToBeCovered = [], array $linesToBeUsed = [], bool $ignoreForceCoversAnnotation = false): void
    {
        if ($id === null) {
            $id = $this->currentId;
        }

        if ($id === null) {
            throw new RuntimeException;
        }

        $this->applyWhitelistFilter($data);
        $this->applyIgnoredLinesFilter($data);
        $this->initializeFilesThatAreSeenTheFirstTime($data);

        if (!$append) {
            return;
        }

        if ($id !== 'UNCOVERED_FILES_FROM_WHITELIST') {
            $this->applyCoversAnnotationFilter(
                $data,
                $linesToBeCovered,
                $linesToBeUsed,
                $ignoreForceCoversAnnotation
            );
        }

        if (empty($data)) {
            return;
        }

        $size   = 'unknown';
        $status = -1;

        if ($id instanceof TestCase) {
            $_size = $id->getSize();

            if ($_size === Test::SMALL) {
                $size = 'small';
            } elseif ($_size === Test::MEDIUM) {
                $size = 'medium';
            } elseif ($_size === Test::LARGE) {
                $size = 'large';
            }

            $status = $id->getStatus();
            $id     = \get_class($id) . '::' . $id->getName();
        } elseif ($id instanceof PhptTestCase) {
            $size = 'large';
            $id   = $id->getName();
        }

        $this->tests[$id] = ['size' => $size, 'status' => $status];

        foreach ($data as $file => $lines) {
            if (!$this->filter->isFile($file)) {
                continue;
            }

            foreach ($lines as $k => $v) {
                if ($v === Driver::LINE_EXECUTED) {
                    if (empty($this->data[$file][$k]) || !\in_array($id, $this->data[$file][$k])) {
                        $this->data[$file][$k][] = $id;
                    }
                }
            }
        }

        $this->report = null;
    }

    /**
     * Merges the data from another instance.
     *
     * @param CodeCoverage $that
     */
    public function merge(self $that): void
    {
        $this->filter->setWhitelistedFiles(
            \array_merge($this->filter->getWhitelistedFiles(), $that->filter()->getWhitelistedFiles())
        );

        foreach ($that->data as $file => $lines) {
            if (!isset($this->data[$file])) {
                if (!$this->filter->isFiltered($file)) {
                    $this->data[$file] = $lines;
                }

                continue;
            }

            // we should compare the lines if any of two contains data
            $compareLineNumbers = \array_unique(
                \array_merge(
                    \array_keys($this->data[$file]),
                    \array_keys($that->data[$file])
                )
            );

            foreach ($compareLineNumbers as $line) {
                $thatPriority = $this->getLinePriority($that->data[$file], $line);
                $thisPriority = $this->getLinePriority($this->data[$file], $line);

                if ($thatPriority > $thisPriority) {
                    $this->data[$file][$line] = $that->data[$file][$line];
                } elseif ($thatPriority === $thisPriority && \is_array($this->data[$file][$line])) {
                    $this->data[$file][$line] = \array_unique(
                        \array_merge($this->data[$file][$line], $that->data[$file][$line])
                    );
                }
            }
        }

        $this->tests  = \array_merge($this->tests, $that->getTests());
        $this->report = null;
    }

    public function setCacheTokens(bool $flag): void
    {
        $this->cacheTokens = $flag;
    }

    public function getCacheTokens(): bool
    {
        return $this->cacheTokens;
    }

    public function setCheckForUnintentionallyCoveredCode(bool $flag): void
    {
        $this->checkForUnintentionallyCoveredCode = $flag;
    }

    public function setForceCoversAnnotation(bool $flag): void
    {
        $this->forceCoversAnnotation = $flag;
    }

    public function setCheckForMissingCoversAnnotation(bool $flag): void
    {
        $this->checkForMissingCoversAnnotation = $flag;
    }

    public function setCheckForUnexecutedCoveredCode(bool $flag): void
    {
        $this->checkForUnexecutedCoveredCode = $flag;
    }

    public function setAddUncoveredFilesFromWhitelist(bool $flag): void
    {
        $this->addUncoveredFilesFromWhitelist = $flag;
    }

    public function setProcessUncoveredFilesFromWhitelist(bool $flag): void
    {
        $this->processUncoveredFilesFromWhitelist = $flag;
    }

    public function setDisableIgnoredLines(bool $flag): void
    {
        $this->disableIgnoredLines = $flag;
    }

    public function setIgnoreDeprecatedCode(bool $flag): void
    {
        $this->ignoreDeprecatedCode = $flag;
    }

    public function setUnintentionallyCoveredSubclassesWhitelist(array $whitelist): void
    {
        $this->unintentionallyCoveredSubclassesWhitelist = $whitelist;
    }

    /**
     * Determine the priority for a line
     *
     * 1 = the line is not set
     * 2 = the line has not been tested
     * 3 = the line is dead code
     * 4 = the line has been tested
     *
     * During a merge, a higher number is better.
     *
     * @param array $data
     * @param int   $line
     *
     * @return int
     */
    private function getLinePriority($data, $line)
    {
        if (!\array_key_exists($line, $data)) {
            return 1;
        }

        if (\is_array($data[$line]) && \count($data[$line]) === 0) {
            return 2;
        }

        if ($data[$line] === null) {
            return 3;
        }

        return 4;
    }

    /**
     * Applies the @covers annotation filtering.
     *
     * @param array|false $linesToBeCovered
     *
     * @throws \SebastianBergmann\CodeCoverage\CoveredCodeNotExecutedException
     * @throws \ReflectionException
     * @throws MissingCoversAnnotationException
     * @throws UnintentionallyCoveredCodeException
     */
    private function applyCoversAnnotationFilter(array &$data, $linesToBeCovered, array $linesToBeUsed, bool $ignoreForceCoversAnnotation): void
    {
        if ($linesToBeCovered === false ||
            ($this->forceCoversAnnotation && empty($linesToBeCovered) && !$ignoreForceCoversAnnotation)) {
            if ($this->checkForMissingCoversAnnotation) {
                throw new MissingCoversAnnotationException;
            }

            $data = [];

            return;
        }

        if (empty($linesToBeCovered)) {
            return;
        }

        if ($this->checkForUnintentionallyCoveredCode &&
            (!$this->currentId instanceof TestCase ||
            (!$this->currentId->isMedium() && !$this->currentId->isLarge()))) {
            $this->performUnintentionallyCoveredCodeCheck($data, $linesToBeCovered, $linesToBeUsed);
        }

        if ($this->checkForUnexecutedCoveredCode) {
            $this->performUnexecutedCoveredCodeCheck($data, $linesToBeCovered, $linesToBeUsed);
        }

        $data = \array_intersect_key($data, $linesToBeCovered);

        foreach (\array_keys($data) as $filename) {
            $_linesToBeCovered = \array_flip($linesToBeCovered[$filename]);
            $data[$filename]   = \array_intersect_key($data[$filename], $_linesToBeCovered);
        }
    }

    private function applyWhitelistFilter(array &$data): void
    {
        foreach (\array_keys($data) as $filename) {
            if ($this->filter->isFiltered($filename)) {
                unset($data[$filename]);
            }
        }
    }

    /**
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     */
    private function applyIgnoredLinesFilter(array &$data): void
    {
        foreach (\array_keys($data) as $filename) {
            if (!$this->filter->isFile($filename)) {
                continue;
            }

            foreach ($this->getLinesToBeIgnored($filename) as $line) {
                unset($data[$filename][$line]);
            }
        }
    }

    private function initializeFilesThatAreSeenTheFirstTime(array $data): void
    {
        foreach ($data as $file => $lines) {
            if (!isset($this->data[$file]) && $this->filter->isFile($file)) {
                $this->data[$file] = [];

                foreach ($lines as $k => $v) {
                    $this->data[$file][$k] = $v === -2 ? null : [];
                }
            }
        }
    }

    /**
     * @throws CoveredCodeNotExecutedException
     * @throws InvalidArgumentException
     * @throws MissingCoversAnnotationException
     * @throws RuntimeException
     * @throws UnintentionallyCoveredCodeException
     * @throws \ReflectionException
     */
    private function addUncoveredFilesFromWhitelist(): void
    {
        $data           = [];
        $uncoveredFiles = \array_diff(
            $this->filter->getWhitelist(),
            \array_keys($this->data)
        );

        foreach ($uncoveredFiles as $uncoveredFile) {
            if (!\file_exists($uncoveredFile)) {
                continue;
            }

            $data[$uncoveredFile] = [];

            $lines = \count(\file($uncoveredFile));

            for ($i = 1; $i <= $lines; $i++) {
                $data[$uncoveredFile][$i] = Driver::LINE_NOT_EXECUTED;
            }
        }

        $this->append($data, 'UNCOVERED_FILES_FROM_WHITELIST');
    }

    private function getLinesToBeIgnored(string $fileName): array
    {
        if (isset($this->ignoredLines[$fileName])) {
            return $this->ignoredLines[$fileName];
        }

        try {
            return $this->getLinesToBeIgnoredInner($fileName);
        } catch (\OutOfBoundsException $e) {
            // This can happen with PHP_Token_Stream if the file is syntactically invalid,
            // and probably affects a file that wasn't executed.
            return [];
        }
    }

    private function getLinesToBeIgnoredInner(string $fileName): array
    {
        $this->ignoredLines[$fileName] = [];

        $lines = \file($fileName);

        foreach ($lines as $index => $line) {
            if (!\trim($line)) {
                $this->ignoredLines[$fileName][] = $index + 1;
            }
        }

        if ($this->cacheTokens) {
            $tokens = \PHP_Token_Stream_CachingFactory::get($fileName);
        } else {
            $tokens = new \PHP_Token_Stream($fileName);
        }

        foreach ($tokens->getInterfaces() as $interface) {
            $interfaceStartLine = $interface['startLine'];
            $interfaceEndLine   = $interface['endLine'];

            foreach (\range($interfaceStartLine, $interfaceEndLine) as $line) {
                $this->ignoredLines[$fileName][] = $line;
            }
        }

        foreach (\array_merge($tokens->getClasses(), $tokens->getTraits()) as $classOrTrait) {
            $classOrTraitStartLine = $classOrTrait['startLine'];
            $classOrTraitEndLine   = $classOrTrait['endLine'];

            if (empty($classOrTrait['methods'])) {
                foreach (\range($classOrTraitStartLine, $classOrTraitEndLine) as $line) {
                    $this->ignoredLines[$fileName][] = $line;
                }

                continue;
            }

            $firstMethod          = \array_shift($classOrTrait['methods']);
            $firstMethodStartLine = $firstMethod['startLine'];
            $firstMethodEndLine   = $firstMethod['endLine'];
            $lastMethodEndLine    = $firstMethodEndLine;

            do {
                $lastMethod = \array_pop($classOrTrait['methods']);
            } while ($lastMethod !== null && 0 === \strpos($lastMethod['signature'], 'anonymousFunction'));

            if ($lastMethod !== null) {
                $lastMethodEndLine = $lastMethod['endLine'];
            }

            foreach (\range($classOrTraitStartLine, $firstMethodStartLine) as $line) {
                $this->ignoredLines[$fileName][] = $line;
            }

            foreach (\range($lastMethodEndLine + 1, $classOrTraitEndLine) as $line) {
                $this->ignoredLines[$fileName][] = $line;
            }
        }

        if ($this->disableIgnoredLines) {
            $this->ignoredLines[$fileName] = \array_unique($this->ignoredLines[$fileName]);
            \sort($this->ignoredLines[$fileName]);

            return $this->ignoredLines[$fileName];
        }

        $ignore = false;
        $stop   = false;

        foreach ($tokens->tokens() as $token) {
            switch (\get_class($token)) {
                case \PHP_Token_COMMENT::class:
                case \PHP_Token_DOC_COMMENT::class:
                    $_token = \trim($token);
                    $_line  = \trim($lines[$token->getLine() - 1]);

                    if ($_token === '// @codeCoverageIgnore' ||
                        $_token === '//@codeCoverageIgnore') {
                        $ignore = true;
                        $stop   = true;
                    } elseif ($_token === '// @codeCoverageIgnoreStart' ||
                        $_token === '//@codeCoverageIgnoreStart') {
                        $ignore = true;
                    } elseif ($_token === '// @codeCoverageIgnoreEnd' ||
                        $_token === '//@codeCoverageIgnoreEnd') {
                        $stop = true;
                    }

                    if (!$ignore) {
                        $start = $token->getLine();
                        $end   = $start + \substr_count($token, "\n");

                        // Do not ignore the first line when there is a token
                        // before the comment
                        if (0 !== \strpos($_token, $_line)) {
                            $start++;
                        }

                        for ($i = $start; $i < $end; $i++) {
                            $this->ignoredLines[$fileName][] = $i;
                        }

                        // A DOC_COMMENT token or a COMMENT token starting with "/*"
                        // does not contain the final \n character in its text
                        if (isset($lines[$i - 1]) && 0 === \strpos($_token, '/*') && '*/' === \substr(\trim($lines[$i - 1]), -2)) {
                            $this->ignoredLines[$fileName][] = $i;
                        }
                    }

                    break;

                case \PHP_Token_INTERFACE::class:
                case \PHP_Token_TRAIT::class:
                case \PHP_Token_CLASS::class:
                case \PHP_Token_FUNCTION::class:
                    /* @var \PHP_Token_Interface $token */

                    $docblock = $token->getDocblock();

                    $this->ignoredLines[$fileName][] = $token->getLine();

                    if (\strpos($docblock, '@codeCoverageIgnore') || ($this->ignoreDeprecatedCode && \strpos($docblock, '@deprecated'))) {
                        $endLine = $token->getEndLine();

                        for ($i = $token->getLine(); $i <= $endLine; $i++) {
                            $this->ignoredLines[$fileName][] = $i;
                        }
                    }

                    break;

                /* @noinspection PhpMissingBreakStatementInspection */
                case \PHP_Token_NAMESPACE::class:
                    $this->ignoredLines[$fileName][] = $token->getEndLine();

                // Intentional fallthrough
                case \PHP_Token_DECLARE::class:
                case \PHP_Token_OPEN_TAG::class:
                case \PHP_Token_CLOSE_TAG::class:
                case \PHP_Token_USE::class:
                    $this->ignoredLines[$fileName][] = $token->getLine();

                    break;
            }

            if ($ignore) {
                $this->ignoredLines[$fileName][] = $token->getLine();

                if ($stop) {
                    $ignore = false;
                    $stop   = false;
                }
            }
        }

        $this->ignoredLines[$fileName][] = \count($lines) + 1;

        $this->ignoredLines[$fileName] = \array_unique(
            $this->ignoredLines[$fileName]
        );

        $this->ignoredLines[$fileName] = \array_unique($this->ignoredLines[$fileName]);
        \sort($this->ignoredLines[$fileName]);

        return $this->ignoredLines[$fileName];
    }

    /**
     * @throws \ReflectionException
     * @throws UnintentionallyCoveredCodeException
     */
    private function performUnintentionallyCoveredCodeCheck(array &$data, array $linesToBeCovered, array $linesToBeUsed): void
    {
        $allowedLines = $this->getAllowedLines(
            $linesToBeCovered,
            $linesToBeUsed
        );

        $unintentionallyCoveredUnits = [];

        foreach ($data as $file => $_data) {
            foreach ($_data as $line => $flag) {
                if ($flag === 1 && !isset($allowedLines[$file][$line])) {
                    $unintentionallyCoveredUnits[] = $this->wizard->lookup($file, $line);
                }
            }
        }

        $unintentionallyCoveredUnits = $this->processUnintentionallyCoveredUnits($unintentionallyCoveredUnits);

        if (!empty($unintentionallyCoveredUnits)) {
            throw new UnintentionallyCoveredCodeException(
                $unintentionallyCoveredUnits
            );
        }
    }

    /**
     * @throws CoveredCodeNotExecutedException
     */
    private function performUnexecutedCoveredCodeCheck(array &$data, array $linesToBeCovered, array $linesToBeUsed): void
    {
        $executedCodeUnits = $this->coverageToCodeUnits($data);
        $message           = '';

        foreach ($this->linesToCodeUnits($linesToBeCovered) as $codeUnit) {
            if (!\in_array($codeUnit, $executedCodeUnits)) {
                $message .= \sprintf(
                    '- %s is expected to be executed (@covers) but was not executed' . "\n",
                    $codeUnit
                );
            }
        }

        foreach ($this->linesToCodeUnits($linesToBeUsed) as $codeUnit) {
            if (!\in_array($codeUnit, $executedCodeUnits)) {
                $message .= \sprintf(
                    '- %s is expected to be executed (@uses) but was not executed' . "\n",
                    $codeUnit
                );
            }
        }

        if (!empty($message)) {
            throw new CoveredCodeNotExecutedException($message);
        }
    }

    private function getAllowedLines(array $linesToBeCovered, array $linesToBeUsed): array
    {
        $allowedLines = [];

        foreach (\array_keys($linesToBeCovered) as $file) {
            if (!isset($allowedLines[$file])) {
                $allowedLines[$file] = [];
            }

            $allowedLines[$file] = \array_merge(
                $allowedLines[$file],
                $linesToBeCovered[$file]
            );
        }

        foreach (\array_keys($linesToBeUsed) as $file) {
            if (!isset($allowedLines[$file])) {
                $allowedLines[$file] = [];
            }

            $allowedLines[$file] = \array_merge(
                $allowedLines[$file],
                $linesToBeUsed[$file]
            );
        }

        foreach (\array_keys($allowedLines) as $file) {
            $allowedLines[$file] = \array_flip(
                \array_unique($allowedLines[$file])
            );
        }

        return $allowedLines;
    }

    /**
     * @throws RuntimeException
     */
    private function selectDriver(Filter $filter): Driver
    {
        $runtime = new Runtime;

        if (!$runtime->canCollectCodeCoverage()) {
            throw new RuntimeException('No code coverage driver available');
        }

        if ($runtime->isPHPDBG()) {
            return new PHPDBG;
        }

        if ($runtime->hasXdebug()) {
            return new Xdebug($filter);
        }

        throw new RuntimeException('No code coverage driver available');
    }

    private function processUnintentionallyCoveredUnits(array $unintentionallyCoveredUnits): array
    {
        $unintentionallyCoveredUnits = \array_unique($unintentionallyCoveredUnits);
        \sort($unintentionallyCoveredUnits);

        foreach (\array_keys($unintentionallyCoveredUnits) as $k => $v) {
            $unit = \explode('::', $unintentionallyCoveredUnits[$k]);

            if (\count($unit) !== 2) {
                continue;
            }

            $class = new \ReflectionClass($unit[0]);

            foreach ($this->unintentionallyCoveredSubclassesWhitelist as $whitelisted) {
                if ($class->isSubclassOf($whitelisted)) {
                    unset($unintentionallyCoveredUnits[$k]);

                    break;
                }
            }
        }

        return \array_values($unintentionallyCoveredUnits);
    }

    /**
     * @throws CoveredCodeNotExecutedException
     * @throws InvalidArgumentException
     * @throws MissingCoversAnnotationException
     * @throws RuntimeException
     * @throws UnintentionallyCoveredCodeException
     * @throws \ReflectionException
     */
    private function initializeData(): void
    {
        $this->isInitialized = true;

        if ($this->processUncoveredFilesFromWhitelist) {
            $this->shouldCheckForDeadAndUnused = false;

            $this->driver->start();

            foreach ($this->filter->getWhitelist() as $file) {
                if ($this->filter->isFile($file)) {
                    include_once $file;
                }
            }

            $data     = [];
            $coverage = $this->driver->stop();

            foreach ($coverage as $file => $fileCoverage) {
                if ($this->filter->isFiltered($file)) {
                    continue;
                }

                foreach (\array_keys($fileCoverage) as $key) {
                    if ($fileCoverage[$key] === Driver::LINE_EXECUTED) {
                        $fileCoverage[$key] = Driver::LINE_NOT_EXECUTED;
                    }
                }

                $data[$file] = $fileCoverage;
            }

            $this->append($data, 'UNCOVERED_FILES_FROM_WHITELIST');
        }
    }

    private function coverageToCodeUnits(array $data): array
    {
        $codeUnits = [];

        foreach ($data as $filename => $lines) {
            foreach ($lines as $line => $flag) {
                if ($flag === 1) {
                    $codeUnits[] = $this->wizard->lookup($filename, $line);
                }
            }
        }

        return \array_unique($codeUnits);
    }

    private function linesToCodeUnits(array $data): array
    {
        $codeUnits = [];

        foreach ($data as $filename => $lines) {
            foreach ($lines as $line) {
                $codeUnits[] = $this->wizard->lookup($filename, $line);
            }
        }

        return \array_unique($codeUnits);
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

use SebastianBergmann\Version as VersionId;

final class Version
{
    /**
     * @var string
     */
    private static $version;

    public static function id(): string
    {
        if (self::$version === null) {
            $version       = new VersionId('6.1.4', \dirname(__DIR__));
            self::$version = $version->getVersion();
        }

        return self::$version;
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

/**
 * Utility methods.
 */
final class Util
{
    /**
     * @return float|int|string
     */
    public static function percent(float $a, float $b, bool $asString = false, bool $fixedWidth = false)
    {
        if ($asString && $b == 0) {
            return '';
        }

        $percent = 100;

        if ($b > 0) {
            $percent = ($a / $b) * 100;
        }

        if ($asString) {
            $format = $fixedWidth ? '%6.2F%%' : '%01.2F%%';

            return \sprintf($format, $percent);
        }

        return $percent;
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Node;

use SebastianBergmann\CodeCoverage\Util;

/**
 * Base class for nodes in the code coverage information tree.
 */
abstract class AbstractNode implements \Countable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $path;

    /**
     * @var array
     */
    private $pathArray;

    /**
     * @var AbstractNode
     */
    private $parent;

    /**
     * @var string
     */
    private $id;

    public function __construct(string $name, self $parent = null)
    {
        if (\substr($name, -1) == \DIRECTORY_SEPARATOR) {
            $name = \substr($name, 0, -1);
        }

        $this->name   = $name;
        $this->parent = $parent;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        if ($this->id === null) {
            $parent = $this->getParent();

            if ($parent === null) {
                $this->id = 'index';
            } else {
                $parentId = $parent->getId();

                if ($parentId === 'index') {
                    $this->id = \str_replace(':', '_', $this->name);
                } else {
                    $this->id = $parentId . '/' . $this->name;
                }
            }
        }

        return $this->id;
    }

    public function getPath(): string
    {
        if ($this->path === null) {
            if ($this->parent === null || $this->parent->getPath() === null || $this->parent->getPath() === false) {
                $this->path = $this->name;
            } else {
                $this->path = $this->parent->getPath() . \DIRECTORY_SEPARATOR . $this->name;
            }
        }

        return $this->path;
    }

    public function getPathAsArray(): array
    {
        if ($this->pathArray === null) {
            if ($this->parent === null) {
                $this->pathArray = [];
            } else {
                $this->pathArray = $this->parent->getPathAsArray();
            }

            $this->pathArray[] = $this;
        }

        return $this->pathArray;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    /**
     * Returns the percentage of classes that has been tested.
     *
     * @return int|string
     */
    public function getTestedClassesPercent(bool $asString = true)
    {
        return Util::percent(
            $this->getNumTestedClasses(),
            $this->getNumClasses(),
            $asString
        );
    }

    /**
     * Returns the percentage of traits that has been tested.
     *
     * @return int|string
     */
    public function getTestedTraitsPercent(bool $asString = true)
    {
        return Util::percent(
            $this->getNumTestedTraits(),
            $this->getNumTraits(),
            $asString
        );
    }

    /**
     * Returns the percentage of classes and traits that has been tested.
     *
     * @return int|string
     */
    public function getTestedClassesAndTraitsPercent(bool $asString = true)
    {
        return Util::percent(
            $this->getNumTestedClassesAndTraits(),
            $this->getNumClassesAndTraits(),
            $asString
        );
    }

    /**
     * Returns the percentage of functions that has been tested.
     *
     * @return int|string
     */
    public function getTestedFunctionsPercent(bool $asString = true)
    {
        return Util::percent(
            $this->getNumTestedFunctions(),
            $this->getNumFunctions(),
            $asString
        );
    }

    /**
     * Returns the percentage of methods that has been tested.
     *
     * @return int|string
     */
    public function getTestedMethodsPercent(bool $asString = true)
    {
        return Util::percent(
            $this->getNumTestedMethods(),
            $this->getNumMethods(),
            $asString
        );
    }

    /**
     * Returns the percentage of functions and methods that has been tested.
     *
     * @return int|string
     */
    public function getTestedFunctionsAndMethodsPercent(bool $asString = true)
    {
        return Util::percent(
            $this->getNumTestedFunctionsAndMethods(),
            $this->getNumFunctionsAndMethods(),
            $asString
        );
    }

    /**
     * Returns the percentage of executed lines.
     *
     * @return int|string
     */
    public function getLineExecutedPercent(bool $asString = true)
    {
        return Util::percent(
            $this->getNumExecutedLines(),
            $this->getNumExecutableLines(),
            $asString
        );
    }

    /**
     * Returns the number of classes and traits.
     */
    public function getNumClassesAndTraits(): int
    {
        return $this->getNumClasses() + $this->getNumTraits();
    }

    /**
     * Returns the number of tested classes and traits.
     */
    public function getNumTestedClassesAndTraits(): int
    {
        return $this->getNumTestedClasses() + $this->getNumTestedTraits();
    }

    /**
     * Returns the classes and traits of this node.
     */
    public function getClassesAndTraits(): array
    {
        return \array_merge($this->getClasses(), $this->getTraits());
    }

    /**
     * Returns the number of functions and methods.
     */
    public function getNumFunctionsAndMethods(): int
    {
        return $this->getNumFunctions() + $this->getNumMethods();
    }

    /**
     * Returns the number of tested functions and methods.
     */
    public function getNumTestedFunctionsAndMethods(): int
    {
        return $this->getNumTestedFunctions() + $this->getNumTestedMethods();
    }

    /**
     * Returns the functions and methods of this node.
     */
    public function getFunctionsAndMethods(): array
    {
        return \array_merge($this->getFunctions(), $this->getMethods());
    }

    /**
     * Returns the classes of this node.
     */
    abstract public function getClasses(): array;

    /**
     * Returns the traits of this node.
     */
    abstract public function getTraits(): array;

    /**
     * Returns the functions of this node.
     */
    abstract public function getFunctions(): array;

    /**
     * Returns the LOC/CLOC/NCLOC of this node.
     */
    abstract public function getLinesOfCode(): array;

    /**
     * Returns the number of executable lines.
     */
    abstract public function getNumExecutableLines(): int;

    /**
     * Returns the number of executed lines.
     */
    abstract public function getNumExecutedLines(): int;

    /**
     * Returns the number of classes.
     */
    abstract public function getNumClasses(): int;

    /**
     * Returns the number of tested classes.
     */
    abstract public function getNumTestedClasses(): int;

    /**
     * Returns the number of traits.
     */
    abstract public function getNumTraits(): int;

    /**
     * Returns the number of tested traits.
     */
    abstract public function getNumTestedTraits(): int;

    /**
     * Returns the number of methods.
     */
    abstract public function getNumMethods(): int;

    /**
     * Returns the number of tested methods.
     */
    abstract public function getNumTestedMethods(): int;

    /**
     * Returns the number of functions.
     */
    abstract public function getNumFunctions(): int;

    /**
     * Returns the number of tested functions.
     */
    abstract public function getNumTestedFunctions(): int;
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Node;

/**
 * Recursive iterator for node object graphs.
 */
final class Iterator implements \RecursiveIterator
{
    /**
     * @var int
     */
    private $position;

    /**
     * @var AbstractNode[]
     */
    private $nodes;

    public function __construct(Directory $node)
    {
        $this->nodes = $node->getChildNodes();
    }

    /**
     * Rewinds the Iterator to the first element.
     */
    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * Checks if there is a current element after calls to rewind() or next().
     */
    public function valid(): bool
    {
        return $this->position < \count($this->nodes);
    }

    /**
     * Returns the key of the current element.
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * Returns the current element.
     */
    public function current(): AbstractNode
    {
        return $this->valid() ? $this->nodes[$this->position] : null;
    }

    /**
     * Moves forward to next element.
     */
    public function next(): void
    {
        $this->position++;
    }

    /**
     * Returns the sub iterator for the current element.
     *
     * @return Iterator
     */
    public function getChildren(): self
    {
        return new self($this->nodes[$this->position]);
    }

    /**
     * Checks whether the current element has children.
     */
    public function hasChildren(): bool
    {
        return $this->nodes[$this->position] instanceof Directory;
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Node;

use SebastianBergmann\CodeCoverage\CodeCoverage;

final class Builder
{
    public function build(CodeCoverage $coverage): Directory
    {
        $files      = $coverage->getData();
        $commonPath = $this->reducePaths($files);
        $root       = new Directory(
            $commonPath,
            null
        );

        $this->addItems(
            $root,
            $this->buildDirectoryStructure($files),
            $coverage->getTests(),
            $coverage->getCacheTokens()
        );

        return $root;
    }

    private function addItems(Directory $root, array $items, array $tests, bool $cacheTokens): void
    {
        foreach ($items as $key => $value) {
            if (\substr($key, -2) == '/f') {
                $key = \substr($key, 0, -2);

                if (\file_exists($root->getPath() . \DIRECTORY_SEPARATOR . $key)) {
                    $root->addFile($key, $value, $tests, $cacheTokens);
                }
            } else {
                $child = $root->addDirectory($key);
                $this->addItems($child, $value, $tests, $cacheTokens);
            }
        }
    }

    /**
     * Builds an array representation of the directory structure.
     *
     * For instance,
     *
     * <code>
     * Array
     * (
     *     [Money.php] => Array
     *         (
     *             ...
     *         )
     *
     *     [MoneyBag.php] => Array
     *         (
     *             ...
     *         )
     * )
     * </code>
     *
     * is transformed into
     *
     * <code>
     * Array
     * (
     *     [.] => Array
     *         (
     *             [Money.php] => Array
     *                 (
     *                     ...
     *                 )
     *
     *             [MoneyBag.php] => Array
     *                 (
     *                     ...
     *                 )
     *         )
     * )
     * </code>
     */
    private function buildDirectoryStructure(array $files): array
    {
        $result = [];

        foreach ($files as $path => $file) {
            $path    = \explode(\DIRECTORY_SEPARATOR, $path);
            $pointer = &$result;
            $max     = \count($path);

            for ($i = 0; $i < $max; $i++) {
                $type = '';

                if ($i == ($max - 1)) {
                    $type = '/f';
                }

                $pointer = &$pointer[$path[$i] . $type];
            }

            $pointer = $file;
        }

        return $result;
    }

    /**
     * Reduces the paths by cutting the longest common start path.
     *
     * For instance,
     *
     * <code>
     * Array
     * (
     *     [/home/sb/Money/Money.php] => Array
     *         (
     *             ...
     *         )
     *
     *     [/home/sb/Money/MoneyBag.php] => Array
     *         (
     *             ...
     *         )
     * )
     * </code>
     *
     * is reduced to
     *
     * <code>
     * Array
     * (
     *     [Money.php] => Array
     *         (
     *             ...
     *         )
     *
     *     [MoneyBag.php] => Array
     *         (
     *             ...
     *         )
     * )
     * </code>
     */
    private function reducePaths(array &$files): string
    {
        if (empty($files)) {
            return '.';
        }

        $commonPath = '';
        $paths      = \array_keys($files);

        if (\count($files) === 1) {
            $commonPath                  = \dirname($paths[0]) . \DIRECTORY_SEPARATOR;
            $files[\basename($paths[0])] = $files[$paths[0]];

            unset($files[$paths[0]]);

            return $commonPath;
        }

        $max = \count($paths);

        for ($i = 0; $i < $max; $i++) {
            // strip phar:// prefixes
            if (\strpos($paths[$i], 'phar://') === 0) {
                $paths[$i] = \substr($paths[$i], 7);
                $paths[$i] = \str_replace('/', \DIRECTORY_SEPARATOR, $paths[$i]);
            }
            $paths[$i] = \explode(\DIRECTORY_SEPARATOR, $paths[$i]);

            if (empty($paths[$i][0])) {
                $paths[$i][0] = \DIRECTORY_SEPARATOR;
            }
        }

        $done = false;
        $max  = \count($paths);

        while (!$done) {
            for ($i = 0; $i < $max - 1; $i++) {
                if (!isset($paths[$i][0]) ||
                    !isset($paths[$i + 1][0]) ||
                    $paths[$i][0] != $paths[$i + 1][0]) {
                    $done = true;

                    break;
                }
            }

            if (!$done) {
                $commonPath .= $paths[0][0];

                if ($paths[0][0] != \DIRECTORY_SEPARATOR) {
                    $commonPath .= \DIRECTORY_SEPARATOR;
                }

                for ($i = 0; $i < $max; $i++) {
                    \array_shift($paths[$i]);
                }
            }
        }

        $original = \array_keys($files);
        $max      = \count($original);

        for ($i = 0; $i < $max; $i++) {
            $files[\implode(\DIRECTORY_SEPARATOR, $paths[$i])] = $files[$original[$i]];
            unset($files[$original[$i]]);
        }

        \ksort($files);

        return \substr($commonPath, 0, -1);
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Node;

use SebastianBergmann\CodeCoverage\InvalidArgumentException;

/**
 * Represents a directory in the code coverage information tree.
 */
final class Directory extends AbstractNode implements \IteratorAggregate
{
    /**
     * @var AbstractNode[]
     */
    private $children = [];

    /**
     * @var Directory[]
     */
    private $directories = [];

    /**
     * @var File[]
     */
    private $files = [];

    /**
     * @var array
     */
    private $classes;

    /**
     * @var array
     */
    private $traits;

    /**
     * @var array
     */
    private $functions;

    /**
     * @var array
     */
    private $linesOfCode;

    /**
     * @var int
     */
    private $numFiles = -1;

    /**
     * @var int
     */
    private $numExecutableLines = -1;

    /**
     * @var int
     */
    private $numExecutedLines = -1;

    /**
     * @var int
     */
    private $numClasses = -1;

    /**
     * @var int
     */
    private $numTestedClasses = -1;

    /**
     * @var int
     */
    private $numTraits = -1;

    /**
     * @var int
     */
    private $numTestedTraits = -1;

    /**
     * @var int
     */
    private $numMethods = -1;

    /**
     * @var int
     */
    private $numTestedMethods = -1;

    /**
     * @var int
     */
    private $numFunctions = -1;

    /**
     * @var int
     */
    private $numTestedFunctions = -1;

    /**
     * Returns the number of files in/under this node.
     */
    public function count(): int
    {
        if ($this->numFiles === -1) {
            $this->numFiles = 0;

            foreach ($this->children as $child) {
                $this->numFiles += \count($child);
            }
        }

        return $this->numFiles;
    }

    /**
     * Returns an iterator for this node.
     */
    public function getIterator(): \RecursiveIteratorIterator
    {
        return new \RecursiveIteratorIterator(
            new Iterator($this),
            \RecursiveIteratorIterator::SELF_FIRST
        );
    }

    /**
     * Adds a new directory.
     */
    public function addDirectory(string $name): self
    {
        $directory = new self($name, $this);

        $this->children[]    = $directory;
        $this->directories[] = &$this->children[\count($this->children) - 1];

        return $directory;
    }

    /**
     * Adds a new file.
     *
     * @throws InvalidArgumentException
     */
    public function addFile(string $name, array $coverageData, array $testData, bool $cacheTokens): File
    {
        $file = new File($name, $this, $coverageData, $testData, $cacheTokens);

        $this->children[] = $file;
        $this->files[]    = &$this->children[\count($this->children) - 1];

        $this->numExecutableLines = -1;
        $this->numExecutedLines   = -1;

        return $file;
    }

    /**
     * Returns the directories in this directory.
     */
    public function getDirectories(): array
    {
        return $this->directories;
    }

    /**
     * Returns the files in this directory.
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * Returns the child nodes of this node.
     */
    public function getChildNodes(): array
    {
        return $this->children;
    }

    /**
     * Returns the classes of this node.
     */
    public function getClasses(): array
    {
        if ($this->classes === null) {
            $this->classes = [];

            foreach ($this->children as $child) {
                $this->classes = \array_merge(
                    $this->classes,
                    $child->getClasses()
                );
            }
        }

        return $this->classes;
    }

    /**
     * Returns the traits of this node.
     */
    public function getTraits(): array
    {
        if ($this->traits === null) {
            $this->traits = [];

            foreach ($this->children as $child) {
                $this->traits = \array_merge(
                    $this->traits,
                    $child->getTraits()
                );
            }
        }

        return $this->traits;
    }

    /**
     * Returns the functions of this node.
     */
    public function getFunctions(): array
    {
        if ($this->functions === null) {
            $this->functions = [];

            foreach ($this->children as $child) {
                $this->functions = \array_merge(
                    $this->functions,
                    $child->getFunctions()
                );
            }
        }

        return $this->functions;
    }

    /**
     * Returns the LOC/CLOC/NCLOC of this node.
     */
    public function getLinesOfCode(): array
    {
        if ($this->linesOfCode === null) {
            $this->linesOfCode = ['loc' => 0, 'cloc' => 0, 'ncloc' => 0];

            foreach ($this->children as $child) {
                $linesOfCode = $child->getLinesOfCode();

                $this->linesOfCode['loc'] += $linesOfCode['loc'];
                $this->linesOfCode['cloc'] += $linesOfCode['cloc'];
                $this->linesOfCode['ncloc'] += $linesOfCode['ncloc'];
            }
        }

        return $this->linesOfCode;
    }

    /**
     * Returns the number of executable lines.
     */
    public function getNumExecutableLines(): int
    {
        if ($this->numExecutableLines === -1) {
            $this->numExecutableLines = 0;

            foreach ($this->children as $child) {
                $this->numExecutableLines += $child->getNumExecutableLines();
            }
        }

        return $this->numExecutableLines;
    }

    /**
     * Returns the number of executed lines.
     */
    public function getNumExecutedLines(): int
    {
        if ($this->numExecutedLines === -1) {
            $this->numExecutedLines = 0;

            foreach ($this->children as $child) {
                $this->numExecutedLines += $child->getNumExecutedLines();
            }
        }

        return $this->numExecutedLines;
    }

    /**
     * Returns the number of classes.
     */
    public function getNumClasses(): int
    {
        if ($this->numClasses === -1) {
            $this->numClasses = 0;

            foreach ($this->children as $child) {
                $this->numClasses += $child->getNumClasses();
            }
        }

        return $this->numClasses;
    }

    /**
     * Returns the number of tested classes.
     */
    public function getNumTestedClasses(): int
    {
        if ($this->numTestedClasses === -1) {
            $this->numTestedClasses = 0;

            foreach ($this->children as $child) {
                $this->numTestedClasses += $child->getNumTestedClasses();
            }
        }

        return $this->numTestedClasses;
    }

    /**
     * Returns the number of traits.
     */
    public function getNumTraits(): int
    {
        if ($this->numTraits === -1) {
            $this->numTraits = 0;

            foreach ($this->children as $child) {
                $this->numTraits += $child->getNumTraits();
            }
        }

        return $this->numTraits;
    }

    /**
     * Returns the number of tested traits.
     */
    public function getNumTestedTraits(): int
    {
        if ($this->numTestedTraits === -1) {
            $this->numTestedTraits = 0;

            foreach ($this->children as $child) {
                $this->numTestedTraits += $child->getNumTestedTraits();
            }
        }

        return $this->numTestedTraits;
    }

    /**
     * Returns the number of methods.
     */
    public function getNumMethods(): int
    {
        if ($this->numMethods === -1) {
            $this->numMethods = 0;

            foreach ($this->children as $child) {
                $this->numMethods += $child->getNumMethods();
            }
        }

        return $this->numMethods;
    }

    /**
     * Returns the number of tested methods.
     */
    public function getNumTestedMethods(): int
    {
        if ($this->numTestedMethods === -1) {
            $this->numTestedMethods = 0;

            foreach ($this->children as $child) {
                $this->numTestedMethods += $child->getNumTestedMethods();
            }
        }

        return $this->numTestedMethods;
    }

    /**
     * Returns the number of functions.
     */
    public function getNumFunctions(): int
    {
        if ($this->numFunctions === -1) {
            $this->numFunctions = 0;

            foreach ($this->children as $child) {
                $this->numFunctions += $child->getNumFunctions();
            }
        }

        return $this->numFunctions;
    }

    /**
     * Returns the number of tested functions.
     */
    public function getNumTestedFunctions(): int
    {
        if ($this->numTestedFunctions === -1) {
            $this->numTestedFunctions = 0;

            foreach ($this->children as $child) {
                $this->numTestedFunctions += $child->getNumTestedFunctions();
            }
        }

        return $this->numTestedFunctions;
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Node;

/**
 * Represents a file in the code coverage information tree.
 */
final class File extends AbstractNode
{
    /**
     * @var array
     */
    private $coverageData;

    /**
     * @var array
     */
    private $testData;

    /**
     * @var int
     */
    private $numExecutableLines = 0;

    /**
     * @var int
     */
    private $numExecutedLines = 0;

    /**
     * @var array
     */
    private $classes = [];

    /**
     * @var array
     */
    private $traits = [];

    /**
     * @var array
     */
    private $functions = [];

    /**
     * @var array
     */
    private $linesOfCode = [];

    /**
     * @var int
     */
    private $numClasses;

    /**
     * @var int
     */
    private $numTestedClasses = 0;

    /**
     * @var int
     */
    private $numTraits;

    /**
     * @var int
     */
    private $numTestedTraits = 0;

    /**
     * @var int
     */
    private $numMethods;

    /**
     * @var int
     */
    private $numTestedMethods;

    /**
     * @var int
     */
    private $numTestedFunctions;

    /**
     * @var bool
     */
    private $cacheTokens;

    /**
     * @var array
     */
    private $codeUnitsByLine = [];

    public function __construct(string $name, AbstractNode $parent, array $coverageData, array $testData, bool $cacheTokens)
    {
        parent::__construct($name, $parent);

        $this->coverageData = $coverageData;
        $this->testData     = $testData;
        $this->cacheTokens  = $cacheTokens;

        $this->calculateStatistics();
    }

    /**
     * Returns the number of files in/under this node.
     */
    public function count(): int
    {
        return 1;
    }

    /**
     * Returns the code coverage data of this node.
     */
    public function getCoverageData(): array
    {
        return $this->coverageData;
    }

    /**
     * Returns the test data of this node.
     */
    public function getTestData(): array
    {
        return $this->testData;
    }

    /**
     * Returns the classes of this node.
     */
    public function getClasses(): array
    {
        return $this->classes;
    }

    /**
     * Returns the traits of this node.
     */
    public function getTraits(): array
    {
        return $this->traits;
    }

    /**
     * Returns the functions of this node.
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }

    /**
     * Returns the LOC/CLOC/NCLOC of this node.
     */
    public function getLinesOfCode(): array
    {
        return $this->linesOfCode;
    }

    /**
     * Returns the number of executable lines.
     */
    public function getNumExecutableLines(): int
    {
        return $this->numExecutableLines;
    }

    /**
     * Returns the number of executed lines.
     */
    public function getNumExecutedLines(): int
    {
        return $this->numExecutedLines;
    }

    /**
     * Returns the number of classes.
     */
    public function getNumClasses(): int
    {
        if ($this->numClasses === null) {
            $this->numClasses = 0;

            foreach ($this->classes as $class) {
                foreach ($class['methods'] as $method) {
                    if ($method['executableLines'] > 0) {
                        $this->numClasses++;

                        continue 2;
                    }
                }
            }
        }

        return $this->numClasses;
    }

    /**
     * Returns the number of tested classes.
     */
    public function getNumTestedClasses(): int
    {
        return $this->numTestedClasses;
    }

    /**
     * Returns the number of traits.
     */
    public function getNumTraits(): int
    {
        if ($this->numTraits === null) {
            $this->numTraits = 0;

            foreach ($this->traits as $trait) {
                foreach ($trait['methods'] as $method) {
                    if ($method['executableLines'] > 0) {
                        $this->numTraits++;

                        continue 2;
                    }
                }
            }
        }

        return $this->numTraits;
    }

    /**
     * Returns the number of tested traits.
     */
    public function getNumTestedTraits(): int
    {
        return $this->numTestedTraits;
    }

    /**
     * Returns the number of methods.
     */
    public function getNumMethods(): int
    {
        if ($this->numMethods === null) {
            $this->numMethods = 0;

            foreach ($this->classes as $class) {
                foreach ($class['methods'] as $method) {
                    if ($method['executableLines'] > 0) {
                        $this->numMethods++;
                    }
                }
            }

            foreach ($this->traits as $trait) {
                foreach ($trait['methods'] as $method) {
                    if ($method['executableLines'] > 0) {
                        $this->numMethods++;
                    }
                }
            }
        }

        return $this->numMethods;
    }

    /**
     * Returns the number of tested methods.
     */
    public function getNumTestedMethods(): int
    {
        if ($this->numTestedMethods === null) {
            $this->numTestedMethods = 0;

            foreach ($this->classes as $class) {
                foreach ($class['methods'] as $method) {
                    if ($method['executableLines'] > 0 &&
                        $method['coverage'] === 100) {
                        $this->numTestedMethods++;
                    }
                }
            }

            foreach ($this->traits as $trait) {
                foreach ($trait['methods'] as $method) {
                    if ($method['executableLines'] > 0 &&
                        $method['coverage'] === 100) {
                        $this->numTestedMethods++;
                    }
                }
            }
        }

        return $this->numTestedMethods;
    }

    /**
     * Returns the number of functions.
     */
    public function getNumFunctions(): int
    {
        return \count($this->functions);
    }

    /**
     * Returns the number of tested functions.
     */
    public function getNumTestedFunctions(): int
    {
        if ($this->numTestedFunctions === null) {
            $this->numTestedFunctions = 0;

            foreach ($this->functions as $function) {
                if ($function['executableLines'] > 0 &&
                    $function['coverage'] === 100) {
                    $this->numTestedFunctions++;
                }
            }
        }

        return $this->numTestedFunctions;
    }

    private function calculateStatistics(): void
    {
        if ($this->cacheTokens) {
            $tokens = \PHP_Token_Stream_CachingFactory::get($this->getPath());
        } else {
            $tokens = new \PHP_Token_Stream($this->getPath());
        }

        $this->linesOfCode = $tokens->getLinesOfCode();

        foreach (\range(1, $this->linesOfCode['loc']) as $lineNumber) {
            $this->codeUnitsByLine[$lineNumber] = [];
        }

        try {
            $this->processClasses($tokens);
            $this->processTraits($tokens);
            $this->processFunctions($tokens);
        } catch (\OutOfBoundsException $e) {
            // This can happen with PHP_Token_Stream if the file is syntactically invalid,
            // and probably affects a file that wasn't executed.
        }
        unset($tokens);

        foreach (\range(1, $this->linesOfCode['loc']) as $lineNumber) {
            if (isset($this->coverageData[$lineNumber])) {
                foreach ($this->codeUnitsByLine[$lineNumber] as &$codeUnit) {
                    $codeUnit['executableLines']++;
                }

                unset($codeUnit);

                $this->numExecutableLines++;

                if (\count($this->coverageData[$lineNumber]) > 0) {
                    foreach ($this->codeUnitsByLine[$lineNumber] as &$codeUnit) {
                        $codeUnit['executedLines']++;
                    }

                    unset($codeUnit);

                    $this->numExecutedLines++;
                }
            }
        }

        foreach ($this->traits as &$trait) {
            foreach ($trait['methods'] as &$method) {
                if ($method['executableLines'] > 0) {
                    $method['coverage'] = ($method['executedLines'] /
                            $method['executableLines']) * 100;
                } else {
                    $method['coverage'] = 100;
                }

                $method['crap'] = $this->crap(
                    $method['ccn'],
                    $method['coverage']
                );

                $trait['ccn'] += $method['ccn'];
            }

            unset($method);

            if ($trait['executableLines'] > 0) {
                $trait['coverage'] = ($trait['executedLines'] /
                        $trait['executableLines']) * 100;

                if ($trait['coverage'] === 100) {
                    $this->numTestedClasses++;
                }
            } else {
                $trait['coverage'] = 100;
            }

            $trait['crap'] = $this->crap(
                $trait['ccn'],
                $trait['coverage']
            );
        }

        unset($trait);

        foreach ($this->classes as &$class) {
            foreach ($class['methods'] as &$method) {
                if ($method['executableLines'] > 0) {
                    $method['coverage'] = ($method['executedLines'] /
                            $method['executableLines']) * 100;
                } else {
                    $method['coverage'] = 100;
                }

                $method['crap'] = $this->crap(
                    $method['ccn'],
                    $method['coverage']
                );

                $class['ccn'] += $method['ccn'];
            }

            unset($method);

            if ($class['executableLines'] > 0) {
                $class['coverage'] = ($class['executedLines'] /
                        $class['executableLines']) * 100;

                if ($class['coverage'] === 100) {
                    $this->numTestedClasses++;
                }
            } else {
                $class['coverage'] = 100;
            }

            $class['crap'] = $this->crap(
                $class['ccn'],
                $class['coverage']
            );
        }

        unset($class);

        foreach ($this->functions as &$function) {
            if ($function['executableLines'] > 0) {
                $function['coverage'] = ($function['executedLines'] /
                        $function['executableLines']) * 100;
            } else {
                $function['coverage'] = 100;
            }

            if ($function['coverage'] === 100) {
                $this->numTestedFunctions++;
            }

            $function['crap'] = $this->crap(
                $function['ccn'],
                $function['coverage']
            );
        }
    }

    private function processClasses(\PHP_Token_Stream $tokens): void
    {
        $classes = $tokens->getClasses();
        $link    = $this->getId() . '.html#';

        foreach ($classes as $className => $class) {
            if (\strpos($className, 'anonymous') === 0) {
                continue;
            }

            if (!empty($class['package']['namespace'])) {
                $className = $class['package']['namespace'] . '\\' . $className;
            }

            $this->classes[$className] = [
                'className'       => $className,
                'methods'         => [],
                'startLine'       => $class['startLine'],
                'executableLines' => 0,
                'executedLines'   => 0,
                'ccn'             => 0,
                'coverage'        => 0,
                'crap'            => 0,
                'package'         => $class['package'],
                'link'            => $link . $class['startLine'],
            ];

            foreach ($class['methods'] as $methodName => $method) {
                if (\strpos($methodName, 'anonymous') === 0) {
                    continue;
                }

                $this->classes[$className]['methods'][$methodName] = $this->newMethod($methodName, $method, $link);

                foreach (\range($method['startLine'], $method['endLine']) as $lineNumber) {
                    $this->codeUnitsByLine[$lineNumber] = [
                        &$this->classes[$className],
                        &$this->classes[$className]['methods'][$methodName],
                    ];
                }
            }
        }
    }

    private function processTraits(\PHP_Token_Stream $tokens): void
    {
        $traits = $tokens->getTraits();
        $link   = $this->getId() . '.html#';

        foreach ($traits as $traitName => $trait) {
            $this->traits[$traitName] = [
                'traitName'       => $traitName,
                'methods'         => [],
                'startLine'       => $trait['startLine'],
                'executableLines' => 0,
                'executedLines'   => 0,
                'ccn'             => 0,
                'coverage'        => 0,
                'crap'            => 0,
                'package'         => $trait['package'],
                'link'            => $link . $trait['startLine'],
            ];

            foreach ($trait['methods'] as $methodName => $method) {
                if (\strpos($methodName, 'anonymous') === 0) {
                    continue;
                }

                $this->traits[$traitName]['methods'][$methodName] = $this->newMethod($methodName, $method, $link);

                foreach (\range($method['startLine'], $method['endLine']) as $lineNumber) {
                    $this->codeUnitsByLine[$lineNumber] = [
                        &$this->traits[$traitName],
                        &$this->traits[$traitName]['methods'][$methodName],
                    ];
                }
            }
        }
    }

    private function processFunctions(\PHP_Token_Stream $tokens): void
    {
        $functions = $tokens->getFunctions();
        $link      = $this->getId() . '.html#';

        foreach ($functions as $functionName => $function) {
            if (\strpos($functionName, 'anonymous') === 0) {
                continue;
            }

            $this->functions[$functionName] = [
                'functionName'    => $functionName,
                'signature'       => $function['signature'],
                'startLine'       => $function['startLine'],
                'executableLines' => 0,
                'executedLines'   => 0,
                'ccn'             => $function['ccn'],
                'coverage'        => 0,
                'crap'            => 0,
                'link'            => $link . $function['startLine'],
            ];

            foreach (\range($function['startLine'], $function['endLine']) as $lineNumber) {
                $this->codeUnitsByLine[$lineNumber] = [&$this->functions[$functionName]];
            }
        }
    }

    private function crap(int $ccn, float $coverage): string
    {
        if ($coverage === 0) {
            return (string) ($ccn ** 2 + $ccn);
        }

        if ($coverage >= 95) {
            return (string) $ccn;
        }

        return \sprintf(
            '%01.2F',
            $ccn ** 2 * (1 - $coverage / 100) ** 3 + $ccn
        );
    }

    private function newMethod(string $methodName, array $method, string $link): array
    {
        return [
            'methodName'      => $methodName,
            'visibility'      => $method['visibility'],
            'signature'       => $method['signature'],
            'startLine'       => $method['startLine'],
            'endLine'         => $method['endLine'],
            'executableLines' => 0,
            'executedLines'   => 0,
            'ccn'             => $method['ccn'],
            'coverage'        => 0,
            'crap'            => 0,
            'link'            => $link . $method['startLine'],
        ];
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

final class Project extends Node
{
    public function __construct(string $directory)
    {
        $this->init();
        $this->setProjectSourceDirectory($directory);
    }

    public function getProjectSourceDirectory(): string
    {
        return $this->getContextNode()->getAttribute('source');
    }

    public function getBuildInformation(): BuildInformation
    {
        $buildNode = $this->getDom()->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
            'build'
        )->item(0);

        if (!$buildNode) {
            $buildNode = $this->getDom()->documentElement->appendChild(
                $this->getDom()->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
                    'build'
                )
            );
        }

        return new BuildInformation($buildNode);
    }

    public function getTests(): Tests
    {
        $testsNode = $this->getContextNode()->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
            'tests'
        )->item(0);

        if (!$testsNode) {
            $testsNode = $this->getContextNode()->appendChild(
                $this->getDom()->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
                    'tests'
                )
            );
        }

        return new Tests($testsNode);
    }

    public function asDom(): \DOMDocument
    {
        return $this->getDom();
    }

    private function init(): void
    {
        $dom = new \DOMDocument;
        $dom->loadXML('<?xml version="1.0" ?><phpunit xmlns="https://schema.phpunit.de/coverage/1.0"><build/><project/></phpunit>');

        $this->setContextNode(
            $dom->getElementsByTagNameNS(
                'https://schema.phpunit.de/coverage/1.0',
                'project'
            )->item(0)
        );
    }

    private function setProjectSourceDirectory(string $name): void
    {
        $this->getContextNode()->setAttribute('source', $name);
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

use TheSeer\Tokenizer\NamespaceUri;
use TheSeer\Tokenizer\Tokenizer;
use TheSeer\Tokenizer\XMLSerializer;

final class Source
{
    /** @var \DOMElement */
    private $context;

    public function __construct(\DOMElement $context)
    {
        $this->context = $context;
    }

    public function setSourceCode(string $source): void
    {
        $context = $this->context;

        $tokens = (new Tokenizer())->parse($source);
        $srcDom = (new XMLSerializer(new NamespaceUri($context->namespaceURI)))->toDom($tokens);

        $context->parentNode->replaceChild(
            $context->ownerDocument->importNode($srcDom->documentElement, true),
            $context
        );
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

final class Report extends File
{
    public function __construct(string $name)
    {
        $dom = new \DOMDocument();
        $dom->loadXML('<?xml version="1.0" ?><phpunit xmlns="https://schema.phpunit.de/coverage/1.0"><file /></phpunit>');

        $contextNode = $dom->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
            'file'
        )->item(0);

        parent::__construct($contextNode);

        $this->setName($name);
    }

    public function asDom(): \DOMDocument
    {
        return $this->getDomDocument();
    }

    public function getFunctionObject($name): Method
    {
        $node = $this->getContextNode()->appendChild(
            $this->getDomDocument()->createElementNS(
                'https://schema.phpunit.de/coverage/1.0',
                'function'
            )
        );

        return new Method($node, $name);
    }

    public function getClassObject($name): Unit
    {
        return $this->getUnitObject('class', $name);
    }

    public function getTraitObject($name): Unit
    {
        return $this->getUnitObject('trait', $name);
    }

    public function getSource(): Source
    {
        $source = $this->getContextNode()->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
            'source'
        )->item(0);

        if (!$source) {
            $source = $this->getContextNode()->appendChild(
                $this->getDomDocument()->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
                    'source'
                )
            );
        }

        return new Source($source);
    }

    private function setName($name): void
    {
        $this->getContextNode()->setAttribute('name', \basename($name));
        $this->getContextNode()->setAttribute('path', \dirname($name));
    }

    private function getUnitObject($tagName, $name): Unit
    {
        $node = $this->getContextNode()->appendChild(
            $this->getDomDocument()->createElementNS(
                'https://schema.phpunit.de/coverage/1.0',
                $tagName
            )
        );

        return new Unit($node, $name);
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

final class Unit
{
    /**
     * @var \DOMElement
     */
    private $contextNode;

    public function __construct(\DOMElement $context, string $name)
    {
        $this->contextNode = $context;

        $this->setName($name);
    }

    public function setLines(int $start, int $executable, int $executed): void
    {
        $this->contextNode->setAttribute('start', $start);
        $this->contextNode->setAttribute('executable', $executable);
        $this->contextNode->setAttribute('executed', $executed);
    }

    public function setCrap(float $crap): void
    {
        $this->contextNode->setAttribute('crap', $crap);
    }

    public function setPackage(string $full, string $package, string $sub, string $category): void
    {
        $node = $this->contextNode->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
            'package'
        )->item(0);

        if (!$node) {
            $node = $this->contextNode->appendChild(
                $this->contextNode->ownerDocument->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
                    'package'
                )
            );
        }

        $node->setAttribute('full', $full);
        $node->setAttribute('name', $package);
        $node->setAttribute('sub', $sub);
        $node->setAttribute('category', $category);
    }

    public function setNamespace(string $namespace): void
    {
        $node = $this->contextNode->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
            'namespace'
        )->item(0);

        if (!$node) {
            $node = $this->contextNode->appendChild(
                $this->contextNode->ownerDocument->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
                    'namespace'
                )
            );
        }

        $node->setAttribute('name', $namespace);
    }

    public function addMethod(string $name): Method
    {
        $node = $this->contextNode->appendChild(
            $this->contextNode->ownerDocument->createElementNS(
                'https://schema.phpunit.de/coverage/1.0',
                'method'
            )
        );

        return new Method($node, $name);
    }

    private function setName(string $name): void
    {
        $this->contextNode->setAttribute('name', $name);
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

abstract class Node
{
    /**
     * @var \DOMDocument
     */
    private $dom;

    /**
     * @var \DOMElement
     */
    private $contextNode;

    public function __construct(\DOMElement $context)
    {
        $this->setContextNode($context);
    }

    public function getDom(): \DOMDocument
    {
        return $this->dom;
    }

    public function getTotals(): Totals
    {
        $totalsContainer = $this->getContextNode()->firstChild;

        if (!$totalsContainer) {
            $totalsContainer = $this->getContextNode()->appendChild(
                $this->dom->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
                    'totals'
                )
            );
        }

        return new Totals($totalsContainer);
    }

    public function addDirectory(string $name): Directory
    {
        $dirNode = $this->getDom()->createElementNS(
            'https://schema.phpunit.de/coverage/1.0',
            'directory'
        );

        $dirNode->setAttribute('name', $name);
        $this->getContextNode()->appendChild($dirNode);

        return new Directory($dirNode);
    }

    public function addFile(string $name, string $href): File
    {
        $fileNode = $this->getDom()->createElementNS(
            'https://schema.phpunit.de/coverage/1.0',
            'file'
        );

        $fileNode->setAttribute('name', $name);
        $fileNode->setAttribute('href', $href);
        $this->getContextNode()->appendChild($fileNode);

        return new File($fileNode);
    }

    protected function setContextNode(\DOMElement $context): void
    {
        $this->dom         = $context->ownerDocument;
        $this->contextNode = $context;
    }

    protected function getContextNode(): \DOMElement
    {
        return $this->contextNode;
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

final class Directory extends Node
{
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

use SebastianBergmann\CodeCoverage\RuntimeException;

final class Coverage
{
    /**
     * @var \XMLWriter
     */
    private $writer;

    /**
     * @var \DOMElement
     */
    private $contextNode;

    /**
     * @var bool
     */
    private $finalized = false;

    public function __construct(\DOMElement $context, string $line)
    {
        $this->contextNode = $context;

        $this->writer = new \XMLWriter();
        $this->writer->openMemory();
        $this->writer->startElementNS(null, $context->nodeName, 'https://schema.phpunit.de/coverage/1.0');
        $this->writer->writeAttribute('nr', $line);
    }

    /**
     * @throws RuntimeException
     */
    public function addTest(string $test): void
    {
        if ($this->finalized) {
            throw new RuntimeException('Coverage Report already finalized');
        }

        $this->writer->startElement('covered');
        $this->writer->writeAttribute('by', $test);
        $this->writer->endElement();
    }

    public function finalize(): void
    {
        $this->writer->endElement();

        $fragment = $this->contextNode->ownerDocument->createDocumentFragment();
        $fragment->appendXML($this->writer->outputMemory());

        $this->contextNode->parentNode->replaceChild(
            $fragment,
            $this->contextNode
        );

        $this->finalized = true;
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

final class Method
{
    /**
     * @var \DOMElement
     */
    private $contextNode;

    public function __construct(\DOMElement $context, string $name)
    {
        $this->contextNode = $context;

        $this->setName($name);
    }

    public function setSignature(string $signature): void
    {
        $this->contextNode->setAttribute('signature', $signature);
    }

    public function setLines(string $start, ?string $end = null): void
    {
        $this->contextNode->setAttribute('start', $start);

        if ($end !== null) {
            $this->contextNode->setAttribute('end', $end);
        }
    }

    public function setTotals(string $executable, string $executed, string $coverage): void
    {
        $this->contextNode->setAttribute('executable', $executable);
        $this->contextNode->setAttribute('executed', $executed);
        $this->contextNode->setAttribute('coverage', $coverage);
    }

    public function setCrap(string $crap): void
    {
        $this->contextNode->setAttribute('crap', $crap);
    }

    private function setName(string $name): void
    {
        $this->contextNode->setAttribute('name', $name);
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

final class Tests
{
    private $contextNode;

    private $codeMap = [
        -1 => 'UNKNOWN',    // PHPUnit_Runner_BaseTestRunner::STATUS_UNKNOWN
        0  => 'PASSED',     // PHPUnit_Runner_BaseTestRunner::STATUS_PASSED
        1  => 'SKIPPED',    // PHPUnit_Runner_BaseTestRunner::STATUS_SKIPPED
        2  => 'INCOMPLETE', // PHPUnit_Runner_BaseTestRunner::STATUS_INCOMPLETE
        3  => 'FAILURE',    // PHPUnit_Runner_BaseTestRunner::STATUS_FAILURE
        4  => 'ERROR',      // PHPUnit_Runner_BaseTestRunner::STATUS_ERROR
        5  => 'RISKY',      // PHPUnit_Runner_BaseTestRunner::STATUS_RISKY
        6  => 'WARNING',     // PHPUnit_Runner_BaseTestRunner::STATUS_WARNING
    ];

    public function __construct(\DOMElement $context)
    {
        $this->contextNode = $context;
    }

    public function addTest(string $test, array $result): void
    {
        $node = $this->contextNode->appendChild(
            $this->contextNode->ownerDocument->createElementNS(
                'https://schema.phpunit.de/coverage/1.0',
                'test'
            )
        );

        $node->setAttribute('name', $test);
        $node->setAttribute('size', $result['size']);
        $node->setAttribute('result', (int) $result['status']);
        $node->setAttribute('status', $this->codeMap[(int) $result['status']]);
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\Node\AbstractNode;
use SebastianBergmann\CodeCoverage\Node\Directory as DirectoryNode;
use SebastianBergmann\CodeCoverage\Node\File as FileNode;
use SebastianBergmann\CodeCoverage\RuntimeException;
use SebastianBergmann\CodeCoverage\Version;
use SebastianBergmann\Environment\Runtime;

final class Facade
{
    /**
     * @var string
     */
    private $target;

    /**
     * @var Project
     */
    private $project;

    /**
     * @var string
     */
    private $phpUnitVersion;

    public function __construct(string $version)
    {
        $this->phpUnitVersion = $version;
    }

    /**
     * @throws RuntimeException
     */
    public function process(CodeCoverage $coverage, string $target): void
    {
        if (\substr($target, -1, 1) !== \DIRECTORY_SEPARATOR) {
            $target .= \DIRECTORY_SEPARATOR;
        }

        $this->target = $target;
        $this->initTargetDirectory($target);

        $report = $coverage->getReport();

        $this->project = new Project(
            $coverage->getReport()->getName()
        );

        $this->setBuildInformation();
        $this->processTests($coverage->getTests());
        $this->processDirectory($report, $this->project);

        $this->saveDocument($this->project->asDom(), 'index');
    }

    private function setBuildInformation(): void
    {
        $buildNode = $this->project->getBuildInformation();
        $buildNode->setRuntimeInformation(new Runtime());
        $buildNode->setBuildTime(\DateTime::createFromFormat('U', $_SERVER['REQUEST_TIME']));
        $buildNode->setGeneratorVersions($this->phpUnitVersion, Version::id());
    }

    /**
     * @throws RuntimeException
     */
    private function initTargetDirectory(string $directory): void
    {
        if (\file_exists($directory)) {
            if (!\is_dir($directory)) {
                throw new RuntimeException(
                    "'$directory' exists but is not a directory."
                );
            }

            if (!\is_writable($directory)) {
                throw new RuntimeException(
                    "'$directory' exists but is not writable."
                );
            }
        } elseif (!$this->createDirectory($directory)) {
            throw new RuntimeException(
                "'$directory' could not be created."
            );
        }
    }

    private function processDirectory(DirectoryNode $directory, Node $context): void
    {
        $directoryName = $directory->getName();

        if ($this->project->getProjectSourceDirectory() === $directoryName) {
            $directoryName = '/';
        }

        $directoryObject = $context->addDirectory($directoryName);

        $this->setTotals($directory, $directoryObject->getTotals());

        foreach ($directory->getDirectories() as $node) {
            $this->processDirectory($node, $directoryObject);
        }

        foreach ($directory->getFiles() as $node) {
            $this->processFile($node, $directoryObject);
        }
    }

    /**
     * @throws RuntimeException
     */
    private function processFile(FileNode $file, Directory $context): void
    {
        $fileObject = $context->addFile(
            $file->getName(),
            $file->getId() . '.xml'
        );

        $this->setTotals($file, $fileObject->getTotals());

        $path = \substr(
            $file->getPath(),
            \strlen($this->project->getProjectSourceDirectory())
        );

        $fileReport = new Report($path);

        $this->setTotals($file, $fileReport->getTotals());

        foreach ($file->getClassesAndTraits() as $unit) {
            $this->processUnit($unit, $fileReport);
        }

        foreach ($file->getFunctions() as $function) {
            $this->processFunction($function, $fileReport);
        }

        foreach ($file->getCoverageData() as $line => $tests) {
            if (!\is_array($tests) || \count($tests) === 0) {
                continue;
            }

            $coverage = $fileReport->getLineCoverage($line);

            foreach ($tests as $test) {
                $coverage->addTest($test);
            }

            $coverage->finalize();
        }

        $fileReport->getSource()->setSourceCode(
            \file_get_contents($file->getPath())
        );

        $this->saveDocument($fileReport->asDom(), $file->getId());
    }

    private function processUnit(array $unit, Report $report): void
    {
        if (isset($unit['className'])) {
            $unitObject = $report->getClassObject($unit['className']);
        } else {
            $unitObject = $report->getTraitObject($unit['traitName']);
        }

        $unitObject->setLines(
            $unit['startLine'],
            $unit['executableLines'],
            $unit['executedLines']
        );

        $unitObject->setCrap($unit['crap']);

        $unitObject->setPackage(
            $unit['package']['fullPackage'],
            $unit['package']['package'],
            $unit['package']['subpackage'],
            $unit['package']['category']
        );

        $unitObject->setNamespace($unit['package']['namespace']);

        foreach ($unit['methods'] as $method) {
            $methodObject = $unitObject->addMethod($method['methodName']);
            $methodObject->setSignature($method['signature']);
            $methodObject->setLines($method['startLine'], $method['endLine']);
            $methodObject->setCrap($method['crap']);
            $methodObject->setTotals(
                $method['executableLines'],
                $method['executedLines'],
                $method['coverage']
            );
        }
    }

    private function processFunction(array $function, Report $report): void
    {
        $functionObject = $report->getFunctionObject($function['functionName']);

        $functionObject->setSignature($function['signature']);
        $functionObject->setLines($function['startLine']);
        $functionObject->setCrap($function['crap']);
        $functionObject->setTotals($function['executableLines'], $function['executedLines'], $function['coverage']);
    }

    private function processTests(array $tests): void
    {
        $testsObject = $this->project->getTests();

        foreach ($tests as $test => $result) {
            if ($test === 'UNCOVERED_FILES_FROM_WHITELIST') {
                continue;
            }

            $testsObject->addTest($test, $result);
        }
    }

    private function setTotals(AbstractNode $node, Totals $totals): void
    {
        $loc = $node->getLinesOfCode();

        $totals->setNumLines(
            $loc['loc'],
            $loc['cloc'],
            $loc['ncloc'],
            $node->getNumExecutableLines(),
            $node->getNumExecutedLines()
        );

        $totals->setNumClasses(
            $node->getNumClasses(),
            $node->getNumTestedClasses()
        );

        $totals->setNumTraits(
            $node->getNumTraits(),
            $node->getNumTestedTraits()
        );

        $totals->setNumMethods(
            $node->getNumMethods(),
            $node->getNumTestedMethods()
        );

        $totals->setNumFunctions(
            $node->getNumFunctions(),
            $node->getNumTestedFunctions()
        );
    }

    private function getTargetDirectory(): string
    {
        return $this->target;
    }

    /**
     * @throws RuntimeException
     */
    private function saveDocument(\DOMDocument $document, string $name): void
    {
        $filename = \sprintf('%s/%s.xml', $this->getTargetDirectory(), $name);

        $document->formatOutput       = true;
        $document->preserveWhiteSpace = false;
        $this->initTargetDirectory(\dirname($filename));

        $document->save($filename);
    }

    private function createDirectory(string $directory): bool
    {
        return !(!\is_dir($directory) && !@\mkdir($directory, 0777, true) && !\is_dir($directory));
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

use SebastianBergmann\CodeCoverage\Util;

final class Totals
{
    /**
     * @var \DOMNode
     */
    private $container;

    /**
     * @var \DOMElement
     */
    private $linesNode;

    /**
     * @var \DOMElement
     */
    private $methodsNode;

    /**
     * @var \DOMElement
     */
    private $functionsNode;

    /**
     * @var \DOMElement
     */
    private $classesNode;

    /**
     * @var \DOMElement
     */
    private $traitsNode;

    public function __construct(\DOMElement $container)
    {
        $this->container = $container;
        $dom             = $container->ownerDocument;

        $this->linesNode = $dom->createElementNS(
            'https://schema.phpunit.de/coverage/1.0',
            'lines'
        );

        $this->methodsNode = $dom->createElementNS(
            'https://schema.phpunit.de/coverage/1.0',
            'methods'
        );

        $this->functionsNode = $dom->createElementNS(
            'https://schema.phpunit.de/coverage/1.0',
            'functions'
        );

        $this->classesNode = $dom->createElementNS(
            'https://schema.phpunit.de/coverage/1.0',
            'classes'
        );

        $this->traitsNode = $dom->createElementNS(
            'https://schema.phpunit.de/coverage/1.0',
            'traits'
        );

        $container->appendChild($this->linesNode);
        $container->appendChild($this->methodsNode);
        $container->appendChild($this->functionsNode);
        $container->appendChild($this->classesNode);
        $container->appendChild($this->traitsNode);
    }

    public function getContainer(): \DOMNode
    {
        return $this->container;
    }

    public function setNumLines(int $loc, int $cloc, int $ncloc, int $executable, int $executed): void
    {
        $this->linesNode->setAttribute('total', $loc);
        $this->linesNode->setAttribute('comments', $cloc);
        $this->linesNode->setAttribute('code', $ncloc);
        $this->linesNode->setAttribute('executable', $executable);
        $this->linesNode->setAttribute('executed', $executed);
        $this->linesNode->setAttribute(
            'percent',
            $executable === 0 ? 0 : \sprintf('%01.2F', Util::percent($executed, $executable))
        );
    }

    public function setNumClasses(int $count, int $tested): void
    {
        $this->classesNode->setAttribute('count', $count);
        $this->classesNode->setAttribute('tested', $tested);
        $this->classesNode->setAttribute(
            'percent',
            $count === 0 ? 0 : \sprintf('%01.2F', Util::percent($tested, $count))
        );
    }

    public function setNumTraits(int $count, int $tested): void
    {
        $this->traitsNode->setAttribute('count', $count);
        $this->traitsNode->setAttribute('tested', $tested);
        $this->traitsNode->setAttribute(
            'percent',
            $count === 0 ? 0 : \sprintf('%01.2F', Util::percent($tested, $count))
        );
    }

    public function setNumMethods(int $count, int $tested): void
    {
        $this->methodsNode->setAttribute('count', $count);
        $this->methodsNode->setAttribute('tested', $tested);
        $this->methodsNode->setAttribute(
            'percent',
            $count === 0 ? 0 : \sprintf('%01.2F', Util::percent($tested, $count))
        );
    }

    public function setNumFunctions(int $count, int $tested): void
    {
        $this->functionsNode->setAttribute('count', $count);
        $this->functionsNode->setAttribute('tested', $tested);
        $this->functionsNode->setAttribute(
            'percent',
            $count === 0 ? 0 : \sprintf('%01.2F', Util::percent($tested, $count))
        );
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

use SebastianBergmann\Environment\Runtime;

final class BuildInformation
{
    /**
     * @var \DOMElement
     */
    private $contextNode;

    public function __construct(\DOMElement $contextNode)
    {
        $this->contextNode = $contextNode;
    }

    public function setRuntimeInformation(Runtime $runtime): void
    {
        $runtimeNode = $this->getNodeByName('runtime');

        $runtimeNode->setAttribute('name', $runtime->getName());
        $runtimeNode->setAttribute('version', $runtime->getVersion());
        $runtimeNode->setAttribute('url', $runtime->getVendorUrl());

        $driverNode = $this->getNodeByName('driver');

        if ($runtime->hasPHPDBGCodeCoverage()) {
            $driverNode->setAttribute('name', 'phpdbg');
            $driverNode->setAttribute('version', \constant('PHPDBG_VERSION'));
        }

        if ($runtime->hasXdebug()) {
            $driverNode->setAttribute('name', 'xdebug');
            $driverNode->setAttribute('version', \phpversion('xdebug'));
        }
    }

    public function setBuildTime(\DateTime $date): void
    {
        $this->contextNode->setAttribute('time', $date->format('D M j G:i:s T Y'));
    }

    public function setGeneratorVersions(string $phpUnitVersion, string $coverageVersion): void
    {
        $this->contextNode->setAttribute('phpunit', $phpUnitVersion);
        $this->contextNode->setAttribute('coverage', $coverageVersion);
    }

    private function getNodeByName(string $name): \DOMElement
    {
        $node = $this->contextNode->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
            $name
        )->item(0);

        if (!$node) {
            $node = $this->contextNode->appendChild(
                $this->contextNode->ownerDocument->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
                    $name
                )
            );
        }

        return $node;
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Xml;

class File
{
    /**
     * @var \DOMDocument
     */
    private $dom;

    /**
     * @var \DOMElement
     */
    private $contextNode;

    public function __construct(\DOMElement $context)
    {
        $this->dom         = $context->ownerDocument;
        $this->contextNode = $context;
    }

    public function getTotals(): Totals
    {
        $totalsContainer = $this->contextNode->firstChild;

        if (!$totalsContainer) {
            $totalsContainer = $this->contextNode->appendChild(
                $this->dom->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
                    'totals'
                )
            );
        }

        return new Totals($totalsContainer);
    }

    public function getLineCoverage(string $line): Coverage
    {
        $coverage = $this->contextNode->getElementsByTagNameNS(
            'https://schema.phpunit.de/coverage/1.0',
            'coverage'
        )->item(0);

        if (!$coverage) {
            $coverage = $this->contextNode->appendChild(
                $this->dom->createElementNS(
                    'https://schema.phpunit.de/coverage/1.0',
                    'coverage'
                )
            );
        }

        $lineNode = $coverage->appendChild(
            $this->dom->createElementNS(
                'https://schema.phpunit.de/coverage/1.0',
                'line'
            )
        );

        return new Coverage($lineNode, $line);
    }

    protected function getContextNode(): \DOMElement
    {
        return $this->contextNode;
    }

    protected function getDomDocument(): \DOMDocument
    {
        return $this->dom;
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Html;

use SebastianBergmann\CodeCoverage\Node\AbstractNode;
use SebastianBergmann\CodeCoverage\Node\Directory as DirectoryNode;
use SebastianBergmann\CodeCoverage\Node\File as FileNode;
use SebastianBergmann\CodeCoverage\Version;
use SebastianBergmann\Environment\Runtime;

/**
 * Base class for node renderers.
 */
abstract class Renderer
{
    /**
     * @var string
     */
    protected $templatePath;

    /**
     * @var string
     */
    protected $generator;

    /**
     * @var string
     */
    protected $date;

    /**
     * @var int
     */
    protected $lowUpperBound;

    /**
     * @var int
     */
    protected $highLowerBound;

    /**
     * @var string
     */
    protected $version;

    public function __construct(string $templatePath, string $generator, string $date, int $lowUpperBound, int $highLowerBound)
    {
        $this->templatePath   = $templatePath;
        $this->generator      = $generator;
        $this->date           = $date;
        $this->lowUpperBound  = $lowUpperBound;
        $this->highLowerBound = $highLowerBound;
        $this->version        = Version::id();
    }

    protected function renderItemTemplate(\Text_Template $template, array $data): string
    {
        $numSeparator  = '&nbsp;/&nbsp;';

        if (isset($data['numClasses']) && $data['numClasses'] > 0) {
            $classesLevel = $this->getColorLevel($data['testedClassesPercent']);

            $classesNumber = $data['numTestedClasses'] . $numSeparator .
                $data['numClasses'];

            $classesBar = $this->getCoverageBar(
                $data['testedClassesPercent']
            );
        } else {
            $classesLevel                         = '';
            $classesNumber                        = '0' . $numSeparator . '0';
            $classesBar                           = '';
            $data['testedClassesPercentAsString'] = 'n/a';
        }

        if ($data['numMethods'] > 0) {
            $methodsLevel = $this->getColorLevel($data['testedMethodsPercent']);

            $methodsNumber = $data['numTestedMethods'] . $numSeparator .
                $data['numMethods'];

            $methodsBar = $this->getCoverageBar(
                $data['testedMethodsPercent']
            );
        } else {
            $methodsLevel                         = '';
            $methodsNumber                        = '0' . $numSeparator . '0';
            $methodsBar                           = '';
            $data['testedMethodsPercentAsString'] = 'n/a';
        }

        if ($data['numExecutableLines'] > 0) {
            $linesLevel = $this->getColorLevel($data['linesExecutedPercent']);

            $linesNumber = $data['numExecutedLines'] . $numSeparator .
                $data['numExecutableLines'];

            $linesBar = $this->getCoverageBar(
                $data['linesExecutedPercent']
            );
        } else {
            $linesLevel                           = '';
            $linesNumber                          = '0' . $numSeparator . '0';
            $linesBar                             = '';
            $data['linesExecutedPercentAsString'] = 'n/a';
        }

        $template->setVar(
            [
                'icon'                   => $data['icon'] ?? '',
                'crap'                   => $data['crap'] ?? '',
                'name'                   => $data['name'],
                'lines_bar'              => $linesBar,
                'lines_executed_percent' => $data['linesExecutedPercentAsString'],
                'lines_level'            => $linesLevel,
                'lines_number'           => $linesNumber,
                'methods_bar'            => $methodsBar,
                'methods_tested_percent' => $data['testedMethodsPercentAsString'],
                'methods_level'          => $methodsLevel,
                'methods_number'         => $methodsNumber,
                'classes_bar'            => $classesBar,
                'classes_tested_percent' => $data['testedClassesPercentAsString'] ?? '',
                'classes_level'          => $classesLevel,
                'classes_number'         => $classesNumber,
            ]
        );

        return $template->render();
    }

    protected function setCommonTemplateVariables(\Text_Template $template, AbstractNode $node): void
    {
        $template->setVar(
            [
                'id'               => $node->getId(),
                'full_path'        => $node->getPath(),
                'path_to_root'     => $this->getPathToRoot($node),
                'breadcrumbs'      => $this->getBreadcrumbs($node),
                'date'             => $this->date,
                'version'          => $this->version,
                'runtime'          => $this->getRuntimeString(),
                'generator'        => $this->generator,
                'low_upper_bound'  => $this->lowUpperBound,
                'high_lower_bound' => $this->highLowerBound,
            ]
        );
    }

    protected function getBreadcrumbs(AbstractNode $node): string
    {
        $breadcrumbs = '';
        $path        = $node->getPathAsArray();
        $pathToRoot  = [];
        $max         = \count($path);

        if ($node instanceof FileNode) {
            $max--;
        }

        for ($i = 0; $i < $max; $i++) {
            $pathToRoot[] = \str_repeat('../', $i);
        }

        foreach ($path as $step) {
            if ($step !== $node) {
                $breadcrumbs .= $this->getInactiveBreadcrumb(
                    $step,
                    \array_pop($pathToRoot)
                );
            } else {
                $breadcrumbs .= $this->getActiveBreadcrumb($step);
            }
        }

        return $breadcrumbs;
    }

    protected function getActiveBreadcrumb(AbstractNode $node): string
    {
        $buffer = \sprintf(
            '         <li class="breadcrumb-item active">%s</li>' . "\n",
            $node->getName()
        );

        if ($node instanceof DirectoryNode) {
            $buffer .= '         <li class="breadcrumb-item">(<a href="dashboard.html">Dashboard</a>)</li>' . "\n";
        }

        return $buffer;
    }

    protected function getInactiveBreadcrumb(AbstractNode $node, string $pathToRoot): string
    {
        return \sprintf(
            '         <li class="breadcrumb-item"><a href="%sindex.html">%s</a></li>' . "\n",
            $pathToRoot,
            $node->getName()
        );
    }

    protected function getPathToRoot(AbstractNode $node): string
    {
        $id    = $node->getId();
        $depth = \substr_count($id, '/');

        if ($id !== 'index' &&
            $node instanceof DirectoryNode) {
            $depth++;
        }

        return \str_repeat('../', $depth);
    }

    protected function getCoverageBar(float $percent): string
    {
        $level = $this->getColorLevel($percent);

        $template = new \Text_Template(
            $this->templatePath . 'coverage_bar.html',
            '{{',
            '}}'
        );

        $template->setVar(['level' => $level, 'percent' => \sprintf('%.2F', $percent)]);

        return $template->render();
    }

    protected function getColorLevel(float $percent): string
    {
        if ($percent <= $this->lowUpperBound) {
            return 'danger';
        }

        if ($percent > $this->lowUpperBound &&
            $percent < $this->highLowerBound) {
            return 'warning';
        }

        return 'success';
    }

    private function getRuntimeString(): string
    {
        $runtime = new Runtime;

        $buffer = \sprintf(
            '<a href="%s" target="_top">%s %s</a>',
            $runtime->getVendorUrl(),
            $runtime->getName(),
            $runtime->getVersion()
        );

        if ($runtime->hasXdebug() && !$runtime->hasPHPDBGCodeCoverage()) {
            $buffer .= \sprintf(
                ' with <a href="https://xdebug.org/">Xdebug %s</a>',
                \phpversion('xdebug')
            );
        }

        return $buffer;
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Html;

use SebastianBergmann\CodeCoverage\Node\AbstractNode as Node;
use SebastianBergmann\CodeCoverage\Node\Directory as DirectoryNode;

/**
 * Renders a directory node.
 */
final class Directory extends Renderer
{
    /**
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function render(DirectoryNode $node, string $file): void
    {
        $template = new \Text_Template($this->templatePath . 'directory.html', '{{', '}}');

        $this->setCommonTemplateVariables($template, $node);

        $items = $this->renderItem($node, true);

        foreach ($node->getDirectories() as $item) {
            $items .= $this->renderItem($item);
        }

        foreach ($node->getFiles() as $item) {
            $items .= $this->renderItem($item);
        }

        $template->setVar(
            [
                'id'    => $node->getId(),
                'items' => $items,
            ]
        );

        $template->renderTo($file);
    }

    protected function renderItem(Node $node, bool $total = false): string
    {
        $data = [
            'numClasses'                   => $node->getNumClassesAndTraits(),
            'numTestedClasses'             => $node->getNumTestedClassesAndTraits(),
            'numMethods'                   => $node->getNumFunctionsAndMethods(),
            'numTestedMethods'             => $node->getNumTestedFunctionsAndMethods(),
            'linesExecutedPercent'         => $node->getLineExecutedPercent(false),
            'linesExecutedPercentAsString' => $node->getLineExecutedPercent(),
            'numExecutedLines'             => $node->getNumExecutedLines(),
            'numExecutableLines'           => $node->getNumExecutableLines(),
            'testedMethodsPercent'         => $node->getTestedFunctionsAndMethodsPercent(false),
            'testedMethodsPercentAsString' => $node->getTestedFunctionsAndMethodsPercent(),
            'testedClassesPercent'         => $node->getTestedClassesAndTraitsPercent(false),
            'testedClassesPercentAsString' => $node->getTestedClassesAndTraitsPercent(),
        ];

        if ($total) {
            $data['name'] = 'Total';
        } else {
            if ($node instanceof DirectoryNode) {
                $data['name'] = \sprintf(
                    '<a href="%s/index.html">%s</a>',
                    $node->getName(),
                    $node->getName()
                );

                $up = \str_repeat('../', \count($node->getPathAsArray()) - 2);

                $data['icon'] = \sprintf('<img src="%s.icons/file-directory.svg" class="octicon" />', $up);
            } else {
                $data['name'] = \sprintf(
                    '<a href="%s.html">%s</a>',
                    $node->getName(),
                    $node->getName()
                );

                $up = \str_repeat('../', \count($node->getPathAsArray()) - 2);

                $data['icon'] = \sprintf('<img src="%s.icons/file-code.svg" class="octicon" />', $up);
            }
        }

        return $this->renderItemTemplate(
            new \Text_Template($this->templatePath . 'directory_item.html', '{{', '}}'),
            $data
        );
    }
}
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Html;

use SebastianBergmann\CodeCoverage\Node\AbstractNode;
use SebastianBergmann\CodeCoverage\Node\Directory as DirectoryNode;

/**
 * Renders the dashboard for a directory node.
 */
final class Dashboard extends Renderer
{
    /**
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function render(DirectoryNode $node, string $file): void
    {
        $classes  = $node->getClassesAndTraits();
        $template = new \Text_Template(
            $this->templatePath . 'dashboard.html',
            '{{',
            '}}'
        );

        $this->setCommonTemplateVariables($template, $node);

        $baseLink             = $node->getId() . '/';
        $complexity           = $this->complexity($classes, $baseLink);
        $coverageDistribution = $this->coverageDistribution($classes);
        $insufficientCoverage = $this->insufficientCoverage($classes, $baseLink);
        $projectRisks         = $this->projectRisks($classes, $baseLink);

        $template->setVar(
            [
                'insufficient_coverage_classes' => $insufficientCoverage['class'],
                'insufficient_coverage_methods' => $insufficientCoverage['method'],
                'project_risks_classes'         => $projectRisks['class'],
                'project_risks_methods'         => $projectRisks['method'],
                'complexity_class'              => $complexity['class'],
                'complexity_method'             => $complexity['method'],
                'class_coverage_distribution'   => $coverageDistribution['class'],
                'method_coverage_distribution'  => $coverageDistribution['method'],
            ]
        );

        $template->renderTo($file);
    }

    /**
     * Returns the data for the Class/Method Complexity charts.
     */
    protected function complexity(array $classes, string $baseLink): array
    {
        $result = ['class' => [], 'method' => []];

        foreach ($classes as $className => $class) {
            foreach ($class['methods'] as $methodName => $method) {
                if ($className !== '*') {
                    $methodName = $className . '::' . $methodName;
                }

                $result['method'][] = [
                    $method['coverage'],
                    $method['ccn'],
                    \sprintf(
                        '<a href="%s">%s</a>',
                        \str_replace($baseLink, '', $method['link']),
                        $methodName
                    ),
                ];
            }

            $result['class'][] = [
                $class['coverage'],
                $class['ccn'],
                \sprintf(
                    '<a href="%s">%s</a>',
                    \str_replace($baseLink, '', $class['link']),
                    $className
                ),
            ];
        }

        return [
            'class'  => \json_encode($result['class']),
            'method' => \json_encode($result['method']),
        ];
    }

    /**
     * Returns the data for the Class / Method Coverage Distribution chart.
     */
    protected function coverageDistribution(array $classes): array
    {
        $result = [
            'class' => [
                '0%'      => 0,
                '0-10%'   => 0,
                '10-20%'  => 0,
                '20-30%'  => 0,
                '30-40%'  => 0,
                '40-50%'  => 0,
                '50-60%'  => 0,
                '60-70%'  => 0,
                '70-80%'  => 0,
                '80-90%'  => 0,
                '90-100%' => 0,
                '100%'    => 0,
            ],
            'method' => [
                '0%'      => 0,
                '0-10%'   => 0,
                '10-20%'  => 0,
                '20-30%'  => 0,
                '30-40%'  => 0,
                '40-50%'  => 0,
                '50-60%'  => 0,
                '60-70%'  => 0,
                '70-80%'  => 0,
                '80-90%'  => 0,
                '90-100%' => 0,
                '100%'    => 0,
            ],
        ];

        foreach ($classes as $class) {
            foreach ($class['methods'] as $methodName => $method) {
                if ($method['coverage'] === 0) {
                    $result['method']['0%']++;
                } elseif ($method['coverage'] === 100) {
                    $result['method']['100%']++;
                } else {
                    $key = \floor($method['coverage'] / 10) * 10;
                    $key = $key . '-' . ($key + 10) . '%';
                    $result['method'][$key]++;
                }
            }

            if ($class['coverage'] === 0) {
                $result['class']['0%']++;
            } elseif ($class['coverage'] === 100) {
                $result['class']['100%']++;
            } else {
                $key = \floor($class['coverage'] / 10) * 10;
                $key = $key . '-' . ($key + 10) . '%';
                $result['class'][$key]++;
            }
        }

        return [
            'class'  => \json_encode(\array_values($result['class'])),
            'method' => \json_encode(\array_values($result['method'])),
        ];
    }

    /**
     * Returns the classes / methods with insufficient coverage.
     */
    protected function insufficientCoverage(array $classes, string $baseLink): array
    {
        $leastTestedClasses = [];
        $leastTestedMethods = [];
        $result             = ['class' => '', 'method' => ''];

        foreach ($classes as $className => $class) {
            foreach ($class['methods'] as $methodName => $method) {
                if ($method['coverage'] < $this->highLowerBound) {
                    $key = $methodName;

                    if ($className !== '*') {
                        $key = $className . '::' . $methodName;
                    }

                    $leastTestedMethods[$key] = $method['coverage'];
                }
            }

            if ($class['coverage'] < $this->highLowerBound) {
                $leastTestedClasses[$className] = $class['coverage'];
            }
        }

        \asort($leastTestedClasses);
        \asort($leastTestedMethods);

        foreach ($leastTestedClasses as $className => $coverage) {
            $result['class'] .= \sprintf(
                '       <tr><td><a href="%s">%s</a></td><td class="text-right">%d%%</td></tr>' . "\n",
                \str_replace($baseLink, '', $classes[$className]['link']),
                $className,
                $coverage
            );
        }

        foreach ($leastTestedMethods as $methodName => $coverage) {
            [$class, $method] = \explode('::', $methodName);

            $result['method'] .= \sprintf(
                '       <tr><td><a href="%s"><abbr title="%s">%s</abbr></a></td><td class="text-right">%d%%</td></tr>' . "\n",
                \str_replace($baseLink, '', $classes[$class]['methods'][$method]['link']),
                $methodName,
                $method,
                $coverage
            );
        }

        return $result;
    }

    /**
     * Returns the project risks according to the CRAP index.
     */
    protected function projectRisks(array $classes, string $baseLink): array
    {
        $classRisks  = [];
        $methodRisks = [];
        $result      = ['class' => '', 'method' => ''];

        foreach ($classes as $className => $class) {
            foreach ($class['methods'] as $methodName => $method) {
                if ($method['coverage'] < $this->highLowerBound && $method['ccn'] > 1) {
                    $key = $methodName;

                    if ($className !== '*') {
                        $key = $className . '::' . $methodName;
                    }

                    $methodRisks[$key] = $method['crap'];
                }
            }

            if ($class['coverage'] < $this->highLowerBound &&
                $class['ccn'] > \count($class['methods'])) {
                $classRisks[$className] = $class['crap'];
            }
        }

        \arsort($classRisks);
        \arsort($methodRisks);

        foreach ($classRisks as $className => $crap) {
            $result['class'] .= \sprintf(
                '       <tr><td><a href="%s">%s</a></td><td class="text-right">%d</td></tr>' . "\n",
                \str_replace($baseLink, '', $classes[$className]['link']),
                $className,
                $crap
            );
        }

        foreach ($methodRisks as $methodName => $crap) {
            [$class, $method] = \explode('::', $methodName);

            $result['method'] .= \sprintf(
                '       <tr><td><a href="%s"><abbr title="%s">%s</abbr></a></td><td class="text-right">%d</td></tr>' . "\n",
                \str_replace($baseLink, '', $classes[$class]['methods'][$method]['link']),
                $methodName,
                $method,
                $crap
            );
        }

        return $result;
    }

    protected function getActiveBreadcrumb(AbstractNode $node): string
    {
        return \sprintf(
            '         <li class="breadcrumb-item"><a href="index.html">%s</a></li>' . "\n" .
            '         <li class="breadcrumb-item active">(Dashboard)</li>' . "\n",
            $node->getName()
        );
    }
}
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Code Coverage for {{full_path}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{path_to_root}}.css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{path_to_root}}.css/octicons.css" rel="stylesheet" type="text/css">
  <link href="{{path_to_root}}.css/style.css" rel="stylesheet" type="text/css">
  <link href="{{path_to_root}}.css/custom.css" rel="stylesheet" type="text/css">
 </head>
 <body>
  <header>
   <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
{{breadcrumbs}}
       </ol>
      </nav>
     </div>
    </div>
   </div>
  </header>
  <div class="container-fluid">
   <div class="table-responsive">
    <table class="table table-bordered">
     <thead>
      <tr>
       <td>&nbsp;</td>
       <td colspan="10"><div align="center"><strong>Code Coverage</strong></div></td>
      </tr>
      <tr>
       <td>&nbsp;</td>
       <td colspan="3"><div align="center"><strong>Classes and Traits</strong></div></td>
       <td colspan="4"><div align="center"><strong>Functions and Methods</strong></div></td>
       <td colspan="3"><div align="center"><strong>Lines</strong></div></td>
      </tr>
     </thead>
     <tbody>
{{items}}
     </tbody>
    </table>
   </div>
   <table id="code" class="table table-borderless table-condensed">
    <tbody>
{{lines}}
    </tbody>
   </table>
   <footer>
    <hr/>
    <h4>Legend</h4>
    <p>
     <span class="success"><strong>Executed</strong></span>
     <span class="danger"><strong>Not Executed</strong></span>
     <span class="warning"><strong>Dead Code</strong></span>
    </p>
    <p>
     <small>Generated by <a href="https://github.com/sebastianbergmann/php-code-coverage" target="_top">php-code-coverage {{version}}</a> using {{runtime}}{{generator}} at {{date}}.</small>
    </p>
    <a title="Back to the top" id="toplink" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16"><path fill-rule="evenodd" d="M12 11L6 5l-6 6h12z"/></svg>
    </a>
   </footer>
  </div>
  <script src="{{path_to_root}}.js/jquery.min.js" type="text/javascript"></script>
  <script src="{{path_to_root}}.js/popper.min.js" type="text/javascript"></script>
  <script src="{{path_to_root}}.js/bootstrap.min.js" type="text/javascript"></script>
  <script src="{{path_to_root}}.js/file.js" type="text/javascript"></script>
 </body>
</html>
      <tr>
       <td class="{{lines_level}}">{{icon}}{{name}}</td>
       <td class="{{lines_level}} big">{{lines_bar}}</td>
       <td class="{{lines_level}} small"><div align="right">{{lines_executed_percent}}</div></td>
       <td class="{{lines_level}} small"><div align="right">{{lines_number}}</div></td>
       <td class="{{methods_level}} big">{{methods_bar}}</td>
       <td class="{{methods_level}} small"><div align="right">{{methods_tested_percent}}</div></td>
       <td class="{{methods_level}} small"><div align="right">{{methods_number}}</div></td>
       <td class="{{classes_level}} big">{{classes_bar}}</td>
       <td class="{{classes_level}} small"><div align="right">{{classes_tested_percent}}</div></td>
       <td class="{{classes_level}} small"><div align="right">{{classes_number}}</div></td>
      </tr>

      <tr>
       <td class="{{methods_level}}" colspan="4">{{name}}</td>
       <td class="{{methods_level}} big">{{methods_bar}}</td>
       <td class="{{methods_level}} small"><div align="right">{{methods_tested_percent}}</div></td>
       <td class="{{methods_level}} small"><div align="right">{{methods_number}}</div></td>
       <td class="{{methods_level}} small">{{crap}}</td>
       <td class="{{lines_level}} big">{{lines_bar}}</td>
       <td class="{{lines_level}} small"><div align="right">{{lines_executed_percent}}</div></td>
       <td class="{{lines_level}} small"><div align="right">{{lines_number}}</div></td>
      </tr>

<svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16"><path fill-rule="evenodd" d="M8.5 1H1c-.55 0-1 .45-1 1v12c0 .55.45 1 1 1h10c.55 0 1-.45 1-1V4.5L8.5 1zM11 14H1V2h7l3 3v9zM5 6.98L3.5 8.5 5 10l-.5 1L2 8.5 4.5 6l.5.98zM7.5 6L10 8.5 7.5 11l-.5-.98L8.5 8.5 7 7l.5-1z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"/></svg><!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Dashboard for {{full_path}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{path_to_root}}.css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{path_to_root}}.css/nv.d3.min.css" rel="stylesheet" type="text/css">
  <link href="{{path_to_root}}.css/style.css" rel="stylesheet" type="text/css">
  <link href="{{path_to_root}}.css/custom.css" rel="stylesheet" type="text/css">
 </head>
 <body>
  <header>
   <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
{{breadcrumbs}}
       </ol>
      </nav>
     </div>
    </div>
   </div>
  </header>
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-12">
     <h2>Classes</h2>
    </div>
   </div>
   <div class="row">
    <div class="col-md-6">
     <h3>Coverage Distribution</h3>
     <div id="classCoverageDistribution" style="height: 300px;">
       <svg></svg>
     </div>
    </div>
    <div class="col-md-6">
     <h3>Complexity</h3>
     <div id="classComplexity" style="height: 300px;">
       <svg></svg>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-md-6">
     <h3>Insufficient Coverage</h3>
     <div class="scrollbox">
      <table class="table">
       <thead>
        <tr>
         <th>Class</th>
         <th class="text-right">Coverage</th>
        </tr>
       </thead>
       <tbody>
{{insufficient_coverage_classes}}
       </tbody>
      </table>
     </div>
    </div>
    <div class="col-md-6">
     <h3>Project Risks</h3>
     <div class="scrollbox">
      <table class="table">
       <thead>
        <tr>
         <th>Class</th>
         <th class="text-right"><abbr title="Change Risk Anti-Patterns (CRAP) Index">CRAP</abbr></th>
        </tr>
       </thead>
       <tbody>
{{project_risks_classes}}
       </tbody>
      </table>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-md-12">
     <h2>Methods</h2>
    </div>
   </div>
   <div class="row">
    <div class="col-md-6">
     <h3>Coverage Distribution</h3>
     <div id="methodCoverageDistribution" style="height: 300px;">
       <svg></svg>
     </div>
    </div>
    <div class="col-md-6">
     <h3>Complexity</h3>
     <div id="methodComplexity" style="height: 300px;">
       <svg></svg>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-md-6">
     <h3>Insufficient Coverage</h3>
     <div class="scrollbox">
      <table class="table">
       <thead>
        <tr>
         <th>Method</th>
         <th class="text-right">Coverage</th>
        </tr>
       </thead>
       <tbody>
{{insufficient_coverage_methods}}
       </tbody>
      </table>
     </div>
    </div>
    <div class="col-md-6">
     <h3>Project Risks</h3>
     <div class="scrollbox">
      <table class="table">
       <thead>
        <tr>
         <th>Method</th>
         <th class="text-right"><abbr title="Change Risk Anti-Patterns (CRAP) Index">CRAP</abbr></th>
        </tr>
       </thead>
       <tbody>
{{project_risks_methods}}
       </tbody>
      </table>
     </div>
    </div>
   </div>
   <footer>
    <hr/>
    <p>
     <small>Generated by <a href="https://github.com/sebastianbergmann/php-code-coverage" target="_top">php-code-coverage {{version}}</a> using {{runtime}}{{generator}} at {{date}}.</small>
    </p>
   </footer>
  </div>
  <script src="{{path_to_root}}.js/jquery.min.js" type="text/javascript"></script>
  <script src="{{path_to_root}}.js/d3.min.js" type="text/javascript"></script>
  <script src="{{path_to_root}}.js/nv.d3.min.js" type="text/javascript"></script>
  <script type="text/javascript">
$(document).ready(function() {
  nv.addGraph(function() {
    var chart = nv.models.multiBarChart();
    chart.tooltips(false)
      .showControls(false)
      .showLegend(false)
      .reduceXTicks(false)
      .staggerLabels(true)
      .yAxis.tickFormat(d3.format('d'));

    d3.select('#classCoverageDistribution svg')
      .datum(getCoverageDistributionData({{class_coverage_distribution}}, "Class Coverage"))
      .transition().duration(500).call(chart);

    nv.utils.windowResize(chart.update);

    return chart;
  });

  nv.addGraph(function() {
    var chart = nv.models.multiBarChart();
    chart.tooltips(false)
      .showControls(false)
      .showLegend(false)
      .reduceXTicks(false)
      .staggerLabels(true)
      .yAxis.tickFormat(d3.format('d'));

    d3.select('#methodCoverageDistribution svg')
      .datum(getCoverageDistributionData({{method_coverage_distribution}}, "Method Coverage"))
      .transition().duration(500).call(chart);

    nv.utils.windowResize(chart.update);

    return chart;
  });

  function getCoverageDistributionData(data, label) {
    var labels = [
      '0%',
      '0-10%',
      '10-20%',
      '20-30%',
      '30-40%',
      '40-50%',
      '50-60%',
      '60-70%',
      '70-80%',
      '80-90%',
      '90-100%',
      '100%'
    ];
    var values = [];
    $.each(labels, function(key) {
      values.push({x: labels[key], y: data[key]});
    });

    return [
      {
        key: label,
        values: values,
        color: "#4572A7"
      }
    ];
  }
  nv.addGraph(function() {
    var chart = nv.models.scatterChart()
      .showDistX(true)
      .showDistY(true)
      .showLegend(false)
      .forceX([0, 100]);
    chart.tooltipContent(function(graph) {
      return '<p>' + graph.point.class + '</p>';
    });

    chart.xAxis.axisLabel('Code Coverage (in percent)');
    chart.yAxis.axisLabel('Cyclomatic Complexity');

    d3.select('#classComplexity svg')
      .datum(getComplexityData({{complexity_class}}, 'Class Complexity'))
      .transition()
      .duration(500)
      .call(chart);

    nv.utils.windowResize(chart.update);

    return chart;
  });

  nv.addGraph(function() {
    var chart = nv.models.scatterChart()
      .showDistX(true)
      .showDistY(true)
      .showLegend(false)
      .forceX([0, 100]);
    chart.tooltipContent(function(graph) {
      return '<p>' + graph.point.class + '</p>';
    });

    chart.xAxis.axisLabel('Code Coverage (in percent)');
    chart.yAxis.axisLabel('Method Complexity');

    d3.select('#methodComplexity svg')
      .datum(getComplexityData({{complexity_method}}, 'Method Complexity'))
      .transition()
      .duration(500)
      .call(chart);

    nv.utils.windowResize(chart.update);

    return chart;
  });

  function getComplexityData(data, label) {
    var values = [];
    $.each(data, function(key) {
      var value = Math.round(data[key][0]*100) / 100;
      values.push({
        x: value,
        y: data[key][1],
        class: data[key][2],
        size: 0.05,
        shape: 'diamond'
      });
    });

    return [
      {
        key: label,
        values: values,
        color: "#4572A7"
      }
    ];
  }
});
  </script>
 </body>
</html>
       <div class="progress">
         <div class="progress-bar bg-{{level}}" role="progressbar" aria-valuenow="{{percent}}" aria-valuemin="0" aria-valuemax="100" style="width: {{percent}}%">
           <span class="sr-only">{{percent}}% covered ({{level}})</span>
         </div>
       </div>
      <tr>
       <td class="{{classes_level}}">{{name}}</td>
       <td class="{{classes_level}} big">{{classes_bar}}</td>
       <td class="{{classes_level}} small"><div align="right">{{classes_tested_percent}}</div></td>
       <td class="{{classes_level}} small"><div align="right">{{classes_number}}</div></td>
       <td class="{{methods_level}} big">{{methods_bar}}</td>
       <td class="{{methods_level}} small"><div align="right">{{methods_tested_percent}}</div></td>
       <td class="{{methods_level}} small"><div align="right">{{methods_number}}</div></td>
       <td class="{{methods_level}} small">{{crap}}</td>
       <td class="{{lines_level}} big">{{lines_bar}}</td>
       <td class="{{lines_level}} small"><div align="right">{{lines_executed_percent}}</div></td>
       <td class="{{lines_level}} small"><div align="right">{{lines_number}}</div></td>
      </tr>

.octicon {
  display: inline-block;
  vertical-align: text-top;
  fill: currentColor;
}
 padding-top: 10px;
}

.popover {
 max-width: none;
}

.octicon {
 margin-right:.25em;
}

.table-bordered>thead>tr>td {
 border-bottom-width: 1px;
}

.table tbody>tr>td, .table thead>tr>td {
 padding-top: 3px;
 padding-bottom: 3px;
}

.table-condensed tbody>tr>td {
 padding-top: 0;
 padding-bottom: 0;
}

.table .progress {
 margin-bottom: inherit;
}

.table-borderless th, .table-borderless td {
 border: 0 !important;
}

.table tbody tr.covered-by-large-tests, li.covered-by-large-tests, tr.success, td.success, li.success, span.success {
 background-color: #dff0d8;
}

.table tbody tr.covered-by-medium-tests, li.covered-by-medium-tests {
 background-color: #c3e3b5;
}

.table tbody tr.covered-by-small-tests, li.covered-by-small-tests {
 background-color: #99cb84;
}

.table tbody tr.danger, .table tbody td.danger, li.danger, span.danger {
 background-color: #f2dede;
}

.table tbody td.warning, li.warning, span.warning {
 background-color: #fcf8e3;
}

.table tbody td.info {
 background-color: #d9edf7;
}

td.big {
 width: 117px;
}

td.small {
}

td.codeLine {
 font-family: "Source Code Pro", "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
 white-space: pre;
}

td span.comment {
 color: #888a85;
}

td span.default {
 color: #2e3436;
}

td span.html {
 color: #888a85;
}

td span.keyword {
 color: #2e3436;
 font-weight: bold;
}

pre span.string {
 color: #2e3436;
}

span.success, span.warning, span.danger {
 margin-right: 2px;
 padding-left: 10px;
 padding-right: 10px;
 text-align: center;
}

#classCoverageDistribution, #classComplexity {
 height: 200px;
 width: 475px;
}

#toplink {
 position: fixed;
 left: 5px;
 bottom: 5px;
 outline: 0;
}

svg text {
 font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
 font-size: 11px;
 color: #666;
 fill: #666;
}

.scrollbox {
 height:245px;
 overflow-x:hidden;
 overflow-y:scroll;
}
/*!
 * Bootstrap v4.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
/*# sourceMappingURL=bootstrap.min.css.map */
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Code Coverage for {{full_path}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{path_to_root}}.css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{path_to_root}}.css/octicons.css" rel="stylesheet" type="text/css">
  <link href="{{path_to_root}}.css/style.css" rel="stylesheet" type="text/css">
  <link href="{{path_to_root}}.css/custom.css" rel="stylesheet" type="text/css">
 </head>
 <body>
  <header>
   <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
{{breadcrumbs}}
       </ol>
      </nav>
     </div>
    </div>
   </div>
  </header>
  <div class="container-fluid">
   <div class="table-responsive">
    <table class="table table-bordered">
     <thead>
      <tr>
       <td>&nbsp;</td>
       <td colspan="9"><div align="center"><strong>Code Coverage</strong></div></td>
      </tr>
      <tr>
       <td>&nbsp;</td>
       <td colspan="3"><div align="center"><strong>Lines</strong></div></td>
       <td colspan="3"><div align="center"><strong>Functions and Methods</strong></div></td>
       <td colspan="3"><div align="center"><strong>Classes and Traits</strong></div></td>
      </tr>
     </thead>
     <tbody>
{{items}}
     </tbody>
    </table>
   </div>
   <footer>
    <hr/>
    <h4>Legend</h4>
    <p>
     <span class="danger"><strong>Low</strong>: 0% to {{low_upper_bound}}%</span>
     <span class="warning"><strong>Medium</strong>: {{low_upper_bound}}% to {{high_lower_bound}}%</span>
     <span class="success"><strong>High</strong>: {{high_lower_bound}}% to 100%</span>
    </p>
    <p>
     <small>Generated by <a href="https://github.com/sebastianbergmann/php-code-coverage" target="_top">php-code-coverage {{version}}</a> using {{runtime}}{{generator}} at {{date}}.</small>
    </p>
   </footer>
  </div>
 </body>
</html>
/*!
  * Bootstrap v4.1.3 (https://getbootstrap.com/)
  * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
//# sourceMappingURL=bootstrap.min.js.map
/*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */
/* nvd3 version 1.8.1 (https://github.com/novus/nvd3) 2015-06-15 */
   var $window     = $(window)
     , $top_link   = $('#toplink')
     , $body       = $('body, html')
     , offset      = $('#code').offset().top
     , hidePopover = function ($target) {
        $target.data('popover-hover', false);

        setTimeout(function () {
         if (!$target.data('popover-hover')) {
          $target.popover('hide');
         }
        }, 300);
     };

   $top_link.hide().click(function(event) {
    event.preventDefault();
    $body.animate({scrollTop:0}, 800);
   });

   $window.scroll(function() {
    if($window.scrollTop() > offset) {
     $top_link.fadeIn();
    } else {
     $top_link.fadeOut();
    }
   }).scroll();

   $('.popin')
    .popover({trigger: 'manual'})
    .on({
     'mouseenter.popover': function () {
      var $target = $(this);

      $target.data('popover-hover', true);

      // popover already displayed
      if ($target.next('.popover').length) {
       return;
      }

      // show the popover
      $target.popover('show');

      // register mouse events on the popover
      $target.next('.popover:not(.popover-initialized)')
       .on({
        'mouseenter': function () {
         $target.data('popover-hover', true);
        },
        'mouseleave': function () {
         hidePopover($target);
        }
       })
       .addClass('popover-initialized');
     },
     'mouseleave.popover': function () {
      hidePopover($(this));
     }
    });
  });
/*
 Copyright (C) Federico Zivolo 2018
 Distributed under the MIT License (license terms are at http://opensource.org/licenses/MIT).
//# sourceMappingURL=popper.min.js.map
<?php
/*
 * This file is part of the php-code-coverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Report\Html;

use SebastianBergmann\CodeCoverage\Node\File as FileNode;
use SebastianBergmann\CodeCoverage\Util;

/**
 * Renders a file node.
 */
final class File extends Renderer
{
    /**
     * @var int
     */
    private $htmlSpecialCharsFlags = \ENT_COMPAT | \ENT_HTML401 | \ENT_SUBSTITUTE;

    /**
     * @throws \RuntimeException
     */
    public function render(FileNode $node, string $file): void
    {
        $template = new \Text_Template($this->templatePath . 'file.html', '{{', '}}');

        $template->setVar(
            [
            ]
        );


    }


