<?php


/**
 * SELECT MAX(`salary`) FROM Employee
 * WHERE `salary` < (SELECT MAX(`salary`) FROM Employee)
 */
