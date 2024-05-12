<?php
class DivideByZeroException extends Exception {};
class DivideByNegativeException extends Exception {};

function process_divide($denominator)
{
    try
    {
        if ($denominator == 0)
        {
            throw new DivideByZeroException('custom message');
        }
        else if ($denominator < 0)
        {
            throw new DivideByNegativeException();
        }
        else
        {
            echo 100 / $denominator;
        }
    }
    catch (DivideByZeroException $ex)
    {
        echo $ex->getMessage();
    }
    catch (DivideByNegativeException $ex)
    {
        echo "Divide by negative number exception!";
    }
    catch (Exception $x)
    {
        echo "UNKNOWN EXCEPTION!";
    }
}
process_divide(0);
?>