<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class NotNullConstraintsResponse
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'notNullConstraints',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\SQLNotNullConstraint',
                ),
        ),
    );

    /**
     * @var \metastore\SQLNotNullConstraint[]
     */
    public $notNullConstraints = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['notNullConstraints'])) {
                $this->notNullConstraints = $vals['notNullConstraints'];
            }
        }
    }

    public function getName()
    {
        return 'NotNullConstraintsResponse';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::LST) {
                        $this->notNullConstraints = array();
                        $_size406 = 0;
                        $_etype409 = 0;
                        $xfer += $input->readListBegin($_etype409, $_size406);
                        for ($_i410 = 0; $_i410 < $_size406; ++$_i410) {
                            $elem411 = null;
                            $elem411 = new \metastore\SQLNotNullConstraint();
                            $xfer += $elem411->read($input);
                            $this->notNullConstraints []= $elem411;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('NotNullConstraintsResponse');
        if ($this->notNullConstraints !== null) {
            if (!is_array($this->notNullConstraints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('notNullConstraints', TType::LST, 1);
            $output->writeListBegin(TType::STRUCT, count($this->notNullConstraints));
            foreach ($this->notNullConstraints as $iter412) {
                $xfer += $iter412->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
