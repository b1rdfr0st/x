<?php

declare (strict_types=1);
namespace Rector\Symfony\ValueObject;

use PhpParser\Node\Expr\ClassConstFetch;
use Rector\Symfony\Contract\EventReferenceToMethodNameInterface;
final class EventReferenceToMethodNameWithPriority implements EventReferenceToMethodNameInterface
{
    /**
     * @readonly
     */
    private ClassConstFetch $classConstFetch;
    /**
     * @readonly
     */
    private string $methodName;
    /**
     * @readonly
     */
    private int $priority;
    public function __construct(ClassConstFetch $classConstFetch, string $methodName, int $priority)
    {
        $this->classConstFetch = $classConstFetch;
        $this->methodName = $methodName;
        $this->priority = $priority;
    }
    public function getClassConstFetch() : ClassConstFetch
    {
        return $this->classConstFetch;
    }
    public function getMethodName() : string
    {
        return $this->methodName;
    }
    public function getPriority() : int
    {
        return $this->priority;
    }
}
