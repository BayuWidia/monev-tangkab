<?php

namespace App\Services;

class ActivityService
{
    /**
     * TODO: Seharusnya data program dan kegiatan bisa langsung di consume oleh view dan table secara langsung dengan menggunakan eloquent.
     *       Namun untuk kepentingan mockup, data dummy sepertinya lebih baik di letakan di service  dan tidak pada controller.
     *       Mengingat panjangnya data dummy yg begitu padat.
     */
    public function getProgramData()
    {
        return [
            0 => [
                'id'          => '1.06.1.06.01.013',
                'name'        => 'Program pelayanan administrasi perkantoran',
                'target'      => [25, 50, 75, 100],
                'budget'      => 2301254800,
                'description' => 'Terpenuhinya Pelayanan Administrasi Perkantoran',
                'activities'  => [
                    0 => [
                        'name'  => 'Penyediaan jasa surat menyurat',
                        'input' => [
                            'type'        => 'Jumlah Dana',
                            'target'      => 42000000,
                            'unit'        => 'Rp.',
                            'place'       => 'prefix',
                            'realization' => []
                        ],
                        'output' => [
                            'type'        => 'Terlaksananya pengelolaan arsip SKPD BAPPEDA Kab. Tangerang',
                            'target'      => 12,
                            'unit'        => 'Bulan',
                            'place'       => 'suffix',
                            'realization' => [ 3, 6, 9, 12 ]
                        ],
                        'result' => [
                            'type'        => 'Terpenuhinya pengelolaan arsip SKPD BAPPEDA Kab. Tangerang',
                            'target'      => 100,
                            'unit'        => '%',
                            'place'       => 'suffix',
                            'realization' => [ 25, 50, 75, 100 ]
                        ],
                        'executor' => [
                            0 => [
                                'id'          => '5.2.2.32.015',
                                'name'        => 'Tenaga Pengolahan / Pemilahan / Penataan Arsip',
                                'budget'      => 36000000,
                                'realization' => [
                                    'financial' => 36000000,
                                    'physical'  => 100
                                ]
                            ],
                            1 => [
                                'id'          => '5.2.2.33.019',
                                'name'        => 'Operator/Pengolah Data/Kearsipan',
                                'budget'      => 6000000,
                                'realization' => [
                                    'financial' => 6000000,
                                    'physical'  => 100
                                ]
                            ]
                        ]
                    ],
                    1 => [
                        'name'  => 'Penyediaan jasa surat menyurat',
                        'input' => [
                            'type'        => 'Jumlah Dana',
                            'target'      => 42000000,
                            'unit'        => 'Rp.',
                            'place'       => 'prefix',
                            'realization' => []
                        ],
                        'output' => [
                            'type'        => 'Tersedianya jasa Komunikasi, SDA, Listrik dan Internet',
                            'target'      => 12,
                            'unit'        => 'Bulan',
                            'place'       => 'suffix',
                            'realization' => [ 3, 6, 9, 12 ]
                        ],
                        'result' => [
                            'type'        => 'Terpenuhinya jasa komunikasi, sumber daya air dan listrik',
                            'target'      => 100,
                            'unit'        => '%',
                            'place'       => 'suffix',
                            'realization' => [ 25, 50, 75, 100 ]
                        ],
                        'executor' => [
                            0 => [
                                'id'          => '5.2.2.32.015',
                                'name'        => 'Tenaga Pengolahan / Pemilahan / Penataan Arsip',
                                'budget'      => 36000000,
                                'realization' => [
                                    'financial' => 36000000,
                                    'physical'  => 100
                                ]
                            ],
                            1 => [
                                'id'          => '5.2.2.33.019',
                                'name'        => 'Operator/Pengolah Data/Kearsipan',
                                'budget'      => 6000000,
                                'realization' => [
                                    'financial' => 6000000,
                                    'physical'  => 100
                                ]
                            ]
                        ]
                    ]
                ]
            ],
        ];
    }
}