<?php
$string_0 = "tao";
$string_1 = "3.3.0-RC02";
$array_0 = array();
$outcomedeclarationcollection_0 = new qtism\data\state\OutcomeDeclarationCollection($array_0);
$nullvalue_0 = null;
$array_1 = array();
$outcomerulecollection_0 = new qtism\data\rules\OutcomeRuleCollection($array_1);
$outcomeprocessing_0 = new qtism\data\processing\OutcomeProcessing($outcomerulecollection_0);
$array_2 = array();
$testfeedbackcollection_0 = new qtism\data\TestFeedbackCollection($array_2);
$string_2 = "tgvjmy";
$string_3 = "Тест 2";
$array_3 = array();
$preconditioncollection_0 = new qtism\data\rules\PreConditionCollection($array_3);
$array_4 = array();
$branchrulecollection_0 = new qtism\data\rules\BranchRuleCollection($array_4);
$integer_0 = 0;
$boolean_0 = false;
$boolean_1 = true;
$boolean_2 = false;
$boolean_3 = false;
$boolean_4 = false;
$boolean_5 = true;
$itemsessioncontrol_0 = new qtism\data\ItemSessionControl();
$itemsessioncontrol_0->setMaxAttempts($integer_0);
$itemsessioncontrol_0->setShowFeedback($boolean_0);
$itemsessioncontrol_0->setAllowReview($boolean_1);
$itemsessioncontrol_0->setShowSolution($boolean_2);
$itemsessioncontrol_0->setAllowComment($boolean_3);
$itemsessioncontrol_0->setValidateResponses($boolean_4);
$itemsessioncontrol_0->setAllowSkipping($boolean_5);
$nullvalue_1 = null;
$array_5 = array();
$testfeedbackcollection_1 = new qtism\data\TestFeedbackCollection($array_5);
$string_4 = "testPart-1";
$array_6 = array();
$rubricblockrefcollection_0 = new qtism\data\content\RubricBlockRefCollection($array_6);
$boolean_6 = true;
$nullvalue_2 = null;
$nullvalue_3 = null;
$array_7 = array();
$rubricblockcollection_0 = new qtism\data\content\RubricBlockCollection($array_7);
$array_8 = array();
$viewcollection_0 = new qtism\data\ViewCollection($array_8);
$string_5 = "";
$string_6 = "";
$double_0 = 0.0;
$boolean_7 = false;
$boolean_8 = false;
$nullvalue_4 = null;
$string_7 = "SCORE";
$integer_1 = 3;
$integer_2 = 0;
$nullvalue_5 = null;
$outcomedeclaration_0 = new qtism\data\state\OutcomeDeclaration($string_7, $integer_1, $integer_2, $nullvalue_5);
$outcomedeclaration_0->setViews($viewcollection_0);
$outcomedeclaration_0->setInterpretation($string_5);
$outcomedeclaration_0->setLongInterpretation($string_6);
$outcomedeclaration_0->setNormalMaximum($double_0);
$outcomedeclaration_0->setNormalMinimum($boolean_7);
$outcomedeclaration_0->setMasteryValue($boolean_8);
$outcomedeclaration_0->setLookupTable($nullvalue_4);
$array_9 = array();
$viewcollection_1 = new qtism\data\ViewCollection($array_9);
$string_8 = "";
$string_9 = "";
$boolean_9 = false;
$boolean_10 = false;
$boolean_11 = false;
$nullvalue_6 = null;
$string_10 = "MAXSCORE";
$integer_3 = 3;
$integer_4 = 0;
$double_1 = 0.0;
$integer_5 = 3;
$string_11 = "";
$value_0 = new qtism\data\state\Value($double_1, $integer_5, $string_11);
$array_10 = array($value_0);
$valuecollection_0 = new qtism\data\state\ValueCollection($array_10);
$string_12 = "";
$defaultvalue_0 = new qtism\data\state\DefaultValue($valuecollection_0, $string_12);
$outcomedeclaration_1 = new qtism\data\state\OutcomeDeclaration($string_10, $integer_3, $integer_4, $defaultvalue_0);
$outcomedeclaration_1->setViews($viewcollection_1);
$outcomedeclaration_1->setInterpretation($string_8);
$outcomedeclaration_1->setLongInterpretation($string_9);
$outcomedeclaration_1->setNormalMaximum($boolean_9);
$outcomedeclaration_1->setNormalMinimum($boolean_10);
$outcomedeclaration_1->setMasteryValue($boolean_11);
$outcomedeclaration_1->setLookupTable($nullvalue_6);
$array_11 = array($outcomedeclaration_0, $outcomedeclaration_1);
$outcomedeclarationcollection_1 = new qtism\data\state\OutcomeDeclarationCollection($array_11);
$nullvalue_7 = null;
$nullvalue_8 = null;
$nullvalue_9 = null;
$string_13 = "RESPONSE";
$integer_6 = 0;
$integer_7 = 1;
$nullvalue_10 = null;
$responsedeclaration_0 = new qtism\data\state\ResponseDeclaration($string_13, $integer_6, $integer_7, $nullvalue_10);
$responsedeclaration_0->setCorrectResponse($nullvalue_7);
$responsedeclaration_0->setMapping($nullvalue_8);
$responsedeclaration_0->setAreaMapping($nullvalue_9);
$nullvalue_11 = null;
$nullvalue_12 = null;
$nullvalue_13 = null;
$string_14 = "RESPONSE_1";
$integer_8 = 0;
$integer_9 = 1;
$nullvalue_14 = null;
$responsedeclaration_1 = new qtism\data\state\ResponseDeclaration($string_14, $integer_8, $integer_9, $nullvalue_14);
$responsedeclaration_1->setCorrectResponse($nullvalue_11);
$responsedeclaration_1->setMapping($nullvalue_12);
$responsedeclaration_1->setAreaMapping($nullvalue_13);
$nullvalue_15 = null;
$nullvalue_16 = null;
$nullvalue_17 = null;
$string_15 = "RESPONSE_2";
$integer_10 = 0;
$integer_11 = 1;
$nullvalue_18 = null;
$responsedeclaration_2 = new qtism\data\state\ResponseDeclaration($string_15, $integer_10, $integer_11, $nullvalue_18);
$responsedeclaration_2->setCorrectResponse($nullvalue_15);
$responsedeclaration_2->setMapping($nullvalue_16);
$responsedeclaration_2->setAreaMapping($nullvalue_17);
$array_12 = array($responsedeclaration_0, $responsedeclaration_1, $responsedeclaration_2);
$responsedeclarationcollection_0 = new qtism\data\state\ResponseDeclarationCollection($array_12);
$string_16 = "";
$string_17 = "";
$string_18 = "RESPONSE";
$string_19 = "";
$variable_0 = new qtism\data\expressions\Variable($string_18, $string_19);
$string_20 = "RESPONSE";
$correct_0 = new qtism\data\expressions\Correct($string_20);
$array_13 = array($variable_0, $correct_0);
$expressioncollection_0 = new qtism\data\expressions\ExpressionCollection($array_13);
$match_0 = new qtism\data\expressions\operators\Match($expressioncollection_0);
$string_21 = "SCORE";
$string_22 = "SCORE";
$string_23 = "";
$variable_1 = new qtism\data\expressions\Variable($string_22, $string_23);
$integer_12 = 2;
$integer_13 = 1;
$basevalue_0 = new qtism\data\expressions\BaseValue($integer_12, $integer_13);
$array_14 = array($variable_1, $basevalue_0);
$expressioncollection_1 = new qtism\data\expressions\ExpressionCollection($array_14);
$sum_0 = new qtism\data\expressions\operators\Sum($expressioncollection_1);
$setoutcomevalue_0 = new qtism\data\rules\SetOutcomeValue($string_21, $sum_0);
$array_15 = array($setoutcomevalue_0);
$responserulecollection_0 = new qtism\data\rules\ResponseRuleCollection($array_15);
$responseif_0 = new qtism\data\rules\ResponseIf($match_0, $responserulecollection_0);
$array_16 = array();
$responseelseifcollection_0 = new qtism\data\rules\ResponseElseIfCollection($array_16);
$nullvalue_19 = null;
$responsecondition_0 = new qtism\data\rules\ResponseCondition($responseif_0, $responseelseifcollection_0, $nullvalue_19);
$string_24 = "RESPONSE_1";
$string_25 = "";
$variable_2 = new qtism\data\expressions\Variable($string_24, $string_25);
$string_26 = "RESPONSE_1";
$correct_1 = new qtism\data\expressions\Correct($string_26);
$array_17 = array($variable_2, $correct_1);
$expressioncollection_2 = new qtism\data\expressions\ExpressionCollection($array_17);
$match_1 = new qtism\data\expressions\operators\Match($expressioncollection_2);
$string_27 = "SCORE";
$string_28 = "SCORE";
$string_29 = "";
$variable_3 = new qtism\data\expressions\Variable($string_28, $string_29);
$integer_14 = 2;
$integer_15 = 1;
$basevalue_1 = new qtism\data\expressions\BaseValue($integer_14, $integer_15);
$array_18 = array($variable_3, $basevalue_1);
$expressioncollection_3 = new qtism\data\expressions\ExpressionCollection($array_18);
$sum_1 = new qtism\data\expressions\operators\Sum($expressioncollection_3);
$setoutcomevalue_1 = new qtism\data\rules\SetOutcomeValue($string_27, $sum_1);
$array_19 = array($setoutcomevalue_1);
$responserulecollection_1 = new qtism\data\rules\ResponseRuleCollection($array_19);
$responseif_1 = new qtism\data\rules\ResponseIf($match_1, $responserulecollection_1);
$array_20 = array();
$responseelseifcollection_1 = new qtism\data\rules\ResponseElseIfCollection($array_20);
$nullvalue_20 = null;
$responsecondition_1 = new qtism\data\rules\ResponseCondition($responseif_1, $responseelseifcollection_1, $nullvalue_20);
$string_30 = "RESPONSE_2";
$string_31 = "";
$variable_4 = new qtism\data\expressions\Variable($string_30, $string_31);
$string_32 = "RESPONSE_2";
$correct_2 = new qtism\data\expressions\Correct($string_32);
$array_21 = array($variable_4, $correct_2);
$expressioncollection_4 = new qtism\data\expressions\ExpressionCollection($array_21);
$match_2 = new qtism\data\expressions\operators\Match($expressioncollection_4);
$string_33 = "SCORE";
$string_34 = "SCORE";
$string_35 = "";
$variable_5 = new qtism\data\expressions\Variable($string_34, $string_35);
$integer_16 = 2;
$integer_17 = 1;
$basevalue_2 = new qtism\data\expressions\BaseValue($integer_16, $integer_17);
$array_22 = array($variable_5, $basevalue_2);
$expressioncollection_5 = new qtism\data\expressions\ExpressionCollection($array_22);
$sum_2 = new qtism\data\expressions\operators\Sum($expressioncollection_5);
$setoutcomevalue_2 = new qtism\data\rules\SetOutcomeValue($string_33, $sum_2);
$array_23 = array($setoutcomevalue_2);
$responserulecollection_2 = new qtism\data\rules\ResponseRuleCollection($array_23);
$responseif_2 = new qtism\data\rules\ResponseIf($match_2, $responserulecollection_2);
$array_24 = array();
$responseelseifcollection_2 = new qtism\data\rules\ResponseElseIfCollection($array_24);
$nullvalue_21 = null;
$responsecondition_2 = new qtism\data\rules\ResponseCondition($responseif_2, $responseelseifcollection_2, $nullvalue_21);
$array_25 = array($responsecondition_0, $responsecondition_1, $responsecondition_2);
$responserulecollection_3 = new qtism\data\rules\ResponseRuleCollection($array_25);
$responseprocessing_0 = new qtism\data\processing\ResponseProcessing($responserulecollection_3);
$responseprocessing_0->setTemplate($string_16);
$responseprocessing_0->setTemplateLocation($string_17);
$boolean_12 = false;
$boolean_13 = false;
$array_26 = array();
$variablemappingcollection_0 = new qtism\data\state\VariableMappingCollection($array_26);
$array_27 = array();
$weightcollection_0 = new qtism\data\state\WeightCollection($array_27);
$array_28 = array();
$templatedefaultcollection_0 = new qtism\data\state\TemplateDefaultCollection($array_28);
$boolean_14 = false;
$boolean_15 = false;
$array_29 = array();
$preconditioncollection_1 = new qtism\data\rules\PreConditionCollection($array_29);
$array_30 = array();
$branchrulecollection_1 = new qtism\data\rules\BranchRuleCollection($array_30);
$integer_18 = 0;
$boolean_16 = false;
$boolean_17 = true;
$boolean_18 = false;
$boolean_19 = false;
$boolean_20 = false;
$boolean_21 = true;
$itemsessioncontrol_1 = new qtism\data\ItemSessionControl();
$itemsessioncontrol_1->setMaxAttempts($integer_18);
$itemsessioncontrol_1->setShowFeedback($boolean_16);
$itemsessioncontrol_1->setAllowReview($boolean_17);
$itemsessioncontrol_1->setShowSolution($boolean_18);
$itemsessioncontrol_1->setAllowComment($boolean_19);
$itemsessioncontrol_1->setValidateResponses($boolean_20);
$itemsessioncontrol_1->setAllowSkipping($boolean_21);
$nullvalue_22 = null;
$string_36 = "item-1";
$string_37 = "http://localhost/tao.rdf#i1635839509711829|http://localhost/tao.rdf#i1635839885339648+|http://localhost/tao.rdf#i163583988533049-";
$array_31 = array();
$identifiercollection_0 = new qtism\common\collections\IdentifierCollection($array_31);
$extendedassessmentitemref_0 = new qtism\data\ExtendedAssessmentItemRef($string_36, $string_37, $identifiercollection_0);
$extendedassessmentitemref_0->setOutcomeDeclarations($outcomedeclarationcollection_1);
$extendedassessmentitemref_0->setResponseDeclarations($responsedeclarationcollection_0);
$extendedassessmentitemref_0->setResponseProcessing($responseprocessing_0);
$extendedassessmentitemref_0->setAdaptive($boolean_12);
$extendedassessmentitemref_0->setTimeDependent($boolean_13);
$extendedassessmentitemref_0->setVariableMappings($variablemappingcollection_0);
$extendedassessmentitemref_0->setWeights($weightcollection_0);
$extendedassessmentitemref_0->setTemplateDefaults($templatedefaultcollection_0);
$extendedassessmentitemref_0->setRequired($boolean_14);
$extendedassessmentitemref_0->setFixed($boolean_15);
$extendedassessmentitemref_0->setPreConditions($preconditioncollection_1);
$extendedassessmentitemref_0->setBranchRules($branchrulecollection_1);
$extendedassessmentitemref_0->setItemSessionControl($itemsessioncontrol_1);
$extendedassessmentitemref_0->setTimeLimits($nullvalue_22);
$array_32 = array($extendedassessmentitemref_0);
$sectionpartcollection_0 = new qtism\data\SectionPartCollection($array_32);
$boolean_22 = true;
$boolean_23 = false;
$array_33 = array();
$preconditioncollection_2 = new qtism\data\rules\PreConditionCollection($array_33);
$array_34 = array();
$branchrulecollection_2 = new qtism\data\rules\BranchRuleCollection($array_34);
$integer_19 = 0;
$boolean_24 = false;
$boolean_25 = true;
$boolean_26 = false;
$boolean_27 = false;
$boolean_28 = false;
$boolean_29 = true;
$itemsessioncontrol_2 = new qtism\data\ItemSessionControl();
$itemsessioncontrol_2->setMaxAttempts($integer_19);
$itemsessioncontrol_2->setShowFeedback($boolean_24);
$itemsessioncontrol_2->setAllowReview($boolean_25);
$itemsessioncontrol_2->setShowSolution($boolean_26);
$itemsessioncontrol_2->setAllowComment($boolean_27);
$itemsessioncontrol_2->setValidateResponses($boolean_28);
$itemsessioncontrol_2->setAllowSkipping($boolean_29);
$nullvalue_23 = null;
$string_38 = "assessmentSection-1";
$string_39 = "Section 1";
$boolean_30 = true;
$extendedassessmentsection_0 = new qtism\data\ExtendedAssessmentSection($string_38, $string_39, $boolean_30);
$extendedassessmentsection_0->setRubricBlockRefs($rubricblockrefcollection_0);
$extendedassessmentsection_0->setKeepTogether($boolean_6);
$extendedassessmentsection_0->setSelection($nullvalue_2);
$extendedassessmentsection_0->setOrdering($nullvalue_3);
$extendedassessmentsection_0->setRubricBlocks($rubricblockcollection_0);
$extendedassessmentsection_0->setSectionParts($sectionpartcollection_0);
$extendedassessmentsection_0->setRequired($boolean_22);
$extendedassessmentsection_0->setFixed($boolean_23);
$extendedassessmentsection_0->setPreConditions($preconditioncollection_2);
$extendedassessmentsection_0->setBranchRules($branchrulecollection_2);
$extendedassessmentsection_0->setItemSessionControl($itemsessioncontrol_2);
$extendedassessmentsection_0->setTimeLimits($nullvalue_23);
$array_35 = array($extendedassessmentsection_0);
$sectionpartcollection_1 = new qtism\data\SectionPartCollection($array_35);
$integer_20 = 0;
$integer_21 = 0;
$testpart_0 = new qtism\data\TestPart($string_4, $sectionpartcollection_1, $integer_20, $integer_21);
$testpart_0->setPreConditions($preconditioncollection_0);
$testpart_0->setBranchRules($branchrulecollection_0);
$testpart_0->setItemSessionControl($itemsessioncontrol_0);
$testpart_0->setTimeLimits($nullvalue_1);
$testpart_0->setTestFeedbacks($testfeedbackcollection_1);
$array_36 = array($testpart_0);
$testpartcollection_0 = new qtism\data\TestPartCollection($array_36);
$rootcomponent = new qtism\data\AssessmentTest($string_2, $string_3, $testpartcollection_0);
$rootcomponent->setToolName($string_0);
$rootcomponent->setToolVersion($string_1);
$rootcomponent->setOutcomeDeclarations($outcomedeclarationcollection_0);
$rootcomponent->setTimeLimits($nullvalue_0);
$rootcomponent->setOutcomeProcessing($outcomeprocessing_0);
$rootcomponent->setTestFeedbacks($testfeedbackcollection_0);
