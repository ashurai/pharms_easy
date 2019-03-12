<?php
/**
 * To Handle All profile type enum
 * @author Ashutosh Rai <a.kumar@medlamg.com>
 * @createdAt 11/03/19 20:55
 */
namespace UserBundle\Entity\Enum;

final class ProfileTypeEnum extends AbstractEnum
{
    const DOCTOR        = 'DOCTOR';
    const PHARMACIST    = 'PHARMACIST';
    const PATIENT       = 'PATIENT';
}