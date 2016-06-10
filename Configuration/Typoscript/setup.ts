plugin.tx_tevfaqs {
    view {
        templateRootPaths {
            0 = {$plugin.tx_tevfaqs.view.templateRootPath}
        }

        partialRootPaths {
            0 = {$plugin.tx_tevfaqs.view.partialRootPath}
        }

        layoutRootPaths {
            0 = {$plugin.tx_tevfaqs.view.layoutRootPath}
        }
    }

    persistence {
        storagePid = {$plugin.tx_tevfaqs.persistence.storagePid}
    }
}
