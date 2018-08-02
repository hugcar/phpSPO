<?php

namespace Office365\PHP\Client\Runtime;



class InvokePostMethodQuery extends InvokeMethodQuery
{

    /**
     * ClientActionUpdateMethod constructor.
     * @param ResourcePath $resourcePath
     * @param string $methodName
     * @param array $methodParameters
     * @param string|IEntityType $methodPayload
     */
    public function __construct(ResourcePath $resourcePath, $methodName = null,$methodParameters=null,$methodPayload=null)
    {
        $this->MethodPayload = $methodPayload;
        parent::__construct($resourcePath,$methodName, $methodParameters);
    }



    /**
     * @var string|IEntityType $MethodPayload
     */
    public $MethodPayload;
    

}