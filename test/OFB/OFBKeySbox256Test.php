<?php

# CAVS 11.1
# Config info for aes_values
# AESVS KeySbox test data for OFB
# State : Encrypt and Decrypt
# Key Length : 256
# Generated on Fri Apr 22 15:12:03 2011

namespace AES\Test;

use AES\OFB;
use AES\Key;

class OFBKeySbox256 extends \PHPUnit_Framework_TestCase
{
    function caseProvider()
    {
        return [
            ['c47b0294dbbbee0fec4757f22ffeee3587ca4730c3d33b691df38bab076bc558', '00000000000000000000000000000000', '00000000000000000000000000000000', '46f2fb342d6f0ab477476fc501242c5f'],
            ['28d46cffa158533194214a91e712fc2b45b518076675affd910edeca5f41ac64', '00000000000000000000000000000000', '00000000000000000000000000000000', '4bf3b0a69aeb6657794f2901b1440ad4'],
            ['c1cc358b449909a19436cfbb3f852ef8bcb5ed12ac7058325f56e6099aab1a1c', '00000000000000000000000000000000', '00000000000000000000000000000000', '352065272169abf9856843927d0674fd'],
            ['984ca75f4ee8d706f46c2d98c0bf4a45f5b00d791c2dfeb191b5ed8e420fd627', '00000000000000000000000000000000', '00000000000000000000000000000000', '4307456a9e67813b452e15fa8fffe398'],
            ['b43d08a447ac8609baadae4ff12918b9f68fc1653f1269222f123981ded7a92f', '00000000000000000000000000000000', '00000000000000000000000000000000', '4663446607354989477a5c6f0f007ef4'],
            ['1d85a181b54cde51f0e098095b2962fdc93b51fe9b88602b3f54130bf76a5bd9', '00000000000000000000000000000000', '00000000000000000000000000000000', '531c2c38344578b84d50b3c917bbb6e1'],
            ['dc0eba1f2232a7879ded34ed8428eeb8769b056bbaf8ad77cb65c3541430b4cf', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fc6aec906323480005c58e7e1ab004ad'],
            ['f8be9ba615c5a952cabbca24f68f8593039624d524c816acda2c9183bd917cb9', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a3944b95ca0b52043584ef02151926a8'],
            ['797f8b3d176dac5b7e34a2d539c4ef367a16f8635f6264737591c5c07bf57a3e', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a74289fe73a4c123ca189ea1e1b49ad5'],
            ['6838d40caf927749c13f0329d331f448e202c73ef52c5f73a37ca635d4c47707', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b91d4ea4488644b56cf0812fa7fcf5fc'],
            ['ccd1bc3c659cd3c59bc437484e3c5c724441da8d6e90ce556cd57d0752663bbc', '00000000000000000000000000000000', '00000000000000000000000000000000', '304f81ab61a80c2e743b94d5002a126b'],
            ['13428b5e4c005e0636dd338405d173ab135dec2a25c22c5df0722d69dcc43887', '00000000000000000000000000000000', '00000000000000000000000000000000', '649a71545378c783e368c9ade7114f6c'],
            ['07eb03a08d291d1b07408bf3512ab40c91097ac77461aad4bb859647f74f00ee', '00000000000000000000000000000000', '00000000000000000000000000000000', '47cb030da2ab051dfc6c4bf6910d12bb'],
            ['90143ae20cd78c5d8ebdd6cb9dc1762427a96c78c639bccc41a61424564eafe1', '00000000000000000000000000000000', '00000000000000000000000000000000', '798c7c005dee432b2c8ea5dfa381ecc3'],
            ['b7a5794d52737475d53d5a377200849be0260a67a2b22ced8bbef12882270d07', '00000000000000000000000000000000', '00000000000000000000000000000000', '637c31dc2591a07636f646b72daabbe7'],
            ['fca02f3d5011cfc5c1e23165d413a049d4526a991827424d896fe3435e0bf68e', '00000000000000000000000000000000', '00000000000000000000000000000000', '179a49c712154bbffbe6e7a84a18e220']
        ];
    }

    /**
     * @dataProvider caseProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $ofb = new OFB(new Key(hex2bin($key)), hex2bin($iv));
        $result = $ofb->encrypt(hex2bin($plaintext));
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider caseProvider
     */
    function testDecrypt($key, $iv, $plaintext, $ciphertext)
    {
        $ofb = new OFB(new Key(hex2bin($key)), hex2bin($iv));
        $result = $ofb->decrypt(hex2bin($ciphertext));
        $this->assertSame(hex2bin($plaintext), $result);
    }
}
