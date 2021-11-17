<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMobileLegendStatRequest;
use App\Http\Requests\UpdateMobileLegendStatRequest;
use App\Repositories\MobileLegendStatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MobileLegendStatController extends AppBaseController
{
    /** @var  MobileLegendStatRepository */
    private $mobileLegendStatRepository;

    public function __construct(MobileLegendStatRepository $mobileLegendStatRepo)
    {
        $this->mobileLegendStatRepository = $mobileLegendStatRepo;
    }

    /**
     * Display a listing of the MobileLegendStat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mobileLegendStats = $this->mobileLegendStatRepository->all();

        return view('mobile_legend_stats.index')
            ->with('mobileLegendStats', $mobileLegendStats);
    }

    /**
     * Show the form for creating a new MobileLegendStat.
     *
     * @return Response
     */
    public function create()
    {
        return view('mobile_legend_stats.create');
    }

    /**
     * Store a newly created MobileLegendStat in storage.
     *
     * @param CreateMobileLegendStatRequest $request
     *
     * @return Response
     */
    public function store(CreateMobileLegendStatRequest $request)
    {
        $input = $request->all();

        $mobileLegendStat = $this->mobileLegendStatRepository->create($input);

        Flash::success('Mobile Legend Stat saved successfully.');

        return redirect(route('mobileLegendStats.index'));
    }

    /**
     * Display the specified MobileLegendStat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mobileLegendStat = $this->mobileLegendStatRepository->find($id);

        if (empty($mobileLegendStat)) {
            Flash::error('Mobile Legend Stat not found');

            return redirect(route('mobileLegendStats.index'));
        }

        return view('mobile_legend_stats.show')->with('mobileLegendStat', $mobileLegendStat);
    }

    /**
     * Show the form for editing the specified MobileLegendStat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mobileLegendStat = $this->mobileLegendStatRepository->find($id);

        if (empty($mobileLegendStat)) {
            Flash::error('Mobile Legend Stat not found');

            return redirect(route('mobileLegendStats.index'));
        }

        return view('mobile_legend_stats.edit')->with('mobileLegendStat', $mobileLegendStat);
    }

    /**
     * Update the specified MobileLegendStat in storage.
     *
     * @param int $id
     * @param UpdateMobileLegendStatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMobileLegendStatRequest $request)
    {
        $mobileLegendStat = $this->mobileLegendStatRepository->find($id);

        if (empty($mobileLegendStat)) {
            Flash::error('Mobile Legend Stat not found');

            return redirect(route('mobileLegendStats.index'));
        }

        $mobileLegendStat = $this->mobileLegendStatRepository->update($request->all(), $id);

        Flash::success('Mobile Legend Stat updated successfully.');

        return redirect(route('mobileLegendStats.index'));
    }

    /**
     * Remove the specified MobileLegendStat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mobileLegendStat = $this->mobileLegendStatRepository->find($id);

        if (empty($mobileLegendStat)) {
            Flash::error('Mobile Legend Stat not found');

            return redirect(route('mobileLegendStats.index'));
        }

        $this->mobileLegendStatRepository->delete($id);

        Flash::success('Mobile Legend Stat deleted successfully.');

        return redirect(route('mobileLegendStats.index'));
    }
}
